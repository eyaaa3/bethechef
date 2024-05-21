


<div class="form-container">
        <form action="index.php?controller=formation&action=created" method="post">
            <h1>Ajouter Une Formation</h1>
            <?php
       
       if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
       };
       if(isset($sucess)){
        foreach($sucess as $sucess){
            echo '<span class="sucess-msg">'.$sucess.'</span>';
        };
       };
    ?>

<input type="number" name="id_formation" required placeholder="Entrez un code a votre formation">
    <input type="text" name="titre" required placeholder="Entrez un titre">
    <input type="text"  name="programme" id="programme" required placeholder="ajouter le programme">
    <input type="number" name="duree" id="duree" required placeholder="ajouter la durée">
    <input type="number" name="prix" id="prix" required placeholder="ajouter le prix">
    <input type="date" name="date_formation" id="date_formation" required placeholder="ajouter la date">
           
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
    <input type="submit" name="submit" value="Ajouter" class="form-btn">
        </form>
</div>
