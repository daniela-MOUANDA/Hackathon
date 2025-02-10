<?php
session_start();
// Activer l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../bdd.php';

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Log des données reçues
        error_log("Données POST reçues : " . print_r($_POST, true));
        error_log("Fichiers reçus : " . print_r($_FILES, true));

        // Récupération et validation des données
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $telephone = preg_replace('/[^0-9+]/', '', htmlspecialchars($_POST['telephone']));
        $institution = htmlspecialchars($_POST['institution']);
        $role = htmlspecialchars($_POST['role']);
        $age = intval($_POST['age']);

        // Validations
        if (!$email) {
            throw new Exception("L'adresse email n'est pas valide");
        }

        if ($age < 18 || $age > 100) {
            throw new Exception("L'âge doit être compris entre 18 et 100 ans");
        }

        $roles_permis = ['developpeur', 'technicien_reseau', 'marketeur'];
        if (!in_array($role, $roles_permis)) {
            throw new Exception("Le rôle sélectionné n'est pas valide");
        }

        // Traitement de la photo
        $photo = null;
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
            $max_size = 5 * 1024 * 1024;

            if ($_FILES['photo']['size'] > $max_size) {
                throw new Exception("La taille de la photo ne doit pas dépasser 5 Mo");
            }

            if (!in_array($_FILES['photo']['type'], $allowed_types)) {
                throw new Exception("Le format de la photo n'est pas accepté");
            }

            if (!file_exists('../uploads')) {
                mkdir('../uploads', 0777, true);
            }

            $photo_tmp = $_FILES['photo']['tmp_name'];
            $photo_name = uniqid() . '_' . $_FILES['photo']['name'];
            $photo_path = '../uploads/' . $photo_name;

            if (!move_uploaded_file($photo_tmp, $photo_path)) {
                throw new Exception("Erreur lors de l'upload de la photo");
            }
            $photo = $photo_name;
        }

        // Traitement du document justificatif
        $doc_justificatif = null;
        if (isset($_FILES['doc_justificatif']) && $_FILES['doc_justificatif']['error'] === UPLOAD_ERR_OK) {
            $allowed_types = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
            $max_size = 10 * 1024 * 1024;

            if ($_FILES['doc_justificatif']['size'] > $max_size) {
                throw new Exception("La taille du document ne doit pas dépasser 10 Mo");
            }

            if (!in_array($_FILES['doc_justificatif']['type'], $allowed_types)) {
                throw new Exception("Le format du document justificatif n'est pas accepté");
            }

            if (!file_exists('../uploads')) {
                mkdir('../uploads', 0777, true);
            }

            $doc_tmp = $_FILES['doc_justificatif']['tmp_name'];
            $doc_name = uniqid() . '_' . $_FILES['doc_justificatif']['name'];
            $doc_path = '../uploads/' . $doc_name;

            if (!move_uploaded_file($doc_tmp, $doc_path)) {
                throw new Exception("Erreur lors de l'upload du document justificatif");
            }
            $doc_justificatif = $doc_name;
        }

        // Insertion dans la base de données
        $sql = "INSERT INTO participants (
            prenom, nom, email, telephone, institution, role, age, 
            photo, doc_justificatif, date_inscription
        ) VALUES (
            :prenom, :nom, :email, :telephone, :institution, :role, :age,
            :photo, :doc_justificatif, NOW()
        )";

        $stmt = $bdd->prepare($sql);
        $stmt->execute([
            ':prenom' => substr($prenom, 0, 50),
            ':nom' => substr($nom, 0, 50),
            ':email' => substr($email, 0, 100),
            ':telephone' => substr($telephone, 0, 20),
            ':institution' => substr($institution, 0, 100),
            ':role' => $role,
            ':age' => $age,
            ':photo' => $photo,
            ':doc_justificatif' => $doc_justificatif
        ]);

        $_SESSION['message'] = [
            'type' => 'success',
            'text' => "Inscription réussie ! Nous vous contacterons bientôt."
        ];
    } catch (Exception $e) {
        $_SESSION['message'] = [
            'type' => 'error',
            'text' => "Erreur : " . $e->getMessage()
        ];
        error_log("Erreur dans le traitement du formulaire : " . $e->getMessage());
    }
}

// Récupération du message
$message = isset($_SESSION['message']) ? $_SESSION['message'] : null;
unset($_SESSION['message']);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'inscription</title>
    <style>
        .message-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 90%;
        }

        .success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }

        .btn-retour {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-retour:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <?php if ($message): ?>
        <div class="message-box <?php echo $message['type']; ?>">
            <p><?php echo $message['text']; ?></p>
            <a href="../index.php" class="btn-retour">Retour à l'accueil</a>
        </div>
    <?php else: ?>
        <div class="message-box error">
            <p>Aucun message à afficher</p>
            <a href="../index.php" class="btn-retour">Retour à l'accueil</a>
        </div>
    <?php endif; ?>
</body>

</html>