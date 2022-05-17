<?php

$servename="mysql:host=localhost; dbname=news_letter";
$username="root";
$password="";
try {
    $conex=new PDO($servename,$username,$password);
    echo "Connexion reçue!";
    //code...
} catch ( Exception $e) {
    die("Erreur!");

    //throw $th;
}

$nom=$_POST["nom"];
    $email=$_POST["email"];


    include"connect.php";
$insertion=$conex->prepare("INSERT INTO nom_email(nom, email) values('$nom','$email')");

$insertion->execute();
   /* if (isset($_POST["nom"]) && isset($_POST["email"])){
        $prepa=$conex->prepare($insertion);
        $prepa->bindValue(':nom',$_POST['nom']);
        $prepa->bindValue(':email',$_POST['email']);
        
        $verify=$prepa->Execute();
        if($verify){
            echo" Bien insere";

        }else{
            echo"Echec";
        }

    }else{
        echo"errer une variable non defifie";
    }

    //$nom=$_POST["nom"];
    // $email=$_POST["email"];

   // $insertion="INSERT INTO nom_email('nom', 'email') values('$nom','$email')";

/*$query="SELECT *FROM news_letter";
$result=$conex->query($query);

foreach($result as $ea){
    echo "<pre>";
    print_r($ea);
    echo "</pre>";
}*/
/*
while($dt=$result->fetch()){
    echo '<pre>';
    print_r($dt);
    echo'</pre>';
}*/

   // $prepa=$conex->prepare($insertion);
   // $prepa->bindValue(':nom',$_POST['nom']);
   // $prepa->bindValue(':email',$_POST['email']);

/*$prepa->Execution();*/

?>