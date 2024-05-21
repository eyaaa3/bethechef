<?php
$id_user = $u->getId_User(); 
echo "<div class= btn><a  href='index.php?controller=utilisateur&action=read&id_user=$id_user'> Modifier votre compte </a> </div>" ;

?>
<div class="container">
        <p class="title">welcome <span><?php echo $u->getNom() ?></span></p>
        <div class="up">
            <div class="first f f3">
                <div class="pic_title p1">
                    <p>fait partie de nos meilleures <br> formations ! decouvrez vos <br><span>competances</span></p>
                    <img src="image/fomation.png" class="pic1">
                </div>
                <a href="listeformation.php"><button class="btn1">Consulter la liste</button></a>
            </div>
            
            <div class="first f1 f3">
                <div class="pic_title p2">
                    <p>Acceder au<br><span>cours</span><br>de nos formations</p>
                    <img src="image/samira.png" alt="">
                </div>
                <a href="#"><button class="btn">Cours</button></a>
            </div>

        </div>


        <div class="down">
            <div class="first">
                <div class="pic_title">
                    <p>consulter la liste<br>d'offre<br><span>d'emploi</span></p>
                    <img src="image/fomation.png" alt="">
                </div>
                <a href="offre.php"><button class="btn">Voir liste</button></a>
            </div>
            
           

        </div>
    </div>

   