<?php

require_once 'conexion.php';

$con = Conect();
$array = array();

$validacion = "ORDER BY id DESC LIMIT 1";
if($varsesion != null || $varsesion != ''){
    $validacion;
}
if (isset($varsesion->id_usuario)){
    $validacion = "WHERE id_usuario = ".$varsesion->id_usuario;
}

$consult = "SELECT 
Automatizacion_de_procesos,
simplificacion_de_experiencias,
curacion,
habilitacion_de_experiencias,
maestria,
autonomia_y_autoridad,
comunidad_y_pertenencia,
personalizacion,
personalidad_y_humanizacion,
estatus_y_reconocimiento
from compromiso_del_cliente ".$validacion;

$result = $con->prepare($consult);
$result->execute(array());

while ($field = $result->fetch(PDO::FETCH_ASSOC)) {

    $Automatizacion_de_procesos = "{$field['Automatizacion_de_procesos']}";
    $simplificacion_de_experiencias = "{$field['simplificacion_de_experiencias']}";
    $curacion = "{$field['curacion']}";
    $habilitacion_de_experiencias = "{$field['habilitacion_de_experiencias']}";
    $maestria = "{$field['maestria']}";
    $autonomia_y_autoridad = "{$field['autonomia_y_autoridad']}";
    $comunidad_y_pertenencia = "{$field['comunidad_y_pertenencia']}";
    $personalizacion = "{$field['personalizacion']}";
    $personalidad_y_humanizacion = "{$field['personalidad_y_humanizacion']}";
    $estatus_y_reconocimiento = "{$field['estatus_y_reconocimiento']}";

    $NCCLIENTE = 10 / 13;
    $NCLIENTEC = round($NCCLIENTE, 4);
    $NCLIENTE = number_format($NCLIENTEC * 100, 2);

    $RC1 = ($Automatizacion_de_procesos / $NCLIENTE);
    $R1 = round($RC1, 4);

    $RC2 = ($simplificacion_de_experiencias / $NCLIENTE);
    $R2 = round($RC2, 4);

    $RC3 = ($curacion / $NCLIENTE);
    $R3 = round($RC3, 4);

    $RC4 = ($habilitacion_de_experiencias / $NCLIENTE);
    $R4 = round($RC4, 4);

    $RC5 = ($maestria / $NCLIENTE);
    $R5 = round($RC5, 4);

    $RC6 = ($autonomia_y_autoridad / $NCLIENTE);
    $R6 = round($RC6, 4);

    $RC7 = ($comunidad_y_pertenencia / $NCLIENTE);
    $R7 = round($RC7, 4);

    $RC8 = ($personalizacion / $NCLIENTE);
    $R8 = round($RC8, 4);

    $RC9 = ($personalidad_y_humanizacion / $NCLIENTE);
    $R9 = round($RC9, 4);

    $RC10 = ($estatus_y_reconocimiento / $NCLIENTE);
    $R10 = round($RC10, 4);

    $RSCLIENTE = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8 + $R9 + $R10;
    $RCCLIENTE = ($RSCLIENTE / 5);
    $RCTCLIENTE = round($RCCLIENTE, 2);
    $RTCLIENTE = number_format($RCTCLIENTE * 100, 2);
    $EstCLIENTE = 13.0; //8.0
    $EstCLIENTET = number_format($EstCLIENTE * 1, 2);
    $VarCLIENTE = ($EstCLIENTET - $RTCLIENTE);
}
