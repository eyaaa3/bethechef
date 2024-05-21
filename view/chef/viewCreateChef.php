
<div class="form-container"  >

    <form action="index.php?controller=chef&action=created" method="post">
    <h3>Ajouter Un chef</h3>
    <?php
       
       if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
       };
    ?>
    <input type="number" name="id_chef" required placeholder="le num de cin du chef" >
    <input type="text" name="name" required placeholder="entrez votre nom">
    <input type="text" name="subname" required placeholder="entrez votre prénom">
    <select name="sexe">
        <option value="m">M</option>
        <option value="f">F</option>
        
    </select>
    <input type="date" name="date" required placeholder="date de naissance">
    <input type="email" name="email" required placeholder="entre votre email">
    <input type="password" name="password" required placeholder="entre votre mot de passe">
    <input type="password" name="cpassword" required placeholder="Confirmer votre mot de passe">
    <input type="number" name="experience" required placeholder="L'exeprience du chef">
    
   
   

    <input type="submit" name="submit" value="inscrir" class="form-btn">s
    <p>avez vous deja un compte ? <a href='view/login.php'>connectez</a></p>
    </form>
</div>
