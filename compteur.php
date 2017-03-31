<?php 
// 3 étapes : on ouvre le fichier
$monfichier = fopen("compteur.txt", "r+");

//2 : on fait des opérations sur le fichier
$pages_vue = fgets($monfichier);  // On lit la première ligne (nombre de pages vues)
$pages_vue += 1;  // On augmente de 1 ce nombre de pages vues
fseek($monfichier,0);
fputs($monfichier,$pages_vue);

//3: quand on a fini de l'utilisaer on ferme le fichier
fclose($monfichier);

echo '<p>Cette page a été vue' .$pages_vue. ' fois.</p>'



?>