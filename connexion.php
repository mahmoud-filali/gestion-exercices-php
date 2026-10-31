<?php
$host= "localhost";
$dbname= "exelib";
$user= "root";
$password="";
 try{
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4;",
        $user,
        $password
    );
    echo "connexion resussie ";
    }
    catch(PDOException $e){
        echo"erreur de connexion". $e->getMessage();
    }

 