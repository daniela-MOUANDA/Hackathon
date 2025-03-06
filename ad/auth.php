<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Style pour mettre la vidéo en arrière-plan */
        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Assure que la vidéo reste derrière le contenu */
        }

        /* Pour centrer le formulaire */
        .content-wrapper {
            position: relative;
            z-index: 1; /* Assure que le formulaire est devant la vidéo */
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

    <!-- Vidéo en arrière-plan -->
    <video autoplay muted loop playsinline class="video-background">
        <source src="../assets/v3.mp4" type="video/mp4">
    </video>

    <!-- Contenu du formulaire -->
    <div class="content-wrapper w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
        <h2 class="mb-4 text-2xl font-bold text-center text-gray-800">Connexion</h2>
        <form action="login.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Mot de passe</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <button type="submit"
                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Connexion
            </button>
        </form>
    </div>

</body>
</html>
