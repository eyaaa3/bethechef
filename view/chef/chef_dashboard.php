<?php
include 'configuration.php';

session_start();

if(!isset($_SESSION['chef_name'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4140e51469.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/chef.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Chef Page</title>
</head>
<body>
    <div class="navbar">
        <div>
            <img src="image/logo1.png" alt="">
        </div>
        <div class="element">
            <a href="acceuil.html">Acceuil</a>
    
    
            <div class="dropdown">
                <button class="dropbtn">Service
                    <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="#">Nos Formations</a>
                  <a href="#">Nos Recettes</a>
                  <a href="#">Nos Astuces</a>
                </div>
            </div>
    
            <div class="dropdown">
                <button class="dropbtn">Dropdown
                   <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="#">Contactez Nous</a>
                  <a href="#">Tempoignage</a>
                  </div>
              </div>
            <a href="#">Nos Chefs</a>
            <a href="#">Offre d'emplois</a>
    
    
        </div>
        </div>

        <div class="menu_chef">
            <div class="left">
            <img src="image/pngimg 1.png" alt="">
            </div>
            <div class="right">
                <p>Welcome Chef <span><?php echo $_SESSION['chef_name'] ?></span></p>
                <div class="bouton">
                <a href="ajout_formation.php"><button class="ajout bt"><i class="fa-solid fa-plus" style="color: #d5d6d8;"></i>Ajouter Une Formation</button></a>
                <a href="ajout_recette.php"><button class="ajout bt">Ajouter Une Recette</button></a>
                <a href="#"><button class="ajout bt">Consulter la liste</button></a>
                </div>
            </div>
            
        </div>
        <a href="out.php"><button class="out bt"><i class="fa-solid fa-right-from-bracket" style="color: #d5d6d8;"></i>Deconnecter</button></a>
        <div class="coppyright">
            <p>copyright &copy;2024 designed by <span>lolita</span></p>
        </div> 
      
</body>
</html>