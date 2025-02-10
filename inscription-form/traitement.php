<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connexion à la base de données
require_once '../bdd.php';

// Fonction pour gérer l'upload des fichiers
function handleFileUpload($file, $destination)
{
    try {
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf'];
        $maxSize = 5 * 1024 * 1024; // 5MB

        // Vérification des erreurs d'upload
        if ($file['error'] !== UPLOAD_ERR_OK) {
            throw new Exception("Erreur lors de l'upload: " . $file['error']);
        }

        $fileInfo = pathinfo($file['name']);
        $extension = strtolower($fileInfo['extension']);

        if (!in_array($extension, $allowedExtensions)) {
            throw new Exception("Type de fichier non autorisé: " . $extension);
        }

        if ($file['size'] > $maxSize) {
            throw new Exception("Le fichier est trop volumineux: " . $file['size']);
        }

        // Définition des chemins
        $baseUploadPath = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'uploads';
        $destinationPath = $baseUploadPath . DIRECTORY_SEPARATOR . $destination;

        // Debug des chemins
        error_log("Chemin de base: " . $baseUploadPath);
        error_log("Chemin de destination: " . $destinationPath);

        // Création des dossiers si nécessaire
        if (!file_exists($baseUploadPath)) {
            if (!mkdir($baseUploadPath, 0777, true)) {
                throw new Exception("Impossible de créer le dossier uploads");
            }
        }

        if (!file_exists($destinationPath)) {
            if (!mkdir($destinationPath, 0777, true)) {
                throw new Exception("Impossible de créer le dossier " . $destination);
            }
        }

        // Vérification des permissions
        if (!is_writable($destinationPath)) {
            throw new Exception("Le dossier n'est pas accessible en écriture: " . $destinationPath);
        }

        $newFileName = uniqid() . '.' . $extension;
        $uploadPath = $destinationPath . DIRECTORY_SEPARATOR . $newFileName;

        // Debug du chemin final
        error_log("Chemin final: " . $uploadPath);

        if (!move_uploaded_file($file['tmp_name'], $uploadPath)) {
            throw new Exception("Erreur lors du déplacement du fichier vers: " . $uploadPath);
        }

        // Retourner le chemin relatif pour la base de données
        return 'uploads/' . $destination . '/' . $newFileName;
    } catch (Exception $e) {
        error_log("Erreur dans handleFileUpload: " . $e->getMessage());
        throw $e;
    }
}

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Méthode non autorisée');
    }

    // Debug des données reçues
    error_log("Données POST reçues : " . print_r($_POST, true));
    error_log("Fichiers reçus : " . print_r($_FILES, true));

    $pdo->beginTransaction();

    // 1. Insertion de l'équipe
    $stmtEquipe = $pdo->prepare("
        INSERT INTO equipes (
            nom_equipe, 
            description_equipe, 
            doc_justificatif,
            date_inscription
        ) VALUES (
            :nom_equipe, 
            :description_equipe, 
            :doc_justificatif,
            NOW()
        )
    ");

    // Traitement du document justificatif
    $docPath = '';
    if (isset($_FILES['doc_justificatif']) && $_FILES['doc_justificatif']['error'] === UPLOAD_ERR_OK) {
        $docName = uniqid() . '_' . $_FILES['doc_justificatif']['name'];
        move_uploaded_file($_FILES['doc_justificatif']['tmp_name'], "../uploads/documents/" . $docName);
        $docPath = "uploads/documents/" . $docName;
    }

    $stmtEquipe->execute([
        'nom_equipe' => $_POST['nom_equipe'],
        'description_equipe' => $_POST['description_equipe'],
        'doc_justificatif' => $docPath
    ]);

    $idEquipe = $pdo->lastInsertId();

    // 2. Insertion des membres (chef d'équipe inclus)
    $stmtMembre = $pdo->prepare("
        INSERT INTO membres (
            id_equipe,
            nom,
            prenom,
            email,
            role,
            photo_profil,
            is_chef_equipe
        ) VALUES (
            :id_equipe,
            :nom,
            :prenom,
            :email,
            :role,
            :photo_profil,
            :is_chef_equipe
        )
    ");

    // Fonction pour traiter la photo
    function processPhoto($file) {
        if ($file['error'] === UPLOAD_ERR_OK) {
            $photoName = uniqid() . '_' . $file['name'];
            move_uploaded_file($file['tmp_name'], "../uploads/photos/" . $photoName);
            return "uploads/photos/" . $photoName;
        }
        return '';
    }

    // Insertion du chef d'équipe
    $chefPhotoPath = processPhoto($_FILES['chef_photo']);
    $stmtMembre->execute([
        'id_equipe' => $idEquipe,
        'nom' => $_POST['chef_nom'],
        'prenom' => $_POST['chef_prenom'],
        'email' => $_POST['chef_email'],
        'role' => $_POST['chef_role'],
        'photo_profil' => $chefPhotoPath,
        'is_chef_equipe' => 1
    ]);

    // Insertion des autres membres
    for ($i = 1; $i <= 3; $i++) {
        $photoPath = processPhoto($_FILES["membre{$i}_photo"]);
        $stmtMembre->execute([
            'id_equipe' => $idEquipe,
            'nom' => $_POST["membre{$i}_nom"],
            'prenom' => $_POST["membre{$i}_prenom"],
            'email' => $_POST["membre{$i}_email"],
            'role' => $_POST["membre{$i}_role"],
            'photo_profil' => $photoPath,
            'is_chef_equipe' => 0
        ]);
    }

    // Vérification de la composition de l'équipe
    $stmtVerif = $pdo->prepare("
        SELECT 
            SUM(CASE WHEN role = 'developpeur' THEN 1 ELSE 0 END) as nb_dev,
            SUM(CASE WHEN role = 'technicien_reseau' THEN 1 ELSE 0 END) as nb_tech,
            SUM(CASE WHEN role = 'marketeur' THEN 1 ELSE 0 END) as nb_mkt
        FROM membres 
        WHERE id_equipe = ?
    ");

    $stmtVerif->execute([$idEquipe]);
    $composition = $stmtVerif->fetch();

    if ($composition['nb_dev'] !== 2 || $composition['nb_tech'] !== 1 || $composition['nb_mkt'] !== 1) {
        throw new Exception("La composition de l'équipe ne respecte pas les critères requis");
    }

    $pdo->commit();

    echo json_encode([
        'success' => true,
        'message' => 'Inscription réussie !',
        'redirect' => 'confirmation.php'
    ]);

} catch (Exception $e) {
    error_log("Erreur : " . $e->getMessage());
    if (isset($pdo)) {
        $pdo->rollBack();
    }

    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
