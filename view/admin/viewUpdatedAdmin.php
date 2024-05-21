<p>Votre Compte a éte bien modifié</p>
<?php
$id_admin = $u->getId_Admin(); 
echo "<p> Utilisateur <a href='index.php?controller=admin&action=read&id_admin=$id_admin'> $id_admin </a> </p>" ;
?>

