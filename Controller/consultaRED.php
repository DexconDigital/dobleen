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
fusiones_y_adquisiciones as 'fusiones y adquisiciones',
consolidacion as 'consolidación',
Innovacion_abierta as 'Innovación abierta',
mercados_secundarios as 'mercados secundarios',
integracion_de_la_cadena_de_suministros as 'integración de la cadena de suministros',
participacion_complementaria as 'participacion complementaria',
alianzas,
franquiciamiento,
cooperacion as 'Cooperación',
lanzamiento_de_plataformas_de_la_competencia as 'lanzamiento de plataformas de la competencia',
fecha,
colaboracion as 'colaboración'
from red {$validacion}";

$result = $con->prepare($consult);
$result ->execute(array());
$field2 = array ( "Red" => $result->fetchAll( PDO::FETCH_ASSOC ));

foreach ( $field2 as $key => &$fields ) {
    foreach ( $fields as $key => $field ) {
        $fields['impulsores'] = "Red";
        $fields['tipo'] = "Configuración";
        $fusiones_y_adquisiciones = "{$field['fusiones y adquisiciones']}";
        $consolidacion = "{$field['consolidación']}";
        $Innovacion_abierta = "{$field['Innovación abierta']}";
        $mercados_secundarios = "{$field['mercados secundarios']}";
        $integracion_de_la_cadena_de_suministros = "{$field['integración de la cadena de suministros']}";
        $participacion_complementaria = "{$field['participacion complementaria']}";
        $alianzas = "{$field['alianzas']}";
        $franquiciamiento = "{$field['franquiciamiento']}";
        $cooperacion = "{$field['Cooperación']}";
        $lanzamiento_de_plataformas_de_la_competencia = "{$field['lanzamiento de plataformas de la competencia']}";
        $colaboracion = "{$field['colaboración']}";
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
}
