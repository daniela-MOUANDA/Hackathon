<?php include 'track.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovation Days 2025 - INPTIC</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="assets/css/fonts.css">
    <!-- <link rel="stylesheet" href="style.css"> -->



</head>

<body class="bg-gray-900 text-white">
    <!-- Barre de réseaux sociaux
    <div class="fixed top-0 w-full bg-gray-900 py-2 z-50">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center">
                <div class="text-white text-sm">
                    Suivez-nous sur les réseaux sociaux
                </div>
                <div class="flex space-x-6">
                    <a href="https://www.facebook.com/share/19yadQcZ1c/" target="_blank" class="text-white hover:text-[#CCFF00] transition-colors duration-300 flex items-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.77,7.46H14.5v-1.9c0-.9.6-1.1,1-1.1h3V.5h-4.33C10.24.5,9.5,3.44,9.5,5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4Z" />
                        </svg>
                        <span class="ml-2 hidden sm:inline text-white">Facebook</span>
                    </a>
                    <a href="https://youtube.com/@inpticgabonofficiel?si=b850Blht_rC328d7" target="_blank" class="text-white hover:text-[#CCFF00] transition-colors duration-300 flex items-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.5,6.2A3,3,0,0,0,21.4,4c-2-.2-6.2-.3-10.4-.3S2.6,3.8.6,4A3,3,0,0,0-1.5,6.2,31.8,31.8,0,0,0-2,12a31.8,31.8,0,0,0,.5,5.8A3,3,0,0,0,.6,20c2,.2,6.2.3,10.4.3s8.4-.1,10.4-.3a3,3,0,0,0,2.1-2.2A31.8,31.8,0,0,0,24,12,31.8,31.8,0,0,0,23.5,6.2ZM9.5,15.8V8.2l6.7,3.8Z" />
                        </svg>
                        <span class="ml-2 hidden sm:inline text-white">YouTube</span>
                    </a>
                    <a href="https://www.tiktok.com/@inptic.gabon.offi?_t=ZN-8tze7hcWOCE&_r=1" target="_blank" class="text-white hover:text-[#CCFF00] transition-colors duration-300 flex items-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59,6.69a4.83,4.83,0,0,1-3.77-4.25V2h-3.45V13.67a2.89,2.89,0,0,1-5.2,1.74,2.89,2.89,0,0,1,2.31-4.64,2.93,2.93,0,0,1,.88.13V7.42a6.84,6.84,0,0,0-1-.05A6.33,6.33,0,0,0,5,20.1a6.34,6.34,0,0,0,10.86-4.43v-7a8.16,8.16,0,0,0,4.77,1.52v-3.4a4.85,4.85,0,0,1-1-.1Z" />
                        </svg>
                        <span class="ml-2 hidden sm:inline text-white">TikTok</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div> -->
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-gradient-to-r from-black via-gray-900 to-gray-800">
        <div class="container mx-auto px-2 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center">

                    <img src="assets/logobg.png" alt="Logo INPTIC" class="h-24 w-auto">
                    <!-- <div class="text-xl font-bold truncate">Innovation Days 2025</div> -->
                </div>

                <div class="hidden md:flex space-x-4">
                    <a href="#accueil" class="nav-link" style="font-size: 14px;">Accueil</a>
                    <a href="#apropos" class="nav-link" style="font-size: 14px;">À propos</a>
                    <a href="#criteres" class="nav-link" style="font-size: 14px;">Critères</a>
                    <a href="#programme" class="nav-link" style="font-size: 14px;">Programme</a>
                    <a href="#recompenses" class="nav-link" style="font-size: 14px;">Récompenses</a>
                    <a href="#inscription" class="nav-link" style="font-size: 14px;">Inscription</a>
                </div>

                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="mobile-menu" class="hidden md:hidden mt-2 fixed left-0 right-0 bg-black z-40">
                <a href="#accueil" class="block py-2 px-4 text-white hover:bg-gray-800">Accueil</a>
                <a href="#apropos" class="block py-2 px-4 text-white hover:bg-gray-800">À propos</a>
                <a href="#criteres" class="block py-2 px-4 text-white hover:bg-gray-800">Critères</a>
                <a href="#programme" class="block py-2 px-4 text-white hover:bg-gray-800">Programme</a>
                <a href="#recompenses" class="block py-2 px-4 text-white hover:bg-gray-800">Récompenses</a>
                <a href="#inscription" class="block py-2 px-4 text-white hover:bg-gray-800">Inscription</a>
            </div>
        </div>
    </nav>

    <section id="accueil" class="h-screen flex items-center justify-center relative overflow-hidden">
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="assets/v3.mp4" type="video/mp4">
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-blue-600/80 to-purple-600/80 z-10"></div>
        <div class="text-center relative z-20 px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown" style="color: #59CD97">
                Innovation Days 2025
            </h1>
            <style>
                .cyber-theme-banner {
                    padding: 1.5rem;
                    width: 100%;
                }
                
                .cyber-theme-text {
                    font-family: 'Arial', sans-serif;
                    font-weight: 800;
                    color: white;
                    font-style: italic;
                    letter-spacing: 0.05em;
                    line-height: 1.2;
                    text-transform: uppercase;
                }

                /* Ajout des animations */
                @keyframes fadeIn {
                    from { opacity: 0; }
                    to { opacity: 1; }
                }

                @keyframes slideInUp {
                    from {
                        transform: translateY(50px);
                        opacity: 0;
                    }
                    to {
                        transform: translateY(0);
                        opacity: 1;
                    }
                }

                @keyframes pulse {
                    0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(89, 205, 151, 0.7); }
                    70% { transform: scale(1.05); box-shadow: 0 0 0 10px rgba(89, 205, 151, 0); }
                    100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(89, 205, 151, 0); }
                }

                @keyframes float {
                    0% { transform: translateY(0px); }
                    50% { transform: translateY(-10px); }
                    100% { transform: translateY(0px); }
                }

                @keyframes glowing {
                    0% { box-shadow: 0 0 5px #59CD97; }
                    50% { box-shadow: 0 0 20px #59CD97; }
                    100% { box-shadow: 0 0 5px #59CD97; }
                }

                .animate-fadeIn {
                    animation: fadeIn 1.5s ease-out forwards;
                }

                .animate-slideInUp {
                    animation: slideInUp 1s ease-out forwards;
                }

                .animate-pulse-custom {
                    animation: pulse 2s infinite;
                }

                .animate-float {
                    animation: float 3s ease-in-out infinite;
                }

                .btn-inscription {
                    background-color: #ff0000;
                    color: white;
                    font-weight: bold;
                    padding: 0.75rem 1.5rem;
                    border-radius: 9999px;
                    transition: all 0.3s ease;
                    position: relative;
                    overflow: hidden;
                    display: flex;
                    align-items: center;
                    box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
                }

                .btn-inscription:hover {
                    background-color: #cc0000;
                    transform: scale(1.05);
                }

                .btn-inscription::before {
                    content: "";
                    position: absolute;
                    top: -50%;
                    left: -50%;
                    width: 200%;
                    height: 200%;
                    background: rgba(255, 255, 255, 0.2);
                    transform: rotate(45deg);
                    transition: all 0.5s;
                    opacity: 0;
                }

                .btn-inscription:hover::before {
                    animation: shine 1.5s;
                }

                @keyframes shine {
                    0% { opacity: 0; transform: translateX(-100%) rotate(45deg); }
                    100% { opacity: 0.7; transform: translateX(100%) rotate(45deg); }
                }

                .countdown-item {
                    background: rgba(255, 255, 255, 0.1);
                    border-radius: 10px;
                    padding: 1rem;
                    min-width: 80px;
                    backdrop-filter: blur(5px);
                    border: 1px solid rgba(255, 255, 255, 0.2);
                    transition: all 0.3s ease;
                }

                .countdown-item:hover {
                    transform: translateY(-5px);
                    background: rgba(255, 255, 255, 0.2);
                }

                .notification-badge {
                    position: absolute;
                    top: -10px;
                    right: -10px;
                    background-color: red;
                    color: white;
                    border-radius: 50%;
                    width: 20px;
                    height: 20px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 12px;
                    font-weight: bold;
                    box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.3);
                }

                @keyframes bounce {
                    0%, 100% { transform: translateY(0); }
                    50% { transform: translateY(-5px); }
                }
            </style>

            <div class="cyber-theme-banner animate-fadeIn" style="animation-delay: 0.5s; opacity: 0;">
                <div class="max-w-4xl mx-auto">
                    <h2 class="cyber-theme-text text-2xl sm:text-3xl md:text-4xl">
                        <div class="mb-1">THÈME</div>
                        <div class="mb-1">CYBERSÉCURITÉ :</div>
                        <div class="mb-1">RELEVER LE DÉFI DE LA SÉCURITÉ</div>
                        <div>NUMÉRIQUE AU GABON</div>
                    </h2>
                </div>
            </div>

            <p class="text-xl md:text-2xl mb-4 text-white animate-slideInUp" style="animation-delay: 0.8s; opacity: 0;">
                96 Heures pour Innover
            </p>
            <p class="text-lg md:text-xl mb-8 text-white animate-slideInUp" style="animation-delay: 1s; opacity: 0;">
                24-27 Mars 2025 • INPTIC
            </p>

            <div class="countdown-wrapper animate-fadeIn" style="animation-delay: 1.2s; opacity: 0;">
                <div class="flex justify-center gap-4 mb-12" id="countdown">
                    <div class="countdown-item animate-float" style="animation-delay: 0s">
                        <div class="text-4xl font-bold" id="days">00</div>
                        <div class="text-sm text-purple-200">Jours</div>
                    </div>
                    <div class="countdown-item animate-float" style="animation-delay: 0.2s">
                        <div class="text-4xl font-bold" id="hours">00</div>
                        <div class="text-sm text-purple-200">Heures</div>
                    </div>
                    <div class="countdown-item animate-float" style="animation-delay: 0.4s">
                        <div class="text-4xl font-bold" id="minutes">00</div>
                        <div class="text-sm text-purple-200">Minutes</div>
                    </div>
                    <div class="countdown-item animate-float" style="animation-delay: 0.6s">
                        <div class="text-4xl font-bold" id="seconds">00</div>
                        <div class="text-sm text-purple-200">Secondes</div>
                    </div>
                </div>
            </div>

            <div class="relative inline-block animate-slideInUp" style="animation-delay: 1.5s; opacity: 0;">
                <a href="#inscription" class="btn-inscription relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    Je m'inscris maintenant
                </a>
                <div class="notification-badge" style="background-color: #ff0000; top: -8px; right: -8px;">
                    <span>1</span>
                </div>
            </div>
        </div>
    </section>

<!-- Script pour les animations -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animation des éléments au chargement
        const animatedElements = document.querySelectorAll('[class*="animate-"]');
        animatedElements.forEach(element => {
            if (element.style.opacity === '0') {
                setTimeout(() => {
                    element.style.opacity = '1';
                }, parseFloat(element.style.animationDelay) * 1000);
            }
        });

        // Le code du compte à rebours a été retiré

        // Animation pour le bouton d'inscription lorsqu'il est en bas de page
        let lastScrollTop = 0;
        window.addEventListener('scroll', function() {
            let st = window.pageYOffset || document.documentElement.scrollTop;
            if (st > lastScrollTop && st > 300) {
                // Descente de page après 300px
                const floatingButton = document.createElement('div');
                floatingButton.className = 'fixed bottom-6 right-6 z-50 transform transition-transform hover:scale-110';
                floatingButton.innerHTML = `
                    <a href="#inscription" class="btn-inscription flex items-center shadow-lg">
                        <span>Inscrivez-vous</span>
                    </a>
                `;
                
                // Vérifier si le bouton n'existe pas déjà
                if (!document.querySelector('.fixed.bottom-6.right-6')) {
                    document.body.appendChild(floatingButton);
                    
                    // Animation d'apparition
                    floatingButton.style.animation = 'slideInUp 0.5s ease-out forwards';
                }
            } else if (st <= 300) {
                // Retour en haut de page
                const floatingButton = document.querySelector('.fixed.bottom-6.right-6');
                if (floatingButton) {
                    floatingButton.style.animation = 'slideInDown 0.5s ease-out forwards';
                    setTimeout(() => {
                        floatingButton.remove();
                    }, 500);
                }
            }
            lastScrollTop = st <= 0 ? 0 : st;
        }, false);

        // Effet de pop-up après quelques secondes
        setTimeout(() => {
            const popupContainer = document.createElement('div');
            popupContainer.className = 'fixed bottom-4 left-4 bg-white rounded-lg shadow-xl p-4 z-50 max-w-sm animate-fadeIn';
            popupContainer.innerHTML = `
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-green-100 rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Places limitées !</p>
                        <p class="mt-1 text-sm text-gray-500">Plus que quelques jours pour s'inscrire à l'Innovation Days 2025.</p>
                        <div class="mt-2">
                            <a href="#inscription" class="text-sm font-medium text-green-600 hover:text-green-500">S'inscrire maintenant</a>
                        </div>
                    </div>
                    <button type="button" class="ml-2 text-gray-400 hover:text-gray-500" id="closePopup">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            `;
            
            document.body.appendChild(popupContainer);
            
            document.getElementById('closePopup').addEventListener('click', function() {
                popupContainer.remove();
            });
            
            // Auto-fermeture après 10 secondes
            setTimeout(() => {
                if (document.body.contains(popupContainer)) {
                    popupContainer.classList.add('animate-fadeOut');
                    setTimeout(() => {
                        if (document.body.contains(popupContainer)) {
                            popupContainer.remove();
                        }
                    }, 1000);
                }
            }, 10000);
        }, 5000);
    });
