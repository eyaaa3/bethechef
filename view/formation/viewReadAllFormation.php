


    <?php foreach ($tab_v as $formation): ?>
        <div class="contenteee">
        <img src="image/formation.jpg" class="titre">
        <div class="middleee">
            <h2><?php echo htmlspecialchars($formation->getTitre()); ?></h2>
            <p><span>Programme :</span><br><?php echo htmlspecialchars($formation->getProgramme()); ?></p>
            <br>
            <div class="infooo">
                <div class="infooo1">
                    <img src="image/Cook.png">
                    <p>Chef: "<?php echo htmlspecialchars($formation->getChef()); ?>"</p>
                </div>
                <div class="info1oo">
                    <img src="image/last.png">
                    <p>Durée: <?php echo htmlspecialchars($formation->getDuree()); ?></p>
                </div>
                <div class="infooo1">
                    <img src="image/precio.png">
                    <p><?php echo htmlspecialchars($formation->getPrix()); ?></p>
                </div>
                <div class="infooo1">
                    <img src="image/tiempo.png">
                    <p><?php echo htmlspecialchars($formation->getDate_formation()); ?></p>
                </div>
            </div>
            <a href="inscrire.php"><button id="show-login" class="inscrireee"><i class="fa-solid fa-address-card" style="color: #b95569;"></i>Inscrire</button></a>
        </div>
        </div>
        <?php endforeach; ?>

