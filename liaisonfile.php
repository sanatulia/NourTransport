<?php
    $servename="mysql:host=localhost; dbname=formulaire_c";
    $username="root";
    $password="";
    try {
        $lien=new PDO($servename,$username,$password);
        echo "Connexion reçue depuis l'inclusion!";
        //code...
    } catch ( Exception $e) {
        die("Erreur!");

        //throw $th;
    }

?>