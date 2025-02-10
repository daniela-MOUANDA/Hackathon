<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovation Days 2024 - INPTIC</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>



</head>

<body class="bg-gray-900 text-white">
    <!-- Barre de réseaux sociaux -->
    <div class="fixed top-0 w-full bg-gray-300 py-2 z-50">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center">
                <div class="text-blue-500 text-sm">
                    Suivez-nous sur les réseaux sociaux
                </div>
                <div class="flex space-x-6">
                    <a href="https://facebook.com/INPTIC" target="_blank" class="text-black hover:text-[#CCFF00] transition-colors duration-300 flex items-center">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.77,7.46H14.5v-1.9c0-.9.6-1.1,1-1.1h3V.5h-4.33C10.24.5,9.5,3.44,9.5,5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4Z" />
                        </svg>
                        <span class="ml-2 hidden sm:inline">Facebook</span>
                    </a>
                    <a href="https://youtube.com/INPTIC" target="_blank" class="text-black hover:text-[#CCFF00] transition-colors duration-300 flex items-center">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.5,6.2A3,3,0,0,0,21.4,4c-2-.2-6.2-.3-10.4-.3S2.6,3.8.6,4A3,3,0,0,0-1.5,6.2,31.8,31.8,0,0,0-2,12a31.8,31.8,0,0,0,.5,5.8A3,3,0,0,0,.6,20c2,.2,6.2.3,10.4.3s8.4-.1,10.4-.3a3,3,0,0,0,2.1-2.2A31.8,31.8,0,0,0,24,12,31.8,31.8,0,0,0,23.5,6.2ZM9.5,15.8V8.2l6.7,3.8Z" />
                        </svg>
                        <span class="ml-2 hidden sm:inline">YouTube</span>
                    </a>
                    <a href="https://tiktok.com/@INPTIC" target="_blank" class="text-black hover:text-[#CCFF00] transition-colors duration-300 flex items-center">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59,6.69a4.83,4.83,0,0,1-3.77-4.25V2h-3.45V13.67a2.89,2.89,0,0,1-5.2,1.74,2.89,2.89,0,0,1,2.31-4.64,2.93,2.93,0,0,1,.88.13V7.42a6.84,6.84,0,0,0-1-.05A6.33,6.33,0,0,0,5,20.1a6.34,6.34,0,0,0,10.86-4.43v-7a8.16,8.16,0,0,0,4.77,1.52v-3.4a4.85,4.85,0,0,1-1-.1Z" />
                        </svg>
                        <span class="ml-2 hidden sm:inline">TikTok</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 gradient-bg" style="top: 40px;">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo et titre -->
                <div class="flex items-center space-x-4">
                    <img src="assets/logoinptic.png" alt="Logo INPTIC" class="h-8 md:h-12 w-auto">
                    <div class="text-xl md:text-2xl font-bold">Innovation Days 2025</div>
                </div>

                <!-- Menu hamburger pour mobile -->
                <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path class="menu-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path class="menu-close hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Menu de navigation desktop -->
                <div class="hidden md:flex space-x-8">
                    <a href="#accueil" class="hover:text-purple-300 transition">Accueil</a>
                    <a href="#apropos" class="hover:text-purple-300 transition">À propos</a>
                    <a href="#criteres" class="hover:text-purple-300 transition">Critères</a>
                    <a href="#programme" class="hover:text-purple-300 transition">Programme</a>
                    <a href="#recompenses" class="hover:text-purple-300 transition">Récompenses</a>
                    <a href="#inscription" class="hover:text-purple-300 transition">Inscription</a>
                </div>
            </div>

            <!-- Menu mobile -->
            <div id="mobile-menu" class="md:hidden hidden">
                <div class="flex flex-col space-y-4 mt-4 bg-gray-900 rounded-lg p-4">
                    <a href="#accueil" class="text-white hover:text-purple-300 transition py-2">Accueil</a>
                    <a href="#apropos" class="text-white hover:text-purple-300 transition py-2">À propos</a>
                    <a href="#criteres" class="text-white hover:text-purple-300 transition py-2">Critères</a>
                    <a href="#programme" class="text-white hover:text-purple-300 transition py-2">Programme</a>
                    <a href="#recompenses" class="text-white hover:text-purple-300 transition py-2">Récompenses</a>
                    <a href="#inscription" class="text-white hover:text-purple-300 transition py-2">Inscription</a>
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
                class="inline-block bg-white text-blue-600 px-6 sm:px-8 py-2 sm:py-3 rounded-full font-bold 
                      hover:bg-green-500 hover:text-black transition-all animate-pulse-zoom
                      text-sm sm:text-base">
                Inscription
            </a>
        </div>
    </section>

    <style>
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
    </style>

    <!-- À propos Section avec plus de détails -->
    <section id="apropos" class="py-20 px-6">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12" data-aos="fade-up">À propos</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <p class="text-gray-300 mb-6 text-lg">
                        Innovation Days est bien plus qu'un simple hackathon. C'est une expérience immersive de 72 heures où l'innovation,
                        la créativité et la technologie convergent pour créer l'avenir. Notre mission est de transformer des idées
                        audacieuses en solutions concrètes, tout en développant les compétences pratiques essentielles dans le monde
                        professionnel d'aujourd'hui.
                    </p>
                    <div class="bg-gray-800 p-6 rounded-lg mb-6">
                        <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Objectifs clés :</h3>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-[#CCFF00] rounded-full mr-2"></span>
                                Stimuler l'innovation et la créativité dans le domaine tech
                            </li>
                            <li class="flex items-center"></li>
                            <span class="w-2 h-2 bg-[#CCFF00] rounded-full mr-2"></span>
                            Appliquer les connaissances théoriques à des défis réels
                            </li>
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-[#CCFF00] rounded-full mr-2"></span>
                                Développer des prototypes fonctionnels en 72 heures
                            </li>
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-[#CCFF00] rounded-full mr-2"></span>
                                Favoriser la collaboration interdisciplinaire
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="space-y-6" data-aos="fade-left">
                    <div class="bg-gray-800 p-6 rounded-lg">
                        <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Participants éligibles</h3>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-[#CCFF00] rounded-full mr-2"></span>
                                Étudiants de l'INPTIC
                            </li>
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-[#CCFF00] rounded-full mr-2"></span>
                                Étudiants d'autres établissements
                            </li>
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-[#CCFF00] rounded-full mr-2"></span>
                                Jeunes startups innovantes
                            </li>
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-[#CCFF00] rounded-full mr-2"></span>
                                Passionnés du digital
                            </li>
                        </ul>
                    </div>
                    <div class="bg-gray-800 p-6 rounded-lg">
                        <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Composition des équipes</h3>
                        <p class="text-gray-300 mb-4">Une équipe équilibrée de 4 experts :</p>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-blue-500 rounded-full mr-2"></span>
                                2 développeurs (Front-end/Back-end)
                            </li>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-purple-500 rounded-full mr-2"></span>
                                1 technicien réseau (Infrastructure/Sécurité)
                            </li>
                            <li class="flex items-center">
                                <span class="w-4 h-4 bg-pink-500 rounded-full mr-2"></span>
                                1 marketeur (UX/UI & Business)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Critères Section -->
    <section id="criteres" class="py-20 px-6 bg-gray-800">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12" data-aos="fade-up">Critères d'évaluation</h2>
            <div class="grid md:grid-cols-5 gap-6">
                <div class="bg-gray-700 p-6 rounded-lg text-center hover-scale" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-3xl font-bold text-purple-400 mb-2">30%</div>
                    <h3 class="text-xl font-bold">Innovation</h3>
                </div>
                <div class="bg-gray-700 p-6 rounded-lg text-center hover-scale" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-3xl font-bold text-purple-400 mb-2">25%</div>
                    <h3 class="text-xl font-bold">Utilité</h3>
                </div>
                <div class="bg-gray-700 p-6 rounded-lg text-center hover-scale" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl font-bold text-purple-400 mb-2">20%</div>
                    <h3 class="text-xl font-bold">Présentation</h3>
                </div>
                <div class="bg-gray-700 p-6 rounded-lg text-center hover-scale" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-3xl font-bold text-purple-400 mb-2">15%</div>
                    <h3 class="text-xl font-bold">Collaboration</h3>
                </div>
                <div class="bg-gray-700 p-6 rounded-lg text-center hover-scale" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-3xl font-bold text-purple-400 mb-2">10%</div>
                    <h3 class="text-xl font-bold">Prototype</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Récompenses Section -->
    <section id="recompenses" class="py-20 px-6">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12" data-aos="fade-up">Récompenses</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-800 p-6 rounded-lg hover-scale" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-bold mb-4 text-purple-400">Formation & Mentorat</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li>✨ Programme d'incubation</li>
                        <li>✨ Formations gratuites</li>
                        <li>✨ Accès aux conférences</li>
                    </ul>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg hover-scale" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-bold mb-4 text-purple-400">Opportunités</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li>🌍 Voyages d'études</li>
                        <li>📚 Abonnements spécialisés</li>
                        <li>🚀 Accompagnement post-hackathon</li>
                    </ul>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg hover-scale" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-xl font-bold mb-4 text-purple-400">Cadeaux Tech</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li>💻 Ordinateurs</li>
                        <li>📱 Tablettes</li>
                        <li>⌚ Montres connectées</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Informations pratiques -->
    <section id="infos" class="py-20 px-6 bg-gray-800">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12" data-aos="fade-up">Informations pratiques</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-gray-700 p-6 rounded-lg" data-aos="fade-right">
                    <h3 class="text-xl font-bold mb-4">Lieu et horaires</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li>📍 INPTIC (Feu rouge Gros bouquet)</li>
                        <li>📅 23-25 Mars 2024</li>
                        <li>⏰ 8h00 à 18h00</li>
                        <li>🍽️ Restauration fournie</li>
                    </ul>
                </div>
                <div class="bg-gray-700 p-6 rounded-lg" data-aos="fade-left">
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

    <?php include 'inscription-form/form.php'; ?>

    <!-- Section FAQ avec carrousel -->
    <section id="faq" class="py-20 px-6 bg-gray-900">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-4xl font-bold text-center mb-12">
                <span class="text-white">Questions</span>
                <span class="text-[#0A4DA6]">Fréquentes</span>
            </h2>

            <!-- Container FAQ -->
            <div class="space-y-4">
                <!-- Question 1 -->
                <div class="faq-item bg-gray-800 rounded-lg overflow-hidden hover:bg-gray-700 transition-colors duration-300">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center text-white">
                        <span class="text-lg font-semibold">Comment former une équipe ?</span>
                        <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 py-4 bg-gray-700/50 hidden">
                        <p class="text-gray-200">Pour former une équipe, vous devez :</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-300">
                            <li>Constituer une équipe de 4 personnes</li>
                            <li>Avoir 2 développeurs (front-end/back-end)</li>
                            <li>Avoir 1 technicien réseau</li>
                            <li>Avoir 1 marketeur/designer UX</li>
                            <li>Vous pouvez former votre équipe à l'avance ou sur place</li>
                        </ul>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="faq-item bg-gray-800 rounded-lg overflow-hidden hover:bg-gray-700 transition-colors duration-300">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center text-white">
                        <span class="text-lg font-semibold">Quel matériel dois-je apporter ?</span>
                        <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 py-4 bg-gray-700/50 hidden">
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-300">
                            <li>Un ordinateur portable avec vos outils de développement</li>
                            <li>Un chargeur et éventuellement une multiprise</li>
                            <li>Une clé USB pour les sauvegardes</li>
                            <li>Un casque ou des écouteurs pour le travail en groupe</li>
                            <li>Un carnet et des stylos pour la prise de notes</li>
                        </ul>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="faq-item bg-gray-800 rounded-lg overflow-hidden hover:bg-gray-700 transition-colors duration-300">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center text-white">
                        <span class="text-lg font-semibold">Quels sont les critères d'évaluation ?</span>
                        <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 py-4 bg-gray-700/50 hidden">
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-300">
                            <li>Innovation et créativité (30%)</li>
                            <li>Utilité et impact potentiel (25%)</li>
                            <li>Qualité de la présentation (20%)</li>
                            <li>Collaboration d'équipe (15%)</li>
                            <li>Qualité technique du prototype (10%)</li>
                        </ul>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="faq-item bg-gray-800 rounded-lg overflow-hidden hover:bg-gray-700 transition-colors duration-300">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center text-white">
                        <span class="text-lg font-semibold">Y aura-t-il un accompagnement pendant l'événement ?</span>
                        <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 py-4 bg-gray-700/50 hidden">
                        <p class="text-gray-200">Oui, vous bénéficierez de :</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-300">
                            <li>Mentors techniques expérimentés</li>
                            <li>Experts métier pour vous guider</li>
                            <li>Ateliers et workshops</li>
                            <li>Support technique 24/7</li>
                            <li>Conseils en présentation et pitch</li>
                        </ul>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="faq-item bg-gray-800 rounded-lg overflow-hidden hover:bg-gray-700 transition-colors duration-300">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center text-white">
                        <span class="text-lg font-semibold">Que se passe-t-il après le hackathon ?</span>
                        <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 py-4 bg-gray-700/50 hidden">
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-300">
                            <li>Accompagnement post-événement pour les projets prometteurs</li>
                            <li>Possibilité d'intégrer un programme d'incubation</li>
                            <li>Mise en relation avec des investisseurs potentiels</li>
                            <li>Suivi personnalisé pendant 6 mois</li>
                            <li>Accès à des ressources et formations complémentaires</li>
                        </ul>
                    </div>
                </div>

                <!-- Question 6 -->
                <div class="faq-item bg-gray-800 rounded-lg overflow-hidden hover:bg-gray-700 transition-colors duration-300">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center text-white">
                        <span class="text-lg font-semibold">Quels sont les horaires du hackathon ?</span>
                        <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 py-4 bg-gray-700/50 hidden">
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-300">
                            <li>Jour 1 : 8h00 - 18h00 (Accueil et lancement)</li>
                            <li>Jour 2 : 8h00 - 18h00 (Développement et mentorat)</li>
                            <li>Jour 3 : 8h00 - 18h00 (Finalisation et présentation)</li>
                            <li>Les repas sont fournis pendant toute la durée de l'événement</li>
                        </ul>
                    </div>
                </div>

                <!-- Question 7 -->
                <div class="faq-item bg-gray-800 rounded-lg overflow-hidden hover:bg-gray-700 transition-colors duration-300">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center text-white">
                        <span class="text-lg font-semibold">La participation est-elle gratuite ?</span>
                        <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 py-4 bg-gray-700/50 hidden">
                        <p class="text-gray-200">Oui, la participation est entièrement gratuite et inclut :</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-300">
                            <li>L'accès à l'événement pendant 3 jours</li>
                            <li>Les repas et collations</li>
                            <li>L'accès aux mentors et experts</li>
                            <li>Le matériel de présentation</li>
                            <li>Les goodies et surprises</li>
                        </ul>
                    </div>
                </div>

                <!-- Question 8 -->
                <div class="faq-item bg-gray-800 rounded-lg overflow-hidden hover:bg-gray-700 transition-colors duration-300">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center text-white">
                        <span class="text-lg font-semibold">Puis-je participer si je suis débutant ?</span>
                        <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 py-4 bg-gray-700/50 hidden">
                        <p class="text-gray-200">Oui, absolument ! Voici pourquoi :</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-300">
                            <li>Des mentors seront là pour vous guider</li>
                            <li>Les équipes sont constituées pour être complémentaires</li>
                            <li>Des ateliers d'initiation sont prévus</li>
                            <li>L'important est votre motivation et votre créativité</li>
                            <li>C'est une excellente opportunité d'apprentissage</li>
                        </ul>
                    </div>
                </div>

                <!-- Question 9 -->
                <div class="faq-item bg-gray-800 rounded-lg overflow-hidden hover:bg-gray-700 transition-colors duration-300">
                    <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center text-white">
                        <span class="text-lg font-semibold">Y a-t-il une limite d'âge ?</span>
                        <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 py-4 bg-gray-700/50 hidden">
                        <p class="text-gray-200">Les conditions de participation sont :</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-300">
                            <li>Âge minimum : 18 ans</li>
                            <li>Pas de limite d'âge maximum</li>
                            <li>Être étudiant ou professionnel</li>
                            <li>Avoir une passion pour l'innovation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 py-12">
        <div class="container mx-auto px-6 text-center">
            <p class="text-gray-400">Innovation Days 2025 - INPTIC</p>
            <div class="mt-4">
                <div class="flex space-x-6">
                    <a href="https://facebook.com/INPTIC" target="_blank" class="text-white hover:text-[#CCFF00] transition-colors duration-300 flex items-center">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.77,7.46H14.5v-1.9c0-.9.6-1.1,1-1.1h3V.5h-4.33C10.24.5,9.5,3.44,9.5,5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4Z" />
                        </svg>
                        <span class="ml-2 hidden sm:inline">Facebook</span>
                    </a>
                    <a href="https://youtube.com/INPTIC" target="_blank" class="text-white hover:text-[#CCFF00] transition-colors duration-300 flex items-center">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.5,6.2A3,3,0,0,0,21.4,4c-2-.2-6.2-.3-10.4-.3S2.6,3.8.6,4A3,3,0,0,0-1.5,6.2,31.8,31.8,0,0,0-2,12a31.8,31.8,0,0,0,.5,5.8A3,3,0,0,0,.6,20c2,.2,6.2.3,10.4.3s8.4-.1,10.4-.3a3,3,0,0,0,2.1-2.2A31.8,31.8,0,0,0,24,12,31.8,31.8,0,0,0,23.5,6.2ZM9.5,15.8V8.2l6.7,3.8Z" />
                        </svg>
                        <span class="ml-2 hidden sm:inline">YouTube</span>
                    </a>
                    <a href="https://tiktok.com/@INPTIC" target="_blank" class="text-white hover:text-[#CCFF00] transition-colors duration-300 flex items-center">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59,6.69a4.83,4.83,0,0,1-3.77-4.25V2h-3.45V13.67a2.89,2.89,0,0,1-5.2,1.74,2.89,2.89,0,0,1,2.31-4.64,2.93,2.93,0,0,1,.88.13V7.42a6.84,6.84,0,0,0-1-.05A6.33,6.33,0,0,0,5,20.1a6.34,6.34,0,0,0,10.86-4.43v-7a8.16,8.16,0,0,0,4.77,1.52v-3.4a4.85,4.85,0,0,1-1-.1Z" />
                        </svg>
                        <span class="ml-2 hidden sm:inline">TikTok</span>
                    </a>
                </div>
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
            opacity: 0,
            duration: 1
        });

        // Animation des jours
        gsap.from(".timeline-day", {
            scrollTrigger: {
                trigger: "#programme",
                start: "top 60%",
            },
            y: 100,
            opacity: 0,
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
            opacity: 0,
            duration: 0.8,
            stagger: 0.1
        });

        // Animation hover sur les items
        document.querySelectorAll('.timeline-item').forEach(item => {
            item.addEventListener('mouseenter', () => {
                gsap.to(item, {
                    scale: 1.02,
                    duration: 0.3,
                    backgroundColor: 'rgba(124, 58, 237, 0.1)',
                    borderRadius: '8px'
                });
            });

            item.addEventListener('mouseleave', () => {
                gsap.to(item, {
                    scale: 1,
                    duration: 0.3,
                    backgroundColor: 'transparent',
                    borderRadius: '0px'
                });
            });
        });
    </script>

    <script>
        // Animations générales au survol
        const hoverElements = {
            '.bg-gray-800': {
                scale: 1.02,
                boxShadow: '0 10px 30px rgba(0,0,0,0.2)',
                duration: 0.3
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

        // Application des animations au survol
        Object.entries(hoverElements).forEach(([selector, animation]) => {
            document.querySelectorAll(selector).forEach(element => {
                element.addEventListener('mouseenter', () => {
                    gsap.to(element, {
                        ...animation,
                        ease: 'power2.out'
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
                        duration: 0.2,
                        ease: 'power2.inOut'
                    });
                });
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

        // Animation pour les éléments de la timeline
        document.querySelectorAll('.timeline-item').forEach(item => {
            item.addEventListener('mouseenter', () => {
                gsap.to(item, {
                    x: 10,
                    borderLeftWidth: '3px',
                    duration: 0.3
                });
            });

            item.addEventListener('mouseleave', () => {
                gsap.to(item, {
                    x: 0,
                    borderLeftWidth: '2px',
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

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuOpen.classList.toggle('hidden');
            menuClose.classList.toggle('hidden');
        });

        // Fermer le menu mobile lors du clic sur un lien
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuOpen.classList.remove('hidden');
                menuClose.classList.add('hidden');
            });
        });

        // Fermer le menu mobile lors du redimensionnement de la fenêtre
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) { // 768px est le breakpoint md de Tailwind
                mobileMenu.classList.add('hidden');
                menuOpen.classList.remove('hidden');
                menuClose.classList.add('hidden');
            }
        });
    </script>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Animation d'affichage des grands titres au chargement
        window.addEventListener('load', () => {
            // Sélection de tous les grands titres
            const mainTitles = [
                "Innovation Days 2025",
                "À propos",
                "Critères d'évaluation",
                "Récompenses",
                "Informations pratiques",
                "Programme",
                "Questions Fréquentes",
                "Support & Mentorat"
            ];

            // Création d'un conteneur pour les titres
            const titleContainer = document.createElement('div');
            titleContainer.style.cssText = `
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 9999;
                text-align: center;
                background: rgba(0, 0, 0, 0.9);
                padding: 2rem;
                border-radius: 1rem;
                width: 80%;
                max-width: 800px;
            `;

            // Ajout des titres au conteneur
            mainTitles.forEach(title => {
                const titleElement = document.createElement('h2');
                titleElement.textContent = title;
                titleElement.style.cssText = `
                    font-size: 2rem;
                    margin: 1rem 0;
                    opacity: 0;
                    transform: translateY(20px);
                    color: #0A4DA6;
                    font-weight: bold;
                `;
                titleContainer.appendChild(titleElement);
            });

            document.body.appendChild(titleContainer);

            // Animation des titres en cascade
            const titles = titleContainer.querySelectorAll('h2');
            gsap.to(titles, {
                opacity: 1,
                y: 0,
                duration: 0.5,
                stagger: 0.2,
                ease: "power2.out",
                onComplete: () => {
                    // Pause de 1 seconde après l'affichage de tous les titres
                    setTimeout(() => {
                        // Animation de sortie
                        gsap.to(titleContainer, {
                            opacity: 0,
                            scale: 0.8,
                            duration: 0.5,
                            ease: "power2.in",
                            onComplete: () => {
                                titleContainer.remove();
                                // Démarrer les autres animations après
                                startMainAnimations();
                            }
                        });
                    }, 1000);
                }
            });
        });

        // Fonction pour démarrer les animations principales
        function startMainAnimations() {
            // Ici, on garde toutes les animations précédentes
            // ... (le reste du code d'animation précédent) ...
        }

        // Le reste du code d'animation précédent reste inchangé
        // ... existing animation code ...
    </script>

    <script>
        // ... autres animations ...

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

        // Animation de la section FAQ au scroll
        gsap.from('#faq', {
            scrollTrigger: {
                trigger: '#faq',
                start: 'top 80%',
                toggleActions: 'play none none reverse'
            },
            y: 50,
            opacity: 0,
            duration: 1,
            ease: 'power2.out'
        });

        // Animation des questions individuelles au scroll
        faqItems.forEach((item, index) => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    start: 'top 90%',
                    toggleActions: 'play none none reverse'
                },
                y: 20,
                opacity: 0,
                duration: 0.8,
                delay: index * 0.1,
                ease: 'power2.out'
            });
        });

        // ... autres animations ...
    </script>
</body>

</html>