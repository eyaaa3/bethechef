
<?php

session_start();

unset($_SESSION['type']);//sortir de la session 
session_destroy();

header('location:../view/login.php');
?>