<?php

require_once 'connexion.php';

$titre=$_POST['titre'];
$auteur=$_POST['auteur'];
$date_creation=$_POST['date_creation'];

$sql = "INSERT INTO exercice (titre, auteur, date_creation)
  VALUES (:titre, :auteur, :date_creation)";

$var=$conn->prepare($sql);
$var->execute([
    ':titre' => $titre,
    ':auteur' => $auteur,
    ':date_creation' => $date_creation,

]);
 echo "exercice ajoute avec succes";