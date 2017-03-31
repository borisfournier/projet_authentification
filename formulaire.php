<!DOCTYPE html>
<html>
<head>
	<meta charset= "utf-8">	
	<title>formulaire</title>
</head>
<body>
	<?php include("enTete.php") ?>
	<?php include("menu.php") ?>

	<p>Cette page ne contient que du HTML</p>

	<form method="post" action="cible.php">
	<input type="text" name="nom">
	<input type="submit" value="Valider"><br/>

	<textarea name="message" rows="5" cols="45">
		
	</textarea><br/>


	<select name="pays">
	<option value="france" selected="selected">france</option>
	<option value="hongrie">hongrie</option>
	<option value="italie">italie</option>
	<option value="espagne">espagne</option>
		
	</select><br/>

	<input type="checkbox" name="case" id="case" checked="checked" /> <label for="case">Ma case à cocher</label><br/>


	Aimez-vous les frites ?
	<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
	<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>

	<input type="hidden" name="pseudo" value="Mateo21" />

	</form>

	





	<?php include("footer.php") ?>

</body>
</html>
