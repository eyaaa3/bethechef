<?php
session_start();
if(!isset($_SESSION['nom_chef'])){
    echo"error";
}
$id_chef = $_SESSION['n_cin'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4140e51469.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/chef.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Chef Page</title>
</head>
<body>

        <div class="menu_chef">
            <div class="left">
            <img src="../../image/pngimg 1.png" alt="">
            </div>
            <div class="right">
                <p>Welcome Chef <span><?php echo $_SESSION['nom_chef'] ?></span></p>
                <div class="bouton">
                <a href='../../index.php?controller=formation&action=create'><button class="ajout bt"><i class="fa-solid fa-plus" style="color: #d5d6d8;"></i>Ajouter Une Formation</button></a>
                <a href='../../index.php?controller=recette&action=create'><button class="ajout bt">Ajouter Une Recette</button></a>
                <a href='../../index.php?controller=recette&action=readalll'><button class="ajout bt">Consulter les recettes</button></a>
                <a href='../../index.php?controller=formation&action=readalll'><button class="ajout bt">Consulter les formations</button></a>

                </div>
            </div>
            
        </div>
        <a href="../../config/out.php"><button class="out bt"><i class="fa-solid fa-right-from-bracket" style="color: #d5d6d8;"></i>Deconnecter</button></a>
        <a href="../../index.php?controller=chef&action=read&id_chef=<?=$id_chef?>"><button class="out bt"><i class="fa-solid fa-right-from-bracket" style="color: #d5d6d8;"></i>Mise à jour</button></a>
        
        
        <div class="coppyright">
            <p>copyright &copy;2024 designed by <span>Eya Bouabdallah</span>et<span>Rahma Achiki</span></p>
        </div> 
      
        </body>
</html>
