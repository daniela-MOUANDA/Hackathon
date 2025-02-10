<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovation Days - Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <style>
        @media (max-width: 768px) {
            .sidebar-mobile {
                transform: translateX(-100%);
                position: fixed;
                z-index: 50;
                transition: transform 0.3s ease-in-out;
            }

            .sidebar-mobile.active {
                transform: translateX(0);
            }

            .overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                z-index: 40;
            }

            .overlay.active {
                display: block;
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Overlay pour mobile -->
    <div class="overlay" id="sidebar-overlay"></div>

    <div class="flex h-screen">
        <!-- Sidebar responsive -->
        <div class="sidebar-mobile w-72 bg-gradient-to-b from-gray-800 to-gray-900 text-white lg:relative lg:translate-x-0">
            <div class="p-6">
                <div class="flex items-center mb-8">
                    <img src="logo.png" alt="Logo" class="w-10 h-10 mr-3">
                    <h2 class="text-2xl font-bold">Innovation Days</h2>
                </div>

                <nav class="space-y-2">
                    <div class="px-4 py-2 text-xs text-gray-400 uppercase">Principal</div>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg transition-all">
                        <i class="fas fa-home w-5 h-5 mr-3"></i>
                        <span>Tableau de bord</span>
                    </a>

                    <div class="px-4 py-2 text-xs text-gray-400 uppercase mt-6">Gestion</div>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg">
                        <i class="fas fa-users w-5 h-5 mr-3"></i>
                        <span>Participants</span>
                        <span class="ml-auto bg-blue-500 text-xs px-2 py-1 rounded-full">124</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg">
                        <i class="fas fa-layer-group w-5 h-5 mr-3"></i>
                        <span>Équipes</span>
                        <span class="ml-auto bg-green-500 text-xs px-2 py-1 rounded-full">31</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg">
                        <i class="fas fa-tasks w-5 h-5 mr-3"></i>
                        <span>Défis</span>
                        <span class="ml-auto bg-yellow-500 text-xs px-2 py-1 rounded-full">8</span>
                    </a>

                    <div class="px-4 py-2 text-xs text-gray-400 uppercase mt-6">Évaluation</div>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg">
                        <i class="fas fa-trophy w-5 h-5 mr-3"></i>
                        <span>Notation</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg">
                        <i class="fas fa-star w-5 h-5 mr-3"></i>
                        <span>Résultats</span>
                    </a>

                    <div class="px-4 py-2 text-xs text-gray-400 uppercase mt-6">Support</div>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg">
                        <i class="fas fa-chalkboard-teacher w-5 h-5 mr-3"></i>
                        <span>Mentorat</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg">
                        <i class="fas fa-headset w-5 h-5 mr-3"></i>
                        <span>Support</span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header responsive -->
            <header class="bg-white border-b border-gray-200">
                <div class="flex items-center justify-between px-4 py-4 sm:px-6">
                    <div class="flex items-center">
                        <button class="text-gray-500 hover:text-gray-600 lg:hidden" id="sidebar-toggle">
                            <i class="fas fa-bars"></i>
                        </button>

                    </div>

                    <div class="flex items-center space-x-4">
                        <button class="relative p-2 text-gray-400 hover:text-gray-500">
                            <i class="fas fa-bell"></i>
                            <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full"></span>
                        </button>
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/40" alt="Profile" class="w-8 h-8 rounded-full">
                            <div class="ml-3 hidden sm:block">
                                <p class="text-sm font-medium text-gray-700">Admin</p>
                                <p class="text-xs text-gray-500">Administrateur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Contenu du dashboard -->
            <main class="flex-1 overflow-y-auto p-4 sm:p-6">
                <!-- Slider pour les annonces importantes -->
                <div class="mb-6 sm:mb-8">
                    <div class="swiper announcementSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl p-4 sm:p-6 text-white">
                                    <h2 class="text-lg sm:text-2xl font-bold mb-1 sm:mb-2">Prochain événement</h2>
                                    <p class="text-sm sm:text-base">Présentation des projets le 25 Mars à 14h</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl p-4 sm:p-6 text-white">
                                    <h2 class="text-lg sm:text-2xl font-bold mb-1 sm:mb-2">Rappel important</h2>
                                    <p class="text-sm sm:text-base">Date limite de soumission : 24 Mars à 18h</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-xl p-4 sm:p-6 text-white">
                                    <h2 class="text-lg sm:text-2xl font-bold mb-1 sm:mb-2">Nouveau mentor</h2>
                                    <p class="text-sm sm:text-base">Un expert en IA rejoint l'équipe des mentors</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <!-- Slider pour les équipes en vedette -->
                <div class="mb-6 sm:mb-8">
                    <h3 class="text-lg sm:text-xl font-bold mb-4">Équipes en vedette</h3>
                    <div class="swiper teamSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <img src="https://via.placeholder.com/50" alt="Team" class="w-12 h-12 rounded-full">
                                        <div class="ml-4">
                                            <h4 class="font-semibold">Team Alpha</h4>
                                            <p class="text-sm text-gray-500">Projet : IA pour l'éducation</p>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="flex justify-between text-sm">
                                            <span>Progression</span>
                                            <span class="font-semibold">85%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-500 rounded-full h-2" style="width: 85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Autres équipes... -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <!-- Slider pour les défis actifs -->
                <div class="mb-6 sm:mb-8">
                    <h3 class="text-lg sm:text-xl font-bold mb-4">Défis actifs</h3>
                    <div class="swiper challengeSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                                    <div class="flex justify-between items-start mb-4">
                                        <h4 class="font-semibold text-lg">Innovation en IA</h4>
                                        <span class="px-2 py-1 text-xs bg-green-100 text-green-800 rounded-full">Actif</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">Développer une solution innovante utilisant l'IA</p>
                                    <div class="flex justify-between text-sm text-gray-500">
                                        <span>8 équipes participantes</span>
                                        <span>2 jours restants</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Autres défis... -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Configuration des sliders avec breakpoints améliorés
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle sidebar sur mobile
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebar = document.querySelector('.sidebar-mobile');
            const overlay = document.getElementById('sidebar-overlay');

            sidebarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('active');
                overlay.classList.toggle('active');
            });

            overlay.addEventListener('click', () => {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
            });

            // Slider pour les annonces avec config responsive
            new Swiper('.announcementSwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        spaceBetween: 30,
                    }
                }
            });

            // Slider pour les équipes avec config responsive améliorée
            new Swiper('.teamSwiper', {
                slidesPerView: 1,
                spaceBetween: 16,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    480: {
                        slidesPerView: 1.5,
                        spaceBetween: 20,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                }
            });

            // Slider pour les défis avec config responsive améliorée
            new Swiper('.challengeSwiper', {
                slidesPerView: 1,
                spaceBetween: 16,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    480: {
                        slidesPerView: 1.5,
                        spaceBetween: 20,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                }
            });
        });
    </script>
</body>

</html>