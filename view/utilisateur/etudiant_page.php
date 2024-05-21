<?php
session_start();


if(!isset($_SESSION['nom_utilisateur'])){
    echo"error";
}



$id_user = $_SESSION['n_cin'];



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4140e51469.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../../css/etudiant/etudiant.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>student page</title>
</head>
<body>

    <div class="container">
        <p class="title">welcome <span><?php echo $_SESSION['nom_utilisateur']; ?></span></p>
        <div class="up">
            <div class="first f">
                <div class="pic_title p1">
                    <p>fait partie de nos meilleures <br> formations ! decouvrez vos <br><span>competances</span></p>
                    <img src="../../image/fomation.png" class="pic1">
                </div>
                <a href='../../index.php?controller=formation&action=readAll'><button class="btn1">Consulter les formations</button></a>
            </div>
            
            <div class="first f1">
                <div class="pic_title p2">
                    <p>Acceder au<br><span>cours</span><br>de nos formations</p>
                    <img src="../../image/samira.png" alt="">
                </div>
                <a href='../../index.php?controller=recette&action=readAll'><button class="btn">Consulter les recettes</button></a>
            </div>

        </div>


        
    </div>
    
    <a href="../../config/out.php"><button class="btn">Deconnecter</button></a>
        <a href='../../index.php?controller=utilisateur&action=read&id_user=<?=$id_user?>'><button class="out bt"><i class="fa-solid fa-right-from-bracket" style="color: #d5d6d8;"></i>Mise à jour</button></a>
        <div class="coppyright">
            <p>copyright &copy;2024 designed by <span>Eya Bouabdallah</span>et<span>Rahma Achiki</span></p>
        </div> 
     
        
</body>
</html>