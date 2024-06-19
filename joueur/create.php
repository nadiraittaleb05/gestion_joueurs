<?php
require 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $position = $_POST['position'];

    $stmt = $pdo->prepare("INSERT INTO joueurs (nom, prenom, age, position) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nom, $prenom, $age, $position]);

    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un joueur</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Ajouter un joueur</h1>
    <form method="post">
        Nom: <input type="text" name="nom" required><br>
        Prénom: <input type="text" name="prenom" required><br>
        Âge: <input type="number" name="age" required><br>
        Position: <input type="text" name="position" required><br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
