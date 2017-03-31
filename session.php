<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true); // On écrit un cookie
// set coockie prend 3 paramètres : nom du cookie, valeur du cookie, date d'expiration avec un timestamp actuel + nb de secondes en un an par ex
setcookie('pays', 'Portugal', time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...  le dernier true active httpOnly=true, ce qui sécurise davantage le code
 
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;


// Et SEULEMENT MAINTENANT, on peut commencer à écrire du code html
?>
 
 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
 
    <p>
        Salut <?php echo $_SESSION['prenom']; ?> !<br />
        Tu es à l'accueil de mon site . Tu veux aller sur une autre page ?
    </p>
    
    <p>
        <a href="mapage.php">Lien vers mapage.php</a><br />
    </p>

    <form method="post" action="deconnexion.php">
    <input type="submit" value="Déconnexion">
    </form>
 

    </body>
</html>