<?php
$id_user=$up->getId_User();
?>
<div class="form-container"  >

    <form action="index.php?controller=utilisateur&action=updated&id_user=<?=$id_user?>" method="post">
    <h3>Mise à jour de votre compte</h3>
    <?php
       
       if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
       };
    ?>
    <input type="text" value= "<?=$id_user?>" name="id_user" id="id_user" required readonly/>
    <input type="text" value= "<?=$up->getNom()?>" name="name" id="name" required placeholder="modifier votre nom">
    <input type="text" value= "<?=$up->getPrenom()?>" name="subname" id="subname" required placeholder="modifier votre prénom">
    <input type="email" value= "<?=$up->getEmail()?>" name="email" id="email" required placeholder="modifier votre email">
    <input type="password"  name="password" id="password" required placeholder="modifier votre password">
    
    <select name="sexe" value= "<?=$sexe?>" name="sexe" id="sexe" required readonly>
        <option value="m">M</option>
        <option value="f">F</option>
        
    </select>

   

    <input type="submit" name="submit" value="Modifier" class="form-btn">
   
    </form>
</div>
