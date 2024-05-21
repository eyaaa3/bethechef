


<?php foreach ($tab_v as $formation): ?>
        <div class="contenteee">
        <img src="image/formation.jpg" class="titre">
        <div class="middleee">
            <h2><?php echo htmlspecialchars($formation->getTitre()); ?></h2>
            <p><span>Programme :</span><br><?php echo htmlspecialchars($formation->getProgramme()); ?></p>
            <br>
            <div class="infooo">
                <div class="infooo1">
                    <img src="#" alt="imgchef">
                    <p>Chef: "<?php echo htmlspecialchars($formation->getChef()); ?>"</p>
                </div>
                <div class="info1oo">
                    <img src="#" alt="imgDuree">
                    <p>Durée: <?php echo htmlspecialchars($formation->getDuree()); ?></p>
                </div>
                <div class="infooo1">
                    <img src="#" alt="imgPrix">
                    <p><?php echo htmlspecialchars($formation->getPrix()); ?></p>
                </div>
                <div class="infooo1">
                    <img src="#" alt="imgDate">
                    <p><?php echo htmlspecialchars($formation->getDate_formation()); ?></p>
                </div>
            </div>
            
            <?php
$id_formation=$formation->getFormation();
            echo " Immatriculation : 
	  <a href='index.php?controller=formation&action=read&id_formation=$id_formation'>$id_formation</a></p>";
	
	echo "<div class= 'updt'>
 		<a href='index.php?controller=formation&action=update&id_formation=$id_formation'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=formation&action=delete&id_formation=$id_formation'> Supprimer </a>
 	</div><hr/>";
    ?>
        </div>
        </div>
        <?php endforeach; ?>

