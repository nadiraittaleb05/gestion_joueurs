
<?php
require 'connexion.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM joueurs WHERE id = ?");
$stmt->execute([$id]);

header('Location: index.php');
exit();
?>
