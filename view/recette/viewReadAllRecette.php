<p class="titre">prolongez dans les meilleures recettes</p>
    <div class="container">
    <?php foreach ($tab_r as $recette): ?>
	    <div class="ctn">
    <div class="card">
        <img src="image/recette2.png" alt="rec1">
        <h2><?php echo htmlspecialchars($recette->getTitre()); ?></h2>
        <p><span>Ingrédients :</span><?php echo htmlspecialchars($recette->getIngredient()); ?></p>
        <p><span>Préparation :</span><?php echo htmlspecialchars($recette->getPreparation()); ?></p>
		<div class="info">
            <p><i class="fa-solid fa-clock" style="color: #eb0029;"></i><?php echo htmlspecialchars($recette->getTempPrep()); ?></p>
            <p><i class="fa-solid fa-user" style="color: #eb0029;"></i><?php echo htmlspecialchars($recette->getNbPersonne()); ?></p>
        </div>
    </div>
    
    </div>
    <?php endforeach; ?>
    
    </div>