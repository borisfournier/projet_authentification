<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
$_SESSION['identifiant'] = $_POST['identifiant'];
$_SESSION['password'] = $_POST['mdp'];


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Session</title>
    </head>
    <body>

 
	<?php 
        if(isset($_SESSION['identifiant']) AND isset($_SESSION['password'])){
            echo '<p>
                Bonjour '.$_SESSION['identifiant'].' !<br/>
                Tu es bien connecté!!!
                
            </p>
            
            <p>
                <a href="index.php">Retour à la page d\'accueil</a><br/>
                
            </p>';
        }  
    ?>
    <form method="post" action="deconnexion.php">
            <input type="submit" value="Deconnexion">
        </form>
    </body>
</html>