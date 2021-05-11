<?php

require_once 'conexion.php';

$con = Conect();
$array = array();

//echo $varsesion->admin;
if($varsesion->admin == "1") {
    $condicion = $varsesion->id_usuario;
    $consult = "SELECT * from usuario where id_usuario <> {$condicion}";
    $result = $con->prepare( $consult );
    $result->execute( array() );
    $todouser = $result->fetchAll( PDO::FETCH_OBJ );
}

