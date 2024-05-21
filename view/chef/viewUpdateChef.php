<?php
$id_chef=$up->getId_Chef();
?>
<div class="form-container"  >

    <form action="index.php?controller=chef&action=updated&id_chef=<?=$id_chef?>" method="post">
    <h3>Mise à jour de votre compte</h3>
    <?php
       
       if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
       };
    ?>
    <input type="text" value= "<?=$id_chef?>" name="id_chef" id="id_chef" required readonly/>
    <input type="text" value= "<?=$up->getNom()?>" name="name" id="name" required placeholder="modifier votre nom">
    <input type="text" value= "<?=$up->getPrenom()?>" name="subname" id="subname" required placeholder="modifier votre prénom">
    <select name="sexe" value= "<?=$sexe?>" name="sexe" id="sexe" required readonly>
        <option value="m">M</option>
        <option value="f">F</option>
    </select>
    <input type="date" value= "<?=$up->getDate_Naissance()?>" name="date_naissance" id="date_naissance" required placeholder="modifier votre date de naissance">
    <input type="email" value= "<?=$up->getEmail()?>" name="email" id="email" required placeholder="modifier votre email">
    <input type="password"  name="password" id="password" required placeholder="modifier votre password">
    <input type="number" value ="<?=$up->getExperience()?>" name="ex" id="ex" required readonly placeholder="modifier votre experience">

    
   

   

    <input type="submit" name="submit" value="Modifier" class="form-btn">
   
    </form>
</div>