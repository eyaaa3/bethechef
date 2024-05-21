<header>
<div class="navbar">
    <div>
        <img src="image/logo1.png" alt="">
    </div>
    <div class="element">
        <a href="index.php">Acceuil</a>


        <div class="dropdown">
            <button class="dropbtn">Service
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href='index.php?controller=formation&action=readAll'>Nos Formations</a>
              <a href='index.php?controller=recette&action=readAll'>Recettes Gratuite</a>
              <a href="view/otherviews/offre.php">Offre d'emplois</a>
            </div>
        </div>

       <a href="view/otherviews/temoignage.php">Tempoignage</a>
        <a href="view/otherviews/listechef.php">Nos Instructeurs</a>
        <a href="view/otherviews/contact.php">Contactez Nous</a>


    </div>
    <a href='index.php?controller=utilisateur&action=create'><button id="show-login" class="login"><i class="fa-solid fa-right-to-bracket"></i>Inscrir</button></a>
    </div>

    

</header>
