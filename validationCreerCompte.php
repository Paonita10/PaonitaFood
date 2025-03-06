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
   
 
    $ch1 = $_POST["nom"];
    $ch2 = $_POST["prenom"];
    $ch3 = $_POST["identifiant"];
    $ch4 = $_POST["mail"];
    $ch5 = $_POST["telephone"];
    $ch6 = $_POST["mdp"];

    $sqlQuery = "INSERT INTO utilisateurs SET nom = :ch1 , prenom = :ch2 , identifiant = :ch3 , mail = :ch4 , telephone = :ch5 , mdp = :ch6 ";
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    $recipesStatement->execute(['ch1' => $ch1, 'ch2' => $ch2, 'ch3' => $ch3, 'ch4' => $ch4, 'ch5' => $ch5, 'ch6' => $ch6]);
    $recipes = $recipesStatement->fetch();

    
    if (!empty($recipes['identifiant'])){
        $_SESSION['identifiant'] = $ch1;  
    }
    header('Location:pageSeConnecter.php');
?>

