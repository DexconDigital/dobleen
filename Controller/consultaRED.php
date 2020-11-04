<?php

require_once 'conexion.php';

$con = Conect();
$array = array();

$consult = "SELECT 
fusiones_y_adquisiciones,
consolidacion,
Innovacion_abierta,
mercados_secundarios,
integracion_de_la_cadena_de_suministros,
participacion_complementaria,
alianzas,
franquiciamiento,
cooperacion,
lanzamiento_de_plataformas_de_la_competencia,
colaboracion
from red ORDER BY id DESC LIMIT 1";

$result = $con->prepare($consult);
$result ->execute(array());

while ($field = $result->fetch(PDO::FETCH_ASSOC)){
    
    $fusiones_y_adquisiciones = "{$field['fusiones_y_adquisiciones']}";
    $consolidacion = "{$field['consolidacion']}";
    $Innovacion_abierta = "{$field['Innovacion_abierta']}";
    $mercados_secundarios = "{$field['mercados_secundarios']}";
    $integracion_de_la_cadena_de_suministros = "{$field['integracion_de_la_cadena_de_suministros']}";
    $participacion_complementaria = "{$field['participacion_complementaria']}";
    $alianzas = "{$field['alianzas']}";
    $franquiciamiento = "{$field['franquiciamiento']}";
    $cooperacion = "{$field['cooperacion']}";
    $lanzamiento_de_plataformas_de_la_competencia = "{$field['lanzamiento_de_plataformas_de_la_competencia']}";
    $colaboracion = "{$field['colaboracion']}";
    $N = 122;
     
    $RC1 = ($fusiones_y_adquisiciones / $N) ;
    $R1 = round($RC1,3);

    $RC2 = ($consolidacion / $N);
    $R2 = round($RC2,3);

    $RC3 = ($Innovacion_abierta / $N);
    $R3 = round($RC3,3);

    $RC4 = ($mercados_secundarios / $N);
    $R4 = round($RC4,3);

    $RC5 = ($integracion_de_la_cadena_de_suministros / $N) ;
    $R5 = round($RC5,3);

    $RC6 = ($participacion_complementaria / $N) ;
    $R6 = round($RC6,3);

    $RC7 = ($alianzas / $N);
    $R7 = round($RC7,3);

    $RC8 = ($franquiciamiento / $N);
    $R8 = round($RC8,3);

    $RC9 = ($cooperacion / $N);
    $R9 = round($RC9,3);

    $RC10 = ($lanzamiento_de_plataformas_de_la_competencia / $N) ;
    $R10 = round($RC10,3);

    $RC11 = ($colaboracion / $N);
    $R11 = round($RC11,3);

    $RSR = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8 + $R9 + $R10 + $R11;
    $RCR = ($RSR / 5) ;
    $RCTR = round($RCR,3);
    $RTR = number_format($RCTR* 100,2);
    $EstRED = 9.0;
    $EstCRED = number_format($EstRED* 1,2);
    $VarRED = ($EstRED - $RTR);
    
    


}
