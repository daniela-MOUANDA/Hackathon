<?php
// generate_token.php

// Clé secrète pour le chatbot
$secret = '23pskr16aep23doebhmlv0mgjkf1kf02';

// Récupérer l'identifiant utilisateur passé en paramètre
if (!isset($_GET['userId']) || empty($_GET['userId'])) {
    http_response_code(400);
    echo json_encode(['error' => 'User ID manquant']);
    exit;
}

$userId = $_GET['userId'];

// Générer le hash
$hash = hash_hmac('sha256', $userId, $secret);

// Retourner le token sous forme de JSON
header('Content-Type: application/json');
echo json_encode(['token' => $hash]);
