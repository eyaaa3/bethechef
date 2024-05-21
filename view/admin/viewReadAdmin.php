<?php
	$id_admin=$u->getId_Admin();
	echo '<p>NCIN Utilisateur : '.$id_admin;
	echo '<br/>Nom : '.$u->getNom().' - Prenom : '.$u->getPrenom().'</p>';
	echo '<div class= updt><a href="index.php?controller=admin&action=update&id_admin='.$id_admin.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=admin&action=delete&id_admin='.$id_admin.'">
	 Supprimer </a></div> ';
?>

