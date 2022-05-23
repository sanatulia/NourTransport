<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="stylep1_2.css">
</head>
<body>
    
    <div class="men">
        <p class="paiem">
            PAIEMENTS
            <img src="PAIEMENT-ORANGE-MONEY.png" width="100px" alt="" class="mponey">
            <img src="p.png" width="100px" alt="" class="paye">
            <img src="visa.png" width="100px" alt="" class="vis">
            <img src="mastercard.png"  width="100px" alt="" class="master">
            <div class="espace"></div>
        </p>
        <p class="dera">
            DERNIERES ACTUS
            <img src="Tombouctou-100x100.jpg" width="100px" alt="">
            <img src="Mopti-150x150.jpg" alt="" width="100px">
            <img src="Bamako-Kayes-150x150.jpg" width="100px" alt="">
            <div class="espace1"></div>

            
        </p>
        
        <p class="cgv">
            CGV & CONFIDENTIALITE
            <a href="">Conditions Générales</a>
            <a href="">Confidentialité et Cookies</a>
            <a href="">FAQ</a>
            <div class="espace2"></div>

        </p>
        <p class="input">
            NOTRE NEWS LETTERS
            <form action="chargement.php" method="post">
                <div class="espace3">
                        <label for="nom">nom</label>
                    <input type="text" name="nom" placeholder="entrez votre nom">
                    <div class="cage"></div>
                    <label for="email">email</label>
                    <input type="email" name="email" id="email">
                    <label for="objet">Objet de votre contact</label>
        
                    <input type="text" width="200px" height="50px" name="objet" id="email" placeholder=" votre objet de contact ">
                    <label for="messages">messages</label>
                    
                    <textarea name="messages" ></textarea>                    
                    
                    
                        <button type="submit">ENVOYER</button>
                </div>
            
            </form>
            
        </p>
        <div class="titre"></div>

    </div>
</body>
</html>