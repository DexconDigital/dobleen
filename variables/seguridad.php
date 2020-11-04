<?php 
    session_start(); 
    error_reporting(0);
    $varsesion = $_SESSION['variable'];
     if($varsesion == null || $varsesion == ''){
         echo "<script language='javascript'>
         window.location.href='index.php'
        </script>";
     }
?>