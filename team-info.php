<?php
require_once 'bdd.php';

if (!isset($_GET['matricule'])) {
    die("Matricule non fourni");
}

$matricule = $_GET['matricule'];

try {
    // Récupération des informations de l'équipe
    $stmt = $pdo->prepare("
        SELECT e.*, m.* 
        FROM equipes e 
        LEFT JOIN membres m ON e.id = m.equipe_id 
        WHERE e.matricule = ?
    ");
    $stmt->execute([$matricule]);
    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($resultats)) {
        die("Équipe non trouvée");
    }

    // Organisation des données
    $equipe = [
        'nom_equipe' => $resultats[0]['nom_equipe'],
        'description_equipe' => $resultats[0]['description_equipe'],
        'matricule' => $resultats[0]['matricule'],
        'membres' => []
    ];

    foreach ($resultats as $membre) {
        $equipe['membres'][] = [
            'nom' => $membre['nom'],
            'prenom' => $membre['prenom'],
            'role' => $membre['role'],
            'is_chef' => $membre['is_chef']
        ];
    }
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Information de l'équipe - <?php echo htmlspecialchars($equipe['nom_equipe']); ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
            body {
                background: #f8f9fa;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .main-card {
                border: none;
                border-radius: 15px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                margin-bottom: 30px;
            }

            .card-header {
                background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
                color: white;
                border-radius: 15px 15px 0 0 !important;
                padding: 2rem;
            }

            .card-header h2 {
                margin: 0;
                font-weight: 600;
            }

            .member-card {
                border: none;
                border-radius: 12px;
                box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
                transition: transform 0.2s ease-in-out;
            }

            .member-card:hover {
                transform: translateY(-5px);
            }

            .member-card .card-body {
                padding: 1.5rem;
            }

            .badge {
                padding: 0.5em 1em;
                font-weight: 500;
            }

            .role-badge {
                background-color: #e2e8f0;
                color: #475569;
                font-size: 0.85rem;
                padding: 0.4em 1em;
                border-radius: 20px;
            }

            .description-section {
                background: white;
                padding: 2rem;
                border-radius: 12px;
                margin-bottom: 2rem;
            }

            .team-info {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                background: rgba(255, 255, 255, 0.1);
                padding: 0.5rem 1rem;
                border-radius: 30px;
                margin-top: 10px;
            }

            .section-title {
                color: #1e293b;
                font-weight: 600;
                margin-bottom: 1.5rem;
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .section-title i {
                color: #6366f1;
            }
        </style>
    </head>

    <body>
        <div class="container py-5">
            <div class="card main-card">
                <div class="card-header">
                    <h2><?php echo htmlspecialchars($equipe['nom_equipe']); ?></h2>
                    <div class="team-info">
                        <i class="fas fa-fingerprint"></i>
                        <span>Matricule: <?php echo htmlspecialchars($equipe['matricule']); ?></span>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="description-section">
                    <h2 class="section-title">
                            <i class="fas fa-info-circle"></i>
                            INNOVATION DAYS 2025
                        </h2>
                        <h4 class="section-title">
                            <i class="fas fa-info-circle"></i>
                            Description de l'équipe
                        </h4>
                        <p class="lead"><?php echo nl2br(htmlspecialchars($equipe['description_equipe'])); ?></p>
                    </div>

                    <h4 class="section-title">
                        <i class="fas fa-users"></i>
                        Membres de l'équipe
                    </h4>
                    <div class="row g-4">
                        <?php foreach ($equipe['membres'] as $membre): ?>
                            <div class="col-md-6">
                                <div class="card member-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h5 class="card-title mb-3">
                                                <?php echo htmlspecialchars($membre['prenom'] . ' ' . $membre['nom']); ?>
                                            </h5>
                                            <?php if ($membre['is_chef']): ?>
                                                <span class="badge bg-primary">
                                                    <i class="fas fa-crown"></i> Chef d'équipe
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="role-badge">
                                            <i class="fas fa-user-tag"></i>
                                            <?php echo htmlspecialchars(ucfirst(str_replace('_', ' ', $membre['role']))); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

<?php
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>