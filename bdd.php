<?php



$host = 'localhost';
$dbname = 'hackathon';
$username = 'root';
$password = '';
try {
    // Création d'une nouvelle connexion PDO avec encodage UTF-8
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Configuration des attributs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

} catch (PDOException $e) {
    // En cas d'échec, afficher l'erreur
    echo "Erreur de connexion : " . $e->getMessage();

}
?>
