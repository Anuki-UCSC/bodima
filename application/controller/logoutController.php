<?php 
session_start();
unset($_SESSION["email"]);
unset($_SESSION["level"]);
    session_destroy();
    header('Location:../index.php');


?>