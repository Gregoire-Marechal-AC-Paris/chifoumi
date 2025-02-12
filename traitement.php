<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<!-- ce DOCTYPE est nécessaire avec IE pour les marges automatiques -->
<html>
<!-- en-tete technique-->
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="Exemple de formulaire">
	<meta name="keywords" lang="fr" content="html,formulaire,boutons">
	<meta name="Author" content="Grégoire Maréchal">
	<!-- appel de la feuille de style externe -->
	 <link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>

<body>
<h4>Chifoumi</h4>

<?php
/* récupération des données postées dans le formulaire */

$choixjoueur1=$_POST["choixjoueur1"] ; 
$choixjoueur2=$_POST["choixjoueur2"] ;
// ici écrire le traitement pour savoir qui a gagné
if()
{
	// bloc si condition vraie
}
else // la condition n'est pas respectée
{
	// bloc à exécuter si faux
}

?>


</body>
</html>