<?php
session_start();


if(!isset($_SESSION['nom_admin'])){
    echo"error";
}



$id_admin = $_SESSION['n_cin'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4140e51469.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Admin page</title>
</head>
<body>
<div class="header">

    <div>
    <img src="../../image/logo1.png" class="logo">
    </div>

    <div class="element">
        <i class="fa-solid fa-bars"></i>
    </div> 
    <div class="form">
    <form action="" class="header__search">
            <img src="../../image/search-line.png" class="search-img">
            <input type="search" placeholder="rechercher recettes" class="header__input">

    </form>
    
    </div>
    <div class="right">      
        <div class="test"><i class="fa-solid fa-bell" style="color: #df0c0c;"></i></div>
        <div class="admin">
        <div class="test1"><i class="fa-solid fa-user-tie" style="color: #e92b2b;"></i></div>
        
        <p><span><?php echo $_SESSION['nom_admin']; ?></span> <br>Admin</p>
        </div>
    </div>    
</div>
<div class="interface">
<div class="adminmenu">
<div class="left-nav">
    <div class="item">
    <i class="fa-solid fa-chart-simple"></i>
    <p>DashBoard</p>
    </div>

    <div class="item">
    <i class="fa-solid fa-table"></i>
    <p>Formation</p>
    </div>

    <div class="item">
    <i class="fa-solid fa-message"></i>
    <p>InBox</p>
    </div>

    <div class="item">
    <i class="fa-solid fa-user"></i>
    <a href='../../index.php?controller=utilisateur&action=readAll' class="work">Users</a>
    </div>

    <div class="item">
    <i class="fa-solid fa-person"></i>
    <a href='../../index.php?controller=chef&action=readAll' class="work">Chefs</a>
    </div>

    <div class="item">
    <i class="fa-solid fa-calendar-days"></i>
    <p>Calendrier</p>
    </div>

    <div class="item">
    <i class="fa-solid fa-check"></i>
    <p>To Do</p>
    </div>

    <div class="item">
    <i class="fa-solid fa-address-book"></i>
    <p>Contact</p>
    </div>

    <div class="item">
    <i class="fa-brands fa-teamspeak"></i>
    <p>Team</p>
    </div>

    <div class="out">
    <a href="../../config/out.php"><button class="btn">Deconnecter</button></a>
  

<a href="../../index.php?controller=admin&action=read&id_admin=<?=$id_admin?>"><button class="btn"><i class="fa-solid fa-right-from-bracket" style="color: #d5d6d8;"></i>Mise à jour</button></a>
    </div>
</div>
</div>
<div class="second-part">
<h1>Dashboard</h1>
<div class="update">

    <div class="card">
        <div class="first">
        <div class="left-1">
        <p >Total Utilisateurs</p>
        <h3>40.698</h3>
        </div>
        <img src="../../image/total.png" alt="">
        </div>
        <p><i class="fa-solid fa-up-long how" style="color: #00ff11;"></i>8.5% UP depuis hier </p>
    </div>

    <div class="card">
        <div class="first">
            <div class="left-1">
        <p>Total Utilisateurs</p>
        <h3>40.698</h3>
        </div>
        <img src="../../image/total.png" alt="">
        </div>
    </div>

    <div class="card">
        <div class="first">
            <div class="left-1">
        <p>Total Utilisateurs</p>
        <h3>40.698</h3>
        </div>
        <img src="../../image/total.png" alt="">
        </div>
    </div>

    <div class="card">
        <div class="first">
            <div class="left-1">
        <p>Total Utilisateurs</p>
        <h3>40.698</h3>
        </div>
        <img src="../../image/total.png" alt="">
        </div>
    </div>
</div>
<div class="chart">
<img src="../../image/Widget 1.png" class="i1">
<img src="../../image/Widget 2.png" class="i2">
</div>
</div>
</div>


</body>
</html>