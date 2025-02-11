<?php

session_start();
require_once '../bdd.php'; // Connexion à la base de données
require '../vendor/autoload.php'; // Inclusion des dépendances via Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use FPDF;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        /**
         * GÉNÉRATION D'UN MATRICULE UNIQUE
         */
        function generateMatricule()
        {
            $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $matricule = '';
            for ($i = 0; $i < 8; $i++) {
                $matricule .= $chars[rand(0, strlen($chars) - 1)];
            }
            return $matricule;
        }

        function isMatriculeUnique($pdo, $matricule)
        {
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM equipes WHERE matricule = ?");
            $stmt->execute([$matricule]);
            return $stmt->fetchColumn() == 0;
        }

        do {
            $matricule = generateMatricule();
        } while (!isMatriculeUnique($pdo, $matricule));

        /**
         * VALIDATION DES MEMBRES DE L'ÉQUIPE
         */
        $total_membres = 1; // Inclut le chef d'équipe
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($_POST["membre{$i}_nom"])) {
                $total_membres++;
            }
        }
        if ($total_membres !== 4) {
            throw new Exception("L'équipe doit être composée exactement de 4 personnes.");
        }

        // Vérification des rôles
        $roles = [$_POST['chef_role']];
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($_POST["membre{$i}_role"])) {
                $roles[] = $_POST["membre{$i}_role"];
            }
        }

        // Comptabilisation des rôles
        $dev_count = 0;
        $reseau_count = 0;
        $marketing_count = 0;
        foreach ($roles as $role) {
            switch ($role) {
                case 'developpeur':
                    $dev_count++;
                    break;
                case 'technicien_reseau':
                    $reseau_count++;
                    break;
                case 'marketeur':
                    $marketing_count++;
                    break;
            }
        }

        // Validation des rôles
        if ($dev_count !== 2 || $reseau_count !== 1 || $marketing_count !== 1) {
            throw new Exception("Composition d'équipe invalide: 2 développeurs, 1 technicien réseau, 1 marketeur requis.");
        }

        /**
         * INSERTION DES DONNÉES DANS LA BASE
         */
        $stmt = $pdo->prepare("INSERT INTO equipes (nom_equipe, description_equipe, matricule) VALUES (?, ?, ?)");
        $stmt->execute([$_POST['nom_equipe'], $_POST['description_equipe'], $matricule]);
        $equipe_id = $pdo->lastInsertId();

        // Insertion du chef d'équipe
        $stmt = $pdo->prepare("INSERT INTO membres (equipe_id, nom, prenom, email, role, is_chef) VALUES (?, ?, ?, ?, ?, 1)");
        $stmt->execute([$equipe_id, $_POST['chef_nom'], $_POST['chef_prenom'], $_POST['chef_email'], $_POST['chef_role']]);

        // Insertion des autres membres
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($_POST["membre{$i}_nom"])) {
                $stmt = $pdo->prepare("INSERT INTO membres (equipe_id, nom, prenom, email, role) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$equipe_id, $_POST["membre{$i}_nom"], $_POST["membre{$i}_prenom"], $_POST["membre{$i}_email"], $_POST["membre{$i}_role"]]);
            }
        }

        /**
         * GÉNÉRATION DU QR CODE
         */
        // Créer le dossier qrcodes s'il n'existe pas
        if (!file_exists('qrcodes')) {
            mkdir('qrcodes', 0777, true);
        }

        $qrOptions = new QROptions([
            'outputType' => QRCode::OUTPUT_IMAGE_PNG,
            'eccLevel'   => QRCode::ECC_L,
        ]);

        $qrCode = new QRCode($qrOptions);
        $baseUrl = "http://localhost/Hackathon/team-info.php"; // À adapter selon votre configuration
        $qrContent = $baseUrl . "?matricule=" . $matricule;
        $qrPath = "qrcodes/$matricule.png";
        $qrCode->render($qrContent, $qrPath);

        /**
         * GÉNÉRATION DU PDF
         */
        // Créer le dossier pdfs s'il n'existe pas
        if (!file_exists('pdfs')) {
            mkdir('pdfs', 0777, true);
        }

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, "Confirmation d'inscription - " . $_POST['nom_equipe'], 0, 1, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, "Matricule: $matricule", 0, 1);
        $pdf->Image($qrPath, 80, $pdf->GetY() + 10, 50);
        $pdfPath = "pdfs/$matricule.pdf";
        $pdf->Output('F', $pdfPath);

        /**
         * ENVOI D'EMAILS AVEC CONFIRMATION
         */
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->Port = 1025;
        $mail->SMTPAuth = false;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('contact@example.com', 'Inscription Hackathon');
        $mail->Subject = "Confirmation d'inscription - " . $_POST['nom_equipe'];

        // Ajout de tous les membres dans la liste des destinataires
        $mail->addAddress($_POST['chef_email']); // Chef d'équipe

        // Ajout des autres membres
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($_POST["membre{$i}_email"])) {
                $mail->addAddress($_POST["membre{$i}_email"]);
            }
        }

        $mail->addAttachment($pdfPath);
        $mail->addAttachment($qrPath);
        $mail->msgHTML("Votre inscription est confirmée."); // Le texte sera correctement encodé
        $mail->send();

        $_SESSION['success'] = "Votre équipe a été inscrite avec succès ! Matricule : $matricule";
        header("Location: confirmation.php");
        exit();
    } catch (Exception $e) {
        $_SESSION['error'] = "Erreur: " . $e->getMessage();
        header("Location: confirmation.php");
        exit();
    }
}
