<?php
session_start();
require_once '../bdd.php';// Fichier de connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Vérification des champs
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Tous les champs sont obligatoires.";
        header("Location: index.php"); // Rediriger vers la page de connexion
        exit();
    }

    // Vérification dans la base de données
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Stocker les données utilisateur dans la session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];

        // Rediriger vers la page d'accueil
        header("Location: index.php?page=acceuil");
        exit();
    } else {
        $_SESSION['error'] = "Email ou mot de passe incorrect.";
        header("Location: login.php");
        exit();
    }
}
?>
