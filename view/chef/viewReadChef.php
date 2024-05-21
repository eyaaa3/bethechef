<?php
	$id_chef=$u->getId_Chef();
	echo '<p>NCIN Chef : '.$id_chef;
	echo '<br/>Nom : '.$u->getNom().' - Prenom : '.$u->getPrenom().'</p>';
	echo '<div class= updt><a href="index.php?controller=chef&action=update&id_chef='.$id_chef.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=chef&action=delete&id_chef='.$id_chef.'">
	 Supprimer </a></div> ';
?>

