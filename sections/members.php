<?php
// Définition des images avec légendes
$logos = [
    ["src" => "photoinptic/_MG_4250.jpg", "alt" => "Président du comité d'organisation : Landry BADIALI"],
    ["src" => "photoinptic/_MG_4285.jpg", "alt" => "Vice-Président du comité d'organisation : Davy MOUSSAVOU"],
    ["src" => "photoinptic/_MG_4523.jpg", "alt" => "Coordinateur général du comité d'organisation : Gildas MOUKAGNI"],
    ["src" => "photoinptic/_MG_4611.jpg", "alt" => ""],
    ["src" => "photoinptic/_MG_4632.jpg", "alt" => ""],
    ["src" => "photoinptic/_MG_4647.jpg", "alt" => ""],
    ["src" => "photoinptic/_MG_4667.jpg", "alt" => ""],
    ["src" => "photoinptic/_MG_4680.jpg", "alt" => ""],
    ["src" => "photoinptic/_MG_4739.jpg", "alt" => ""],
    ["src" => "photoinptic/_MG_4742.jpg", "alt" => ""]
];
?>

    <style>
        /* ======= STYLE GLOBAL ======= */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #111827;
            margin: 0;
            padding: 0;
            color: white;
            text-align: center;
        }

        /* ======= CONTENEUR PRINCIPAL ======= */
        .carousel-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .carousel-container {
            position: relative;
            width: 350px;
            height: 500px;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0px 8px 15px rgba(255, 255, 255, 0.1);
            background: #1f2937;
        }

        /* ======= SLIDER ======= */
        .carousel-track {
            display: flex;
            transition: transform 0.8s ease-in-out;
        }

        .carousel-item {
            min-width: 100%;
            text-align: center;
            padding: 10px;
        }

        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        .caption {
            font-size: 1rem;
            font-weight: bold;
            margin-top: 10px;
        }

        /* ======= BOUTONS DE NAVIGATION ======= */
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.7);
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
            font-size: 1.5rem;
        }

        .carousel-btn:hover {
            background: rgba(255, 255, 255, 1);
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        /* ======= RESPONSIVE ======= */
        @media (max-width: 768px) {
            .carousel-container {
                width: 300px;
                height: 450px;
            }

            .carousel-item img {
                height: 350px;
            }
        }
    </style>
 <h2 class="text-4xl font-bold text-center mb-12 text-[#78cad2]">Galerie Photos</h2>

    <div class="carousel-wrapper">
        <!-- Carrousel -->
        <div class="carousel-container">
            <div class="carousel-track">
                <?php foreach ($logos as $logo): ?>
                    <div class="carousel-item">
                        <img src="<?php echo $logo['src']; ?>" alt="<?php echo $logo['alt']; ?>">
                        <p class="caption"><?php echo !empty($logo['alt']) ? $logo['alt'] : ""; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-btn prev">&#10094;</button>
            <button class="carousel-btn next">&#10095;</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.carousel-track');
            const items = document.querySelectorAll('.carousel-item');
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');
            let index = 0;
            let autoPlayInterval;

            function updateCarousel() {
                track.style.transform = `translateX(-${index * 100}%)`;
            }

            function startAutoplay() {
                autoPlayInterval = setInterval(() => {
                    index = (index + 1) % items.length;
                    updateCarousel();
                }, 3000);
            }

            function stopAutoplay() {
                clearInterval(autoPlayInterval);
            }

            nextBtn.addEventListener('click', () => {
                index = (index + 1) % items.length;
                updateCarousel();
                stopAutoplay();
                startAutoplay();
            });

            prevBtn.addEventListener('click', () => {
                index = (index - 1 + items.length) % items.length;
                updateCarousel();
                stopAutoplay();
                startAutoplay();
            });

            document.querySelector('.carousel-container').addEventListener('mouseenter', stopAutoplay);
            document.querySelector('.carousel-container').addEventListener('mouseleave', startAutoplay);

            // Auto-play au démarrage
            startAutoplay();
        });
    </script>
