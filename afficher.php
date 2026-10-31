<?php
require_once 'connexion.php';

$sql = "SELECT*FROM exercice";
$varr = $conn->query($sql);
$exercices = $varr->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Liste des exercices</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Liste des exercices</h1>
    <table border="1">
        <tr>
 <th>ID</th>
 <th>Titre</th>
  <th>Auteur</th>
 <th>Date de creation</th>
 <th>actions</th>
 <th>Actions</th>
        </tr>
<?php
foreach ($exercices as $exercice) {
    echo "<tr>";
    echo "<td>" . $exercice['id'] ."</td>";
    echo "<td>" . $exercice['titre'] ."</td>";
    echo "<td>" . $exercice['auteur'] ."</td>";
    echo "<td>" . $exercice['date_creation'] ."</td>";
echo "<td><a href='modif_exe.php?id=" . $exercice['id'] . "'>Modifier</a></td>";
echo "<td><a href='sup_exe.php?id=" . $exercice['id'] . "'>Suprimer</a></td>";}
        ?>
        
    </table>
</body>
</html>