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
        $baseUrl = "https://portail-inptic.alwaysdata.net/hackathon/team-info.php"; // À adapter selon votre configuration
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

        // En-tête
        $pdf->SetFillColor(44, 62, 80); // Couleur bleu foncé
        $pdf->Rect(0, 0, 210, 40, 'F');
        $pdf->SetTextColor(255, 255, 255);
        $pdf->SetFont('Arial', 'B', 20);
        $pdf->Cell(0, 20, 'INNOVATION DAYS 2025', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 14);
        $pdf->Cell(0, 10, "Confirmation d'inscription", 0, 1, 'C');

        // Retour à la couleur noire pour le texte
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Ln(20);

        // Informations de l'équipe
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, utf8_decode($_POST['nom_equipe']), 0, 1, 'C');

        // Cadre pour le matricule
        $pdf->SetFillColor(240, 240, 240);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Rect(50, $pdf->GetY(), 110, 15, 'F');
        $pdf->Cell(0, 15, "Matricule: $matricule", 0, 1, 'C');

        $pdf->Ln(10);

        // Zone QR Code
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, utf8_decode("Votre QR Code d'accès :"), 0, 1, 'C');
        $pdf->Image($qrPath, 80, $pdf->GetY(), 50);
        $pdf->Ln(60);

        // Instructions importantes
        $pdf->SetFillColor(240, 240, 240);
        $pdf->Rect(20, $pdf->GetY(), 170, 50, 'F');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, utf8_decode("INFORMATIONS IMPORTANTES"), 0, 1, 'C');
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetX(25);
        $pdf->MultiCell(160, 6, utf8_decode(
            "- Ce document fait office de confirmation d'inscription officielle\n" .
                "- Le QR Code ci-dessus est votre billet d'entrée à l'événement\n" .
                "- Présentez ce document (version numérique ou imprimée) à votre arrivée\n" .
                "- Conservez votre matricule, il vous servira d'identifiant unique"
        ));

        // Pied de page
        $pdf->SetY(-30);
        $pdf->SetFont('Arial', 'I', 8);
        $pdf->Cell(0, 10, utf8_decode('INPTIC - Hackathon 2025 - Document généré le ' . date('d/m/Y')), 0, 0, 'C');

        $pdfPath = "pdfs/$matricule.pdf";
        $pdf->Output('F', $pdfPath);

        /**
         * ENVOI D'EMAILS AVEC CONFIRMATION
         */
        $mail = new PHPMailer(true);

        // Configuration du serveur SMTP
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Encoding = 'base64';
        $mail->isHTML(true);
        $mail->Username = 'jacquesboussengui@gmail.com';
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('inptic@inptic-ga.org', 'Inscription Hackathon');

        // Collecter tous les emails des membres
        $emails = [$_POST['chef_email']]; // Email du chef d'équipe
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($_POST["membre{$i}_email"])) {
                $emails[] = $_POST["membre{$i}_email"];
            }
        }

        // Contenu de l'email
        $mail->Subject = "Confirmation d'inscription - " . $_POST['nom_equipe'];

        // Pièces jointes (ajoutées une seule fois)
        $mail->addAttachment($qrPath, 'QR_Code.png');
        $mail->addAttachment($pdfPath, 'Confirmation_Inscription.pdf');

        // Envoi à chaque membre de l'équipe
        foreach ($emails as $email) {
            $mail->clearAddresses(); // Effacer les destinataires précédents
            $mail->addAddress($email);

            $emailContent = "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;'>
                <h2 style='color: #2C3E50; text-align: center;'>Confirmation d'Inscription au Hackathon</h2>
                <div style='background-color: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px 0;'>
                    <p style='color: #2C3E50;'><strong>Cher(e) membre de l'équipe " . htmlspecialchars($_POST['nom_equipe']) . ",</strong></p>
                    <p>Nous sommes ravis de confirmer votre inscription au Hackathon de l'INPTIC.</p>
                    <p><strong>Matricule de l'équipe :</strong> " . $matricule . "</p>
                    <div style='background-color: #e9ecef; padding: 15px; border-left: 4px solid #007bff; margin: 15px 0;'>
                        <p style='margin: 0;'><strong>Informations importantes :</strong></p>
                        <ul style='margin: 10px 0;'>
                            <li>Le QR Code joint à cet email est votre billet d'entrée à l'événement.</li>
                            <li>Ce QR Code est unique pour toute l'équipe et servira de pass d'accès.</li>
                            <li>Chaque membre de l'équipe reçoit une copie de ce QR Code.</li>
                            <li>Un seul scan sera nécessaire pour valider l'entrée de toute l'équipe.</li>
                            <li>Conservez-le précieusement, il vous sera demandé lors de votre arrivée.</li>
                            <li>Vous pouvez le présenter en format numérique ou imprimé.</li>
                        </ul>
                    </div>
                    <p>Vous trouverez en pièces jointes :</p>
                    <ul>
                        <li>Votre QR Code d'accès (à conserver précieusement)</li>
                        <li>Votre PDF de confirmation officielle</li>
                    </ul>
                    <p style='margin-top: 20px;'>Pour toute question ou modification concernant votre inscription, n'hésitez pas à nous contacter.</p>
                </div>
                <p style='text-align: center; color: #6c757d; font-size: 0.9em;'>INPTIC - Hackathon 2025</p>
            </div>";

            $mail->msgHTML($emailContent);
            $mail->send();
        }

        $_SESSION['success'] = "Votre équipe a été inscrite avec succès veillez consulter votre boite email pour plus de détail ! Matricule : $matricule";
        header("Location: confirmation.php");
        exit();
    } catch (Exception $e) {
        $_SESSION['error'] = "Erreur: " . $e->getMessage();
        header("Location: confirmation.php");
        exit();
    }
}
