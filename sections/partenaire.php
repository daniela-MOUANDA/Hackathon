<section id="partenaires" class="py-20 px-6 ">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12 text-[#CCFF00]">Nos Partenaires</h2>

            <!-- Ajout des liens Swiper -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

            <!-- Swiper -->
            <div class="swiper partenairesSwiper">
                <div class="swiper-wrapper">
                    <!-- Partenaire 1 -->
                    <div class="swiper-slide">
                        <div class=" p-8 rounded-xl hover:bg-gray-900 transition-all duration-300 group mx-4">
                            <div class="flex justify-center items-center h-32 mb-4">
                                <img src="https://cdn-webportal.airtelstream.net/website/gabon/assets/images/airtel-french-logo.svg"
                                    alt="Logo Partenaire"
                                    class="max-h-24 max-w-full object-contain transition-all duration-300">
                            </div>
                            <h3 class="text-xl font-bold text-center text-white">AIRTEL GABON</h3>
                        </div>
                    </div>

                    <!-- Partenaire 2 -->
                    <div class="swiper-slide">
                        <div class="p-8 rounded-xl hover:bg-gray-900 transition-all duration-300 group mx-4">
                            <div class="flex justify-center items-center h-32 mb-4">
                                <img src="https://www.ubagroup.com/nigeria/wp-content/uploads/sites/3/2018/06/UBA-Logo.svg"
                                    alt="Logo Partenaire"
                                    class="max-h-24 max-w-full object-contain transition-all duration-300">
                            </div>
                            <h3 class="text-xl font-bold text-center text-white">UBA</h3>
                        </div>
                    </div>

                    <!-- Partenaire 3 -->
                    <div class="swiper-slide">
                        <div class="p-8 rounded-xl hover:bg-gray-900 transition-all duration-300 group mx-4">
                            <div class="flex justify-center items-center h-32 mb-4">
                                <img src="https://www.moov-africa.ga/PublishingImages/icon/logo.png"
                                    alt="Logo Partenaire"
                                    class="max-h-24 max-w-full object-contain transition-all duration-300">
                            </div>
                            <h3 class="text-xl font-bold text-center text-white">MOOV AFRICA GABON TELECOM</h3>
                        </div>
                    </div>

                    <!-- Partenaire 4 -->
                    <div class="swiper-slide">
                        <div class="p-8 rounded-xl hover:bg-gray-900 transition-all duration-300 group mx-4">
                            <div class="flex justify-center items-center h-32 mb-4">
                                <img src="https://www.arcep.ga/assets/img/logo.png"
                                    alt="Logo Partenaire"
                                    class="max-h-24 max-w-full object-contain transition-all duration-300">
                            </div>
                            <h3 class="text-xl font-bold text-center text-white">ARCEP</h3>
                        </div>
                    </div>

                    <!-- Partenaire 5 -->
                    <div class="swiper-slide">
                        <div class=" p-8 rounded-xl hover:bg-gray-900 transition-all duration-300 group mx-4">
                            <div class="flex justify-center items-center h-32 mb-4">
                                <img src="https://aninf.ga/wp-content/uploads/2024/07/logo_ANINF-1.png"
                                    alt="Logo Partenaire"
                                    class="max-h-24 max-w-full object-contain transition-all duration-300">
                            </div>
                            <h3 class="text-xl font-bold text-center text-white">ANINF</h3>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <style>
            .bg-gray-900\/50 {
                backdrop-filter: blur(8px);
            }

            .swiper {
                width: 100%;
                padding: 20px 0;
            }

            .swiper-pagination-bullet {
                background: #CCFF00;
            }
        </style>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".partenairesSwiper", {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
            });
        </script>
    </section>