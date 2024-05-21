<?php
	$id_recette=$recette->getRecette();
	echo '<p>code de la recette : '.$id_recette;
	echo '<br/>Titre : '.$recette->getTitre().' - Code du Chef : '.$recette->getChef().'</p>';
	echo '<div class= updt><a href="index.php?controller=recette&action=update&id_recette='.$id_recette.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=recette&action=delete&id_recette='.$id_recette.'">
	 Supprimer </a></div> ';
?>