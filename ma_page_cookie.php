<?php
// On démarre la session AVANT d'écrire du code HTML
// session_start();
$monpwd=password_hash(htmlspecialchars(isset($_POST['mdp'])), PASSWORD_BCRYPT);

setcookie('identifiant', htmlspecialchars(isset($_POST['identifiant'])), time() + 3600*24, null, null, false, true); // On écrit un cookie
setcookie('password', $monpwd, time() + 3600*24, null, null, false, true); // On écrit un cookie


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cookie</title>
    </head>
    <body>

 
 	<?php 
        if (isset($_POST['identifiant']) AND isset($_POST['mdp']) AND (password_verify('kangourou', $monpwd))){
               
            echo '<p>Félicitation '.htmlspecialchars($_POST['identifiant']).' !<br/>
            Tu es bien connecté!!!</p>
            <p><a href="index.php">Retour à la page d\'accueil</a></p><br/>

            <form method="post" action="deconnexion.php">
                <input type="submit" value="Deconnexion">
            </form>';
        }else if (password_verify('kangourou', $_COOKIE['password'])) {
            echo '<p>Félicitation '.$_COOKIE['identifiant'].' !<br/>
            Tu es bien connecté!!!</p>
            <p><a href="index.php">Retour à la page d\'accueil</a></p><br/>

            <form method="post" action="deconnexion.php">
                <input type="submit" value="Deconnexion">
            </form>';
        

        }else {
            echo '<p>Identification incorrecte!!</p><br/>
            <a href="index.php">Retour à la page d\'accueil</a>';
        }
    ?>

    </body>
</html>