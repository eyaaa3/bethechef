<p>La formation a été bien modifiée</p>
<?php
$id_formation=$oldFormation->getFormation();
echo "<p> Formation <a href='index.php?controller=formation&action=read&id_formation=$id_formation'> $id_formation</a> </p>" ;
?>