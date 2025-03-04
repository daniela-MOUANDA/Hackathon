<style>
    .table-container {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    .table th, .table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
        text-align: left;
    }
    .table thead {
        background-color: #007bff;
        color: #fff;
    }
    .table tbody tr:hover {
        background-color: #f9f9f9;
    }
    .btn-primary {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        padding: 8px 12px;
        text-decoration: none;
        border-radius: 5px;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .alert-warning {
        background-color: #ffc107;
        color: #856404;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .table-container {
            padding: 10px;
        }
        .table th, .table td {
            padding: 8px 10px;
            font-size: 14px;
        }
        .btn-primary {
            padding: 6px 10px;
            font-size: 14px;
        }
    }
</style>

<div class="container mt-5">
    <div class="table-container">
        <h2 class="mb-4">Liste des QR codes : télécharger pour en faire un Badge</h2>
        <?php
        // Connexion à la base de données
        require_once '../bdd.php';

        // Répertoire contenant les QR codes
        $directory = '../inscription-form/qrcodeBadge';
        $files = array_diff(scandir($directory), array('..', '.'));

        if (empty($files)) {
            echo "<div class='alert-warning'>Aucun fichier QR code trouvé.</div>";
        } else {
            echo "<div class='table-responsive'>";
            echo "<table class='table'>";
            echo "<thead><tr><th>Nom de l'équipe</th><th>Nom du fichier</th><th>Action</th></tr></thead>";
            echo "<tbody>";

            foreach ($files as $file) {
                $filePath = $directory . '/' . $file;

                // Extraire le matricule depuis le nom du fichier (en enlevant le premier caractère '_')
                $matricule = str_replace('.png', '', ltrim($file, '_'));

                // Rechercher le nom de l'équipe correspondant dans la base de données
                $stmt = $pdo->prepare("SELECT nom_equipe FROM equipes WHERE matricule = :matricule");
                $stmt->execute(['matricule' => $matricule]);
                $equipe = $stmt->fetch(PDO::FETCH_ASSOC);

                $equipeNom = $equipe['nom_equipe'] ?? 'Équipe inconnue';

                echo "<tr>
                        <td>{$equipeNom}</td>
                        <td>{$file}</td>
                        <td><a href='{$filePath}' download class='btn-primary'>Télécharger</a></td>
                    </tr>";
            }

            echo "</tbody></table>";
            echo "</div>";
        }
        ?>
    </div>
</div>
