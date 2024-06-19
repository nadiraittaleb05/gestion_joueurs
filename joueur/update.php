<?php
require 'connexion.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $position = $_POST['position'];

    $stmt = $pdo->prepare("UPDATE joueurs SET nom = ?, prenom = ?, age = ?, position = ? WHERE id = ?");
    $stmt->execute([$nom, $prenom, $age, $position, $id]);

    header('Location: index.php');
    exit();
}

$stmt = $pdo->prepare("SELECT * FROM joueurs WHERE id = ?");
$stmt->execute([$id]);
$joueur = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un joueur</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Modifier un joueur</h1>
    <form method="post">
        Nom: <input type="text" name="nom" value="<?php echo htmlspecialchars($joueur['nom']); ?>" required><br>
        Prénom: <input type="text" name="prenom" value="<?php echo htmlspecialchars($joueur['prenom']); ?>" required><br>
        Âge: <input type="number" name="age" value="<?php echo htmlspecialchars($joueur['age']); ?>" required><br>
        Position: <input type="text" name="position" value="<?php echo htmlspecialchars($joueur['position']); ?>" required><br>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
