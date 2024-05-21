<p>Votre Compte a éte bien modifié</p>
<?php
$id_user = $u->getId_User(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&id_user=$id_user'> $id_user </a> </p>" ;
?>