<?php
$id_admin=$up->getId_Admin();
?>
<div class="form-container"  >

    <form action="index.php?controller=admin&action=updated&id_admin=<?=$id_admin?>" method="post">
    <h3>Mise à jour de votre compte</h3>
    <?php
       
       if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
       };
    ?>
    <input type="text" value= "<?=$id_admin?>" name="id_admin" id="id_admin" required readonly/>
    <input type="text" value= "<?=$up->getNom()?>" name="name" id="name" required placeholder="modifier votre nom">
    <input type="text" value= "<?=$up->getPrenom()?>" name="subname" id="subname" required placeholder="modifier votre prénom">
    <select name="sexe" value= "<?=$sexe?>" name="sexe" id="sexe" required readonly>
        <option value="m">M</option>
        <option value="f">F</option>
    </select>
    <input type="email" value= "<?=$up->getEmail()?>" name="email" id="email" required placeholder="modifier votre email">
    <input type="text" value ="<?=$up->getNivAcc()?>" name="niv_acc" id="niv_acc" required readonly placeholder="niveau access">
    <input type="password" value= "<?=$up->getMdp()?>" name="password" id="password" required placeholder="modifier votre password">
    
   

   

    <input type="submit" name="submit" value="Modifier" class="form-btn">
   
    </form>
</div>