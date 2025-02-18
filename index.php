<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovation Days 2025 - INPTIC</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>



</head>

<body class="bg-gray-900 text-white">
    <!-- Barre de réseaux sociaux -->
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
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-black" style="top: 40px;">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Logo et titre -->
                <div class="flex items-center space-x-2 sm:space-x-4">
                    <img src="assets/r.jpg" alt="Logo INPTIC" class="h-7 sm:h-9 md:h-8 w-auto">
                    <div class="text-sm sm:text-xl md:text-2xl font-bold truncate">Innovation Days 2025</div>
                </div>

                <!-- Menu hamburger pour mobile et tablette -->
                <button id="menu-toggle" class="lg:hidden text-white focus:outline-none p-2 hover:bg-gray-800 rounded-lg transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path class="menu-open block" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path class="menu-close hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Menu de navigation desktop -->
                <div class="hidden lg:flex space-x-6 xl:space-x-8">
                    <a href="#accueil" class="nav-link">Accueil</a>
                    <a href="#apropos" class="nav-link">À propos</a>
                    <a href="#criteres" class="nav-link">Critères</a>
                    <a href="#programme" class="nav-link">Programme</a>
                    <a href="#recompenses" class="nav-link">Récompenses</a>
                    <a href="#inscription" class="nav-link">Inscription</a>
                </div>
            </div>

            <!-- Menu mobile -->
            <div id="mobile-menu" class="lg:hidden hidden">
                <div class="flex flex-col space-y-2 mt-4 bg-black/95 backdrop-blur-sm rounded-lg p-4 shadow-lg">
                    <a href="#accueil" class="mobile-nav-link bg-black hover:bg-gray-900">Accueil</a>
                    <a href="#apropos" class="mobile-nav-link bg-black hover:bg-gray-900">À propos</a>
                    <a href="#criteres" class="mobile-nav-link bg-black hover:bg-gray-900">Critères</a>
                    <a href="#programme" class="mobile-nav-link bg-black hover:bg-gray-900">Programme</a>
                    <a href="#recompenses" class="mobile-nav-link bg-black hover:bg-gray-900">Récompenses</a>
                    <a href="#inscription" class="mobile-nav-link bg-black hover:bg-gray-900">Inscription</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="h-screen flex items-center justify-center relative overflow-hidden pt-20 md:pt-0">
        <!-- Vidéo en arrière-plan -->
        <video
            autoplay
            muted
            loop
            playsinline
            class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="assets/v3.mp4" type="video/mp4">
        </video>

        <!-- Overlay gradient pour améliorer la lisibilité -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-blue-600/80 to-purple-600/80 z-10"></div>

        <!-- Contenu -->
        <div class="text-center relative z-20 px-4 md:px-0" data-aos="fade-up">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 text-white">
                Innovation Days 2025
            </h1>
            <p class="text-xl sm:text-2xl mb-2 md:mb-4 text-white">
                72 Heures pour Innover
            </p>
            <p class="text-lg sm:text-xl mb-6 md:mb-8 text-white">
                23-25 Mars 2025 • INPTIC
            </p>

            <!-- Countdown Timer -->
            <div class="grid grid-cols-2 sm:flex sm:justify-center gap-4 sm:gap-6 md:gap-8 mb-8 md:mb-12" id="countdown">
                <div class="countdown-item bg-black/30 backdrop-blur-sm p-3 rounded-lg">
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold" id="days">00</div>
                    <div class="text-xs sm:text-sm text-purple-200">Jours</div>
                </div>
                <div class="countdown-item bg-black/30 backdrop-blur-sm p-3 rounded-lg">
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold" id="hours">00</div>
                    <div class="text-xs sm:text-sm text-purple-200">Heures</div>
                </div>
                <div class="countdown-item bg-black/30 backdrop-blur-sm p-3 rounded-lg">
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold" id="minutes">00</div>
                    <div class="text-xs sm:text-sm text-purple-200">Minutes</div>
                </div>
                <div class="countdown-item bg-black/30 backdrop-blur-sm p-3 rounded-lg">
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold" id="seconds">00</div>
                    <div class="text-xs sm:text-sm text-purple-200">Secondes</div>
                </div>
            </div>
            <a href="#inscription"
                class="inline-block bg-green-800 text-blue-600 px-6 sm:px-8 py-2 sm:py-3 rounded-full font-bold 
               hover:bg-green-500 hover:text-black transition-all animate-pulse-zoom
               text-sm sm:text-base">
                Inscription
            </a>

        </div>
    </section>

    <style>
        /* Ajout d'une règle globale pour le texte */
        * {
            color: white !important;
        }

        /* Exception pour les éléments qui doivent garder leur couleur spécifique */
        .text-\[#CCFF00\],
        .text-purple-400,
        .hover\:text-\[#CCFF00\]:hover,
        .hover\:text-purple-300:hover {
            color: inherit !important;
        }

        @keyframes pulse-zoom {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .animate-pulse-zoom {
            animation: pulse-zoom 2s infinite;
        }

        .countdown-item {
            transition: all 0.3s ease;
        }

        .countdown-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 640px) {
            .countdown-item {
                width: 100%;
            }
        }

        .nav-link {
            @apply text-white hover:text-[#CCFF00] transition-colors duration-300 text-sm xl:text-base font-medium;
        }

        .mobile-nav-link {
            @apply text-white hover:text-[#CCFF00] transition-colors duration-300 py-3 px-4 rounded-lg hover:bg-gray-800/50 text-sm font-medium;
        }

        /* Animation pour le menu mobile */
        #mobile-menu {
            transition: all 0.3s ease-in-out;
            opacity: 0;
            transform: translateY(-10px);
        }

        #mobile-menu.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
<section id="partenaires" class="py-13 px-6" style="background-color: #028090;">
    <div class="container mx-auto">
        <!-- Ajout des liens Swiper -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <!-- Swiper -->
        <div class="swiper partenairesSwiper">
            <div class="swiper-wrapper">
                <!-- Répéter les éléments pour le défilement fluide -->
                <!-- Partenaire 1 -->
                <div class="swiper-slide">
                    <div class="flex justify-center items-center h-32 mb-4">
                        <img src="https://cdn-webportal.airtelstream.net/website/gabon/assets/images/airtel-french-logo.svg"
                            alt="Logo Partenaire"
                            class="max-h-24 max-w-full object-contain transition-all duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-center text-white">AIRTEL GABON</h3>
                </div>
                <!-- Partenaire 2 -->
                <div class="swiper-slide">
                    <div class="flex justify-center items-center h-32 mb-4">
                        <img src="https://www.ubagroup.com/nigeria/wp-content/uploads/sites/3/2018/06/UBA-Logo.svg"
                            alt="Logo Partenaire"
                            class="max-h-24 max-w-full object-contain transition-all duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-center text-white">UBA</h3>
                </div>
                <!-- Partenaire 3 -->
                <div class="swiper-slide">
                    <div class="flex justify-center items-center h-32 mb-4">
                        <img src="https://www.moov-africa.ga/PublishingImages/icon/logo.png"
                            alt="Logo Partenaire"
                            class="max-h-24 max-w-full object-contain transition-all duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-center text-white">MOOV AFRICA GABON TELECOM</h3>
                </div>
                <!-- Partenaire 4 -->
                <div class="swiper-slide">
                    <div class="flex justify-center items-center h-32 mb-4">
                        <img src="https://www.arcep.ga/assets/img/logo.png"
                            alt="Logo Partenaire"
                            class="max-h-24 max-w-full object-contain transition-all duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-center text-white">ARCEP</h3>
                </div>
                <!-- Partenaire 5 -->
                <div class="swiper-slide">
                    <div class="flex justify-center items-center h-32 mb-4">
                        <img src="https://aninf.ga/wp-content/uploads/2024/07/logo_ANINF-1.png"
                            alt="Logo Partenaire"
                            class="max-h-24 max-w-full object-contain transition-all duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-center text-white">ANINF</h3>
                </div>

                <!-- Répétition des slides pour l'effet fluide -->
                <!-- Partenaire 1 -->
                <div class="swiper-slide">
                    <div class="flex justify-center items-center h-32 mb-4">
                        <img src="https://cdn-webportal.airtelstream.net/website/gabon/assets/images/airtel-french-logo.svg"
                            alt="Logo Partenaire"
                            class="max-h-24 max-w-full object-contain transition-all duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-center text-white">AIRTEL GABON</h3>
                </div>
               
                <!-- Partenaire 3 -->
                <div class="swiper-slide">
                    <div class="flex justify-center items-center h-32 mb-4">
                        <img src="https://www.moov-africa.ga/PublishingImages/icon/logo.png"
                            alt="Logo Partenaire"
                            class="max-h-24 max-w-full object-contain transition-all duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-center text-white">MOOV AFRICA GABON TELECOM</h3>
                </div>
                <!-- Partenaire 4 -->
                <div class="swiper-slide">
                    <div class="flex justify-center items-center h-32 mb-4">
                        <img src="https://www.arcep.ga/assets/img/logo.png"
                            alt="Logo Partenaire"
                            class="max-h-24 max-w-full object-contain transition-all duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-center text-white">ARCEP</h3>
                </div>
                 <!-- Partenaire 2 -->
                 <div class="swiper-slide">
                    <div class="flex justify-center items-center h-32 mb-4">
                        <img src="https://www.ubagroup.com/nigeria/wp-content/uploads/sites/3/2018/06/UBA-Logo.svg"
                            alt="Logo Partenaire"
                            class="max-h-24 max-w-full object-contain transition-all duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-center text-white">UBA</h3>
                </div> <!-- Partenaire 2 -->
                <div class="swiper-slide">
                    <div class="flex justify-center items-center h-32 mb-4">
                        <img src="https://www.ubagroup.com/nigeria/wp-content/uploads/sites/3/2018/06/UBA-Logo.svg"
                            alt="Logo Partenaire"
                            class="max-h-24 max-w-full object-contain transition-all duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-center text-white">UBA</h3>
                </div>
                <!-- Partenaire 5 -->
                <div class="swiper-slide">
                    <div class="flex justify-center items-center h-32 mb-4">
                        <img src="https://aninf.ga/wp-content/uploads/2024/07/logo_ANINF-1.png"
                            alt="Logo Partenaire"
                            class="max-h-24 max-w-full object-contain transition-all duration-300">
                    </div>
                    <h3 class="text-xl font-bold text-center text-white">ANINF</h3>
                </div>
            </div>
        </div>
    </div>

    <style>
        .swiper {
            width: 100%;
            padding: 20px 0;
            overflow: hidden;
        }

        .swiper-wrapper {
            display: flex;
            animation: scroll 10s linear infinite; /* Défilement fluide sur 10 secondes */
        }

        .swiper-slide {
            flex: 0 0 auto;
            width: 200px;
            margin-right: 10px; /* Espacement entre les slides */
        }

        .swiper-pagination {
            display: none; /* Masquer la pagination */
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%); /* Déplace toutes les slides à gauche */
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</section>


<section id="apropo" class="py-20 px-6 ">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12 text-[#CCFF00]">À propos des Journées de l'Innovation</h2>

        <p class="text-white mb-12 text-lg text-center max-w-3xl mx-auto">
            Les Journées de l'Innovation sont une initiative visant à promouvoir l'innovation technologique et à encourager
            la créativité des étudiants. Cet événement rassemble les talents pour créer des solutions innovantes.
        </p>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Bloc 1 -->
            <div class="bg-gray-600 p-8 rounded-xl hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300">
                <div class="flex justify-center mb-6">
                    <!-- Icône -->
                    <svg class="w-16 h-16 text-[#028090]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-center text-[#CCFF00] mb-4">Durée</h3>
                <p class="text-white text-center">72 heures de compétition intensive pour développer des solutions innovantes</p>
            </div>

            <!-- Bloc 2 -->
            <div class="bg-gray-600 p-8 rounded-xl hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300">
                <div class="flex justify-center mb-6">
                    <!-- Icône -->
                    <svg class="w-16 h-16 text-[#028090]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-center text-[#CCFF00] mb-4">Lieu</h3>
                <p class="text-white text-center">INPTIC - Institut National de la Poste, des TIC</p>
            </div>

            <!-- Bloc 3 -->
            <div class="bg-gray-600 p-8 rounded-xl hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300">
                <div class="flex justify-center mb-6">
                    <!-- Icône -->
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
        transform: scale(1.05); /* Ajoute une légère agrandissement au survol */
    }

    .hover\:shadow-xl:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15); /* Ombre plus marquée pour le survol */
    }

    /* Design de l'icône */
    svg {
        transition: transform 0.3s ease;
    }

    /* Transformation des icônes au survol */
    .hover\:scale-105:hover svg {
        transform: scale(1.2); /* Agrandissement des icônes au survol */
    }

    /* Améliorer la mise en forme des blocs */
    .bg-gray-800 {
        background-color: #2d2d2d; /* Un gris un peu plus foncé pour plus de contraste */
    }

    .p-8 {
        padding: 2rem; /* Espace plus large autour du contenu */
    }

    .rounded-xl {
        border-radius: 1rem; /* Coins arrondis plus visibles */
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
                        <circle cx="64" cy="64" r="60" fill="transparent" stroke="#1a1a1a" stroke-width="8" />
                        <circle cx="64" cy="64" r="60" fill="transparent" stroke="#78cad2" stroke-width="8"
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
                        <circle cx="64" cy="64" r="60" fill="transparent" stroke="#1a1a1a" stroke-width="8" />
                        <circle cx="64" cy="64" r="60" fill="transparent" stroke=" #78cad2" stroke-width="8"
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
                        <circle cx="64" cy="64" r="60" fill="transparent" stroke="#1a1a1a" stroke-width="8" />
                        <circle cx="64" cy="64" r="60" fill="transparent" stroke=" #78cad2" stroke-width="8"
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
                        <circle cx="64" cy="64" r="60" fill="transparent" stroke="#1a1a1a" stroke-width="8" />
                        <circle cx="64" cy="64" r="60" fill="transparent" stroke=" #78cad2" stroke-width="8"
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
                        <circle cx="64" cy="64" r="60" fill="transparent" stroke="#1a1a1a" stroke-width="8" />
                        <circle cx="64" cy="64" r="60" fill="transparent" stroke=" #78cad2" stroke-width="8"
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
            }, { threshold: 0.5 }); // When 50% of the section is visible

            observer.observe(document.querySelector('#criteres'));
        });
    </script>
