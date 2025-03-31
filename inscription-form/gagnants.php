<?php
// Requête pour récupérer les gagnants
$sql = "SELECT g.id, g.equipe_id, g.nom_equipe, g.classement, g.prix, e.matricule, g.created_at
        FROM gagnants g 
        LEFT JOIN equipes e ON g.equipe_id = e.id 
        ORDER BY g.classement ASC";
$result = $pdo->query($sql);

// Compter le nombre total de gagnants
$countSql = "SELECT COUNT(*) AS total FROM gagnants";
$countStmt = $pdo->query($countSql);
$totalGagnants = $countStmt->fetch(PDO::FETCH_ASSOC)['total'];

// Compter le nombre total d'équipes
$countEquipesSql = "SELECT COUNT(*) AS total FROM equipes";
$countEquipesStmt = $pdo->query($countEquipesSql);
$totalEquipes = $countEquipesStmt->fetch(PDO::FETCH_ASSOC)['total'];

// Stocker les résultats pour l'accès dans le format mobile
$gagnants = [];
if ($result && $result->rowCount() > 0) {
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        // Récupérer les membres de l'équipe
        $membresSql = "SELECT nom, prenom FROM membres WHERE equipe_id = :equipe_id ORDER BY nom, prenom";
        $membresStmt = $pdo->prepare($membresSql);
        $membresStmt->execute([':equipe_id' => $row["equipe_id"]]);
        $membres = $membresStmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Ajouter les membres à la ligne
        $row['membres'] = $membres;
        $gagnants[] = $row;
    }
}
?>

<!-- Styles scoped pour le tableau des gagnants -->
<style>
.hackathon-winners {
    font-family: 'Poppins', sans-serif;
    max-width: 900px;
    margin: 0 auto;
}

.hackathon-winners * {
    box-sizing: border-box;
}

.hackathon-winners .winners-container {
    background-color: #000;
    border-radius: 0.5rem;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    border: 1px solid #333;
    margin-bottom: 1rem;
}

.hackathon-winners .winners-header {
    position: relative;
    background: #000;
    color: white;
    padding: 1rem;
    border-bottom: 2px solid rgb(216, 70, 29);
    overflow: hidden;
}

.hackathon-winners .winners-header::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: linear-gradient(to bottom right, rgba(10, 77, 166, 0.8), rgba(0, 0, 0, 0.9));
    opacity: 0.8;
    z-index: 0;
}

.hackathon-winners .header-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.hackathon-winners h2 {
    margin: 0;
    font-family: 'Montserrat', sans-serif;
    font-size: 1.4rem;
    color: rgb(192, 68, 14);
}

.hackathon-winners .winners-stats {
    display: flex;
    gap: 10px;
}

.hackathon-winners .stat-box {
    background-color: rgba(0, 0, 0, 0.5);
    border: 1px solid #0A4DA6;
    border-radius: 0.5rem;
    padding: 0.5rem 0.8rem;
    text-align: center;
}

.hackathon-winners .stat-number {
    font-size: 1.2rem;
    font-weight: bold;
    color: #3B82F6;
}

.hackathon-winners .stat-label {
    font-size: 0.75rem;
    color: #ccc;
}

/* Styles pour le message de remerciement */
.hackathon-winners .thank-you-message {
    background: linear-gradient(to right, rgba(0, 0, 0, 0.9), rgba(10, 77, 166, 0.2));
    padding: 1.5rem;
    color: #fff;
    border-bottom: 1px solid #333;
}

.hackathon-winners .thank-you-content {
    max-width: 800px;
    margin: 0 auto;
}

.hackathon-winners .thank-you-content h3 {
    color: rgb(221, 69, 35);
    font-size: 1.3rem;
    margin-top: 0;
    margin-bottom: 1rem;
    font-family: 'Montserrat', sans-serif;
}

.hackathon-winners .thank-you-content p {
    line-height: 1.6;
    margin-bottom: 1rem;
    color: #ddd;
}

.hackathon-winners .next-edition {
    display: inline-block;
    margin-top: 1rem;
    padding: 0.8rem 1.5rem;
    background-color: rgba(0, 0, 0, 0.6);
    border: 1px solid rgb(221, 69, 35);
    border-radius: 4px;
    text-align: center;
}

.hackathon-winners .next-edition-label {
    display: block;
    font-size: 0.8rem;
    color: #ddd;
    margin-bottom: 0.3rem;
}

.hackathon-winners .next-edition-date {
    display: block;
    font-size: 1.5rem;
    font-weight: bold;
    color: #CCFF00;
}

/* Styles pour le tableau sur desktop */
.hackathon-winners .winners-table-container {
    padding: 1rem;
}

.hackathon-winners table.dataTable {
    width: 100% !important;
    margin: 0 !important;
    border-collapse: collapse;
    color: #eee;
    font-size: 0.9rem;
}

