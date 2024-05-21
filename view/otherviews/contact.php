<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "eyabouabdallah27@gmail.com";
    $headers = "From: $email";
    if(mail($to,$subject,$message,$headers)){
        echo "Email Sent";
    }else{
        echo "Email sending failed";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
	<title>Formulaire de Contact</title>
    <link rel="stylesheet" href="../../css/commun.css">
    <link rel="stylesheet" href="../../css/contactINSCRI.css">
    <script src="js/script.js"></script>
</head>
<body>
<div class="navbar">
    <div>
        <img src="../../image/logo1.png" alt="">
    </div>
    <div class="element">
        <a href="../../index.php">Acceuil</a>


        <div class="dropdown">
            <button class="dropbtn">Service
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href='../../index.php?controller=formation&action=readAll'>Nos Formations</a>
              <a href='../../index.php?controller=recette&action=readAll'>Recettes Gratuite</a>
              <a href="../../view/otherviews/offre.php">Offre d'emplois</a>
            </div>
        </div>

       <a href="../../view/otherviews/temoignage.php">Tempoignage</a>
        <a href="../../view/otherviews/listechef.php">Nos Instructeurs</a>
        <a href="../../view/otherviews/contact.php">Contactez Nous</a>
</div>
</div>
    
     <div class="container">
    <div class="aaa">
        <h2>Contactez-nous</h2>
        <form  method="post">
            <input type="text" class="form-control mt-4" name="fullname" id="" placeholder="Full Name:">
            <input type="email" class="form-control mt-4" name="email" id="" placeholder="ent-er email">
            <input type="text"  class="form-control mt-4" name="subject" id="" placeholder="enter message:">
            <textarea name="message"  class="form-control mt-4" id="" cols="30" rows="10" placeholder="enter message"></textarea>
            <input type="submit"  class="btn btn-primary mt-4"name="submit" value="submit">

        </form>
    </div>
</div>
    <footer class="coppyright">
       <p><strong>Site réalisé par : ACHIKI rahma -- BOUABDALLAH eya</strong></p>
    </footer>
</body>
</html>