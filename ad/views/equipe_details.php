<?php
require_once __DIR__ . '/../../bdd.php';

$equipe_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Récupérer les informations de l'équipe
$stmt = $pdo->prepare("SELECT * FROM equipes WHERE id = ?");
$stmt->execute([$equipe_id]);
$equipe = $stmt->fetch(PDO::FETCH_ASSOC);

// Récupérer les membres de l'équipe
$stmt = $pdo->prepare("SELECT * FROM membres WHERE equipe_id = ?");
$stmt->execute([$equipe_id]);
$membres = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'équipe - <?php echo htmlspecialchars($equipe['nom_equipe']); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <a href="javascript:history.back()"
            class="inline-flex items-center mb-8 px-4 py-2 bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-200 text-blue-600 hover:text-blue-700">
            <i class="fas fa-arrow-left mr-2"></i>
            <span>Retour</span>
        </a>

        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-8 py-6">
                <h1 class="text-3xl font-bold text-white mb-2">
                    <?php echo htmlspecialchars($equipe['nom_equipe']); ?>
                </h1>
                <p class="text-blue-100">
                    <?php echo htmlspecialchars($equipe['description_equipe']); ?>
                </p>
            </div>

            <div class="p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-users mr-3 text-blue-500"></i>
                    Membres de l'équipe
                </h2>

                <div class="grid gap-4 md:grid-cols-2">
                    <?php if (empty($membres)): ?>
                        <div class="col-span-2 text-center py-8">
                            <i class="fas fa-user-slash text-4xl text-gray-400 mb-3"></i>
                            <p class="text-gray-500">Aucun membre dans cette équipe.</p>
                        </div>
                    <?php else: ?>
                        <?php foreach ($membres as $membre): ?>
                            <div class="bg-gray-50 rounded-xl p-4 hover:shadow-md transition-shadow duration-200 border border-gray-100">
                                <div class="flex items-center space-x-4">
                                    <div class="bg-blue-500 rounded-full p-3">
                                        <i class="fas fa-user text-white"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-800">
                                            <?php echo htmlspecialchars($membre['nom'] . ' ' . $membre['prenom']); ?>
                                        </div>
                                        <div class="text-sm text-gray-600 flex items-center mt-1">
                                            <i class="fas fa-briefcase text-blue-400 mr-2"></i>
                                            <?php echo htmlspecialchars($membre['role']); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <!-- Section du document justificatif -->
                <div class="mt-8 pt-8 border-t border-gray-200">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-file-alt mr-3 text-blue-500"></i>
                        Document Justificatif

                    </h2>

                    <?php if (!empty($equipe['document_path'])): ?>
                        <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-3">
                                    <div class="bg-blue-100 rounded-lg p-3">
                                        <i class="fas fa-file-pdf text-blue-500 text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-800">Document de l'équipe</p>
                                        <p class="text-sm text-gray-500">Format PDF</p>
                                    </div>
                                </div>
                                <a href="https://innovationdays-inptic.com/inscription-form/<?php echo htmlspecialchars($equipe['document_path']); ?>"
                                    target="_blank"
                                    class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-200">
                                    <i class="fas fa-external-link-alt mr-2"></i>
                                    Ouvrir dans un nouvel onglet
                                </a>
                            </div>

                            <!-- Visualiseur de PDF intégré -->
                            <div class="mt-4 w-full h-[600px] rounded-lg overflow-hidden border border-gray-200">
                                <embed
                                    src="https://innovationdays-inptic.com/inscription-form//<?php echo htmlspecialchars($equipe['document_path']); ?>"
                                    type="application/pdf"
                                    width="100%"
                                    height="100%"
                                    class="w-full h-full">
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-8 bg-gray-50 rounded-xl">
                            <i class="fas fa-file-excel text-4xl text-gray-400 mb-3"></i>
                            <p class="text-gray-500">Aucun document justificatif disponible.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>