<p>La recette a bien été créée</p>
<?php
$id_recette = $recette->getRecette(); 
echo "<p> Recette <a href='index.php?controller=recette&action=read&id_recette=$id_recette'> $id_recette </a> </p>" ;
?>