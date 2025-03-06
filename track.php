<?php

require_once 'bdd.php';

 // Récupérer les infos du visiteur
 $ip = $_SERVER['REMOTE_ADDR'];
 $user_agent = $_SERVER['HTTP_USER_AGENT'];
 $page = $_SERVER['REQUEST_URI'];
 $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct';

 // Détecter le type d’appareil
 function detectDevice($user_agent) {
     if (preg_match('/android/i', $user_agent)) {
         return '📱 Android';
     } elseif (preg_match('/iphone|ipad/i', $user_agent)) {
         return '📱 iPhone/iPad';
     } elseif (preg_match('/windows|macintosh|linux/i', $user_agent)) {
         return '💻 Ordinateur';
     } else {
         return '❓ Inconnu';
     }
 }

 $device_type = detectDevice($user_agent);

 // Insérer dans la base de données
 $sql = "INSERT INTO visiteurs (ip, user_agent, page, referer, device_type) VALUES (:ip, :user_agent, :page, :referer, :device_type)";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([
     'ip' => $ip,
     'user_agent' => $user_agent,
     'page' => $page,
     'referer' => $referer,
     'device_type' => $device_type
 ]);


?>


