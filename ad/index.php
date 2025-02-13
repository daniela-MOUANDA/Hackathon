<?php 
require_once '../bdd.php';


?>



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
                width: 100%;
                max-width: 300px;
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

        @media (max-width: 640px) {
            .header-title {
                font-size: 1rem;
            }

            .announcement-title {
                font-size: 1.25rem;
            }

            .announcement-text {
                font-size: 0.875rem;
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Overlay pour mobile -->
    <div class="overlay" id="sidebar-overlay">


    </div>

    <div class="flex h-screen">
        <!-- Sidebar responsive -->
        <div class="sidebar-mobile w-72 bg-gradient-to-b from-gray-800 to-gray-900 text-white lg:relative lg:translate-x-0">
            <div class="p-6">
                <div class="flex items-center mb-8">
                    <!-- <img src="../assets/logoinptic.png" alt="Logo" class="w-10 h-10 mr-3"> -->
                    <h2 class="text-2xl font-bold">
                        INNOVATION DAYS <span class="mx-90"></span> <?php echo '20' . date('y'); ?>
                    </h2>


                </div>
                <hr>

                <nav class="space-y-2">


                    <a href="index.php?page=acceuil" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg transition-all">
                        <i class="fas fa-home w-5 h-5 mr-3"></i>
                        <span>Tableau de bord</span>
                    </a>

                    <!-- /.sidebar-collapse -->
                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <?php
                                include('../sideh.php');
                                ?>
                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                </nav>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header responsive -->
            <header class="bg-white border-b border-gray-200">
                <div class="flex items-center justify-between px-2 py-2 sm:px-6 sm:py-4">
                    <div class="flex items-center space-x-2 sm:space-x-4">
                        <button class="text-gray-500 hover:text-gray-600 lg:hidden p-2" id="sidebar-toggle">
                            <i class="fas fa-bars"></i>
                        </button>
                        <img src="../assets/logoinptic.png" alt="Logo" class="w-20 h-8 sm:w-30 sm:h-10">
                        <h3 class="header-title text-base sm:text-lg font-bold hidden sm:block">BIENVENUE</h3>
                    </div>

                    <div class="flex items-center space-x-2 sm:space-x-4">
                        <!-- <button class="relative p-2 text-gray-400 hover:text-gray-500">
                            <i class="fas fa-bell text-sm sm:text-base"></i>
                            <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full"></span>
                        </button> -->
                        <!-- <div class="flex items-center">
                            <img src="https://via.placeholder.com/40" alt="Profile" class="w-6 h-6 sm:w-8 sm:h-8 rounded-full">
                            <div class="ml-2 sm:ml-3 hidden sm:block">
                                <p class="text-sm font-medium text-gray-700">Admin</p>
                                <p class="text-xs text-gray-500">Administrateur</p>
                            </div>
                        </div> -->
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





                <!-- mettre le contenu ici -->
                <?php
                if (isset($_GET['page'])) {
                    if ($_GET['page'] == "participant") {
                        include("./views/participant.php");
                    } elseif ($_GET['page'] == "acceuil") {
                        include("./views/acceuil.php");
                    } elseif ($_GET['page'] == "defi") {
                        include("./views/defi.php");
                    } elseif ($_GET['page'] == "jugement") {
                        include("./views/jugement.php");
                    } elseif ($_GET['page'] == "message") {
                        include("./views/message.php");
                    }
                }
                ?>

            </main>
        </div>
    </div>





    <script>
        // Configuration des sliders avec breakpoints améliorés
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebar = document.querySelector('.sidebar-mobile');
            const overlay = document.getElementById('sidebar-overlay');

            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                overlay.classList.toggle('active');
            });

            overlay.addEventListener('click', function() {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
            });

            // Fermer la sidebar si la fenêtre est redimensionnée au-dessus de 1024px
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 1024) {
                    sidebar.classList.remove('active');
                    overlay.classList.remove('active');
                }
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
            // new Swiper('.teamSwiper', {
            //     slidesPerView: 1,
            //     spaceBetween: 16,
            //     pagination: {
            //         el: '.swiper-pagination',
            //         clickable: true,
            //     },
            //     breakpoints: {
            //         480: {
            //             slidesPerView: 1.5,
            //             spaceBetween: 20,
            //         },
            //         640: {
            //             slidesPerView: 2,
            //             spaceBetween: 24,
            //         },
            //         1024: {
            //             slidesPerView: 3,
            //             spaceBetween: 30,
            //         }
            //     }
            // });

            // Slider pour les défis avec config responsive améliorée
            // new Swiper('.challengeSwiper', {
            //     slidesPerView: 1,
            //     spaceBetween: 16,
            //     pagination: {
            //         el: '.swiper-pagination',
            //         clickable: true,
            //     },
            //     breakpoints: {
            //         480: {
            //             slidesPerView: 1.5,
            //             spaceBetween: 20,
            //         },
            //         640: {
            //             slidesPerView: 2,
            //             spaceBetween: 24,
            //         },
            //         1024: {
            //             slidesPerView: 3,
            //             spaceBetween: 30,
            //         }
            //     }
            // });
        });
    </script>
</body>

</html>