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
marca_compartida,
apalancamiento_de_marca,
etiqueta_privada,
extension_de_marca,
componentes_de_marca,
transparencia,
alineacion_de_valores,
certificacion
from marca ORDER BY id DESC LIMIT 1";

$result = $con->prepare($consult);
$result->execute(array());

while ($field = $result->fetch(PDO::FETCH_ASSOC)) {

    $marca_compartida = "{$field['marca_compartida']}";
    $apalancamiento_de_marca = "{$field['apalancamiento_de_marca']}";
    $etiqueta_privada = "{$field['etiqueta_privada']}";
    $extension_de_marca = "{$field['extension_de_marca']}";
    $componentes_de_marca = "{$field['componentes_de_marca']}";
    $transparencia = "{$field['transparencia']}";
    $alineacion_de_valores = "{$field['alineacion_de_valores']}";
    $certificacion = "{$field['certificacion']}";

    $NMARCA = 80;

    $RC1 = ($marca_compartida / $NMARCA);
    $R1 = round($RC1, 3);

    $RC2 = ($apalancamiento_de_marca / $NMARCA);
    $R2 = round($RC2, 3);

    $RC3 = ($etiqueta_privada / $NMARCA);
    $R3 = round($RC3, 3);

    $RC4 = ($extension_de_marca / $NMARCA);
    $R4 = round($RC4, 3);

    $RC5 = ($componentes_de_marca / $NMARCA);
    $R5 = round($RC5, 3);

    $RC6 = ($transparencia / $NMARCA);
    $R6 = round($RC6, 3);

    $RC7 = ($alineacion_de_valores / $NMARCA);
    $R7 = round($RC7, 3);

    $RC8 = ($certificacion / $NMARCA);
    $R8 = round($RC8, 3);

    $RSMARCA = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8;
    $RCMARCA = ($RSMARCA / 5);
    $RCTMARCA = round($RCMARCA, 2);
    $RTMARCA = number_format($RCTMARCA * 100, 2);
    $EstMARCA = 10.0; //8.0
    $EstMARCAT = number_format($EstMARCA * 1, 2);
    $VarMARCA = ($EstMARCAT - $RTMARCA);
}
