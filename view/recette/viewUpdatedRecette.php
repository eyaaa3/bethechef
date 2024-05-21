<p>La recette a été bien modifiée</p>
<?php
$id_recette=$oldRecette->getRecette();
echo "<p> Recette <a href='index.php?controller=recette&action=read&id_recette=$id_recette'> $id_recette</a> </p>" ;
?>