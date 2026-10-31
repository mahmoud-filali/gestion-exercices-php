<?php
require_once 'connexion.php';
$id =$_GET['id'];
$sql = "DELETE FROM exercice WHERE id =?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
header("Location: afficher.php");
exit;
?>