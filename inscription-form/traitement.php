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
    // Vérification des champs requis
    $required_fields = [
        'nom_equipe',
        'chef_nom',
        'chef_prenom',
        'chef_email',
        'chef_role'
    ];

    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            throw new Exception("Le champ $field est obligatoire");
        }
    }

    // Vérification des fichiers
    if (!isset($_FILES['chef_photo']) || $_FILES['chef_photo']['error'] !== 0) {
        throw new Exception("La photo du chef d'équipe est obligatoire");
    }

    // Vérification des membres
    for ($i = 1; $i <= 3; $i++) {
        if (empty($_POST["membre{$i}_nom"]) || empty($_POST["membre{$i}_prenom"])) {
            throw new Exception("Les informations du membre $i sont incomplètes");
        }
    }

    // Si tout est OK, on peut traiter les données ici
    // Par exemple, sauvegarde en base de données, etc.

    // Réponse de succès
    echo json_encode([
        'success' => true,
        'message' => 'Inscription réussie'
    ]);
} catch (Exception $e) {
    // Réponse en cas d'erreur
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
