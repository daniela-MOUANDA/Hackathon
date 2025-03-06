<?php
session_start();

// Supprimer toutes les données de session
session_unset();

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion
header("Location: auth.php");
exit();
?>
