<?php

require_once 'connexion.php';
$id = $_GET['id'];
$sql = "SELECT * FROM exercice WHERE id = ?";
$varr = $conn->prepare($sql);
$varr->execute([$id]);
$exercice = $varr->fetch(PDO::FETCH_ASSOC);
if (!$exercice) {
    die("Exercice introuvable !");
}
if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date_creation = $_POST['date_creation'];
$sql ="UPDATE exercice SET titre=?, auteur=?,date_creation =? WHERE id =?";
    $varr = $conn->prepare($sql);
    $varr->execute([$titre, $auteur, $date_creation, $id]);
    header("Location: afficher.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Modifier un exercice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Modifier un exercice</h1>
    <form action="modif_exe.php?id=<?php echo $exercice['id']; ?>" method="POST">
        <input type="hidden" name="id"
    value="<?php echo $exercice['id']; ?>">
     <label>Titre :</label>
        <input type="text" name="titre"     value="<?php echo htmlspecialchars($exercice['titre']); ?>">
        <br><br>
    <label>Auteur :</label>
      <input type="text" name="auteur"
      value="<?php echo htmlspecialchars($exercice['auteur']); ?>">
      <br><br>
      <label>Date de creation :</label>
      <input type="date" name="date_creation"
        value="<?php echo $exercice['date_creation']; ?>">
    <br><br>
        <button type="submit" name="modifier">
            Enregistrer les modifications
        </button>
    </form>
</body>
</html>