<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="stylep1_2.css">
</head>
<body>
    <form action="charge.php" method="post">
        <div class="conta">
           </div>      <label for="nom">nom</label>
            <input type="text" name="nom" placeholder="entrez votre nom">
            <div class="cage"></div>
            <label for="email">email</label>
            
            <input type="email" width="200px" height="50px" name="email" id="email" placeholder="entrez votre email">
            
            <label for="objet">Objet de votre contact</label>
            
            <input type="text" width="200px" height="50px" name="objet" id="email" placeholder=" votre objet de contact ">
            <label for="messages">messages</label>
            <textarea name="messages" id="messages" cols="30" rows="10" placeholder="votre message ici"></textarea>
            
            
            
            <button type="Submit" width="200px" height="100px" name="envoyer" id="envoyer" >ENVOVER</button>
        </div>
    </form>                    
   
</body>
</html>