<?php
$id_recette=$oldRecette->getRecette();
?>
<div class="form-container"  >
<form action="index.php?controller=recette&action=updated&id_recette=<?=$id_recette?>" method="post">
    <h3>Modification d'une recette</h3>
    <?php
       
       if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
       };
    ?>
    <input type="text" value= "<?=$id_recette?>" name="id_recette" id="id_recette" required readonly/>
    <input type="text" value= "<?=$oldRecette->getTitre()?>" name="titre" id="titre" required placeholder="modifier le titre">
    <input type="text" value= "<?=$oldRecette->getIngredient()?>" name="ingredient" id="ingredient" required placeholder="modifier les ingredients">
    <input type="text" value= "<?=$oldRecette->getPreparation()?>" name="preparation" id="preparation" required placeholder="modifier la facon de preparation">
    <input type="text" value= "<?=$oldRecette->getTempPrep()?>" name="temp_prep" id="temp_prep" required placeholder="modifier le temp">
    <input type="number" value= "<?=$oldRecette->getNbPersonne()?>" name="nb_personnes" id="nb_personnes" required placeholder="modifier le nombre des personnes">

    <label for="num_chef">Proprietaire</label> :
		<select name="num_chef">
		<?php
		foreach($tab_chef as $chef){
		$id_chef=$chef->getId_Chef();
		$nom=$chef->getNom();
		$prenom=$chef->getPrenom();
		echo "<option value=$id_chef->$id_chef $nom $prenom</option>";
		}
		?>
		</select>
    
  

   

    <input type="submit" name="submit" value="Modifier" class="form-btn">
   
    </form>
</div>