<?php
session_start();

// Inclure le fichier de connexion à la base de données
require_once 'bdd.php';

// Vérifier si la connexion existe
if (!isset($pdo)) {
    $_SESSION['error'] = "Erreur de connexion à la base de données.";
    header('Location: auth.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero_dossier = $_POST['numero_dossier'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Vérifier les informations d'identification
        $query = "SELECT * FROM preinscription WHERE id = ? AND email = ? AND mdp_secret = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$numero_dossier, $email, $password]);
        $etudiant = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($etudiant) {
            // Authentification réussie
            $_SESSION['etudiant_id'] = $etudiant['id'];
            $_SESSION['etudiant_nom'] = $etudiant['nom'];
            $_SESSION['etudiant_prenom'] = $etudiant['prenom'];

            // Rediriger vers le tableau de bord
            header('Location: dashboard_etudiant.php');
            exit();
        } else {
            // Authentification échouée
            $_SESSION['error'] = "Numéro de dossier, email ou mot de passe incorrect.";
            header('Location: auth.php');
            exit();
        }

    } catch (PDOException $e) {
        // Erreur de base de données
        $_SESSION['error'] = "Une erreur est survenue. Veuillez réessayer plus tard.";
        header('Location: auth.php');
        exit();
    }
} else {
    // Si quelqu'un essaie d'accéder directement à ce fichier
    header('Location: auth.php');
    exit();
}
?> 