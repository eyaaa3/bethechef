<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4140e51469.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/acceuil.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/etudiant/etudiant.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/recette.css">
    <link rel="stylesheet" href="css/list/list.css">
    <link rel="stylesheet" href="css/formation/formation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
     
     <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <title><?php echo $pagetitle; ?></title>
</head>
<body>
<?php
require_once($ROOT.$DS."view".$DS."header.php");


$filepath = $ROOT.$DS."view".$DS.$controller.$DS;

$filename = "view".ucfirst($view).ucfirst($controller).'.php'; 

require_once($filepath.$filename);

require_once($ROOT.$DS."view".$DS."footer.php");
?>
</body>
</html>