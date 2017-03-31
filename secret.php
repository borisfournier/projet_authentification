
<?php if (isset($_POST['mdp']) && $_POST['mdp'] == "kangourou"){ 

	echo 'Félicitation '.htmlspecialchars($_POST['nom'])." ". htmlspecialchars($_POST['prenom']).' tu as réussi à accéder à cette page secrète';
}
else{
	echo "Désolé ce n'est pas le bon mot de passe alors vas te faire mettre!!!";

}
			
?>
