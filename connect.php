<?php
    $servename="mysql:host=localhost; dbname=news_letter";
    $username="root";
    $password="";
    try {
        $conex=new PDO($servename,$username,$password);
        echo "Connexion reçue depuis l'inclusion!";
        //code...
    } catch ( Exception $e) {
        die("Erreur!");

        //throw $th;
    }

?>