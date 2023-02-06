<?php
    // $servername = 'localhost';
    $servername = "db5011839466.hosting-data.io";
    //$username = 'root';
    $username = "dbu1969779";
    //$password = 'root';
    $password = "Tetia37Tetia37";
    //$dbname= '';
    $dbname = "dbs9971371";

    echo "<script>console.log('Lancement database')</script>";
    
    try{
        //On établit la connexion
        $pdo = new PDO("mysql:host={$servername}; dbname={$dbname};", $username, $password);
        
        //On définit le mode d'erreur de PDO sur Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Connexion réussie';
        echo "<script>console.log('Connexion réussite')</script>";

    }
    
    /*On capture les exceptions si une exception est lancée et on affiche
    *les informations relatives à celle-ci*/

    catch(PDOException $e){
        //echo "ici : ";
        //echo "Erreur : " . $e->getMessage();
        $text = "Erreur : " . $e->getMessage();
        echo "<script>console.log($text)</script>";
    }

?>