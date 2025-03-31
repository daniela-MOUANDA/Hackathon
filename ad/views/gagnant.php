<?php
require_once '../bdd.php';

// Enregistrement du gagnant
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['equipe_id'], $_POST['classement'], $_POST['prix'])) {
        $equipe_id = $_POST['equipe_id'];
        $classement = $_POST['classement'];
        $prix = $_POST['prix'];

        // Récupérer le nom de l’équipe
        $stmt = $pdo->prepare("SELECT nom_equipe FROM equipes WHERE id = :id");
        $stmt->execute([':id' => $equipe_id]);
        $equipe = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($equipe) {
            $nom_equipe = $equipe['nom_equipe'];

            // Insertion dans la table gagnants
            $sql = "INSERT INTO gagnants (equipe_id, nom_equipe, classement, prix)
                    VALUES (:equipe_id, :nom_equipe, :classement, :prix)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':equipe_id' => $equipe_id,
                ':nom_equipe' => $nom_equipe,
                ':classement' => $classement,
                ':prix' => $prix
            ]);

            echo "<script>
                    alert('Gagnant enregistré avec succès !');
                    window.location.href = 'index.php?page=gagnants';
                  </script>";
            exit();
        }
    }
}

// Liste des équipes
$equipes = $pdo->query("SELECT id, nom_equipe FROM equipes")->fetchAll(PDO::FETCH_ASSOC);

// Liste des gagnants
$gagnants = $pdo->query("
    SELECT g.*, GROUP_CONCAT(CONCAT(m.nom, ' ', m.prenom) SEPARATOR ', ') AS membres
    FROM gagnants g
    JOIN membres m ON m.equipe_id = g.equipe_id
    GROUP BY g.id
    ORDER BY g.classement ASC
")->fetchAll(PDO::FETCH_ASSOC);
?>



<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Ajouter un gagnant</h2>
    <form action="" method="POST" class="space-y-4">
        <div>
            <label for="equipe_id" class="block text-sm font-medium">Équipe</label>
            <select name="equipe_id" id="equipe_id" class="w-full p-2 border rounded" required>
                <option value="">-- Sélectionner une équipe --</option>
                <?php foreach ($equipes as $equipe): ?>
                    <option value="<?= $equipe['id'] ?>"><?= htmlspecialchars($equipe['nom_equipe']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="classement" class="block text-sm font-medium">Classement</label>
            <input type="number" name="classement" id="classement" class="w-full p-2 border rounded" required min="1">
        </div>
        <div>
            <label for="prix" class="block text-sm font-medium">Prix</label>
            <input type="text" name="prix" id="prix" class="w-full p-2 border rounded" required>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded">Enregistrer</button>
    </form>
</div>

<div class="max-w-4xl mx-auto bg-white p-6 mt-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Liste des gagnants</h2>
    <table class="w-full border-collapse">
        <thead>
            <tr>
                <th class="border p-2">Nom de l'équipe</th>
                <th class="border p-2">Classement</th>
                <th class="border p-2">Prix</th>
                <th class="border p-2">Participants</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gagnants as $gagnant): ?>
                <tr>
                    <td class="border p-2"><?= htmlspecialchars($gagnant['nom_equipe']) ?></td>
                    <td class="border p-2"><?= $gagnant['classement'] ?></td>
                    <td class="border p-2"><?= htmlspecialchars($gagnant['prix']) ?></td>
                    <td class="border p-2"><?= htmlspecialchars($gagnant['membres']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
