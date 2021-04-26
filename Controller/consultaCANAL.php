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
diversificacion as 'Diversificación',
tienda_principal as 'Tienda principal',
ir_directo as 'Ir directo',
canales_no_tradicionales as 'Canales no tradicionales',
presencia_popup as 'Presencia pop-up',
distribucion_indirecta as 'Distribución indirecta',
marketing_multinivel as 'Marketing multinivel',
venta_cruzada as 'Venta cruzada',
bajo_demanda as 'Bajo demanda',
contexto_especifico as 'Contexto específico',
fecha,
centro_de_experiencias as 'Centro de experiencias'
from canales {$validacion}";


$result = $con->prepare($consult);
$result->execute(array());
$field8 = array ( "Canales" => $result->fetchAll( PDO::FETCH_ASSOC ));

foreach ( $field8 as $key => &$fields ) {
    foreach ( $fields as $key => $field ) {
        $fields['impulsores'] = "Canales";
        $fields['tipo'] = "Experiencias";
        $diversificacion = "{$field['Diversificación']}";
        $tienda_principal = "{$field['Tienda principal']}";
        $ir_directo = "{$field['Ir directo']}";
        $canales_no_tradicionales = "{$field['Canales no tradicionales']}";
        $presencia_popup = "{$field['Presencia pop-up']}";
        $distribucion_indirecta = "{$field['Distribución indirecta']}";
        $marketing_multinivel = "{$field['Marketing multinivel']}";
        $venta_cruzada = "{$field['Venta cruzada']}";
        $bajo_demanda = "{$field['Bajo demanda']}";
        $contexto_especifico = "{$field['Contexto específico']}";
        $centro_de_experiencias = "{$field['Centro de experiencias']}";
        $NCCANAL = 11 / 17;
        $NCANALC = round($NCCANAL, 4);
        $NCANAL = number_format($NCANALC * 100, 2);

        $RC1 = ($diversificacion / $NCANAL);
        $R1 = round($RC1, 4);

        $RC2 = ($tienda_principal / $NCANAL);
        $R2 = round($RC2, 4);

        $RC3 = ($ir_directo / $NCANAL);
        $R3 = round($RC3, 4);

        $RC4 = ($canales_no_tradicionales / $NCANAL);
        $R4 = round($RC4, 4);

        $RC5 = ($presencia_popup / $NCANAL);
        $R5 = round($RC5, 4);

        $RC6 = ($distribucion_indirecta / $NCANAL);
        $R6 = round($RC6, 4);

        $RC7 = ($marketing_multinivel / $NCANAL);
        $R7 = round($RC7, 4);

        $RC8 = ($venta_cruzada / $NCANAL);
        $R8 = round($RC8, 4);

        $RC9 = ($bajo_demanda / $NCANAL);
        $R9 = round($RC9, 4);

        $RC10 = ($contexto_especifico / $NCANAL);
        $R10 = round($RC10, 4);

        $RC11 = ($centro_de_experiencias / $NCANAL);
        $R11 = round($RC11, 4);


        $RSCANAL = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8 + $R9 + $R10 + $R11;
        $RCCANAL = ($RSCANAL / 5);
        $RCTCANAL = round($RCCANAL, 2);
        $RTCANAL = number_format($RCTCANAL * 100, 2);
        $EstCANAL = 17.0; //8.0
        $EstCANALT = number_format($EstCANAL * 1, 2);
        $VarCANAL = ($EstCANALT - $RTCANAL);
        $EstandarExpe = 50;
    }
}
