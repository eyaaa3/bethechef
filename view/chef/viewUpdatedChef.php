<p>Votre Compte a éte bien modifié</p>
<?php
$id_chef = $u->getId_Chef(); 
echo "<p> Chef <a href='index.php?controller=chef&action=read&id_chef=$id_chef'> $id_chef </a> </p>" ;
?>

