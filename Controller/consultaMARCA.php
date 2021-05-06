<?php

require_once 'conexion.php';

$con = Conect();
$array = array();

$validacion = "ORDER BY id DESC LIMIT 1";
if ( $varsesion != null || $varsesion != '' ) {
    $validacion;
}
if ( isset( $varsesion->id_usuario ) ) {
    $validacion = "WHERE id_usuario = ".$varsesion->id_usuario;
}

$consult = "SELECT 
marca_compartida as 'Marca compartida',
apalancamiento_de_marca as 'Apalancamiento de marca',
etiqueta_privada as 'Etiqueta privada',
extension_de_marca as 'Extensión de marca',
componentes_de_marca as 'Componentes de marca',
transparencia,
alineacion_de_valores as 'Alineación de valores',
fecha,
certificacion as 'Certificación'
from marca {$validacion}";

$result = $con->prepare( $consult );
$result->execute( array() );
$field9 = array ( "Marca" => $result->fetchAll( PDO::FETCH_ASSOC ) );

$RTMARCA = 0;
$json = "";
foreach ( $field9 as $key => &$fields ) {
    foreach ( $fields as $key => $field ) {
        $fields['impulsores'] = "Marca";
        $fields['tipo'] = "Experiencias";
        $marca_compartida = "{$field['Marca compartida']}";
        $apalancamiento_de_marca = "{$field['Apalancamiento de marca']}";
        $etiqueta_privada = "{$field['Etiqueta privada']}";
        $extension_de_marca = "{$field['Extensión de marca']}";
        $componentes_de_marca = "{$field['Componentes de marca']}";
        $transparencia = "{$field['transparencia']}";
        $alineacion_de_valores = "{$field['Alineación de valores']}";
        $certificacion = "{$field['Certificación']}";
        $fecha = "{$field['fecha']}";
        $NMARCA = 80;

        $RC1 = ( $marca_compartida / $NMARCA );
        $R1 = round( $RC1, 3 );

        $RC2 = ( $apalancamiento_de_marca / $NMARCA );
        $R2 = round( $RC2, 3 );

        $RC3 = ( $etiqueta_privada / $NMARCA );
        $R3 = round( $RC3, 3 );

        $RC4 = ( $extension_de_marca / $NMARCA );
        $R4 = round( $RC4, 3 );

        $RC5 = ( $componentes_de_marca / $NMARCA );
        $R5 = round( $RC5, 3 );

        $RC6 = ( $transparencia / $NMARCA );
        $R6 = round( $RC6, 3 );

        $RC7 = ( $alineacion_de_valores / $NMARCA );
        $R7 = round( $RC7, 3 );

        $RC8 = ( $certificacion / $NMARCA );
        $R8 = round( $RC8, 3 );

        $RSMARCA = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8;
        $RCMARCA = ( $RSMARCA / 5 );
        $RCTMARCA = round( $RCMARCA, 2 );
        $RTMARCA = number_format( $RCTMARCA * 100, 2 );

        $notalanio = '';
        $notalmes = '';
        $totanio1 = 0;

        $anio = date( "Y", strtotime( $fecha ) );
        $mes = date( "m", strtotime( $fecha ) );
        if ( $notalanio != $anio || $notalmes != $mes ) {
            $totanio1 = $RTMARCA;
            $notalanio = $anio;

            $notalmes = $mes;

            if ( $notalmes != '' ) {
                $json .= '{"fecha": [{"'.$notalanio.'" : '.$totanio1.'}], "tabla": "'.$fields['impulsores'].'", "anio": "'.$notalanio.'", "mes": "'.$notalmes.'",  "puntaje": "'.$totanio1.'","tipo" : "'.$fields['tipo'].'" }';
            }
        }
    }
}
$EstMARCA = 10.0;
//8.0
$EstMARCAT = number_format( $EstMARCA * 1, 2 );
$VarMARCA = ( $EstMARCAT - $RTMARCA );
$json_total = '{"datos" : ['.$json.']}';
$anios = str_replace( "}{", "},{", $json_total );
$anios9 = ( json_decode( $anios, true ) );