</section>

<!-- Récompenses Section -->
<section id="recompenses" class="py-20 bg-[#78cad2]">
    <div class="container mx-auto text-center">
        <h2 class="text-5xl font-extrabold text-white mb-16" data-aos="fade-up">Récompenses</h2>

        <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-12">

            <div class="bg-gray-600 p-8 rounded-lg shadow-lg hover:bg-gray-500 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-2xl font-semibold text-[#78cad2] mb-4">Formation & Mentorat</h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-center">
                        <span class="mr-2 text-[#78cad2]">✨</span>
                        Programme d'incubation
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2 text-[#78cad2]">✨</span>
                        Formations gratuites
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2 text-[#78cad2]">✨</span>
                        Accès aux conférences
                    </li>
                </ul>
            </div>
            <div class="bg-gray-600 p-8 rounded-lg shadow-lg hover:bg-gray-500 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl font-semibold text-[#78cad2] mb-4">Opportunités</h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-center">
                        <span class="mr-2 text-[#78cad2]">🌍</span>
                        Voyages d'études
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2 text-[#78cad2]">📚</span>
                        Abonnements spécialisés
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2 text-[#78cad2]">🚀</span>
                        Accompagnement post-hackathon
                    </li>
                </ul>
            </div>
            <div class="bg-gray-600 p-8 rounded-lg shadow-lg hover:bg-gray-500 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-2xl font-semibold text-[#78cad2] mb-4">Cadeaux Tech</h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-center">
                        <span class="mr-2 text-[#78cad2]">💻</span>
                        Ordinateurs
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2 text-[#78cad2]">📱</span>
                        Tablettes
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2 text-[#78cad2]">⌚</span>
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
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-gray-600 p-6 rounded-lg" data-aos="fade-right">
                    <h3 class="text-xl font-bold mb-4">Lieu et horaires</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li>📍 INPTIC (Feu rouge Gros bouquet)</li>
                        <li>📅 23-25 Mars 2024</li>
                        <li>⏰ 8h00 à 18h00</li>
                        <li>🍽️ Restauration fournie</li>
                    </ul>
                </div>
                <div class="bg-gray-600 p-6 rounded-lg" data-aos="fade-left">
                    <h3 class="text-xl font-bold mb-4">Processus de soumission</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li>✅ Prototype fonctionnel</li>
                        <li>📊 Présentation détaillée</li>
                        <li>📝 Documentation technique</li>
                        <li>💡 Spécifications et diagrammes</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>









    <!-- Section Programme -->
    <section id="programme" class="py-20 px-6 bg-gray-900">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12 text-white" data-aos="fade-u">Programme</h2>

            <!-- Timeline des 3 jours -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Jour 1 -->
                <div class="bg-black p-8 rounded-xl border border-blue-500 timeline-day">
                    <h3 class="text-2xl font-bold text-blue-500 mb-6">Jour 1: Lancement</h3>
                    <ul class="space-y-6">
                        <li class="timeline-item">
                            <span class="text-purple-400 font-bold">08:00</span>
                            <h4 class="text-white font-bold mb-2">Accueil et Inscription</h4>
                            <p class="text-gray-300">Accueil des participants et finalisation des inscriptions</p>
                        </li>
                        <li class="timeline-item">
                            <span class="text-purple-400 font-bold">09:30</span>
                            <h4 class="text-white font-bold mb-2">Cérémonie d'ouverture</h4>
                            <p class="text-gray-300">Présentation du déroulement, introduction des mentors et des juges</p>
                        </li>
                        <li class="timeline-item">
                            <span class="text-purple-400 font-bold">11:00</span>
                            <h4 class="text-white font-bold mb-2">Formation des Équipes</h4>
                            <p class="text-gray-300">Constitution des équipes et networking</p>
                        </li>
                        <li class="timeline-item">
                            <span class="text-purple-400 font-bold">14:00</span>
                            <h4 class="text-white font-bold mb-2">Présentation du Défi</h4>
                            <p class="text-gray-300">Annonce de la thématique et des objectifs</p>
                        </li>
                        <li class="timeline-item">
                            <span class="text-purple-400 font-bold">15:00</span>
                            <h4 class="text-white font-bold mb-2">Début du Hackathon</h4>
                            <p class="text-gray-300">Lancement officiel des travaux</p>
                        </li>
                    </ul>
                </div>

                <!-- Jour 2 -->
                <div class="bg-black p-8 rounded-xl border border-blue-500 timeline-day">
                    <h3 class="text-2xl font-bold text-blue-500 mb-6">Jour 2: Développement</h3>
                    <ul class="space-y-6">
                        <li class="timeline-item">
                            <span class="text-purple-400 font-bold">09:00</span>
                            <h4 class="text-white font-bold mb-2">Sessions de Mentorat</h4>
                            <p class="text-gray-300">Accompagnement personnalisé par des experts</p>
                        </li>
                        <li class="timeline-item">
                            <span class="text-purple-400 font-bold">11:00</span>
                            <h4 class="text-white font-bold mb-2">Ateliers Techniques</h4>
                            <p class="text-gray-300">Formation sur les APIs, UX/UI et bonnes pratiques</p>
                        </li>
                        <li class="timeline-item">
                            <span class="text-purple-400 font-bold">14:00</span>
                            <h4 class="text-white font-bold mb-2">Check-in avec les Juges</h4>
                            <p class="text-gray-300">Feedback intermédiaire sur les projets</p>
                        </li>
                    </ul>
                </div>

                <!-- Jour 3 -->
                <div class="bg-black p-8 rounded-xl border border-blue-500 timeline-day">
                    <h3 class="text-2xl font-bold text-blue-500 mb-6">Jour 3: Finalisation</h3>
                    <ul class="space-y-6">
                        <li class="timeline-item">
                            <span class="text-purple-400 font-bold">09:00</span>
                            <h4 class="text-white font-bold mb-2">Finalisation des Projets</h4>
                            <p class="text-gray-300">Dernières touches aux prototypes</p>
                        </li>
                        <li class="timeline-item">
                            <span class="text-purple-400 font-bold">14:00</span>
                            <h4 class="text-white font-bold mb-2">Présentations Finales</h4>
                            <p class="text-gray-300">Pitch des projets devant le jury</p>
                        </li>
                        <li class="timeline-item">
                            <span class="text-purple-400 font-bold">16:00</span>
                            <h4 class="text-white font-bold mb-2">Délibération du Jury</h4>
                            <p class="text-gray-300">Évaluation selon les critères établis</p>
                        </li>
                        <li class="timeline-item">
                            <span class="text-purple-400 font-bold">17:30</span>
                            <h4 class="text-white font-bold mb-2">Cérémonie de Clôture</h4>
                            <p class="text-gray-300">Annonce des gagnants et remise des prix</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section Formulaire avec nouveau style -->
    <?php include 'inscription-form/form.php'; ?>

  <!-- Section des questions frequentes -->
   
  <?php include 'sections/questions.php';  ?>      
    <!-- Section Partenaires -->

    <?php include 'sections/partenaire.php';  ?>
    
    <footer class="py-10 bg-black">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <!-- Logo à gauche -->
        <div class="flex items-center space-x-4">
            <img src="assets/r.jpg" alt="Logo" class="w-80 h-50">
           
        </div>
        <p class="text-white">Innovation Days 2025 - INPTIC</p>
        <!-- Liens sociaux à droite -->
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
</footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });

    function updateCountdown() {
        // Date actuelle
        const now = new Date();

        // Date de l'événement (25 Mars 2025 à 18h00)
        const eventDate = new Date('2025-03-25T18:00:00');

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