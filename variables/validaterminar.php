<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['variable'];
    echo $varsesion;
    if($varsesion != null || $varsesion != ''){
        echo "<script language='javascript'>
        window.location.href='variables/terminarsesion.php'
       </script>";
    }
    ?>