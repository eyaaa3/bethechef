
<?php
	$id_user=$u->getId_User();
	echo '<p>NCIN Utilisateur : '.$id_user;
	echo '<br/>Nom : '.$u->getNom().' - Prenom : '.$u->getPrenom().'</p>';
	echo '<div class= updt><a href="index.php?controller=utilisateur&action=update&id_user='.$id_user.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=utilisateur&action=delete&id_user='.$id_user.'">
	 Supprimer </a></div> ';
?>