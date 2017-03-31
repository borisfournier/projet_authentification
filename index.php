<?php 
// session_start();

?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
   <?php include ("enTete.php"); ?> 
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Identification</h1>
        
        <form method="post" action="ma_page_cookie.php">
        	<p>Veuillez entrer vos identifiants et mot de passe</p>
			<label>	Identifiant :</label><input type="text" name="identifiant"><br>	
			
			<label>	Password :</label><input type="password" name="mdp"><br>	

			<input type="submit" value="Connexion">
		</form>

		

<!--         <a href="bonjour.php?nom=Dupont&amp;prenom=Jean">Dis-moi bonjour !</a>    -->
    </div>
    
    <?php include ("footer.php"); ?>
    
    </body>
</html>