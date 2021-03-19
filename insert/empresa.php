<?php

require '../vendor/autoload.php';

require_once 'conexion.php';


function existeuser()
{

    $correoinicial = $_REQUEST['correo'];

    $con = Conect();

    $qry = "SELECT * from usuario where correo = ?";
    $resultado = $con->prepare($qry);
    $resultado->execute(array($correoinicial));

    $resutl = $resultado->rowCount();
    if ($resutl <= 0) {
        activaRedirect();
    } else {
        echo "<script>alert('¡Correo ya registrado! , Intenta con otro correo, Gracias.');window.location.href='../index.php'</script>";
    }
}


function activaRedirect()
{

    session_start();
    $_SESSION['variable'] = "dobleen.com";


    $nombre = $_REQUEST['nombres'];
    $telefono = $_REQUEST['telefono'];
    $correo = $_REQUEST['correo'];
    $empresa = $_REQUEST['empresa'];
    $fecha = $_REQUEST["fecha"];
    $clave = md5($_REQUEST["clave"]);
    $confirmarclave = md5($_REQUEST["confirmarclave"]);
    $fecha = date("Y-m-d");
    if($clave == $confirmarclave) {
        $con = Conect();
        $pdoQuery = "INSERT INTO usuario ( nombre , telefono , correo , empresa, fecha, clave) VALUES (:nombre , :telefono , :correo , :empresa, :fecha , :clave)";
        $pdoResult = $con->prepare($pdoQuery);
        $pdoExec = $pdoResult->execute(array(':nombre' => $nombre, ':telefono' => $telefono, ':correo' => $correo, ':empresa' => $empresa, ':fecha' => $fecha, ':clave' => $clave));

        echo  "<script language='javascript'>
            window.location.href='usuarios.php'
           </script>";
    } else{
        echo "<script>alert('¡Las contraseñas NO coinciden! , Intenta otra vez, Gracias.');window.location.href='../index.php'</script>";
    }
    
}



require '../app/init.php';
