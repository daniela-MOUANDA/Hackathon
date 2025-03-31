<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon - Fin de l'édition 2025</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #000;
            color: #fff;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        
        .header {
            background: linear-gradient(to bottom, rgba(10, 77, 166, 0.8), rgba(0, 0, 0, 0.9));
            padding: 2rem 0;
            border-bottom: 3px solid rgb(216, 70, 29);
            text-align: center;
            position: relative;
        }
        
        .logo {
            max-width: 150px;
            margin-bottom: 1rem;
        }
        
        h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: rgb(221, 69, 35);
            text-transform: uppercase;
        }
        
        .edition-badge {
            display: inline-block;
            background-color: rgba(0, 0, 0, 0.7);
            border: 2px solid rgb(221, 69, 35);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 1rem;
        }
        
        .main-content {
            padding: 3rem 0;
            text-align: center;
        }
        
        .message-card {
            background: linear-gradient(135deg, #1a1a1a, #0a0a0a);
            border-radius: 1rem;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            margin-bottom: 3rem;
            border: 1px solid #333;
            position: relative;
            overflow: hidden;
        }
        
        .message-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, rgb(10, 77, 166), rgb(221, 69, 35));
        }
        
        h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #fff;
        }
        
        p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            color: #ddd;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .highlight {
            color: #CCFF00;
            font-weight: bold;
        }
        
        .winner-highlight {
            color: gold;
            font-weight: bold;
        }
        
        .next-edition {
            background-color: rgba(0, 0, 0, 0.6);
            border: 2px solid rgb(10, 77, 166);
            border-radius: 1rem;
            padding: 2rem;
            text-align: center;
            margin-top: 2rem;
        }
        
        .next-edition-label {
            display: block;
            text-transform: uppercase;
            font-size: 1rem;
            color: #ccc;
            letter-spacing: 2px;
            margin-bottom: 0.5rem;
        }
        
        .next-edition-date {
            display: block;
            font-size: 3.5rem;
            font-weight: bold;
            color: #CCFF00;
            font-family: 'Montserrat', sans-serif;
            line-height: 1.2;
            margin-bottom: 1rem;
        }
        
        .countdown {
            font-size: 1.2rem;
            color: #fff;
            margin-top: 1rem;
        }
        
        .countdown-value {
            font-weight: bold;
            color: rgb(221, 69, 35);
        }
        
        .cta-button {
            display: inline-block;
            background: linear-gradient(to right, rgb(10, 77, 166), rgb(51, 102, 204));
            color: white;
            text-decoration: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: bold;
            font-family: 'Montserrat', sans-serif;
            margin-top: 2rem;
            transition: all 0.3s ease;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            background: linear-gradient(to right, rgb(51, 102, 204), rgb(10, 77, 166));
        }
        
        .cta-button:active {
            transform: translateY(1px);
        }
        
        .footer {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 2rem 0;
            text-align: center;
            border-top: 1px solid #333;
        }
        
        .social-links {
            margin-bottom: 1.5rem;
        }
        
        .social-links a {
            display: inline-block;
            margin: 0 10px;
            color: #ccc;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }
        
        .social-links a:hover {
            color: rgb(221, 69, 35);
        }
        
        .copyright {
            font-size: 0.9rem;
            color: #777;
        }
        
        .contact-info {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #999;
        }
        
        .contact-info a {
            color: #ccc;
            text-decoration: none;
        }
        
        .contact-info a:hover {
            color: rgb(221, 69, 35);
            text-decoration: underline;
        }
        
        /* Animation */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .next-edition {
            animation: pulse 3s infinite ease-in-out;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.5rem;
            }
            
            p {
                font-size: 1rem;
            }
            
            .next-edition-date {
                font-size: 3rem;
            }
            
            .message-card {
                padding: 2rem 1.5rem;
            }
        }
        
        @media (max-width: 480px) {
            h1 {
                font-size: 1.7rem;
            }
            
            .edition-badge {
                padding: 0.4rem 1rem;
                font-size: 0.9rem;
            }
            
            .next-edition-date {
                font-size: 2.5rem;
            }
            
            .cta-button {
                padding: 0.8rem 1.5rem;
                font-size: 1rem;
            }
        }





        .social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 1.5rem;
}

.social-icon {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-icon-circle {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    margin-bottom: 8px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.social-icon-circle::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(10, 77, 166, 0.7), rgba(221, 69, 35, 0.7));
    z-index: 1;
    transition: all 0.3s ease;
}

.social-icon svg {
    width: 24px;
    height: 24px;
    fill: white;
    position: relative;
    z-index: 2;
    transition: all 0.3s ease;
}

.social-icon-label {
    font-size: 0.8rem;
    color: #aaa;
    transition: all 0.3s ease;
}

/* Effets de survol */
.social-icon:hover .social-icon-circle {
    transform: translateY(-5px);
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
}

.social-icon:hover .social-icon-circle::before {
    background: linear-gradient(45deg, rgba(221, 69, 35, 0.9), rgba(10, 77, 166, 0.9));
}

.social-icon:hover svg {
    transform: scale(1.2);
}

.social-icon:hover .social-icon-label {
    color: #CCFF00;
}

