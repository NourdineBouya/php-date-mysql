<?php

// on va creer une connexion a la base de donnees
$host = 'localhost';
$user = "root";
$pass = "AAAA";
$dbname = "demo1";

try
{
        $dsn = "mysql:host=".$host . ";dbname=" . $dbname;
        $pdo = new PDO($dsn , $user, $pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        //echo "La connexion a ete etablie avec success";
}

catch(PDOException $e)
{
        echo "Pas de connexion a la base de donnees" . $e->getMessage();
}

if(isset($_POST['ajouter']))
{
    $cours = $_POST['cours'];
    $date1 = strtr($_REQUEST['date_cours'], '/', '-');
    $date = date('Y-m-d', strtotime($date1));

    $sql = "INSERT INTO coursdev(cours, date_cours) VALUES (:cours, :date_cours)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':cours', $cours);
    $stmt->bindParam(':date_cours', $date);

    $stmt->execute();
    header('Location:index.php');
}