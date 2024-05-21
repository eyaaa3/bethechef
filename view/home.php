<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4140e51469.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/acceuil.css">
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Home page</title>
</head>
<body>
    <div class="navbar">
    <div>
        <img src="image/logo1.png" alt="">
    </div>
    <div class="element">
        <a href="">Acceuil</a>


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
    <a href='index.php?controller=utilisateur&action=create'><button id="show-login" class="login"><i class="fa-solid fa-right-to-bracket"></i>Connexion</button></a>
    </div>

    <div class="content">
        <div class="left">
        <h1>Découvrez la joie de <span>cuisiner</span><br>& <span>Restauration</span></h1>
        <p class="text">Savourez chaque instant . cuisinez avec passion!</p>
        
        <button>Commancer</button>
        <div class="vid">
        <a href="#"><i class="fa-solid fa-play" style="color: #FFD43B;"></i></a>
        <p>Regarder Videos</p>
    </div>
        
    </div>
    
    <div class="right">
        <img src="image/Group 55.png" alt="">
    </div>
</div>


<div class="coppyright">
    <p>copyright &copy;2024 designed by <span>lolita</span></p>
</div>
<script src="acceuil.js"></script>
</body>
</html>