.hackathon-winners table.dataTable thead th {
    background-color: #1a1a1a;
    color: rgb(221, 69, 35);
    padding: 0.7rem;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    border-bottom: 2px solid #333;
    font-size: 0.85rem;
}

.hackathon-winners table.dataTable tbody td {
    padding: 0.6rem 0.7rem;
    border-bottom: 1px solid #333;
}

.hackathon-winners table.dataTable tbody tr:hover {
    background-color: #1a1a1a;
}

.hackathon-winners .classement {
    font-weight: bold;
    font-size: 1.2rem;
    text-align: center;
}

.hackathon-winners .classement-1 {
    color: gold;
}

.hackathon-winners .classement-2 {
    color: silver;
}

.hackathon-winners .classement-3 {
    color: #cd7f32; /* bronze */
}

.hackathon-winners .prix {
    color: #CCFF00;
    font-weight: bold;
}

.hackathon-winners .team-matricule {
    font-family: 'Courier New', monospace;
    background-color: #0A4DA6;
    color: white;
    padding: 0.2rem 0.4rem;
    border-radius: 0.25rem;
    font-size: 0.8rem;
    letter-spacing: 1px;
    display: inline-block;
}

/* Styles pour l'affichage en cartes sur mobile */
.hackathon-winners .winners-cards-container {
    padding: 1rem;
    display: none; /* Caché par défaut, affiché uniquement sur mobile */
}

.hackathon-winners .winner-card {
    background-color: #1a1a1a;
    border-radius: 0.5rem;
    overflow: hidden;
    margin-bottom: 1rem;
    border: 1px solid #333;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
}

.hackathon-winners .card-header {
    position: relative;
    display: flex;
    padding: 1rem;
    background: linear-gradient(to right, rgba(10, 77, 166, 0.2), rgba(0, 0, 0, 0.9));
    border-bottom: 1px solid #333;
}

.hackathon-winners .card-classement {
    position: absolute;
    left: 15px;
    top: 15px;
    font-size: 1.5rem;
    font-weight: bold;
    width: 2.2rem;
    height: 2.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: #000;
}

.hackathon-winners .card-classement-1 {
    color: gold;
    border: 2px solid gold;
}

.hackathon-winners .card-classement-2 {
    color: silver;
    border: 2px solid silver;
}

.hackathon-winners .card-classement-3 {
    color: #cd7f32;
    border: 2px solid #cd7f32;
}

.hackathon-winners .card-team-info {
    width: 100%;
    text-align: center;
    padding-top: 5px;
}

.hackathon-winners .card-team-name {
    font-size: 1.3rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

.hackathon-winners .card-matricule {
    margin: 0.5rem 0;
    display: inline-block;
}

.hackathon-winners .card-prize {
    font-size: 1rem;
    color: #CCFF00;
    font-weight: bold;
    margin-top: 0.5rem;
}

.hackathon-winners .card-members {
    padding: 1rem;
}

.hackathon-winners .card-members-title {
    font-size: 0.9rem;
    color: #ccc;
    margin-bottom: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
    border-bottom: 1px solid #333;
    padding-bottom: 5px;
}

.hackathon-winners .card-member {
    background-color: rgba(0, 0, 0, 0.3);
    padding: 0.5rem 0.8rem;
    margin-bottom: 0.5rem;
    border-radius: 0.25rem;
    font-size: 0.9rem;
    text-align: center;
}

/* DataTables Controls */
.hackathon-winners .dataTables_wrapper .dataTables_length,
.hackathon-winners .dataTables_wrapper .dataTables_filter,
.hackathon-winners .dataTables_wrapper .dataTables_info,
.hackathon-winners .dataTables_wrapper .dataTables_paginate {
    color: #ccc;
    font-size: 0.8rem;
    margin-bottom: 0.5rem;
}

.hackathon-winners .dataTables_wrapper .dataTables_length select,
.hackathon-winners .dataTables_wrapper .dataTables_filter input {
    background-color: #1a1a1a;
    color: white;
    border: 1px solid #333;
    border-radius: 0.25rem;
    padding: 0.2rem 0.5rem;
    margin: 0 0.3rem;
}

.hackathon-winners .dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 0.2rem 0.5rem;
    border: 1px solid #333;
    background-color: #1a1a1a;
    color: #ccc !important;
    border-radius: 0.25rem;
    margin: 0 0.1rem;
}

.hackathon-winners .dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background-color: #CCFF00 !important;
    color: black !important;
    border-color: rgb(255, 34, 0);
    font-weight: bold;
}

.hackathon-winners .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: #333 !important;
    color: white !important;
    border-color: #444;
}

