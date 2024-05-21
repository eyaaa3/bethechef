
<div class="form-container"  >

    <form action="index.php?controller=utilisateur&action=created" method="post">
    <h3>Inscrir Maintenant</h3>
    <?php
       
       if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
       };
    ?>
    <input type="number" name="id_user" required placeholder="enterz votre n cin" >
    <input type="text" name="name" required placeholder="entrez votre nom">
    <input type="text" name="subname" required placeholder="entrez votre prénom">
    <input type="email" name="email" required placeholder="entre votre email">
    <input type="password" name="password" required placeholder="entre votre mot de passe">
    <input type="password" name="cpassword" required placeholder="Confirmer votre mot de passe">
    
    <select name="sexe">
        <option value="m">M</option>
        <option value="f">F</option>
        
    </select>

   

    <input type="submit" name="submit" value="inscrir" class="form-btn">s
    <p>avez vous deja un compte ? <a href='view/login.php'>connectez</a></p>
    </form>
</div>
