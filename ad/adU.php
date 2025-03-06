<?php
require_once '../bdd.php'; // Inclure la connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Récupération et validation des données
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $role = $_POST['role']; // Récupérer le rôle

        // Vérification des champs
        if (empty($email) || empty($password) || empty($role)) {
            throw new Exception("Veuillez remplir tous les champs.");
        }

        // Vérification de la validité de l'email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("L'adresse email n'est pas valide.");
        }

        // Vérifier si l'utilisateur existe déjà
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            throw new Exception("Cet email est déjà enregistré.");
        }

        // Hashage du mot de passe
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        if (!$hashedPassword) {
            throw new Exception("Erreur lors du hashage du mot de passe.");
        }

        // Insertion dans la base de données
        $stmt = $pdo->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, ?)");
        $result = $stmt->execute([$email, $hashedPassword, $role]);

        if ($result) {
            echo "<script>
                    alert('Utilisateur ajouté avec succès.');
                    window.location.href = window.location.href; // Recharge la même page
                  </script>";
        } else {
            throw new Exception("Erreur lors de l'ajout de l'utilisateur.");
        }
    } catch (Exception $e) {
        echo "<script>
                alert('Erreur : " . addslashes($e->getMessage()) . "');
                window.location.href = window.location.href; // Recharge la même page
              </script>";
    }
}
?>