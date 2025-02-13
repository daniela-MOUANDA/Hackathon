<?php
require_once '../bdd.php';

// Fonction pour récupérer le nombre total d'équipes


function getNombreEquipes(PDO $pdo): int
{
    $stmt = $pdo->query("SELECT COUNT(id) as total FROM equipes");
    return (int)$stmt->fetch()['total'];
}

function getNombreParticipants(PDO $pdo): int
{
    $stmt = $pdo->query("SELECT COUNT(id) as total FROM membres");
    return (int)$stmt->fetch()['total'];
}
// Exemple d'utilisation :
// $nbEquipes = getNombreEquipes($bdd);
// $nbParticipants = getNombreParticipants($bdd);


