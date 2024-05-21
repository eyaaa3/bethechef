<p>La fomration a bien été créée</p>
<?php
$id_formation = $formation->getFormation(); 
echo "<p> Formation <a href='index.php?controller=formation&action=read&id_formation=$id_formation'> $id_formation </a> </p>" ;
?>