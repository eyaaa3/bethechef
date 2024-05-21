<?php
$id_formation=$oldFormation->getFormation();
?>
<div class="form-container"  >
<form action="index.php?controller=formation&action=updated&id_formation=<?=$id_formation?>" method="post">
    <h3>Modification d'une formation</h3>
    <?php
       
       if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
       };
    ?>
    <input type="text" value= "<?=$id_formation?>" name="id_formation" id="id_formation" required readonly/>
    <input type="text" value= "<?=$oldFormation->getTitre()?>" name="titre" id="titre" required placeholder="modifier le titre">
    <input type="text" value= "<?=$oldFormation->getProgramme()?>" name="programme" id="programme" required placeholder="modifier le programme">
    <input type="number" value= "<?=$oldFormation->getDuree()?>" name="duree" id="duree" required placeholder="modifier la durée">
    <input type="number" value= "<?=$oldFormation->getPrix()?>" name="prix" id="prix" required placeholder="modifier le prix">
    <input type="date" value= "<?=$oldFormation->getDate_formation()?>" name="date_formation" id="date_formation" required placeholder="modifier la date">

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