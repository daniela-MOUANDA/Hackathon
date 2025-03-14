<?php
require_once 'config.php'; // Chargement des variables sensibles

try {
    // Création d'une connexion PDO sécurisée avec des options avancées
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Activer le mode exception
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Récupération des données sous forme de tableau associatif
            PDO::ATTR_EMULATE_PREPARES => false, // Désactiver l'émulation des requêtes préparées
        ]
    );

} catch (PDOException $e) {
    // Enregistrer l'erreur dans un fichier de log au lieu de l'afficher
    error_log("Erreur de connexion : " . $e->getMessage(), 3, __DIR__ . 'errors.log');
    
    // Message d'erreur générique pour éviter de divulguer des informations sensibles
    die("Une erreur interne est survenue. Contactez l'administrateur.");
}
?>
