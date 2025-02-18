<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Popup Chat</title>
</head>
<body>

<div id="chat-popup" class="chat-popup">
    <div class="chat-header">
        <img src="tchap-bot/logoinptic.png" alt="INPTIC" class="logo">
        <h2>Assistant INPTIC</h2>
        <button id="close-chat" class="close-btn">&times;</button>
    </div>
    <div class="chat-body">
        <p>Bonjour ! Posez moi une question</p>
        <button class="chat-option">Quels sont les prérequis pour postuler au concours d'entrée ?</button>
        <button class="chat-option">Quelles sont les filières disponibles à l’INPTIC ?</button>
        <button class="chat-option">Quels sont les frais d’inscription après le concours ?</button>
        <button class="chat-option">Quelles sont les options pour ceux qui souhaitent postuler en Licence 2 ou Licence 3 ?</button>
        <button class="chat-option">Comment puis-je suivre ma candidature sur le portail ?</button>
        <button class="chat-option">À qui m’adresser en cas de problème technique sur le site ?</button>
        <button class="chat-option">Candidature pour des Formations Professionnelles ou Certificats L’INPTIC propose-t-il des formations courtes ou des certificats professionnels ?</button>
        <button class="chat-option">Quels sont les frais pour les formations professionnelles ?</button>
        <button class="chat-option">Puis-je postuler à une formation professionnelle sans baccalauréat ?</button>
        <button class="chat-option">Quelles certifications peuvent être obtenues après une formation professionnelle ?</button>
    </div>
    <div class="chat-footer">
        <input type="text" placeholder="Poser une question" id="user-input">
        <button id="send-btn">Envoyer</button>
    </div>
</div>

<div id="open-chat" class="open-chat">
    <img src="tchat-bot/logoinptic.png" class="chat-icon">
</div>


<script src="script.js"></script>
</body>
</html>
