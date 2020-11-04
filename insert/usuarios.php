<?php 
  
require '../vendor/autoload.php';

require_once 'conexion.php';

session_start();

$con = Conect();
$qry = "SELECT * FROM usuario ORDER by id_usuario DESC LIMIT 1 ";
$resultado = $con->prepare($qry);
$resultado->execute(array());

while($res = $resultado->fetch(PDO::FETCH_ASSOC)){
        $id_usuario="{$res['id_usuario']}";
        $nombre="{$res['empresa']}";
        $nit="0";
        $estado="free";
        $fecha="{$res['fecha']}";

}

    $con = Conect();  
    $pdoQuery1="INSERT INTO empresa ( nombre , nit , estado , fecha, id_usuario) VALUES (:nombre , :nit , :estado , :fecha, :id_usuario)";
    $pdoResult1 = $con->prepare($pdoQuery1);
    $pdoExec = $pdoResult1->execute(array(':nombre'=>$nombre, ':nit'=>$nit, ':estado'=>$estado,':fecha'=>$fecha, 'id_usuario'=>$id_usuario));

     echo  "<script language='javascript'>
            window.location.href='../demo.php'
           </script>";

?>