</script>

    <!-- Section des partenaires -->
    <section id="collaborateurs-hero" class="fixed bottom-0 left-0 w-full bg-black bg-opacity-80 z-50 py-2 sm:py-3 md:py-4 transition-all duration-500 ease-in-out transform">
        <div class="container mx-auto overflow-hidden px-2 sm:px-4">
            <div class="logos-slide flex items-center animate-scroll">
                <!-- Premier ensemble de logos -->
                <div class="flex items-center justify-around min-w-full gap-8">

                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/logoinptic.png" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/s.jpg" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                         </div>
                    </div>

                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/drone.jpeg" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/s1.jpeg" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/arceplogo.png" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/th.jpg" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/logo-spin.png" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/gra.jpg" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/ax.jpg" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                </div>
                <!-- Deuxième ensemble de logos (copie pour le défilement infini) -->
                <div class="flex items-center justify-around min-w-full gap-8">
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/logoinptic.png" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/s.jpg" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/drone.jpeg" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/s1.jpeg" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/arceplogo.png" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/gra.jpg" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/th.jpg" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/logo-spin.png" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <div class="flex-shrink-0 px-4">
                        <div class="w-24 h-16 sm:w-28 sm:h-20 md:w-36 md:h-20">
                            <img src="assets/ax.jpg" alt="Logo Collaborateur" class="h-full w-auto object-contain hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* Mise à jour du style pour l'animation de défilement */
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-scroll {
            animation: scroll 30s linear infinite;
            /* Ralentissement de l'animation */
        }

        /* Ajustements responsifs */
        @media (max-width: 640px) {
            .animate-scroll {
                animation: scroll 20s linear infinite;
            }

            .logos-slide {
                gap: 4;
            }
        }

        /* Assurer que les logos ne se chevauchent pas */
        .logos-slide>div {
            flex-shrink: 0;
        }
    </style>

    <!-- Scipt pour l'integration du chatbot -->
    
    <script>
        (function() {
            const userId = "12345"; // Remplacez par un identifiant utilisateur unique ou dynamique

            // Appeler l'API PHP pour obtenir le token
            fetch(`generate_token.php?userId=${userId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.token) {
                        // Configurer le chatbot avec le token
                        window.chatbase = (...args) => {
                            if (!window.chatbase.q) {
                                window.chatbase.q = [];
                            }
                            window.chatbase.q.push(args);
                        };

                        window.chatbase("setToken", data.token);

                        // Charger le script Chatbase
                        const script = document.createElement("script");
                        script.src = "https://www.chatbase.co/embed.min.js";
                        script.id = "e4vVNflJvDOuEyl-JO6fg";
                        script.domain = "www.chatbase.co";
                        document.body.appendChild(script);
                    } else {
                        console.error("Échec de la récupération du token");
                    }
                })
                .catch(error => console.error("Erreur :", error));
        })();
    </script>

    <style>
        /* Style pour la barre de navigation */
        .nav-link {

            font-size: 1rem;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
            font-family: 'Montserrat', sans-serif;
        }

        @media (min-width: 768px) {
            .nav-link {
                font-size: 1.25rem;
            }
        }

        /* Style pour la barre des partenaires */
        #partenaires-hero {
            background-color: rgba(17, 17, 17, 0.8);
            position: fixed;
            top: 80px;
            left: 0;
            width: 100%;
            z-index: 30;
            overflow: hidden;
            padding: 10px 0;

        }

        /* Styles pour le défilement des partenaires */

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-scroll {
            animation: scroll 15s linear infinite;
        }

        #collaborateurs-hero {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        #collaborateurs-hero.hidden {
            opacity: 0;
            visibility: hidden;
            transform: translateY(100%);
        }

        /* Styles responsifs */
        @media (max-width: 640px) {
            .animate-scroll {
                animation: scroll 10s linear infinite;
            }
        }

        @media (max-width: 480px) {
            .animate-scroll {
                animation: scroll 8s linear infinite;
            }
        }

        /* Améliorations du compte à rebours */
        .countdown-item {
            width: 100px;
            /* Largeur fixe */
            height: 100px;
            /* Hauteur fixe - forme carrée */
            background-color: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(8px);
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0;
            /* Suppression du padding pour garder une taille exacte */
        }

        /* Ajustement de la taille du texte pour s'adapter aux carrés */
        .countdown-item .text-4xl {
            font-size: 2.5rem;
            line-height: 1;
        }

        .countdown-item .text-sm {
            font-size: 0.875rem;
            margin-top: 4px;
        }

        /* Styles responsifs */
        @media (max-width: 640px) {
            .countdown-item {
                width: 80px;
                /* Légèrement plus petit sur mobile */
                height: 80px;
            }

            .countdown-item .text-4xl {
                font-size: 2rem;
            }

            .countdown-item .text-sm {
                font-size: 0.75rem;
            }

            #countdown {
                gap: 0.5rem;
                /* Espacement réduit sur mobile */
            }

            .mx-12 {
                margin-left: 1rem;
                margin-right: 1rem;
            }
        }

        /* Ajustements responsifs supplémentaires */
        @media (max-width: 767px) {
            .countdown-item {
                padding: 1rem;
                min-width: 60px;
            }

            #countdown {
                gap: 4px !important;
            }

            .countdown-item .text-sm {
                font-size: 0.75rem;
            }
        }

        /* Très petits écrans */
        @media (max-width: 360px) {
            .countdown-item {
                padding: 0.5rem;
                min-width: 50px;
            }

            .countdown-item .text-4xl {
                font-size: 1.25rem;
            }
        }

        /* Ajustement container pour éviter le dépassement */
        .container {
            overflow: hidden;
            padding-left: 10px;
            padding-right: 10px;
        }

        /* Ajout des styles de police */
        body {
            font-family: 'Poppins', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
        }

        /* Pour le compte à rebours */
        .countdown-item {
            font-family: 'Montserrat', sans-serif;
        }

        /* Pour les boutons */
        button,
        .inline-block {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuLinks = mobileMenu.querySelectorAll('a');

            // Toggle menu
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Fermer le menu quand un lien est cliqué
            menuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });

            // Fermer le menu si on clique en dehors
            document.addEventListener('click', (event) => {
                if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Script pour la section des partenaires
        let lastScrollTop = 0;
        let isScrolling;
        const partnersSection = document.getElementById('collaborateurs-hero');

        window.addEventListener('scroll', function() {
            clearTimeout(isScrolling);

            if (!partnersSection.classList.contains('hidden')) {
                partnersSection.classList.add('hidden');
            }

            isScrolling = setTimeout(function() {
                partnersSection.classList.remove('hidden');
            }, 100);
        });
    </script>

    <section id="apropos" class="py-20 px-6 ">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12 text-[#59CD97]">À propos des Journées de l'Innovation</h2>
            <p class="text-white mb-12 text-lg text-center max-w-3xl mx-auto text-justify">
                Les Journées de l'Innovation sont une initiative visant à promouvoir l'innovation technologique et à encourager
                la créativité des amoureux du digital. Cet événement rassemble les talents pour créer des solutions innovantes.
            </p>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Bloc 1 -->
                <div class="bg-gray-600 p-8 rounded-xl hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300">
                    <div class="flex justify-center mb-6">
                        <svg class="w-16 h-16 text-[#028090]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center text-[#CCFF00] mb-4">Durée</h3>
                    <div class="text-white text-center">
                        <p class="mb-2">24 - 27 Mars, 2025</p>
                        <p>8:00 - 17:00 GMT</p>
                    </div>
                </div>
                <!-- Bloc avec uniquement la carte GPS -->
                <div class="w-full h-96">
                    <iframe
                        class="w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1234567890123!2d9.4306484!3d0.419177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x107f3b133a97a415%3A0x992ce03950cc7c1b!2sInptic%20Gabon!5e0!3m2!1sfr!2sga!4v1234567890123!5m2!1sfr!2sga"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- Bloc 3 -->
                <div class="bg-gray-600 p-8 rounded-xl hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300">
                    <div class="flex justify-center mb-6">
                        <svg class="w-16 h-16 text-[#028090]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-center text-[#CCFF00] mb-4">Équipes</h3>
                    <p class="text-white text-center">Formez des équipes de 4 personnes aux compétences complémentaires</p>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Design amélioré pour les blocs */
        .hover\:scale-105:hover {
            transform: scale(1.05);
            /* Ajoute une légère agrandissement au survol */
        }

        .hover\:shadow-xl:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            /* Ombre plus marquée pour le survol */
        }

        /* Design de l'icône */
        svg {
            transition: transform 0.3s ease;
        }

        /* Transformation des icônes au survol */
        .hover\:scale-105:hover svg {
            transform: scale(1.2);
            /* Agrandissement des icônes au survol */
        }

        /* Améliorer la mise en forme des blocs */
        .bg-gray-800 {
            background-color: #2d2d2d;
            /* Un gris un peu plus foncé pour plus de contraste */
        }

        .p-8 {
            padding: 2rem;
            /* Espace plus large autour du contenu */
        }

        .rounded-xl {
            border-radius: 1rem;
            /* Coins arrondis plus visibles */
        }
    </style>

    <!-- Critères Section -->
    <section id="criteres" class="py-20 px-6 bg-gray-900">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12 text-[#CCFF00]">CRITÈRES D'ÉVALUATION</h2>

            <div class="grid md:grid-cols-5 gap-6">
                <!-- Innovation - 30% -->
                <div class="text-center">
                    <div class="relative w-32 h-32 mx-auto mb-4">
                        <svg class="w-full h-full">
                            <circle cx="64" cy="64" r="60" fill="transparent" stroke="#FFFFFF" stroke-width="8" />
                            <circle cx="64" cy="64" r="60" fill="transparent" stroke="rgb(202, 45, 24)" stroke-width="8"
                                stroke-dasharray="377"
                                stroke-dashoffset="377"
                                class="progress-ring" />
                        </svg>
                        <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-2xl font-bold text-[#CCFF00]">
                            30%
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase">Innovation</h3>
                </div>

                <!-- Utilité - 25% -->
                <div class="text-center">
                    <div class="relative w-32 h-32 mx-auto mb-4">
                        <svg class="w-full h-full">
                            <circle cx="64" cy="64" r="60" fill="transparent" stroke="#FFFFFF" stroke-width="8" />
                            <circle cx="64" cy="64" r="60" fill="transparent" stroke="rgb(202, 45, 24)" stroke-width="8"
                                stroke-dasharray="377"
                                stroke-dashoffset="377"
                                class="progress-ring" />
                        </svg>
                        <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-2xl font-bold text-[#CCFF00]">
                            25%
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase">Utilité</h3>
                </div>

                <!-- Présentation - 20% -->
                <div class="text-center">
                    <div class="relative w-32 h-32 mx-auto mb-4">
                        <svg class="w-full h-full">
                            <circle cx="64" cy="64" r="60" fill="transparent" stroke="#FFFFFF" stroke-width="8" />
                            <circle cx="64" cy="64" r="60" fill="transparent" stroke="rgb(202, 45, 24)" stroke-width="8"
                                stroke-dasharray="377"
                                stroke-dashoffset="377"
                                class="progress-ring" />
                        </svg>
                        <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-2xl font-bold text-[#CCFF00]">
                            20%
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase">Présentation</h3>
                </div>

                <!-- Collaboration - 15% -->
                <div class="text-center">
                    <div class="relative w-32 h-32 mx-auto mb-4">
                        <svg class="w-full h-full">
                            <circle cx="64" cy="64" r="60" fill="transparent" stroke="#FFFFFF" stroke-width="8" />
                            <circle cx="64" cy="64" r="60" fill="transparent" stroke="rgb(202, 45, 24)" stroke-width="8"
                                stroke-dasharray="377"
                                stroke-dashoffset="377"
                                class="progress-ring" />
                        </svg>
                        <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-2xl font-bold text-[#CCFF00]">
                            15%
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase">Collaboration</h3>
                </div>

                <!-- Prototype - 10% -->
                <div class="text-center">
                    <div class="relative w-32 h-32 mx-auto mb-4">
                        <svg class="w-full h-full">
                            <circle cx="64" cy="64" r="60" fill="transparent" stroke="#FFFFFF" stroke-width="8" />
                            <circle cx="64" cy="64" r="60" fill="transparent" stroke="rgb(202, 45, 24)" stroke-width="8"
                                stroke-dasharray="377"
                                stroke-dashoffset="377"
                                class="progress-ring" />
                        </svg>
                        <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-2xl font-bold text-[#CCFF00]">
                            10%
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase">Prototype</h3>
                </div>
            </div>
        </div>

        <style>
            .progress-ring {
                transform: rotate(-90deg);
                transform-origin: 50% 50%;
                transition: stroke-dashoffset 1.5s ease-out;
            }

            .progress-ring.animate {
                animation: fillProgress 1.5s ease-out forwards;
            }

            @keyframes fillProgress {
                from {
                    stroke-dashoffset: 377;
                }

                to {
                    stroke-dashoffset: var(--final-offset);
                }
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize Intersection Observer to detect when the section is in view
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const circles = entry.target.querySelectorAll('.progress-ring');
                            circles.forEach(circle => {
                                const percent = parseFloat(circle.parentElement.nextElementSibling.textContent);
                                const circumference = 2 * Math.PI * 60; // 60 est le rayon
                                const offset = circumference - (percent / 100) * circumference;
                                circle.style.setProperty('--final-offset', offset);
                                circle.classList.add('animate');
                            });
                            observer.unobserve(entry.target); // Stop observing once section is in view
                        }
                    });
                }, {
                    threshold: 0.5
                }); // When 50% of the section is visible

                observer.observe(document.querySelector('#criteres'));
            });
        </script>
    </section>







<!-- Récompenses Section -->
<section id="recompenses" class="py-20 px-6 bg-[#78cad2]">
    <div class="container mx-auto">
        <h3 class="text-4xl font-extrabold text-white mb-16 text-center" data-aos="fade-up">Récompenses</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

            <div class="bg-gray-600 p-8 rounded-lg shadow-lg hover:bg-gray-500 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-2xl font-semibold text-[#78cad2] mb-4 text-center">Formation & Mentorat</h3>
                <ul class="space-y-3 text-gray-300 text-left">
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">✨</span>
                        Programme d'incubation
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">✨</span>
                        Formations gratuites
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">✨</span>
                        Accès aux conférences
                    </li>
                </ul>
            </div>
            <div class="bg-gray-600 p-6 rounded-lg shadow-lg hover:bg-gray-500 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl font-semibold text-[#78cad2] mb-4 text-center">Opportunités</h3>
                <ul class="space-y-3 text-gray-300 text-left">
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">📚</span>
                        Abonnements spécialisés
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">🚀</span>
                        Accompagnement post-hackathon
                    </li>
                </ul>
            </div>
            <div class="bg-gray-600 p-8 rounded-lg shadow-lg hover:bg-gray-500 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-2xl font-semibold text-[#78cad2] mb-4 text-center">Cadeaux Tech</h3>
                <ul class="space-y-3 text-gray-300 text-left">
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">💻</span>
                        Ordinateurs
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">📱</span>
                        Tablettes
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">⌚</span>
                        Montres connectées
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Informations pratiques -->
<section id="infos" class="py-20 px-6 bg-[#78cad2]">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12 text-white" data-aos="fade-up">Informations pratiques</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="bg-gray-600 p-6 rounded-lg" data-aos="fade-right">
                <h3 class="text-xl font-bold mb-4 text-center">Lieu et horaires</h3>
                <ul class="space-y-3 text-gray-300 text-left">
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">📍</span>
                        INPTIC (Feu rouge Gros bouquet)
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">📅</span>
                        24-27 Mars 2024
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">⏰</span>
                        8h00 à 17h00
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">🍽️</span>
                        Restauration fournie
                    </li>
                </ul>
            </div>
            <div class="bg-gray-600 p-6 rounded-lg" data-aos="fade-left">
                <h3 class="text-xl font-bold mb-4 text-center">Processus de soumission</h3>
                <ul class="space-y-3 text-gray-300 text-left">
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">✅</span>
                        Prototype fonctionnel
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">📊</span>
                        Présentation détaillée
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">📝</span>
                        Documentation technique
                    </li>
                    <li class="flex items-center">
                        <span class="mr-3 text-[#78cad2]">💡</span>
                        Spécifications et diagrammes
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>











    <!-- Section Programme -->
    <section id="programme" class="py-12 sm:py-16 md:py-20 px-4 sm:px-6 bg-[#0A0F1C] relative overflow-hidden">
        <!-- Titre Programme avec effet -->
        <div class="container mx-auto relative z-10">
            <div class="relative mb-16">
                <!-- Titre en arrière-plan -->
                <div class="absolute top-0 left-0 w-full text-center opacity-10 select-none pointer-events-none">
                    <span class="text-[40px] sm:text-[60px] md:text-[80px] lg:text-[100px] font-bold text-white uppercase tracking-widest">

                    </span>
                </div>

                <!-- Titre principal -->
                <h2 class="relative z-10 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-center text-white uppercase tracking-[0.2em]">
                    Programme
                    <div class="w-16 sm:w-20 md:w-24 h-1 bg-[#78cad2] mx-auto mt-4 sm:mt-6"></div>
                </h2>
            </div>

            <!-- Timeline des 4 jours -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
    <!-- Jour 1 -->
    <div class="timeline-card group p-4 sm:p-6 md:p-8">
        <div class="flex items-center justify-between mb-4 sm:mb-6">
            <h3 class="text-xs sm:text-lg md:text-xl font-bold text-white uppercase tracking-wide">Ouverture</h3>
            <span class="text-xs sm:text-sm font-medium text-[#78cad2]">24 Mars</span>
        </div>
        <ul class="space-y-4 sm:space-y-6 md:space-y-8">
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">08:00 - 09:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Accueil et enregistrement</h4>
                <p class="text-sm sm:text-base text-gray-400">Vérification des équipes</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">09:00 - 09:30</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Installation</h4>
                <p class="text-sm sm:text-base text-gray-400">Installation des équipes dans la salle dédiée</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">09:30 - 10:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Discours d'ouverture</h4>
                <p class="text-sm sm:text-base text-gray-400">Par le Directeur Général de l'INPTIC</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">10:00 - 10:30</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Explication du programme</h4>
                <p class="text-sm sm:text-base text-gray-400">Règles et critères d'évaluation</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">10:30 - 13:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Début des travaux</h4>
                <p class="text-sm sm:text-base text-gray-400">Mentorat et coaching technique</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">13:00 - 14:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Pause déjeuner</h4>
                <p class="text-sm sm:text-base text-gray-400">Restauration</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">14:00 - 17:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Poursuite des travaux</h4>
                <p class="text-sm sm:text-base text-gray-400">Accompagnement des mentors</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">17:00 - 18:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Session Q&R</h4>
                <p class="text-sm sm:text-base text-gray-400">Questions-Réponses avec les mentors</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">18:00 - 20:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Travail libre</h4>
                <p class="text-sm sm:text-base text-gray-400">Fin officielle de la journée</p>
            </li>
        </ul>
    </div>

    <!-- Jour 2 -->
    <div class="timeline-card group p-4 sm:p-6 md:p-8">
        <div class="flex items-center justify-between mb-4 sm:mb-6">
            <h3 class="text-base sm:text-lg md:text-xl font-bold text-white uppercase tracking-wide">Première sélection</h3>
            <span class="text-xs sm:text-sm font-medium text-[#78cad2]">25 Mars</span>
        </div>
        <ul class="space-y-4 sm:space-y-6 md:space-y-8">
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">08:00 - 09:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Point d'étape</h4>
                <p class="text-sm sm:text-base text-gray-400">Suivi de l'avancement des projets</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">09:00 - 11:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Première sélection</h4>
                <p class="text-sm sm:text-base text-gray-400">Élimination de 60% des équipes</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">11:00 - 13:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Coaching approfondi</h4>
                <p class="text-sm sm:text-base text-gray-400">Conseils personnalisés aux équipes retenues</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">13:00 - 14:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Pause déjeuner</h4>
                <p class="text-sm sm:text-base text-gray-400">Restauration</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">14:00 - 16:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Ateliers pratiques</h4>
                <p class="text-sm sm:text-base text-gray-400">Amélioration des projets avec les mentors</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">16:00 - 17:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Session Q&R</h4>
                <p class="text-sm sm:text-base text-gray-400">Questions-Réponses avec le jury</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">17:00 - 18:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Travail libre</h4>
                <p class="text-sm sm:text-base text-gray-400">Fin officielle de la journée</p>
            </li>
        </ul>
    </div>

    <!-- Jour 3 -->
    <div class="timeline-card group p-4 sm:p-6 md:p-8">
        <div class="flex items-center justify-between mb-4 sm:mb-6">
            <h3 class="text-base sm:text-lg md:text-xl font-bold text-white uppercase tracking-wide">Demi-finale</h3>
            <span class="text-xs sm:text-sm font-medium text-[#78cad2]">26 Mars</span>
        </div>
        <ul class="space-y-4 sm:space-y-6 md:space-y-8">
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">08:00 - 09:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Accueil</h4>
                <p class="text-sm sm:text-base text-gray-400">Enregistrement des participants</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">09:00 - 11:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Deuxième sélection</h4>
                <p class="text-sm sm:text-base text-gray-400">Élimination de 30% des équipes restantes</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">11:00 - 13:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Coaching intensif</h4>
                <p class="text-sm sm:text-base text-gray-400">Sessions de feedback détaillées</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">13:00 - 14:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Pause déjeuner</h4>
                <p class="text-sm sm:text-base text-gray-400">Restauration</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">14:00 - 16:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Finalisation</h4>
                <p class="text-sm sm:text-base text-gray-400">Préparation aux présentations finales</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">16:00 - 17:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Session Q&R</h4>
                <p class="text-sm sm:text-base text-gray-400">Questions-Réponses avec le jury</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">17:00 - 18:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Préparation finale</h4>
                <p class="text-sm sm:text-base text-gray-400">Fin officielle de la journée</p>
            </li>
        </ul>
    </div>

    <!-- Jour 4 -->
    <div class="timeline-card group p-4 sm:p-6 md:p-8">
        <div class="flex items-center justify-between mb-4 sm:mb-6">
            <h3 class="text-base sm:text-lg md:text-xl font-bold text-white uppercase tracking-wide">Finale</h3>
            <span class="text-xs sm:text-sm font-medium text-[#78cad2]">27 Mars</span>
        </div>
        <ul class="space-y-4 sm:space-y-6 md:space-y-8">
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">08:00 - 09:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Accueil</h4>
                <p class="text-sm sm:text-base text-gray-400">Installation des équipes finalistes</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">09:00 - 12:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Présentation finale</h4>
                <p class="text-sm sm:text-base text-gray-400">Projets devant le jury et démonstrations</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">12:00 - 13:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Délibération</h4>
                <p class="text-sm sm:text-base text-gray-400">Sélection des équipes gagnantes</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">13:00 - 14:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Pause déjeuner</h4>
                <p class="text-sm sm:text-base text-gray-400">Restauration</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">14:00 - 15:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Remise des prix</h4>
                <p class="text-sm sm:text-base text-gray-400">Annonce des résultats et cérémonie</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">15:00 - 16:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Discours de clôture</h4>
                <p class="text-sm sm:text-base text-gray-400">Remerciements aux participants et partenaires</p>
            </li>
            <li class="timeline-item pl-4 sm:pl-6">
                <div class="flex items-center mb-2 sm:mb-3">
                    <span class="text-base sm:text-lg font-mono text-[#78cad2]">16:00 - 17:00</span>
                </div>
                <h4 class="text-base sm:text-lg md:text-xl font-bold mb-1 sm:mb-2 text-white group-hover:text-[#78cad2] transition-colors">Networking</h4>
                <p class="text-sm sm:text-base text-gray-400">Échanges entre participants, mentors et jury</p>
            </li>
        </ul>
    </div>
</div>

        <style>
            /* Styles de base pour la timeline-card */
            .timeline-card {
                position: relative;
                background: linear-gradient(145deg, rgba(17, 24, 39, 0.6), rgba(10, 15, 28, 0.8));
                border-radius: 0.75rem;
                transition: all 0.4s ease;
                border-left: 4px solid transparent;
                backdrop-filter: blur(10px);
                height: 100%;
            }

            /* Effet de survol amélioré */
            .timeline-card:hover {
                transform: translateY(-5px);
                border-left: 4px solid #78cad2;
                background: linear-gradient(145deg, rgba(17, 24, 39, 0.8), rgba(10, 15, 28, 0.95));
            }

            /* Style pour les items de la timeline */
            .timeline-item {
                position: relative;
                opacity: 1 !important;
                /* Forcer l'opacité à 1 pour éviter les effets de fade */
                transform: none !important;
                /* Désactiver les transformations */
            }

            .timeline-item::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0.5rem;
                width: 2px;
                height: calc(100% + 1rem);
                background: linear-gradient(to bottom, #78cad2 0%, transparent 100%);
                opacity: 0.2;
            }

            .timeline-item:last-child::before {
                display: none;
            }

            /* Adaptation du texte pour les petits écrans */
            @media (max-width: 480px) {
                .timeline-card h3 {
                    font-size: 1rem;
                }

                .timeline-card h4 {
                    font-size: 0.875rem;
                }

                .timeline-card p {
                    font-size: 0.75rem;
                }
            }

            /* Ajustements pour les tablettes */
            @media (min-width: 768px) and (max-width: 1024px) {
                .grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            /* Ajustements pour les grands écrans */
            @media (min-width: 1280px) {
                .timeline-card {
                    min-height: 450px;
                }
            }

            /* Animation fluide pour les transitions */
            .timeline-card {
                transition: all 0.3s ease-in-out;
            }

            /* Désactiver les animations AOS */
            [data-aos] {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        </style>
    </section>

    <!-- Section Formulaire avec nouveau style -->
    <?php include 'inscription-form/form.php'; ?>

    <!-- Section des questions frequentes -->


    <!-- Section des membres de l'inptic -->
    <?php include 'sections/members.php'; ?>



    <footer class="py-10 bg-black text-white">
        <div class="container mx-auto px-4">
            <!-- Section Logo à gauche et Liens sociaux à droite -->
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center justify-center mb-6 md:mb-0">
                    <img src="assets/r.jpg" alt="Logo" class="w-40 h-auto">
                </div>

                <!-- Liens sociaux -->
                <div class="flex space-x-6 justify-center md:justify-end">
                    <a href="https://www.facebook.com/share/19yadQcZ1c/" target="_blank" class="text-white hover:text-[#CCFF00] transition-colors duration-300 flex items-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.675 0H1.325C0.593 0 0 0.593 0 1.325v21.351C0 23.407 0.593 24 1.325 24h11.495v-9.294H9.837v-3.622h2.983V8.413c0-2.951 1.803-4.557 4.436-4.557 1.262 0 2.345.093 2.66.135v3.084h-1.828c-1.433 0-1.711.681-1.711 1.679v2.201h3.422l-.446 3.622h-2.976V24h5.833c.729 0 1.325-.593 1.325-1.325V1.325C24 .593 23.407 0 22.675 0z" />
                        </svg>

                        <span class="ml-2 hidden sm:inline">Facebook</span>
                    </a>
                    <a href="https://youtube.com/@inpticgabonofficiel?si=b850Blht_rC328d7" target="_blank" class="text-white hover:text-[#CCFF00] transition-colors duration-300 flex items-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.5,6.2A3,3,0,0,0,21.4,4c-2-.2-6.2-.3-10.4-.3S2.6,3.8.6,4A3,3,0,0,0-1.5,6.2,31.8,31.8,0,0,0-2,12a31.8,31.8,0,0,0,.5,5.8A3,3,0,0,0,.6,20c2,.2,6.2.3,10.4.3s8.4-.1,10.4-.3a3,3,0,0,0,2.1-2.2A31.8,31.8,0,0,0,24,12,31.8,31.8,0,0,0,23.5,6.2ZM9.5,15.8V8.2l6.7,3.8Z" />
                        </svg>
                        <span class="ml-2 hidden sm:inline">YouTube</span>
                    </a>
                    <a href="https://www.tiktok.com/@inptic.gabon.offi?_t=ZN-8tze7hcWOCE&_r=1" target="_blank" class="text-white hover:text-[#CCFF00] transition-colors duration-300 flex items-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59,6.69a4.83,4.83,0,0,1-3.77-4.25V2h-3.45V13.67a2.89,2.89,0,0,1-5.2,1.74,2.89,2.89,0,0,1,2.31-4.64,2.93,2.93,0,0,1,.88.13V7.42a6.84,6.84,0,0,0-1-.05A6.33,6.33,0,0,0,5,20.1a6.34,6.34,0,0,0,10.86-4.43v-7a8.16,8.16,0,0,0,4.77,1.52v-3.4a4.85,4.85,0,0,1-1-.1Z" />
                        </svg>
                        <span class="ml-2 hidden sm:inline">TikTok</span>
                    </a>
                </div>
            </div>

            <!-- Section Copyright -->
            <div class="border-t border-gray-800 mt-8 pt-4 text-center">
                <p class="text-gray-400 text-sm">
                    &copy; 2025 Innovation Days - INPTIC. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>

    <style>
        /* Contenu de la section hero */
        #accueil .text-center {
            margin-top: 150px;
            /* Ajout d'une marge supérieure pour descendre les éléments */
        }
    </style>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        function updateCountdown() {
            // Date actuelle
            const now = new Date();

            // Date de l'événement (24 Mars 2025 à 18h00)+2
            const eventDate = new Date('2025-03-26T18:00:00');

            // Calcul de la différence en millisecondes
            const timeLeft = eventDate - now;

            if (timeLeft > 0) {
                // Conversion en jours, heures, minutes, secondes
                const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                // Affichage
                document.getElementById('days').textContent = String(days).padStart(2, '0');
                document.getElementById('hours').textContent = String(hours).padStart(2, '0');
                document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
                document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
            }
        }

        // Mise à jour toutes les secondes
        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>

    <!-- Ajoutez ces animations GSAP -->
    <script>
        // Animation du programme
        gsap.from("#programme h2", {
            scrollTrigger: {
                trigger: "#programme",
                start: "top 80%",
            },
            y: 50,
            duration: 1
        });

        // Animation des jours
        gsap.from(".timeline-day", {
            scrollTrigger: {
                trigger: "#programme",
                start: "top 60%",
            },
            y: 100,
            duration: 1,
            stagger: 0.3
        });

        // Animation des items de la timeline
        gsap.from(".timeline-item", {
            scrollTrigger: {
                trigger: "#programme",
                start: "top 40%",
            },
            x: -50,
            duration: 0.8,
            stagger: 0.1
        });

        // Animation hover sur les items, en excluant la section #apropo
        document.querySelectorAll('.timeline-item').forEach(item => {
            if (!item.closest('#apropo')) { // Vérifie que l'élément n'est pas dans #apropo
                item.addEventListener('mouseenter', () => {
                    gsap.to(item, {
                        scale: 1.02,
                        duration: 0.3,
                        borderRadius: '8px'
                    });
                });

                item.addEventListener('mouseleave', () => {
                    gsap.to(item, {
                        scale: 1,
                        duration: 0.3,
                        borderRadius: '0px'
                    });
                });
            }
        });

        // Animation hover sur les éléments généraux, en excluant la section #apropo
        const hoverElements = {
            '.bg-gray-800': {
                scale: 1.02,
                boxShadow: '0 10px 30px rgba(0,0,0,0.2)',
                duration: 0.3,
                color: '#FFFFFF'
            },
            '.countdown-item': {
                scale: 1.1,
                duration: 0.3
            },
            '.neon-text': {
                scale: 1.05,
                duration: 0.2
            },
            'button': {
                scale: 1.05,
                duration: 0.3
            },
            '.timeline-item': {
                x: 10,
                duration: 0.2
            },
            '#criteres .hover-scale': {
                scale: 1.1,
                y: -10,
                boxShadow: '0 15px 30px rgba(0,0,0,0.3)',
                duration: 0.3
            },
            '#recompenses .hover-scale': {
                scale: 1.05,
                rotateY: 10,
                duration: 0.4
            },
            '.nav-link': {
                y: -3,
                duration: 0.2
            }
        };

        Object.entries(hoverElements).forEach(([selector, animation]) => {
            document.querySelectorAll(selector).forEach(element => {
                if (!element.closest('#apropo')) { // Vérifie que l'élément n'est pas dans #apropo
                    element.addEventListener('mouseenter', () => {
                        gsap.to(element, {
                            ...animation,
                            ease: 'power2.out',
                            color: '#FFFFFF'
                        });
                    });

                    element.addEventListener('mouseleave', () => {
                        gsap.to(element, {
                            scale: 1,
                            x: 0,
                            y: 0,
                            boxShadow: 'none',
                            backgroundColor: 'transparent',
                            textShadow: 'none',
                            brightness: 1,
                            rotateY: 0,
                            borderColor: 'initial',
                            color: '#FFFFFF',
                            duration: 0.2,
                            ease: 'power2.inOut'
                        });
                    });
                }
            });
        });

        // Animation spéciale pour les cartes de critères
        gsap.utils.toArray('#criteres .hover-scale').forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card.querySelector('.text-3xl'), {
                    scale: 1.2,
                    duration: 0.3
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card.querySelector('.text-3xl'), {
                    scale: 1,
                    duration: 0.3
                });
            });
        });

        // Animation pour les cartes de récompenses
        document.querySelectorAll('#recompenses .hover-scale').forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card.querySelectorAll('li'), {
                    x: 10,
                    stagger: 0.1,
                    duration: 0.3
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card.querySelectorAll('li'), {
                    x: 0,
                    stagger: 0.1,
                    duration: 0.3
                });
            });
        });

        // Animation pour le formulaire d'inscription
        document.querySelectorAll('#inscription input, #inscription select').forEach(input => {
            if (!input.closest('#apropo')) { // Vérifie que l'élément n'est pas dans #apropo
                input.addEventListener('focus', () => {
                    gsap.to(input, {
                        scale: 1.02,
                        boxShadow: '0 0 10px rgba(0, 0, 0, 0.3)',
                        duration: 0.3
                    });
                });

                input.addEventListener('blur', () => {
                    gsap.to(input, {
                        scale: 1,
                        boxShadow: 'none',
                        duration: 0.3
                    });
                });
            }
        });
    </script>

    <script>
        document.querySelectorAll('.faq-button').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                const icon = button.querySelector('svg');
                const isOpen = !answer.classList.contains('hidden');

                // Ferme toutes les autres réponses
                document.querySelectorAll('.faq-answer').forEach(otherAnswer => {
                    if (otherAnswer !== answer && !otherAnswer.classList.contains('hidden')) {
                        otherAnswer.classList.add('hidden');
                        otherAnswer.previousElementSibling.querySelector('svg').style.transform = 'rotate(0deg)';
                    }
                });

                // Toggle la réponse actuelle
                answer.classList.toggle('hidden');
                icon.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';

                // Fait défiler jusqu'à la question si elle est ouverte
                if (!isOpen) {
                    button.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            });
        });
    </script>

    <!-- Ajoutez ce script juste avant la fermeture de la balise body -->
    <script>
        // Gestion du menu mobile
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOpen = document.querySelector('.menu-open');
        const menuClose = document.querySelector('.menu-close');

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('active');
            menuOpen.classList.toggle('hidden');
            menuClose.classList.toggle('hidden');
        });

        // Fermer le menu mobile lors du clic sur un lien
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('active');
                menuOpen.classList.remove('hidden');
                menuClose.classList.add('hidden');
            });
        });

        // Fermer le menu mobile lors du redimensionnement de la fenêtre
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) { // 1024px est le breakpoint lg
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('active');
                menuOpen.classList.remove('hidden');
                menuClose.classList.add('hidden');
            }
        });
    </script>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Suppression du code de l'animation des titres au chargement
        function startMainAnimations() {
            // Les autres animations restent inchangées
            // ... existing animation code ...
        }

        // Démarrage immédiat des animations principales
        startMainAnimations();

        // Le reste du code d'animation précédent reste inchangé
        // ... existing animation code ...
    </script>

    <script>
        // Animation spécifique pour la section FAQ
        const faqItems = gsap.utils.toArray('.faq-item');
        faqItems.forEach(item => {
            const button = item.querySelector('.faq-button');
            const answer = item.querySelector('.faq-answer');
            const icon = button.querySelector('svg');

            // Style initial avec fond clair pour la visibilité
            gsap.set(item, {
                backgroundColor: '#1E293B', // Fond bleu foncé
                borderRadius: '8px',
                margin: '8px 0'
            });

            gsap.set(button, {
                color: '#FFFFFF' // Texte blanc pour le contraste
            });

            gsap.set(answer, {
                height: 0,
                opacity: 0,
                display: 'none',
                backgroundColor: '#0F172A' // Fond légèrement plus foncé pour la réponse
            });

            button.addEventListener('click', () => {
                const isOpen = answer.style.display !== 'none';

                if (!isOpen) {
                    // Ouvrir la réponse
                    answer.style.display = 'block';
                    gsap.to(answer, {
                        height: 'auto',
                        opacity: 1,
                        duration: 0.5,
                        ease: 'power2.out'
                    });

                    // Rotation de l'icône
                    gsap.to(icon, {
                        rotation: 180,
                        duration: 0.3,
                        ease: 'power2.out'
                    });

                    // Animation du bouton
                    gsap.to(button, {
                        backgroundColor: '#0A4DA6',
                        color: '#FFFFFF',
                        duration: 0.3
                    });
                } else {
                    // Fermer la réponse
                    gsap.to(answer, {
                        height: 0,
                        opacity: 0,
                        duration: 0.5,
                        ease: 'power2.in',
                        onComplete: () => {
                            answer.style.display = 'none';
                        }
                    });

                    // Rotation inverse de l'icône
                    gsap.to(icon, {
                        rotation: 0,
                        duration: 0.3,
                        ease: 'power2.in'
                    });

                    // Retour à l'état initial du bouton
                    gsap.to(button, {
                        backgroundColor: '#1E293B',
                        color: '#FFFFFF',
                        duration: 0.3
                    });
                }
            });

            // Animation au survol
            button.addEventListener('mouseenter', () => {
                if (answer.style.display === 'none') {
                    gsap.to(button, {
                        backgroundColor: '#2D3748',
                        scale: 1.02,
                        duration: 0.3
                    });
                }
            });

            button.addEventListener('mouseleave', () => {
                if (answer.style.display === 'none') {
                    gsap.to(button, {
                        backgroundColor: '#1E293B',
                        scale: 1,
                        duration: 0.3
                    });
                }
            });
        });
    </script>






</body>

</html>