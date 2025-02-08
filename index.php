<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovation Days 2024 - INPTIC</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">



</head>

<body class="bg-gray-900 text-white">
    <!-- Barre de réseaux sociaux -->
    <div class="fixed top-0 w-full bg-black py-2 z-50">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center">
                <div class="text-blue-500 text-sm">
                    Suivez-nous sur les réseaux sociaux
                </div>
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
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 gradient-bg" style="top: 40px;">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <img src="assets/logoinptic.png" alt="Logo INPTIC" class="h-12 w-auto">
                    <div class="text-2xl font-bold">Innovation Days 2025</div>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#accueil" class="hover:text-purple-300 transition">Accueil</a>
                    <a href="#apropos" class="hover:text-purple-300 transition">À propos</a>
                    <a href="#criteres" class="hover:text-purple-300 transition">Critères</a>
                    <a href="#programme" class="hover:text-purple-300 transition">Programme</a>
                    <a href="#recompenses" class="hover:text-purple-300 transition">Récompenses</a>
                    <a href="#inscription" class="hover:text-purple-300 transition">Inscription</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="h-screen flex items-center justify-center relative overflow-hidden">
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
        <div class="text-center relative z-20" data-aos="fade-up">
            <h1 class="text-6xl font-bold mb-6 text-white">Innovation Days 2025</h1>
            <p class="text-2xl mb-4 text-white">72 Heures pour Innover</p>

            <p class="text-xl mb-8 text-white">23-25 Mars 2025 • INPTIC</p>


            <!-- Countdown Timer -->
            <div class="flex justify-center gap-8 mb-12" id="countdown">
                <div class="countdown-item">
                    <div class="text-4xl font-bold" id="days">00</div>
                    <div class="text-sm text-purple-200">Jours</div>
                </div>
                <div class="countdown-item">
                    <div class="text-4xl font-bold" id="hours">00</div>
                    <div class="text-sm text-purple-200">Heures</div>
                </div>
                <div class="countdown-item">
                    <div class="text-4xl font-bold" id="minutes">00</div>
                    <div class="text-sm text-purple-200">Minutes</div>
                </div>
                <div class="countdown-item">
                    <div class="text-4xl font-bold" id="seconds">00</div>
                    <div class="text-sm text-purple-200">Secondes</div>
                </div>
            </div>




            <a href="#inscription" class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:bg-green-500 hover:text-black transition-all animate-pulse-zoom">Inscription</a>
        </div>

    </section>

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

    <!-- Section Formulaire avec nouveau style -->
    <section id="inscription" class="py-20 px-6 techies-bg">
        <div class="container mx-auto max-w-6xl">
            <div class="grid md:grid-cols-2 gap-0 rounded-3xl overflow-hidden">
                <!-- Colonne de gauche - Info -->
                <div class="bg-gradient-to-br from-blue-600 via-purple-600 to-violet-800 p-12 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black opacity-20"></div>
                    <div class="relative z-10">
                        <img src="assets/logoinptic.png" alt="Logo" class="w-32 mb-8">
                        <h2 class="text-3xl font-bold mb-6 text-[#CCFF00]">Inscription</h2>
                        <p class="text-lg mb-8 text-white">Rejoignez l'Innovation Days 2025 pour 72 heures de création, d'innovation et de collaboration.</p>

                        <div class="space-y-6 text-white">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-3 text-[#CCFF00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>INPTIC, Feu rouge Gros bouquet</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-3 text-[#CCFF00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span>+241 74 72 13 98</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-3 text-[#CCFF00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>contact@innovationdays.com</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Colonne de droite - Formulaire -->
                <div class="bg-black p-12 relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black opacity-95"></div>
                    <div class="relative z-10">
                        <div class="flex justify-between items-center mb-8">
                            <h3 class="text-2xl font-bold text-[#CCFF00]">Informations personnelles</h3>
                            <div class="flex space-x-4">
                                <div class="w-3 h-3 bg-[#CCFF00] rounded-full"></div>
                                <div class="w-3 h-3 bg-gray-700 rounded-full"></div>
                                <div class="w-3 h-3 bg-gray-700 rounded-full"></div>
                            </div>
                        </div>

                        <form class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label class="block text-sm font-medium text-[#CCFF00] mb-2">Nom*</label>
                                    <input type="text" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                                </div>
                                <div class="form-group">
                                    <label class="block text-sm font-medium text-[#CCFF00] mb-2">Prénom(s)*</label>
                                    <input type="text" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="block text-sm font-medium text-[#CCFF00] mb-2">Email*</label>
                                <input type="email" required class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                            </div>

                            <div class="form-group">
                                <label class="block text-sm font-medium text-[#CCFF00] mb-2">Téléphone*</label>
                                <div class="flex">
                                    <span class="inline-flex items-center px-4 py-3 rounded-l-lg border-2 border-r-0 border-gray-700 bg-gray-800 text-gray-400">
                                        +241
                                    </span>
                                    <input type="tel" required class="w-full px-4 py-3 rounded-r-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="block text-sm font-medium text-[#CCFF00] mb-2">Profil*</label>
                                <select class="w-full px-4 py-3 rounded-lg bg-gray-900 border-2 border-gray-700 text-white focus:border-[#CCFF00] focus:ring-2 focus:ring-[#CCFF00] focus:ring-opacity-50 transition-all">
                                    <option value="">Sélectionnez votre profil</option>
                                    <option value="dev">Développeur</option>
                                    <option value="network">Technicien Réseau</option>
                                    <option value="marketing">Marketing</option>
                                </select>
                            </div>

                            <div class="flex items-center space-x-3">
                                <input type="checkbox" required class="w-5 h-5 border-2 border-gray-700 rounded bg-gray-900 text-[#CCFF00] focus:ring-[#CCFF00] focus:ring-opacity-50">
                                <label class="text-sm text-gray-300">
                                    J'accepte les <a href="#" class="text-[#CCFF00] hover:underline">conditions d'utilisation</a>
                                </label>
                            </div>

                            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-6 rounded-lg font-bold hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-300">
                                Suivant
                            </button>

                            <p class="text-center text-sm text-gray-400">
                                Vous avez déjà un compte ?
                                <a href="#" class="text-[#CCFF00] hover:underline">Se connecter</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tech-innov" class="py-20 px-6 bg-black">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <!-- Image à gauche -->
                <div class="md:w-1/2">
                    <img src="assets/im1.png" alt="Innovation Days" class="w-full h-auto rounded-lg shadow-2xl transform hover:scale-105 transition-all duration-300">
                </div>

                <!-- Contenu à droite -->
                <div class="md:w-1/2">
                    <h2 class="text-4xl font-bold mb-6" style="font-family: 'Orbitron', sans-serif;">
                        <span class="text-white">REJOIGNEZ</span><br>
                        <span class="text-[#0A4DA6] bg-gradient-to-r from-[#0A4DA6] to-[#3B82F6] bg-clip-text text-transparent">INNOVATION DAYS 2025</span>
                    </h2>

                    <!-- Boîte avec texte -->
                    <div class="bg-black border-2 border-[#0A4DA6] rounded-2xl p-6 shadow-lg shadow-[#0A4DA6]/20">
                        <p class="text-white text-lg leading-relaxed">
                            PLONGEZ DANS UNE EXPÉRIENCE UNIQUE DE 72 HEURES OÙ VOUS POURREZ :
                        </p>
                        <ul class="mt-4 space-y-3">
                            <li class="flex items-center text-[#93C5FD]">
                                <span class="mr-2">⚡</span>
                                DÉVELOPPER DES SOLUTIONS INNOVANTES
                            </li>
                            <li class="flex items-center text-[#93C5FD]">
                                <span class="mr-2">🤝</span>
                                COLLABORER AVEC DES TALENTS PASSIONNÉS
                            </li>
                            <li class="flex items-center text-[#93C5FD]">
                                <span class="mr-2">🎯</span>
                                PRÉSENTER VOTRE PROJET AUX EXPERTS
                            </li>
                        </ul>
                    </div>

                    <!-- Titre et bouton d'action -->
                    <div class="mt-12">
                        <h3 class="text-3xl font-bold mb-6 text-white" style="font-family: 'Orbitron', sans-serif;">
                            PRÊT À RELEVER LE DÉFI ?
                        </h3>
                        <button class="bg-gradient-to-r from-[#0A4DA6] to-[#1E3A8A] text-white font-bold py-4 px-8 rounded-lg hover:shadow-lg hover:shadow-[#0A4DA6]/30 transform hover:scale-105 transition-all duration-300">
                            INSCRIVEZ VOTRE ÉQUIPE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="techies-bg py-20 px-6">
        <div class="container mx-auto">
            <!-- En-tête Calendrier -->
            <div class="bg-[#CCFF00] text-black font-bold py-2 px-6 rounded-lg inline-block mb-8">
                DATES CLÉS
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Dates importantes -->
                <div class="space-y-4">
                    <div class="neon-text">
                        <span class="font-bold">Ouverture des inscriptions : </span>
                        15 février 2025
                    </div>
                    <div class="neon-text">
                        <span class="font-bold">Clôture des inscriptions : </span>
                        23 mars 2025
                    </div>
                    <div class="neon-text">
                        <span class="font-bold">Hackathon : </span>

                        23-25 mars 2025
                    </div>

                    <!-- Texte descriptif -->
                    <div class="bg-white text-black p-6 rounded-xl mt-8">
                        <p>Vous avez une passion pour l'innovation et la technologie ? Que vous soyez étudiant en informatique, en réseaux, en marketing digital ou passionné de tech, l'Innovation Days 2024 est fait pour vous ! Rejoignez-nous pour 72 heures intenses de création et d'innovation à l'INPTIC.</p>
                    </div>

                    <!-- Bouton Participer -->
                    <button class="bg-[#CCFF00] text-black font-bold py-3 px-8 rounded-lg hover:bg-[#b3ff00] transition-all mt-6">
                        JE M'INSCRIS
                    </button>

                    <!-- Section pour les participants -->
                    <div class="text-white text-center mt-8">
                        <p class="mb-4">Vous êtes étudiant, développeur, technicien réseau<br>
                            ou marketeur digital ? Formez votre équipe de 4 personnes !</p>
                        <p>Profitez d'un accompagnement personnalisé,<br>
                            de mentors experts et de nombreuses récompenses.</p>
                    </div>

                    <!-- Contact -->
                    <div class="mt-8">
                        <button class="bg-white text-black font-bold py-2 px-6 rounded-lg mb-4">
                            CONTACTEZ-NOUS
                        </button>
                        <div class="bg-[#CCFF00] text-black p-4 rounded-lg">
                            <p>Des questions sur l'événement ? Contactez-nous à contact@innovationdays.com<br>
                                ou suivez-nous sur les réseaux sociaux @INPTIC pour les dernières actualités !</p>
                        </div>
                    </div>
                </div>

                <!-- Image à droite -->
                <div class="relative">
                    <img src="assets/im3.jpg" alt="Développeur Innovation Days" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Support et Mentorat -->
    <section id="support" class="py-20 px-6 bg-gray-800">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12">Support & Mentorat</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-black p-6 rounded-lg border border-[#CCFF00]">
                    <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Accompagnement Technique</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li>✓ Mentors experts en développement</li>
                        <li>✓ Support infrastructure cloud</li>
                        <li>✓ Ressources techniques dédiées</li>
                        <li>✓ Workshops techniques</li>
                    </ul>
                </div>
                <div class="bg-black p-6 rounded-lg border border-[#CCFF00]">
                    <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Support Business</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li>✓ Conseils en business model</li>
                        <li>✓ Stratégie de mise sur le marché</li>
                        <li>✓ Pitch coaching</li>
                        <li>✓ Networking avec des experts</li>
                    </ul>
                </div>
                <div class="bg-black p-6 rounded-lg border border-[#CCFF00]">
                    <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Suivi Post-Hackathon</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li>✓ Accompagnement personnalisé</li>
                        <li>✓ Accès aux investisseurs</li>
                        <li>✓ Programme d'incubation</li>
                        <li>✓ Suivi de progression</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Processus de Soumission -->
    <section id="soumission" class="py-20 px-6">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12">Processus de Soumission</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <div class="bg-gray-800 p-6 rounded-lg">
                        <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Livrables Requis</h3>
                        <ul class="space-y-3 text-gray-300">
                            <li>✅ Prototype fonctionnel</li>
                            <li>📊 Présentation détaillée</li>
                            <li>📝 Documentation technique</li>
                            <li>🔄 Diagrammes et spécifications</li>
                            <li>💻 Code source documenté</li>
                        </ul>
                    </div>
                    <div class="bg-gray-800 p-6 rounded-lg">
                        <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Critères d'Évaluation</h3>
                        <ul class="space-y-3 text-gray-300">
                            <li>🎯 Innovation (30%) - Originalité et créativité</li>
                            <li>💡 Utilité (25%) - Impact et pertinence</li>
                            <li>🤝 Collaboration (15%) - Travail d'équipe</li>
                            <li>⚙️ Prototype (10%) - Fonctionnalité</li>
                        </ul>
                    </div>
                </div>
                <div class="space-y-6">
                    <div class="bg-gray-800 p-6 rounded-lg">
                        <h3 class="text-xl font-bold mb-4 text-[#CCFF00]">Récompenses Détaillées</h3>
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-bold text-white">Formation & Mentorat</h4>
                                <ul class="text-gray-300">
                                    <li>✨ Programme d'incubation personnalisé</li>
                                    <li>✨ Formations techniques avancées</li>
                                    <li>✨ Accès VIP aux conférences tech</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-white">Opportunités</h4>
                                <ul class="text-gray-300">
                                    <li>🌍 Learning Expeditions internationales</li>
                                    <li>📚 Abonnements premium aux plateformes</li>
                                    <li>🚀 Accompagnement business sur 6 mois</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-white">Équipement Tech</h4>
                                <ul class="text-gray-300">
                                    <li>💻 Ordinateurs dernière génération</li>
                                    <li>📱 Tablettes professionnelles</li>
                                    <li>⌚ Équipement connecté premium</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Programme -->
    <section id="programme" class="py-20 px-6 bg-gray-900">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12 neon-text">Programme</h2>

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

    <!-- Section FAQ avec carrousel -->
    <section id="faq" class="py-20 px-6 bg-black">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-4xl font-bold text-center mb-12">
                <span class="text-white">Questions</span>
                <span class="text-[#0A4DA6]">Fréquentes</span>
            </h2>

            <!-- Container FAQ avec carrousel -->
            <div class="faq-carousel relative h-[400px] overflow-hidden">
                <div class="faq-items space-y-4 transition-transform duration-500">
                    <!-- Question 1 -->
                    <div class="faq-item bg-gray-800 rounded-lg overflow-hidden">
                        <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center">
                            <span class="text-lg font-semibold">Comment former une équipe ?</span>
                            <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer px-6 py-4 bg-gray-700 hidden">
                            <p>Pour former une équipe, vous devez :</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li>Constituer une équipe de 4 personnes</li>
                                <li>Avoir 2 développeurs (front-end/back-end)</li>
                                <li>Avoir 1 technicien réseau</li>
                                <li>Avoir 1 marketeur/designer UX</li>
                                <li>Vous pouvez former votre équipe à l'avance ou sur place</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="faq-item bg-gray-800 rounded-lg overflow-hidden">
                        <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center">
                            <span class="text-lg font-semibold">Quel matériel dois-je apporter ?</span>
                            <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer px-6 py-4 bg-gray-700 hidden">
                            <p>Vous devez apporter :</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li>Votre ordinateur portable</li>
                                <li>Chargeur et adaptateurs nécessaires</li>
                                <li>Une multiprise si possible</li>
                                <li>Vos périphériques préférés (souris, clavier, etc.)</li>
                                <li>Un bloc-notes et des stylos</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="faq-item bg-gray-800 rounded-lg overflow-hidden">
                        <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center">
                            <span class="text-lg font-semibold">Quels sont les critères d'évaluation ?</span>
                            <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer px-6 py-4 bg-gray-700 hidden">
                            <p>Les projets seront évalués selon les critères suivants :</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li>Innovation (30%) - Originalité et créativité de la solution</li>
                                <li>Utilité (25%) - Impact et pertinence pour les utilisateurs</li>
                                <li>Présentation (20%) - Qualité du pitch et de la démonstration</li>
                                <li>Collaboration (15%) - Travail d'équipe et organisation</li>
                                <li>Prototype (10%) - Qualité technique et fonctionnelle</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="faq-item bg-gray-800 rounded-lg overflow-hidden">
                        <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center">
                            <span class="text-lg font-semibold">Y aura-t-il un accompagnement pendant l'événement ?</span>
                            <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer px-6 py-4 bg-gray-700 hidden">
                            <p>Oui, vous bénéficierez de :</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li>Mentors techniques et business disponibles 24/7</li>
                                <li>Workshops et sessions de formation</li>
                                <li>Support technique pour l'infrastructure</li>
                                <li>Conseils personnalisés pour votre projet</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="faq-item bg-gray-800 rounded-lg overflow-hidden">
                        <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center">
                            <span class="text-lg font-semibold">Que se passe-t-il après le hackathon ?</span>
                            <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer px-6 py-4 bg-gray-700 hidden">
                            <p>Après l'événement :</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li>Les équipes gagnantes intègrent le programme d'incubation</li>
                                <li>Possibilité de continuer le développement du projet</li>
                                <li>Mise en relation avec des investisseurs potentiels</li>
                                <li>Accès à des ressources et formations supplémentaires</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Question 6 -->
                    <div class="faq-item bg-gray-800 rounded-lg overflow-hidden">
                        <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center">
                            <span class="text-lg font-semibold">Quels sont les horaires du hackathon ?</span>
                            <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer px-6 py-4 bg-gray-700 hidden">
                            <p>Le hackathon se déroule sur 72 heures :</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li>Jour 1 : 8h00 - 18h00 (Accueil et lancement)</li>
                                <li>Jour 2 : 8h00 - 18h00 (Développement)</li>
                                <li>Jour 3 : 8h00 - 18h00 (Finalisation et présentation)</li>
                                <li>Les repas sont fournis pendant toute la durée de l'événement</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Question 7 -->
                    <div class="faq-item bg-gray-800 rounded-lg overflow-hidden">
                        <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center">
                            <span class="text-lg font-semibold">La participation est-elle gratuite ?</span>
                            <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer px-6 py-4 bg-gray-700 hidden">
                            <p>Oui, la participation est entièrement gratuite et inclut :</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li>L'accès à l'événement pendant 3 jours</li>
                                <li>Les repas et collations</li>
                                <li>L'accès aux mentors et formations</li>
                                <li>Le matériel de base nécessaire</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Question 8 -->
                    <div class="faq-item bg-gray-800 rounded-lg overflow-hidden">
                        <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center">
                            <span class="text-lg font-semibold">Puis-je participer si je suis débutant ?</span>
                            <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer px-6 py-4 bg-gray-700 hidden">
                            <p>Oui, les débutants sont les bienvenus !</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li>Des mentors seront là pour vous guider</li>
                                <li>Des workshops d'introduction seront proposés</li>
                                <li>L'important est votre motivation et créativité</li>
                                <li>Vous serez intégré dans une équipe équilibrée</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Question 9 -->
                    <div class="faq-item bg-gray-800 rounded-lg overflow-hidden">
                        <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center">
                            <span class="text-lg font-semibold">Y a-t-il une limite d'âge ?</span>
                            <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer px-6 py-4 bg-gray-700 hidden">
                            <p>Les conditions de participation sont :</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li>Âge minimum : 18 ans</li>
                                <li>Pas de limite d'âge maximum</li>
                                <li>Être étudiant ou jeune professionnel</li>
                                <li>Avoir une passion pour l'innovation</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Question 10 -->
                    <div class="faq-item bg-gray-800 rounded-lg overflow-hidden">
                        <button class="faq-button w-full px-6 py-4 text-left flex justify-between items-center">
                            <span class="text-lg font-semibold">Puis-je garder les droits de mon projet ?</span>
                            <svg class="w-6 h-6 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer px-6 py-4 bg-gray-700 hidden">
                            <p>Oui, vous gardez vos droits :</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li>Vous restez propriétaire de votre code</li>
                                <li>Vous conservez les droits de propriété intellectuelle</li>
                                <li>Possibilité de déposer des brevets</li>
                                <li>Liberté de commercialiser votre solution</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Boutons de navigation -->
                <button class="carousel-prev absolute left-1/2 top-0 transform -translate-x-1/2 bg-[#0A4DA6] text-white p-2 rounded-full opacity-50 hover:opacity-100 transition-opacity">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                </button>
                <button class="carousel-next absolute left-1/2 bottom-0 transform -translate-x-1/2 bg-[#0A4DA6] text-white p-2 rounded-full opacity-50 hover:opacity-100 transition-opacity">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
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
                borderColor: '#CCFF00',
                duration: 0.3
            },
            '.countdown-item': {
                scale: 1.1,
                backgroundColor: 'rgba(124, 58, 237, 0.2)',
                duration: 0.3
            },
            '.neon-text': {
                textShadow: '0 0 10px rgba(204, 255, 0, 0.8)',
                scale: 1.05,
                duration: 0.2
            },
            'button': {
                scale: 1.05,
                brightness: 1.2,
                duration: 0.3
            },
            '.timeline-item': {
                x: 10,
                backgroundColor: 'rgba(124, 58, 237, 0.1)',
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
                color: '#CCFF00',
                duration: 0.2
            }
        };

        // Application des animations au survol
        Object.entries(hoverElements).forEach(([selector, animation]) => {
            document.querySelectorAll(selector).forEach(element => {
                // Animation à l'entrée du survol
                element.addEventListener('mouseenter', () => {
                    gsap.to(element, {
                        ...animation,
                        ease: 'power2.out'
                    });
                });

                // Animation à la sortie du survol
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
                        color: 'initial',
                        duration: 0.2,
                        ease: 'power2.inOut'
                    });
                });
            });
        });

        // Animation spéciale pour les cartes de critères
        gsap.utils.toArray('#criteres .hover-scale').forEach(card => {
            card.addEventListener('mouseenter', () => {
                // Anime le pourcentage
                gsap.to(card.querySelector('.text-3xl'), {
                    scale: 1.2,
                    color: '#CCFF00',
                    duration: 0.3
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card.querySelector('.text-3xl'), {
                    scale: 1,
                    color: '#a78bfa',
                    duration: 0.3
                });
            });
        });

        // Animation pour les éléments de la timeline
        document.querySelectorAll('.timeline-item').forEach(item => {
            const dot = item.querySelector('::before');

            item.addEventListener('mouseenter', () => {
                gsap.to(item, {
                    x: 10,
                    backgroundColor: 'rgba(124, 58, 237, 0.1)',
                    borderLeftColor: '#CCFF00',
                    borderLeftWidth: '3px',
                    duration: 0.3
                });
            });

            item.addEventListener('mouseleave', () => {
                gsap.to(item, {
                    x: 0,
                    backgroundColor: 'transparent',
                    borderLeftColor: '#7c3aed',
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
                    color: '#CCFF00',
                    stagger: 0.1,
                    duration: 0.3
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card.querySelectorAll('li'), {
                    x: 0,
                    color: '#d1d5db',
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
                    borderColor: '#CCFF00',
                    boxShadow: '0 0 10px rgba(204, 255, 0, 0.3)',
                    duration: 0.3
                });
            });

            input.addEventListener('blur', () => {
                gsap.to(input, {
                    scale: 1,
                    borderColor: '#e5e7eb',
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

                // Toggle la réponse
                answer.classList.toggle('hidden');

                // Rotate l'icône
                icon.style.transform = answer.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';

                // Ferme les autres réponses
                document.querySelectorAll('.faq-answer').forEach(otherAnswer => {
                    if (otherAnswer !== answer && !otherAnswer.classList.contains('hidden')) {
                        otherAnswer.classList.add('hidden');
                        otherAnswer.previousElementSibling.querySelector('svg').style.transform = 'rotate(0deg)';
                    }
                });
            });
        });
    </script>
</body>

</html>