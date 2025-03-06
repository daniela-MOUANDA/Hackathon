<?php
session_start();

// Durée d'expiration de la session en secondes (1 heure = 3600 secondes)
$session_timeout = 3600;

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    // Si non connecté, rediriger vers la page de connexion
    $_SESSION['error'] = "Vous devez être connecté pour accéder à cette page.";
    header("Location: auth.php");
    exit();
}

// Vérifier l'inactivité de l'utilisateur
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $session_timeout) {
    // Si l'utilisateur est inactif depuis plus d'une heure, détruire la session et rediriger vers la page de connexion
    session_unset();
    session_destroy();
    $_SESSION['error'] = "Session expirée, veuillez vous reconnecter.";
    header("Location: auth.php");
    exit();
}

// Mettre à jour l'heure de la dernière activité
$_SESSION['last_activity'] = time();
?>
