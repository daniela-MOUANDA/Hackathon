<?php

session_start();
require_once '../bdd.php'; // Connexion à la base de données
require '../vendor/autoload.php'; // Inclusion des dépendances via Composer
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use FPDF;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        /**
         * VÉRIFICATION DU NOMBRE D'ÉQUIPES
         */
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM equipes");
        $stmt->execute();
        $nombre_equipes = $stmt->fetchColumn();
        
        if ($nombre_equipes >= 30) {
            throw new Exception("Désolé, le nombre maximum d'équipes (30) a été atteint. Les inscriptions sont closes.");
        }

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
         * VÉRIFICATION DE L'UNICITÉ DES EMAILS
         */
        function isEmailUnique($pdo, $email) {
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM membres WHERE email = ?");
            $stmt->execute([$email]);
            return $stmt->fetchColumn() == 0;
        }

        // Vérification des emails
        $emails = [$_POST['chef_email']];
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($_POST["membre{$i}_email"])) {
                $emails[] = $_POST["membre{$i}_email"];
            }
        }

        // Vérifier si les emails sont uniques
        foreach ($emails as $email) {
            if (!isEmailUnique($pdo, $email)) {
                throw new Exception("L'adresse email '$email' est déjà utilisée par un autre membre.");
            }
        }

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
         * VALIDATION ET TRAITEMENT DU DOCUMENT JUSTIFICATIF
         */
        function validateFile($file)
        {
            $allowedTypes = ['application/pdf', 'image/jpeg', 'image/png'];
            $maxSize = 5 * 1024 * 1024; // 5MB

            if ($file['size'] > $maxSize) {
                throw new Exception("Le fichier est trop volumineux. Taille maximale : 5MB");
            }

            if (!in_array($file['type'], $allowedTypes)) {
                throw new Exception("Type de fichier non autorisé. Formats acceptés : PDF, JPEG, PNG");
            }

            return true;
        }

        // Traitement du document justificatif
        $document_path = '';
        if (isset($_FILES['doc_justificatif']) && $_FILES['doc_justificatif']['error'] === 0) {
            validateFile($_FILES['doc_justificatif']);

            // Créer le dossier documents s'il n'existe pas
            if (!file_exists('documents')) {
                mkdir('documents', 0777, true);
            }

            $extension = pathinfo($_FILES['doc_justificatif']['name'], PATHINFO_EXTENSION);
            $document_path = 'documents/' . $matricule . '_justificatif.' . $extension;

            if (!move_uploaded_file($_FILES['doc_justificatif']['tmp_name'], $document_path)) {
                throw new Exception("Erreur lors du téléchargement du document justificatif");
            }
        }

        /**
         * INSERTION DES DONNÉES DANS LA BASE
         */
        // Préparation des données avec nettoyage
        $nom_equipe = htmlspecialchars(trim($_POST['nom_equipe']));
        $description_equipe = htmlspecialchars(trim($_POST['description_equipe']));

        $stmt = $pdo->prepare("INSERT INTO equipes (nom_equipe, description_equipe, matricule, document_path) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nom_equipe, $description_equipe, $matricule, $document_path]);
        $equipe_id = $pdo->lastInsertId();

        // Insertion du chef d'équipe avec nettoyage
        $chef_nom = htmlspecialchars(trim($_POST['chef_nom']));
        $chef_prenom = htmlspecialchars(trim($_POST['chef_prenom']));
        $chef_email = filter_var(trim($_POST['chef_email']), FILTER_SANITIZE_EMAIL);
        $chef_role = htmlspecialchars(trim($_POST['chef_role']));

        $stmt = $pdo->prepare("INSERT INTO membres (equipe_id, nom, prenom, email, role, is_chef) VALUES (?, ?, ?, ?, ?, 1)");
        $stmt->execute([$equipe_id, $chef_nom, $chef_prenom, $chef_email, $chef_role]);

        // Insertion des autres membres avec nettoyage
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($_POST["membre{$i}_nom"])) {
                $membre_nom = htmlspecialchars(trim($_POST["membre{$i}_nom"]));
                $membre_prenom = htmlspecialchars(trim($_POST["membre{$i}_prenom"]));
                $membre_email = filter_var(trim($_POST["membre{$i}_email"]), FILTER_SANITIZE_EMAIL);
                $membre_role = htmlspecialchars(trim($_POST["membre{$i}_role"]));

                $stmt = $pdo->prepare("INSERT INTO membres (equipe_id, nom, prenom, email, role) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$equipe_id, $membre_nom, $membre_prenom, $membre_email, $membre_role]);
            }
        }

        /**
         * GÉNÉRATION DU QR CODE
         */
        // Récupérer le nom de l'équipe
        $equipe_nom = htmlspecialchars(trim($_POST["equipe_nom"]));

        // Créer le dossier qrcodes s'il n'existe pas
        if (!file_exists('qrcodes')) {
            mkdir('qrcodes', 0777, true);
        }

        $qrOptions = new QROptions([
            'outputType' => QRCode::OUTPUT_IMAGE_PNG,
            'eccLevel'   => QRCode::ECC_L,
        ]);

        $qrCode = new QRCode($qrOptions);
        $baseUrl = "https://innovationdays-inptic.com/team-info.php"; // À adapter selon votre configuration
        $qrContent = $baseUrl . "?matricule=" . $matricule;
        $qrFileName = $equipe_nom . "_" . $matricule . ".png";
        $qrPath = "qrcodes/$qrFileName";
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
        $mail->Username = 'contact@innovationdays-inptic.com';
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('contact@innovationdays-inptic.com', 'Inscription Hackathon');

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
    <img src='https://innovationdays-inptic.com/assets/r.jpg' alt='INPTIC-logo' style='display: block; margin: 0 auto; width: 200px;'>
    <h2 style='color: #2C3E50; text-align: center;'>Confirmation d'Inscription au Hackathon</h2>
    
    <div style='background-color: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px 0;'>
        <p style='color: #2C3E50;'><strong>Cher(e) membre de l'équipe " . htmlspecialchars($_POST['nom_equipe']) . ",</strong></p>
        <p>Nous sommes ravis de confirmer votre inscription au Hackathon de l'INPTIC.</p>
        <p><strong>Matricule de l'équipe :</strong> " . htmlspecialchars($matricule) . "</p>
        
        <div style='background-color: #e9ecef; padding: 15px; border-left: 4px solid #007bff; margin: 15px 0;'>
            <p style='margin: 0;'><strong>Informations importantes :</strong></p>
            <ul style='margin: 10px 0; padding-left: 20px;'>
                <li>Le QR Code joint à cet email est votre billet d'entrée à l'événement.</li>
                <li>Ce QR Code est unique pour toute l'équipe et servira de pass d'accès.</li>
                <li>Chaque membre de l'équipe reçoit une copie de ce QR Code.</li>
                <li>Un seul scan sera nécessaire pour valider l'entrée de toute l'équipe.</li>
                <li>Conservez-le précieusement, il vous sera demandé lors de votre arrivée.</li>
                <li>Vous pouvez le présenter en format numérique ou imprimé.</li>
                <li>Pour les étudiants, un justificatif de scolarité sera demandé.</li>
                <li>Pour les non-étudiants, une pièce d'identité sera exigée.</li>
            </ul>
        </div>

        <p>Vous trouverez en pièces jointes :</p>
        <ul style='padding-left: 20px;'>
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

        // Créer le dossier qrcodeBadge s'il n'existe pas
        if (!file_exists('qrcodeBadge')) {
            mkdir('qrcodeBadge', 0777, true);
        }

        // Déplacer le fichier QR code dans le dossier qrcodeBadge
        rename($qrPath, "qrcodeBadge/$qrFileName");

        $_SESSION['success'] = "Votre équipe a été inscrite avec succès veillez consulter votre boite email pour plus de détail ! Matricule : $matricule";
        header("Location: confirmation.php");
        exit();
    } catch (Exception $e) {
        $_SESSION['error'] = "Erreur: " . $e->getMessage();
        header("Location: confirmation.php");
        exit();
    }
}

