<?php

require_once 'conexion.php';

$con = Conect();
$array = array();

$consult = "SELECT 
diversificacion,
tienda_principal,
ir_directo,
canales_no_tradicionales,
presencia_popup,
distribucion_indirecta,
marketing_multinivel,
venta_cruzada,
bajo_demanda,
contexto_especifico,
centro_de_experiencias
from canales ORDER BY id DESC LIMIT 1";

$result = $con->prepare($consult);
$result->execute(array());

while ($field = $result->fetch(PDO::FETCH_ASSOC)) {

    $diversificacion = "{$field['diversificacion']}";
    $tienda_principal = "{$field['tienda_principal']}";
    $ir_directo = "{$field['ir_directo']}";
    $canales_no_tradicionales = "{$field['canales_no_tradicionales']}";
    $presencia_popup = "{$field['presencia_popup']}";
    $distribucion_indirecta = "{$field['distribucion_indirecta']}";
    $marketing_multinivel = "{$field['marketing_multinivel']}";
    $venta_cruzada = "{$field['venta_cruzada']}";
    $bajo_demanda = "{$field['bajo_demanda']}";
    $contexto_especifico = "{$field['contexto_especifico']}";
    $centro_de_experiencias = "{$field['centro_de_experiencias']}";
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
