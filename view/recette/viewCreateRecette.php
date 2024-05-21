<div class="form-container">
        <form action="index.php?controller=recette&action=created" method="post">
            <h1>Ajouter Une Recette</h1>
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

<input type="text" name="id_recette" required placeholder="Entrez un code pour la recette">
    <input type="text" name="titre" required placeholder="Entrez un titre">
    <input type="text"  name="ingredient" id="ingredient" required placeholder="ajouter les ingredients">
    <input type="text" name="preparation" id="preparation" required placeholder="Preparation">

    <input type="text" name="temp_prep" id="temp_prep" required placeholder="Entrer le temp de preparation">
    <input type="text" name="nb_personnes" id="nb_personnes" required placeholder="Entrer le nombre des personnes">
 
           
    <label for="num_chef">Proprietaire</label> :
    <select name="num_chef">
    <?php
    foreach($tab_chef as $chef){
    $id_chef=$chef->getId_Chef();
    $nom=$chef->getNom();
    $prenom=$chef->getPrenom();
    echo "<option value=$id_chef->$nom $prenom</option>";
    }
    ?>
    </select>
    <input type="submit" name="submit" value="Ajouter" class="form-btn">
        </form>
</div>