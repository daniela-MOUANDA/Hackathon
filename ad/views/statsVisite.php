<?php
require_once '../bdd.php';

// Récupérer les statistiques globales
$stats_sql = "
    SELECT 
        COUNT(*) AS total_visites,
        SUM(CASE WHEN device_type = '📱 Android' THEN 1 ELSE 0 END) AS total_android,
        SUM(CASE WHEN device_type = '📱 iPhone/iPad' THEN 1 ELSE 0 END) AS total_iphone,
        SUM(CASE WHEN device_type = '💻 Ordinateur' THEN 1 ELSE 0 END) AS total_pc
    FROM visiteurs";
$stats_stmt = $pdo->query($stats_sql);
$stats = $stats_stmt->fetch();

// Visites par jour
$stats_jour_sql = "SELECT DATE(date_visite) AS jour, COUNT(*) AS total FROM visiteurs GROUP BY jour ORDER BY jour DESC";
$stats_jour_stmt = $pdo->query($stats_jour_sql);
$stats_jour = $stats_jour_stmt->fetchAll();

// Visites par heure
$stats_heure_sql = "SELECT HOUR(date_visite) AS heure, COUNT(*) AS total FROM visiteurs GROUP BY heure ORDER BY heure ASC";
$stats_heure_stmt = $pdo->query($stats_heure_sql);
$stats_heure = $stats_heure_stmt->fetchAll();

// Récupérer toutes les visites pour DataTable
$sql = "SELECT * FROM visiteurs ORDER BY date_visite DESC";
$stmt = $pdo->query($sql);
$visiteurs = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques des visiteurs</title>
    
    <!-- Bootstrap CSS -->
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
           
            background-color: #f8f9fa;
        }

        .container {
            max-width: 95%;
            margin: auto;
        }

        .stats-box {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 20px;
        }

        .stat {
            background: white;
            padding: 15px;
            border-radius: 8px;
            width: 220px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            white-space: nowrap;
        }

        th {
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center my-4">📊 Statistiques des visiteurs</h2>

    <!-- Statistiques Globales -->
    <div class="stats-box">
        <div class="stat"><strong>Total Visites</strong><br><?= $stats['total_visites'] ?></div>
        <div class="stat"><strong>📱 Android</strong><br><?= $stats['total_android'] ?></div>
        <div class="stat"><strong>📱 iPhone/iPad</strong><br><?= $stats['total_iphone'] ?></div>
        <div class="stat"><strong>💻 Ordinateur</strong><br><?= $stats['total_pc'] ?></div>
    </div>

    <!-- Visites par Jour -->
    <div class="table-container my-4">
        <h3>📅 Visites par Jour</h3>
        <table id="tableJour" class="table table-striped">
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stats_jour as $row): ?>
                    <tr>
                        <td><?= $row['jour'] ?></td>
                        <td><?= $row['total'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Visites par Heure -->
    <div class="table-container my-4">
        <h3>⏰ Visites par Heure</h3>
        <table id="tableHeure" class="table table-striped">
            <thead>
                <tr>
                    <th>Heure</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stats_heure as $row): ?>
                    <tr>
                        <td><?= sprintf('%02d:00 - %02d:59', $row['heure'], $row['heure']) ?></td>
                        <td><?= $row['total'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Liste des visiteurs -->
    <div class="table-container my-4">
        <h3>📋 Liste des visiteurs</h3>
        <table id="visiteursTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IP</th>
                    <th>Page visitée</th>
                    <th>Référent</th>
                    <th>Appareil</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visiteurs as $visiteur): ?>
                    <tr>
                        <td><?= $visiteur['id'] ?></td>
                        <td><?= $visiteur['ip'] ?></td>
                        <td><?= $visiteur['page'] ?></td>
                        <td><?= $visiteur['referer'] ?></td>
                        <td><?= $visiteur['device_type'] ?></td>
                        <td><?= $visiteur['date_visite'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- jQuery et DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#visiteursTable, #tableJour, #tableHeure').DataTable({
            "pageLength": 10,
            "ordering": true,
            "autoWidth": false,
            "language": {
                "lengthMenu": "Afficher _MENU_ entrées par page",
                "zeroRecords": "Aucune donnée trouvée",
                "info": "Page _PAGE_ sur _PAGES_",
                "infoEmpty": "Aucune donnée disponible",
                "infoFiltered": "(filtré sur _MAX_ entrées)",
                "search": "🔍 Rechercher :",
                "paginate": {
                    "first": "Premier",
                    "last": "Dernier",
                    "next": "Suivant",
                    "previous": "Précédent"
                }
            }
        });
    });
</script>

</body>
</html>
