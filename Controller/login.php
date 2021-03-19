<?php 
require_once 'conexion.php';

$correo = $_POST['correo'];
$clave = md5($_POST['clave']);

$con = Conect();

$sql = "SELECT * FROM  usuario WHERE correo=:correo  AND clave=:clave";
$sentencia = $con->prepare($sql);
$sentencia->execute(['correo'=>$correo,'clave'=>$clave]);
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);
if (empty($resultado)){
    echo("error");
}
else{
    session_start();
    $_SESSION['variable'] = $resultado;
    echo ($resultado->ticket);
}
