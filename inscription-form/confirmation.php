<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full bg-gray-800 rounded-lg shadow-xl p-8">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <h2 class="mt-4 text-2xl font-bold text-[#CCFF00]">Inscription réussie !</h2>
                    <div class="mt-4 p-4 bg-gray-700 rounded-lg">
                        <p class="text-gray-300"><?php echo $_SESSION['success']; ?></p>
                        <?php if (strpos($_SESSION['success'], 'matricule') !== false): ?>
                            <div class="mt-4 p-3 bg-gray-600 rounded border border-gray-500">
                               
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mt-6">
                        <a href="https://innovationdays-inptic.com" class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold py-3 px-6 rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all">
                            Retour à l'accueil
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    <h2 class="mt-4 text-2xl font-bold text-red-400">Composition d'équipe invalide</h2>
                    <div class="mt-2 text-gray-300 text-left bg-gray-700 p-4 rounded-lg">
                        <?php echo $_SESSION['error']; ?>
                    </div>
                    <div class="mt-6 space-y-3">

                        <a href="https://innovationdays-inptic.com" class="inline-block w-full bg-gray-700 text-white font-bold py-3 px-6 rounded-lg hover:bg-gray-600 transition-all">
                            Retour à l'accueil
                        </a>
                    </div>
                </div>
            <?php endif; ?>



        </div>
    </div>
</body>

</html>
<?php
// Nettoyage des messages de session
unset($_SESSION['success']);
unset($_SESSION['error']);
?>