/* Responsive Layout */
@media (max-width: 768px) {
    .hackathon-winners .header-content {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .hackathon-winners .winners-stats {
        margin-top: 0.5rem;
    }
    
    .hackathon-winners .thank-you-message {
        padding: 1rem;
    }
    
    .hackathon-winners .thank-you-content h3 {
        font-size: 1.1rem;
    }
    
    .hackathon-winners .thank-you-content p {
        font-size: 0.9rem;
        line-height: 1.4;
    }
    
    .hackathon-winners .next-edition {
        padding: 0.6rem 1rem;
        margin-top: 0.8rem;
    }
    
    /* Basculer entre l'affichage tableau et cartes */
    .hackathon-winners .winners-table-container {
        display: none; /* Cacher le tableau sur mobile */
    }
    
    .hackathon-winners .winners-cards-container {
        display: block; /* Afficher les cartes sur mobile */
    }
}

@media (max-width: 576px) {
    .hackathon-winners h2 {
        font-size: 1.2rem;
    }
    
    .hackathon-winners .stat-box {
        padding: 0.3rem 0.5rem;
    }
    
    .hackathon-winners .stat-number {
        font-size: 1rem;
    }
    
    .hackathon-winners .stat-label {
        font-size: 0.7rem;
    }
    
    .hackathon-winners .thank-you-content h3 {
        font-size: 1rem;
    }
    
    .hackathon-winners .thank-you-content p {
        font-size: 0.85rem;
    }
    
    .hackathon-winners .next-edition-date {
        font-size: 1.2rem;
    }
    
    .hackathon-winners .next-edition {
        width: 100%;
        text-align: center;
    }
}
</style>

<!-- Div principale pour le tableau des gagnants -->
<div class="hackathon-winners" id="gagnants">
    <div class="winners-container">
        <div class="winners-header">
            <div class="header-content">
                <h2>Gagnants du Hackathon</h2>
                <div class="winners-stats">
                    <div class="stat-box">
                        <div class="stat-number"><?php echo $totalGagnants; ?></div>
                        <div class="stat-label">Gagnants</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number"><?php echo $totalEquipes; ?></div>
                        <div class="stat-label">Équipes</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Message de remerciement et annonce de la prochaine édition -->
        <div class="thank-you-message">
            <div class="thank-you-content">
                <h3>Merci à tous les participants !</h3>
                <p>Nous tenons à remercier chaleureusement toutes les équipes qui ont participé à cette édition du Hackathon. Votre créativité, votre persévérance et votre talent ont fait de cet événement un véritable succès.</p>
                <p>Nous sommes fiers d'annoncer qu'une nouvelle édition du Hackathon aura lieu l'année prochaine avec de nouveaux défis et de nouvelles opportunités. Restez connectés pour plus d'informations !</p>
                <div class="next-edition">
                    <span class="next-edition-label">Prochaine édition</span>
                    <span class="next-edition-date">2026</span>
                </div>
            </div>
        </div>
        
        <!-- Vue tableau pour Desktop -->
        <div class="winners-table-container">
            <table id="winnersTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Classement</th>
                        <th>Équipe</th>
                        <th>Matricule</th>
                        <th>Prix</th>
                        <th>Participants</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($gagnants as $gagnant) {
                        echo "<tr>";
                        echo "<td class='classement classement-" . $gagnant["classement"] . "'>" . $gagnant["classement"] . "</td>";
                        echo "<td>" . htmlspecialchars($gagnant["nom_equipe"]) . "</td>";
                        echo "<td><span class='team-matricule'>" . htmlspecialchars($gagnant["matricule"]) . "</span></td>";
                        echo "<td class='prix'>" . htmlspecialchars($gagnant["prix"]) . "</td>";
                        
                        // Afficher les membres
                        echo "<td>";
                        foreach ($gagnant['membres'] as $membre) {
                            echo htmlspecialchars($membre["nom"]) . " " . htmlspecialchars($membre["prenom"]) . "<br>";
                        }
                        echo "</td>";
                        
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
        <!-- Vue cartes pour Mobile -->
        <div class="winners-cards-container">
            <?php foreach ($gagnants as $gagnant): ?>
                <div class="winner-card">
                    <div class="card-header">
                        <div class="card-classement card-classement-<?php echo $gagnant['classement']; ?>">
                            <?php echo $gagnant['classement']; ?>
                        </div>
                        <div class="card-team-info">
                            <div class="card-team-name"><?php echo htmlspecialchars($gagnant['nom_equipe']); ?></div>
                            <div class="card-matricule"><span class="team-matricule"><?php echo htmlspecialchars($gagnant['matricule']); ?></span></div>
                            <div class="card-prize"><?php echo htmlspecialchars($gagnant['prix']); ?></div>
                        </div>
                    </div>
                    <div class="card-members">
                        <div class="card-members-title">PARTICIPANTS</div>
                        <?php foreach ($gagnant['membres'] as $membre): ?>
                            <div class="card-member">
                                <?php echo htmlspecialchars($membre['nom']) . ' ' . htmlspecialchars($membre['prenom']); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Script pour initialiser DataTables -->
<script>
    $(document).ready(function() {
        $('#winnersTable').DataTable({
            responsive: true,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/French.json'
            },
            "order": [[ 0, "asc" ]], // Trier par classement (croissant)
            "pageLength": 10
        });
    });
</script>