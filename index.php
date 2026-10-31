<!DOCTYPE html>
<html lang ="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des exercices</title>
    <link rel="stylesheet" href="style.css">
</head>

 <body>
    <h1>Gestion des exercices</h1>
    <h2>Ajouter un exercice</h2>

    <form action ="ajouter.php" method = "POST">
        <label for ="titre"> Titre: </label>
        <input type="text" id="titre" name="titre" >
        <br><br>

        <label for ="auteur"> Auteur: </label>
        <input type="text" id="auteur" name="auteur" >
        <br><br>

        <label for ="date_creation"> Date de creation: </label>
        <input type="date" id="date_creation" name="date_creation" >
        <br><br>

        <button type="submit" >ajouter </button>
    </form>

 </body>
</html>

