<?php
	$id_formation=$formation->getFormation();
	echo '<p>code de la formation : '.$id_formation;
	echo '<br/>Titre : '.$formation->getTitre().' - Programme : '.$formation->getProgramme().' - Code du Chef : '.$formation->getChef().'</p>';
	echo '<div class= updt><a href="index.php?controller=formation&action=update&id_formation='.$id_formation.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=formation&action=delete&id_formation='.$id_formation.'">
	 Supprimer </a></div> ';
?>
