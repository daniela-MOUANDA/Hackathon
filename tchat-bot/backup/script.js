// Encapsulation stricte du code
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        // Initialisation des éléments DOM
        const elements = {
            chatPopup: document.getElementById('chat-popup'),
            openChatBtn: document.getElementById('open-chat'),
            closeChatBtn: document.getElementById('close-chat'),
            sendBtn: document.getElementById('send-btn'),
            userInput: document.getElementById('user-input'),
            chatBody: document.querySelector('.chat-body'),
            chatOptions: document.querySelectorAll('.chat-option')
        };

        // Configuration du chatbot
        const config = {
            GEMINI_API_KEY: 'AIzaSyB1UtQQg-KnJSl92mS93gM18GTjTerlVRk',
            GEMINI_MODEL_ID: 'gemini-1.5-flash',
            animationDuration: 300,
            messageDelay: 500
        };

        // Gestion de l'historique des conversations
        let conversationHistory = [];
        const initialPrompt = "Tu es un chatbot qui peut aider à obtenir des informations sur les programmes de licence pour l'ecole INPTIC...";
        conversationHistory.push({ role: 'bot', text: initialPrompt });

        // Fonctions principales
        const chatFunctions = {
            openChat: function() {
                elements.chatPopup.style.display = 'block';
                elements.openChatBtn.style.display = 'none';
                elements.userInput.focus();
            },

            closeChat: function() {
                elements.chatPopup.style.display = 'none';
                elements.openChatBtn.style.display = 'block';
            },

            sendMessage: async function() {
                const message = elements.userInput.value.trim();
                if (!message) return;

                // Afficher le message utilisateur
                chatFunctions.addMessage(message, 'user');
                elements.userInput.value = '';

                try {
                    // Préparer la requête à l'API
                    const response = await chatFunctions.sendToGemini(message);
                    chatFunctions.addMessage(response, 'bot');
                } catch (error) {
                    console.error('Erreur:', error);
                    chatFunctions.addMessage('Désolé, une erreur est survenue.', 'bot');
                }
            },

            addMessage: function(message, sender) {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message', sender);
                messageDiv.textContent = message;
                
                // Animation du message
                messageDiv.style.opacity = '0';
                elements.chatBody.appendChild(messageDiv);
                elements.chatBody.scrollTop = elements.chatBody.scrollHeight;
                
                setTimeout(() => {
                    messageDiv.style.opacity = '1';
                    messageDiv.style.transition = `opacity ${config.animationDuration}ms ease-in-out`;
                }, 10);
            },

            sendToGemini: async function(userMessage) {
                conversationHistory.push({ role: 'user', text: userMessage });

                const dataToSend = {
                    contents: [{
                        parts: conversationHistory.map(msg => ({ text: msg.text }))
                    }]
                };

                try {
                    const response = await fetch(
                        `https://generativelanguage.googleapis.com/v1beta/models/${config.GEMINI_MODEL_ID}:generateContent?key=${config.GEMINI_API_KEY}`,
                        {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(dataToSend)
                        }
                    );

                    if (!response.ok) {
                        throw new Error(`Erreur HTTP: ${response.status}`);
                    }

                    const data = await response.json();
                    const botResponse = data.candidates[0]?.content?.parts[0]?.text || 
                                     'Désolé, je n\'ai pas pu obtenir de réponse.';
                    
                    conversationHistory.push({ role: 'bot', text: botResponse });
                    return botResponse;

                } catch (error) {
                    console.error('Erreur API:', error);
                    throw error;
                }
            }
        };

        // Gestionnaires d'événements
        elements.openChatBtn.addEventListener('click', chatFunctions.openChat);
        elements.closeChatBtn.addEventListener('click', chatFunctions.closeChat);
        elements.sendBtn.addEventListener('click', chatFunctions.sendMessage);
        
        elements.userInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                chatFunctions.sendMessage();
            }
        });

        elements.chatOptions.forEach(option => {
            option.addEventListener('click', function() {
                const question = this.textContent;
                elements.userInput.value = question;
                chatFunctions.sendMessage();
            });
        });

        // Initialisation
        elements.chatPopup.style.display = 'none';
        elements.openChatBtn.style.display = 'block';
    });
})();
