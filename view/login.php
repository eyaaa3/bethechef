
    <link rel="stylesheet" href="../css/login.css">

    <div class="navbar">
    <div>
        <img src="../image/logo1.png" alt="">
    </div>
    <div class="element">
        <a href="../index.php">Acceuil</a>


        <div class="dropdown">
            <button class="dropbtn">Service
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href='../index.php?controller=formation&action=readAll'>Nos Formations</a>
              <a href='../index.php?controller=recette&action=readAll'>Recettes Gratuite</a>
              <a href="../view/otherviews/offre.php">Offre d'emplois</a>
            </div>
        </div>

       <a href="../view/otherviews/temoignage.php">Tempoignage</a>
        <a href="../view/otherviews/listechef.php">Nos Instructeurs</a>
        <a href="../view/otherviews/contact.php">Contactez Nous</a>
</div>
</div>

<div class="form">

    <form action="../config/login_process.php" method="post">
    <h2>Connexion</h2>
    <?php
       
       if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
       };
    ?>
    
    <input type="email" name="email" required placeholder="enter your email">
    
    <input type="password" name="pass" required placeholder="enter your password">
    <input type="submit" name="submit" value="login now" class="form-btn">
    <p>vous n'avez pas de compte ?<a href='../index.php?controller=utilisateur&action=create'>Inscrir maintenat</a></p>

</form>
    </div>


<div class="coppyright">
    <p>copyright &copy;2024 designed by <span>Eya Bouabdallah</span>&<span>Rahma Achiki</span></p>
</div>
