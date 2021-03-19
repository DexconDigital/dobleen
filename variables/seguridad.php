<?php 
    session_start(); 
    error_reporting(0);
    $varsesion = $_SESSION['variable'];
     if($varsesion == null || $varsesion == ''){
         header('Location:index.php');
     }
    if($varsesion->ticket == "0"){
        header('Location:index.php');
    }
?>
