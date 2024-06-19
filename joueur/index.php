<?php
require 'connexion.php';

$stmt = $pdo->query("SELECT * FROM joueurs");
$joueurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des joueurs</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Liste des joueurs</h1>
    <a href="create.php">Ajouter un joueur</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Âge</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($joueurs as $joueur): ?>
        <tr>
            <td><?php echo 
            htmlspecialchars($joueur['id']); ?></td>
            <td><?php echo htmlspecialchars($joueur['nom']); ?></td>
            <td><?php echo htmlspecialchars($joueur['prenom']); ?></td>
            <td><?php echo htmlspecialchars($joueur['age']); ?></td>
            <td><?php echo htmlspecialchars($joueur['position']); ?></td>
            <td>
                <a href="update.php?id=<?php echo $joueur['id']; ?>">Modifier</a>
                <a href="delete.php?id=<?php echo $joueur['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce joueur ?');">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