/* Styles spécifiques par réseau */
.facebook-icon .social-icon-circle::before {
    background: linear-gradient(45deg, #1877F2, #3b5998);
}

.youtube-icon .social-icon-circle::before {
    background: linear-gradient(45deg, #FF0000, #c4302b);
}

.tiktok-icon .social-icon-circle::before {
    background: linear-gradient(45deg, #000000, #25F4EE);
}

/* Animations */
@keyframes pulse-glow {
    0% { box-shadow: 0 0 0 0 rgba(204, 255, 0, 0.4); }
    70% { box-shadow: 0 0 0 10px rgba(204, 255, 0, 0); }
    100% { box-shadow: 0 0 0 0 rgba(204, 255, 0, 0); }
}

.social-icon:hover .social-icon-circle {
    animation: pulse-glow 1.5s infinite;
}

@media (max-width: 576px) {
    .social-icon-circle {
        width: 40px;
        height: 40px;
    }
    
    .social-icon svg {
        width: 20px;
        height: 20px;
    }
    
    .social-icons {
        gap: 15px;
    }
}
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <img src="logo.png" alt="Logo Hackathon" class="logo" onerror="this.style.display='none'">
            <h1>Hackathon</h1>
            <div class="edition-badge">Édition 2025</div>
        </div>
    </header>
    
    <main class="main-content">
        <div class="container">
            <div class="message-card">
                <h2>Merci à tous les participants !</h2>
                <p>L'édition 2025 du Hackathon est maintenant <span class="highlight">terminée</span>. Nous tenons à remercier chaleureusement toutes les équipes qui ont participé à cette aventure exceptionnelle. Votre créativité, votre persévérance et votre talent ont fait de cet événement un véritable succès.</p>
                
                <p>Félicitations à l'équipe <span class="winner-highlight">ORENIGA</span> qui a remporté la première place !</p>
                
                <p>Les projets présentés cette année ont démontré un niveau d'innovation impressionnant et ont parfaitement répondu aux défis que nous avions proposés.</p>
                
                <div class="next-edition">
                    <span class="next-edition-label">Prochaine édition</span>
                    <span class="next-edition-date">2026</span>
                    <div class="countdown">
                        <div>Rendez-vous dans <span class="countdown-value" id="countdown-days">--</span> jours</div>
                    </div>
                </div>
                
                <p>Restez connectés sur nos réseaux sociaux pour ne manquer aucune information concernant la prochaine édition. De nouveaux défis, de nouvelles opportunités et de nouvelles surprises vous attendent !</p>
                
        
            </div>
        </div>
    </main>
    
    <footer class="footer">
        <div class="container">
       
<div class="social-icons">
    <a href="https://www.facebook.com/share/19yadQcZ1c/" target="_blank" class="social-icon facebook-icon">
        <div class="social-icon-circle">
            <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M22.675 0H1.325C0.593 0 0 0.593 0 1.325v21.351C0 23.407 0.593 24 1.325 24h11.495v-9.294H9.837v-3.622h2.983V8.413c0-2.951 1.803-4.557 4.436-4.557 1.262 0 2.345.093 2.66.135v3.084h-1.828c-1.433 0-1.711.681-1.711 1.679v2.201h3.422l-.446 3.622h-2.976V24h5.833c.729 0 1.325-.593 1.325-1.325V1.325C24 .593 23.407 0 22.675 0z" />
            </svg>
        </div>
        <span class="social-icon-label">Facebook</span>
    </a>
    
    <a href="https://youtube.com/@inpticgabonofficiel?si=b850Blht_rC328d7" target="_blank" class="social-icon youtube-icon">
        <div class="social-icon-circle">
            <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
            </svg>
        </div>
        <span class="social-icon-label">YouTube</span>
    </a>
    
    <a href="https://www.tiktok.com/@inptic.gabon.offi?_t=ZN-8tze7hcWOCE&_r=1" target="_blank" class="social-icon tiktok-icon">
        <div class="social-icon-circle">
            <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M19.589 6.686a4.793 4.793 0 0 1-3.77-4.245V2h-3.445v13.672a2.896 2.896 0 0 1-5.201 1.743l-.002-.001.002.001a2.895 2.895 0 0 1 3.183-4.51v-3.5a6.329 6.329 0 0 0-5.394 10.692 6.33 6.33 0 0 0 10.857-4.424V8.687a8.182 8.182 0 0 0 4.773 1.526V6.79a4.831 4.831 0 0 1-1.003-.104z"/>
            </svg>
        </div>
        <span class="social-icon-label">TikTok</span>
    </a>
</div>
            
            <!-- <div class="contact-info">
                Pour toute question : <a href="mailto:contact@hackathon.org">contact@hackathon.org</a>
            </div> -->
            
            <div class="copyright">
                &copy; 2025 Hackathon INPTIC. Tous droits réservés.
            </div>
        </div>
    </footer>
    
    <!-- Font Awesome pour les icônes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    
    <!-- Script pour le compte à rebours -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Définir la date de la prochaine édition (1er mars 2026)
            const nextEditionDate = new Date('March 1, 2026 00:00:00').getTime();
            
            // Mettre à jour le compte à rebours
            function updateCountdown() {
                const now = new Date().getTime();
                const distance = nextEditionDate - now;
                
                // Calcul des jours, heures, minutes et secondes
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                
                // Affichage du compte à rebours
                document.getElementById('countdown-days').textContent = days;
                
                // Mettre à jour toutes les 24 heures
                setTimeout(updateCountdown, 86400000);
            }
            
            // Lancer le compte à rebours
            updateCountdown();
        });
    </script>
</body>
</html>