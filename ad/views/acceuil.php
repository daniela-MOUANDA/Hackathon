<?php

require_once '../bdd.php';
// Récupération du nombre de membres par rôle
$roleQuery = $pdo->query("SELECT role, COUNT(*) as count FROM membres GROUP BY role");
$roles = $roleQuery->fetchAll(PDO::FETCH_ASSOC);

// Durée moyenne depuis la création des équipes
$durationQuery = $pdo->query("SELECT AVG(DATEDIFF(NOW(), created_at)) as avg_days FROM equipes");
$avgDays = $durationQuery->fetch(PDO::FETCH_ASSOC)['avg_days'];

// Nombre d'équipes créées par jour
$teamsPerDayQuery = $pdo->query("SELECT DATE(created_at) as day, COUNT(*) as count FROM equipes GROUP BY day ORDER BY day ASC");
$teamsPerDay = $teamsPerDayQuery->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Slider pour les équipes en vedette -->
<div class="mb-6 sm:mb-8">
    <h3 class="text-lg sm:text-xl font-bold mb-4">Tableau de bord</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
            <h4 class="font-semibold mb-2">Durée moyenne des équipes</h4>
            <p class="text-2xl font-bold text-blue-600"><?php echo round($avgDays, 2); ?> jours</p>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
            <h4 class="font-semibold mb-2">Membres par rôle</h4>
            <canvas id="rolesChart"></canvas>
        </div>
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
            <h4 class="font-semibold mb-2">Équipes créées par jour</h4>
            <canvas id="teamsPerDayChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const rolesData = {
        labels: <?php echo json_encode(array_column($roles, 'role')); ?>,
        datasets: [{
            data: <?php echo json_encode(array_column($roles, 'count')); ?>,
            backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0', '#9966ff'],
        }]
    };
    new Chart(document.getElementById('rolesChart'), {
        type: 'pie',
        data: rolesData
    });

    const teamsPerDayData = {
        labels: <?php echo json_encode(array_column($teamsPerDay, 'day')); ?>,
        datasets: [{
            label: 'Équipes créées',
            data: <?php echo json_encode(array_column($teamsPerDay, 'count')); ?>,
            backgroundColor: '#36a2eb'
        }]
    };
    new Chart(document.getElementById('teamsPerDayChart'), {
        type: 'bar',
        data: teamsPerDayData
    });
</script>