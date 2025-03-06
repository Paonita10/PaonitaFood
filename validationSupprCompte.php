<?php
    try
    {
    $mysqlClient=new PDO(
        'mysql:host=localhost;dbname=projet;charset=utf8','root','',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
    }
    catch(PDOException $e){
    die("Échec de la connexion : %s\n".$e->getMessage());
    }                 
    session_start();
    $ch1 = $_POST["mdp"];

    $sqlQuery = "DELETE FROM utilisateurs WHERE mdp = :ch1" AND identifiant = :identifiant";
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    $recipesStatement->execute(['ch1' => $ch1, 'identifiant' => $_SESSION['identifiant']]);
    $recipes = $recipesStatement->fetch();




?>

jai pas fini ce code la

revoir comment effacer le compte sur lequel on est connectés