<?php
require_once '../bdd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        if (isset($_POST['delete'])) {
            // Suppression de l'annonce
            $id = $_POST['id'];
            $sql = "DELETE FROM announcements WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);

            echo "<script>
                    alert('Annonce supprimée avec succès !');
                    window.location.href = 'https://innovationdays-inptic.com/ad/index.php?page=annonce';
                  </script>";
            exit();
        } else {
            // Mise à jour de l'annonce existante
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $gradient_from = $_POST['gradient_from'];
            $gradient_to = $_POST['gradient_to'];

            $sql = "UPDATE announcements SET title = :title, description = :description, gradient_from = :gradient_from, gradient_to = :gradient_to WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':title' => $title,
                ':description' => $description,
                ':gradient_from' => $gradient_from,
                ':gradient_to' => $gradient_to,
                ':id' => $id
            ]);

            echo "<script>
                    alert('Annonce modifiée avec succès !');
                    window.location.href = 'https://innovationdays-inptic.com/ad/index.php?page=annonce';
                  </script>";
            exit();
        }
    } else {
        // Ajout d'une nouvelle annonce
        $title = $_POST['title'];
        $description = $_POST['description'];
        $gradient_from = $_POST['gradient_from'];
        $gradient_to = $_POST['gradient_to'];

        $sql = "INSERT INTO announcements (title, description, gradient_from, gradient_to) 
                VALUES (:title, :description, :gradient_from, :gradient_to)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':title' => $title,
            ':description' => $description,
            ':gradient_from' => $gradient_from,
            ':gradient_to' => $gradient_to
        ]);

        echo "<script>
                alert('Annonce ajoutée avec succès !');
                window.location.href = 'https://innovationdays-inptic.com/ad/index.php?page=annonce';
              </script>";
        exit();
    }
}

// Récupérer les annonces de la base de données
$sql = "SELECT * FROM announcements";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$announcements = $stmt->fetchAll(PDO::FETCH_ASSOC);

$editAnnouncement = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM announcements WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    $editAnnouncement = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-md">
    <h2 class="text-2xl font-bold mb-4"><?php echo $editAnnouncement ? 'Modifier l\'annonce' : 'Ajouter une annonce'; ?></h2>
    <form action="" method="POST" class="space-y-4">
        <?php if ($editAnnouncement): ?>
            <input type="hidden" name="id" value="<?php echo $editAnnouncement['id']; ?>">
        <?php endif; ?>
        <div>
            <label for="title" class="block text-sm font-medium">Titre de l'annonce</label>
            <input type="text" id="title" name="title" class="w-full mt-1 p-2 border rounded-md" value="<?php echo $editAnnouncement ? htmlspecialchars($editAnnouncement['title']) : ''; ?>" required>
        </div>
        <div>
            <label for="description" class="block text-sm font-medium">Description</label>
            <textarea id="description" name="description" rows="4" class="w-full mt-1 p-2 border rounded-md" required><?php echo $editAnnouncement ? htmlspecialchars($editAnnouncement['description']) : ''; ?></textarea>
        </div>
        <div>
            <label for="gradient_from" class="block text-sm font-medium">Couleur de début du dégradé</label>
            <select id="gradient_from" name="gradient_from" class="w-full mt-1 p-2 border rounded-md" required>
                <option value="blue-500" <?php echo $editAnnouncement && $editAnnouncement['gradient_from'] == 'blue-500' ? 'selected' : ''; ?>>Bleu (500)</option>
                <option value="purple-500" <?php echo $editAnnouncement && $editAnnouncement['gradient_from'] == 'purple-500' ? 'selected' : ''; ?>>Violet (500)</option>
                <option value="green-500" <?php echo $editAnnouncement && $editAnnouncement['gradient_from'] == 'green-500' ? 'selected' : ''; ?>>Vert (500)</option>
                <option value="red-500" <?php echo $editAnnouncement && $editAnnouncement['gradient_from'] == 'red-500' ? 'selected' : ''; ?>>Rouge (500)</option>
                <option value="yellow-500" <?php echo $editAnnouncement && $editAnnouncement['gradient_from'] == 'yellow-500' ? 'selected' : ''; ?>>Jaune (500)</option>
            </select>
        </div>
        <div>
            <label for="gradient_to" class="block text-sm font-medium">Couleur de fin du dégradé</label>
            <select id="gradient_to" name="gradient_to" class="w-full mt-1 p-2 border rounded-md" required>
                <option value="blue-500" <?php echo $editAnnouncement && $editAnnouncement['gradient_to'] == 'blue-500' ? 'selected' : ''; ?>>Bleu (500)</option>
                <option value="purple-500" <?php echo $editAnnouncement && $editAnnouncement['gradient_to'] == 'purple-500' ? 'selected' : ''; ?>>Violet (500)</option>
                <option value="green-500" <?php echo $editAnnouncement && $editAnnouncement['gradient_to'] == 'green-500' ? 'selected' : ''; ?>>Vert (500)</option>
                <option value="red-500" <?php echo $editAnnouncement && $editAnnouncement['gradient_to'] == 'red-500' ? 'selected' : ''; ?>>Rouge (500)</option>
                <option value="yellow-500" <?php echo $editAnnouncement && $editAnnouncement['gradient_to'] == 'yellow-500' ? 'selected' : ''; ?>>Jaune (500)</option>
            </select>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md"><?php echo $editAnnouncement ? 'Modifier' : 'Ajouter'; ?></button>
    </form>
</div>

<div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-md mt-8">
    <h2 class="text-2xl font-bold mb-4">Liste des annonces</h2>
    <table class="w-full border-collapse">
        <thead>
            <tr>
                <th class="border p-2">Titre</th>
                <th class="border p-2">Description</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($announcements as $announcement): ?>
            <tr>
                <td class="border p-2"><?php echo htmlspecialchars($announcement['title']); ?></td>
                <td class="border p-2"><?php echo htmlspecialchars($announcement['description']); ?></td>
                <td class="border p-2">
                    <a href="index.php?page=annonce&id=<?php echo $announcement['id']; ?>" class="text-blue-500">Modifier</a>
                    <form action="" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $announcement['id']; ?>">
                        <input type="hidden" name="delete" value="1">
                        <button type="submit" class="text-red-500 ml-2">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>