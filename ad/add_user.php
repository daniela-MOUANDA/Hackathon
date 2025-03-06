<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100 p-4">
    <!-- Conteneur principal -->
    <div class="w-full max-w-4xl space-y-8">
        <!-- Formulaire d'ajout d'utilisateur -->
        <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-2xl font-bold text-center text-gray-800">Ajouter un utilisateur</h2>
            <form action="adU.php" method="POST">
                <!-- Champ Email -->
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <!-- Champ Mot de passe -->
                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Mot de passe</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <!-- Champ Rôle -->
                <div class="mb-4">
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-700">Rôle</label>
                    <select id="role" name="role" required
                        class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="dg">DG</option>
                        <option value="dep">DEP</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

                <!-- Bouton Ajouter -->
                <button type="submit"
                    class="w-full px-4 py-2 font-bold text-white bg-green-500 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                    Ajouter
                </button>
            </form>
        </div>

        <!-- Liste des utilisateurs -->
        <div class="w-full max-w-xl p-6 bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-2xl font-bold text-center text-gray-800">Liste des utilisateurs</h2>
            <table class="w-full text-left">
                <thead>
                    <tr class="border-b">
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Rôle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once '../bdd.php'; // Inclure la connexion à la base de données

                    // Récupérer la liste des utilisateurs
                    $stmt = $pdo->query("SELECT email, role FROM users");
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr class='border-b hover:bg-gray-50'>";
                        echo "<td class='px-4 py-2'>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td class='px-4 py-2'>" . htmlspecialchars($row['role']) . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
