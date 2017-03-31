<?php 
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deconnexion</title>
</head>
<body>
		<p>	Au revoir, vous avez bien été déconnecté!!!</p>
		<a href="index.php">Retour sur la page de connexion</a>
</body>
</html>