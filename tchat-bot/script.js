document.addEventListener("DOMContentLoaded", function () {
    const chatPopup = document.getElementById('chat-popup');
    const openChat = document.getElementById('open-chat');
    const closeChat = document.getElementById('close-chat');
    const sendBtn = document.getElementById('send-btn');
    const userInput = document.getElementById('user-input');
    const chatBody = document.querySelector('.chat-body');

    const GEMINI_API_KEY = 'AIzaSyB1UtQQg-KnJSl92mS93gM18GTjTerlVRk';
    const GEMINI_MODEL_ID = 'gemini-1.5-flash';
    const prompt = "Tu es un chatbot qui peut aider à obtenir des informations sur les programmes de licence pour l'ecole INPTIC . les informations que tu peux vous fournir sont au dessus mais tu ne dois pas oublier que ton interlocuteur ne sais rien de cette conversation . Maintenant tu dois commencer la conversation sans faire savoir qu'il y'a eu une conversation avant .";
    const RT = "Licence Administration et Sécurité des Réseaux est de spécialiser les étudiants dans les domaines liés:Compétences acquises L objectif de la Licence Professionnelle en Administration et Sécurité des Réseaux est de former des experts capables d assurer la sécurité des systèmes d information, des réseaux télécoms, et de maîtriser la cybersécurité et l administration des réseaux. Les diplômés sont qualifiés pour installer, maintenir et sécuriser les infrastructures réseau, analyser les risques, et concevoir des architectures adaptées aux besoins des entreprises. Débouchés Les débouchés professionnels incluent des rôles tels qu’administrateur système et réseaux, responsable de la sécurité ou de l’exploitation, intégrateur d’équipements réseaux, ou chef de projet en développement de réseaux. La formation met également l'accent sur les compétences en gestion de configurations et en élaboration de politiques de sécurité efficaces.";
    const ARS = "Licence Administration et Sécurité des Réseaux est de spécialiser les étudiants dans les domaines liés:Compétences acquises L’objectif de la Licence Professionnelle en Administration et Sécurité des Réseaux est de former des experts capables d'assurer la sécurité des systèmes d’information, des réseaux télécoms, et de maîtriser la cybersécurité et l'administration des réseaux. Les diplômés sont qualifiés pour installer, maintenir et sécuriser les infrastructures réseau, analyser les risques, et concevoir des architectures adaptées aux besoins des entreprises. Débouchés Les débouchés professionnels incluent des rôles tels qu’administrateur système et réseaux, responsable de la sécurité ou de l’exploitation, intégrateur d’équipements réseaux, ou chef de projet en développement de réseaux. La formation met également l'accent sur les compétences en gestion de configurations et en élaboration de politiques de sécurité efficaces.";
    const IB = "𝗦𝘆𝘀𝘁𝗲̀𝗺𝗲𝘀 𝗱’𝗜𝗻𝗳𝗼𝗿𝗺𝗮𝘁𝗶𝗼𝗻 & 𝗕𝗮𝘀𝗲𝘀 𝗱𝗲 𝗗𝗼𝗻𝗻𝗲́𝗲𝘀 𝗖𝗼𝗺𝗽𝗲́𝘁𝗲𝗻𝗰𝗲𝘀 : À l'issue de la Licence professionnelle en 𝐆𝐞́𝐧𝐢𝐞 𝐈𝐧𝐟𝐨𝐫𝐦𝐚𝐭𝐢𝐪𝐮𝐞, le diplômé sera capable de :A l’issue de la Licence Professionnelle en Administration et Sécurité des Réseaux, le diplômé sera capable: o d’Installer, maintenir et faire évoluer un réseau physique; o Superviser et gérer un réseau; o Faire évoluer une configuration en fonction des besoins et des moyens technologiques; o Avoir une maîtrise des aspects architecturaux et protocolaires liés à la sécurité; o Analyser les risques et de définir une politique de sécurité et de proposer une architecture sécurisée; o Maîtriser les techniques actuelles permettant de sécuriser les infrastructures réseaux d'entreprise ou d'opérateurs de réseaux et de télécoms. 𝗗𝗲́𝗯𝗼𝘂𝗰𝗵𝗲́𝘀 𝗽𝗿𝗼𝗳𝗲𝘀𝘀𝗶𝗼𝗻𝗻𝗲𝗹𝘀 : Administrateur système et réseaux; o Responsable d’Exploitation, de système d’information, de sécurité, de maintenance; o Intégrateur d’équipements réseaux; o Chef de projet des développements de réseaux et télécommunications"
    const GI = " Génie Informatique - 𝗗E𝗩𝗘𝗟𝗢𝗣𝗣𝗘𝗠𝗘𝗡𝗧 𝗗𝗘𝗦 𝗔𝗽𝗽𝗹𝗶𝗰𝗮𝘁𝗶𝗼𝗻𝘀 𝗥𝗲́𝗽𝗮𝗿𝘁𝗶𝗲𝘀 𝗖𝗼𝗺𝗽𝗲́𝘁𝗲𝗻𝗰𝗲𝘀 : À l'issue de la Licence professionnelle en 𝐆𝐞́𝐧𝐢𝐞 𝐈𝐧𝐟𝐨𝐫𝐦𝐚𝐭𝐢𝐪𝐮𝐞, le diplômé sera capable de : Développer des applications informatiques utilisant des technologies récentes Mettre en place et personnaliser des applications distribuées Analyser et concevoir des applications en utilisant des outils de génie logiciel Gérer le système d'information d'une entreprise en assurant sa cohérence, sa qualité et sa sécurité Assurer tout ou partie de la conception, l’implémentation et l'administration de serveurs, d'applications par le développement à base d'intégration 𝗗𝗲́𝗯𝗼𝘂𝗰𝗵𝗲́𝘀 𝗽𝗿𝗼𝗳𝗲𝘀𝘀𝗶𝗼𝗻𝗻𝗲𝗹𝘀 : Développeur d’application Internet / Intranet Développeur d’application Objet Intégrateur de progiciel de gestion en client / serveur Assistant chef de projet technique"
    const info = "Voici quelques informations a retenir pour aider. Les candidats doivent être titulaires d’un baccalauréat général, technique ou professionnel , obtenu depuis un maximum de 2 ans. liste des filieres : Génie Informatique, Réseaux et Télécommunications, Marketing Numérique, et Technico-Commercial. Si vous réussissez le concours et avez moins de 22 ans, vos frais scolaires seront pris en charge par l’ANGB . Cependant, vous devez payer 200 000 FCFA pour la première année, puis 150 000 FCFA pour chaque année restante du cursus. Si vous ratez le concours, vous devez payer entre 500 000 et 700 000 FCFA pour l’inscription. Les candidats au concours de l'INPTIC doivent disposer d’un Bac+1 ou Bac+2 dans un domaine pertinent et soumettre un dossier comprenant des relevés de notes, diplômes, CV et lettre de motivation . Une fois inscrit sur le site de l'INPTIC, vous  serrez dirigé vers espace candidat ou verrez allez téléversé les document demandé seulon votre candidature  pouvez vous connecter au portail pour vérifier le statut de votre candidature dans l’espace dédié.  ou vous recevez des message et la confirmation. Si vous avez plus de 22 ans, vous ne pouvez pas bénéficier de la prise en charge des frais scolaires par l’ANGB. Vous devrez assumer l’intégralité des frais liés à votre formation. En cas de problème, veuillez contacter l’équipe technique via le formulaire d’assistance ou par email à support@inpticgabon.com. l’INPTIC propose des formations courtes en cybersécurité, réseaux, développement mobile, et gestion de bases de données. Consultez le portail pour les offres actuelles. Les frais dépendent de la durée et du type de formation. Par exemple, une formation courte de 3 mois peut coûter entre 150 000 et 300 000 FCFA. certaines formations professionnelles sont ouvertes à tous, sans exigence de diplôme, mais une base en informatique est généralement recommandée.Les certifications varient selon le programme. Par exemple : Certification Cisco (CCNA) pour les réseaux. Certificat en cybersécurité. Certification en développement web ou mobile.Les étudiants internationaux sont les bienvenus. Ils doivent fournir une copie de leur passeport, leurs diplômes traduits et certifiés conformes, ainsi qu’une preuve de financement. l’inscription aux formations en e-learning se fait sur dossier. pour une formation e-learning Vous devez disposer d’un diplôme de niveau minimum Bac, d’un ordinateur ou smartphone, et d’une connexion Internet fiable.";
    let conversationHistory = [];
    conversationHistory.push({ role: 'bot', text: (RT + ARS + IB + GI + info + prompt) });

    // Affiche le chat popup et cache le bouton circulaire
    openChat.addEventListener('click', function () {
        chatPopup.style.display = 'flex';
        openChat.style.display = 'none';
    });

    // Cache le chat popup et affiche le bouton circulaire
    closeChat.addEventListener('click', function () {
        chatPopup.style.display = 'none';
        openChat.style.display = 'flex';
    });

    // Envoie le message
    sendBtn.addEventListener('click', function () {
        const userMessage = userInput.value.trim();
        if (userMessage) {
            displayMessage(userMessage, 'user');
            userInput.value = '';
            sendToGemini(userMessage);
        }
    });

    function displayMessage(message, sender) {
        const messageElement = document.createElement('div');
        messageElement.className = `chat-message ${sender}`;
        messageElement.textContent = message;
        chatBody.appendChild(messageElement);
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    // Fonction pour masquer les boutons d'option
    function hideChatOptions() {
        const chatOptions = document.querySelectorAll('.chat-option');
        chatOptions.forEach(button => {
            button.style.display = 'none';
        });
    }


    // Sélectionner tous les boutons d'option de chat
    const chatOptions = document.querySelectorAll('.chat-option');

    // Ajouter un gestionnaire d'événements à chaque bouton
    chatOptions.forEach(button => {
        button.addEventListener('click', () => {
            const message = button.textContent;
            sendToGemini(message); // Envoyer le message à l'IA
            displayMessage(message, 'user'); // Afficher le message de l'utilisateur dans la conversation
        });
    });


    function sendToGemini(userMessage) {
        // Masquer les boutons d'option de chat

        // Ajouter le message de l'utilisateur à l'historique de la conversation
        conversationHistory.push({ role: 'user', text: userMessage });
    
        // Préparer les données à envoyer à l'API
        const dataToSend = {
            contents: [
                {
                    parts: conversationHistory.map(msg => ({ text: msg.text }))
                }
            ]
        };

        console.log('Réponse de l\'API:', dataToSend);
    
        fetch(`https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=${GEMINI_API_KEY}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(dataToSend)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erreur HTTP: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Réponse de l\'API:', data);
    
            const botResponse = data.candidates[0]?.content?.parts[0]?.text || 'Désolé, je n\'ai pas pu obtenir de réponse.';
            displayMessage(botResponse, 'bot');
            conversationHistory.push({ role: 'bot', text: botResponse });
        })
        .catch(error => {
            console.error('Erreur:', error);
            displayMessage('Erreur lors de la communication avec le serveur.', 'bot');
        });
    }
    
});
