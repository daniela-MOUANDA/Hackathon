<?php
// Requête pour récupérer les équipes
$sql = "SELECT id, nom_equipe, matricule, created_at FROM equipes ORDER BY id DESC";
$result = $pdo->query($sql);

// Compter le nombre total d'équipes
$countSql = "SELECT COUNT(*) AS total FROM equipes";
$countStmt = $pdo->query($countSql);
$totalEquipes = $countStmt->fetch(PDO::FETCH_ASSOC)['total'];

// Compter le nombre de participants (en supposant qu'il y a 4 participants par équipe)
$totalParticipants = $totalEquipes * 4;
?>

<!-- Styles scoped pour le tableau d'équipes -->
<style>
.hackathon-teams {
    font-family: 'Poppins', sans-serif;
    max-width: 900px;
    margin: 0 auto;
}

.hackathon-teams * {
    box-sizing: border-box;
}

.hackathon-teams .teams-container {
    background-color: #000;
    border-radius: 0.5rem;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    border: 1px solid #333;
    margin-bottom: 1rem;
}

.hackathon-teams .teams-header {
    position: relative;
    background: #000;
    color: white;
    padding: 1rem;
    border-bottom: 2px solidrgb(216, 70, 29);
    overflow: hidden;
}

.hackathon-teams .teams-header::before {
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

.hackathon-teams .header-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.hackathon-teams h2 {
    margin: 0;
    font-family: 'Montserrat', sans-serif;
    font-size: 1.4rem;
    color:rgb(192, 68, 14);
}

.hackathon-teams .teams-stats {
    display: flex;
    gap: 10px;
}

.hackathon-teams .stat-box {
    background-color: rgba(0, 0, 0, 0.5);
    border: 1px solid #0A4DA6;
    border-radius: 0.5rem;
    padding: 0.5rem 0.8rem;
    text-align: center;
}

.hackathon-teams .stat-number {
    font-size: 1.2rem;
    font-weight: bold;
    color: #3B82F6;
}

.hackathon-teams .stat-label {
    font-size: 0.75rem;
    color: #ccc;
}

.hackathon-teams .teams-table-container {
    padding: 1rem;
}

/* DataTables Custom Styling */
.hackathon-teams table.dataTable {
    width: 100% !important;
    margin: 0 !important;
    border-collapse: collapse;
    color: #eee;
    font-size: 0.9rem;
}

.hackathon-teams table.dataTable thead th {
    background-color: #1a1a1a;
    color:rgb(221, 69, 35);
    padding: 0.7rem;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    border-bottom: 2px solid #333;
    font-size: 0.85rem;
}

.hackathon-teams table.dataTable tbody td {
    padding: 0.6rem 0.7rem;
    border-bottom: 1px solid #333;
}

.hackathon-teams table.dataTable tbody tr:hover {
    background-color: #1a1a1a;
}

.hackathon-teams .team-matricule {
    font-family: 'Courier New', monospace;
    background-color: #0A4DA6;
    color: white;
    padding: 0.2rem 0.4rem;
    border-radius: 0.25rem;
    font-size: 0.8rem;
    letter-spacing: 1px;
    display: inline-block;
}

/* DataTables Controls */
.hackathon-teams .dataTables_wrapper .dataTables_length,
.hackathon-teams .dataTables_wrapper .dataTables_filter,
.hackathon-teams .dataTables_wrapper .dataTables_info,
.hackathon-teams .dataTables_wrapper .dataTables_paginate {
    color: #ccc;
    font-size: 0.8rem;
    margin-bottom: 0.5rem;
}

.hackathon-teams .dataTables_wrapper .dataTables_length select,
.hackathon-teams .dataTables_wrapper .dataTables_filter input {
    background-color: #1a1a1a;
    color: white;
    border: 1px solid #333;
    border-radius: 0.25rem;
    padding: 0.2rem 0.5rem;
    margin: 0 0.3rem;
}

.hackathon-teams .dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 0.2rem 0.5rem;
    border: 1px solid #333;
    background-color: #1a1a1a;
    color: #ccc !important;
    border-radius: 0.25rem;
    margin: 0 0.1rem;
}

.hackathon-teams .dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background-color: #CCFF00 !important;
    color: black !important;
    border-color:rgb(255, 34, 0);
    font-weight: bold;
}

.hackathon-teams .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: #333 !important;
    color: white !important;
    border-color: #444;
}

.hackathon-teams .dataTables_wrapper .dataTables_length,
.hackathon-teams .dataTables_wrapper .dataTables_filter {
    margin-bottom: 0.8rem;
}

/* Pour les écrans plus petits */
@media (max-width: 768px) {
    .hackathon-teams .header-content {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .hackathon-teams .teams-stats {
        margin-top: 0.5rem;
    }
    
    .hackathon-teams table.dataTable {
        font-size: 0.8rem;
    }
    
    .hackathon-teams table.dataTable thead th {
        padding: 0.5rem;
    }
    
    .hackathon-teams table.dataTable tbody td {
        padding: 0.5rem;
    }
}
</style>

<!-- Div principale pour le tableau d'équipes -->
<div class="hackathon-teams" id="inscription">
    <div class="teams-container">
        <div class="teams-header">
            <div class="header-content">
                <h2>Équipes du Hackathon</h2>
                <div class="teams-stats">
                    <div class="stat-box">
                        <div class="stat-number"><?php echo $totalEquipes; ?></div>
                        <div class="stat-label">Équipes</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number"><?php echo $totalParticipants; ?></div>
                        <div class="stat-label">Participants</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="teams-table-container">
            <table id="teamsTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>Équipe</th>
                        <th>Matricule</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result && $result->rowCount() > 0) {
                        // Afficher les données de chaque équipe
                        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            // echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . htmlspecialchars($row["nom_equipe"]) . "</td>";
                            echo "<td><span class='team-matricule'>" . htmlspecialchars($row["matricule"]) . "</span></td>";
                            echo "<td>" . date('d/m/Y', strtotime($row["created_at"])) . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

