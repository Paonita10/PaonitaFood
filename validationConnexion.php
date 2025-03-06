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
   
 
    $ch1 = $_POST["identifiant"];
    $ch2 = $_POST["mdp"];
    $sqlQuery = "SELECT identifiant, utilisateurs.nom, prenom FROM utilisateurs WHERE identifiant = :ch1 AND mdp = :ch2 ";
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    $recipesStatement->execute(['ch1' => $ch1, 'ch2' => $ch2,]);
    $recipes = $recipesStatement->fetch();

    
    if (!empty($recipes['identifiant'])){
        $_SESSION['identifiant'] = $ch1;  
    }
    header('Location:index.php');
?>

