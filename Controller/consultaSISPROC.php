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
complementos,
extensiones_plugins as 'Extensiones plug-ins',
construccion_de_productos as 'Construcción de productos',
sistemas_modulares as 'Sistemas modulares',
plataformas_de_productos as 'Plataformas de productos / servicios',
fecha,
ofertas_integradas as 'Ofertas integradas'
from sistema_de_productos {$validacion}";

$result = $con->prepare( $consult );
$result->execute( array() );
$field6 = array ( "Sistema de productos" => $result->fetchAll( PDO::FETCH_ASSOC ) );

$RTSISPROC = 0;
$json = "";
foreach ( $field6 as $key => &$fields ) {
    foreach ( $fields as $key => $field ) {
        $fields['impulsores'] = "Sistema de productos";
        $fields['tipo'] = "Oferta";
        $complementos = "{$field['complementos']}";
        $extensiones_plugins = "{$field['Extensiones plug-ins']}";
        $construccion_de_productos = "{$field['Construcción de productos']}";
        $sistemas_modulares = "{$field['Sistemas modulares']}";
        $plataformas_de_productos = "{$field['Plataformas de productos / servicios']}";
        $ofertas_integradas = "{$field['Ofertas integradas']}";
        $fecha = "{$field['fecha']}";

        $NSISPROC = 80;

        $RC1 = ( $complementos / $NSISPROC );
        $R1 = round( $RC1, 4 );

        $RC2 = ( $extensiones_plugins / $NSISPROC );
        $R2 = round( $RC2, 4 );

        $RC3 = ( $construccion_de_productos / $NSISPROC );
        $R3 = round( $RC3, 4 );

        $RC4 = ( $sistemas_modulares / $NSISPROC );
        $R4 = round( $RC4, 4 );

        $RC5 = ( $plataformas_de_productos / $NSISPROC );
        $R5 = round( $RC5, 4 );

        $RC6 = ( $ofertas_integradas / $NSISPROC );
        $R6 = round( $RC6, 4 );

        $RSSISPROC = $R1 + $R2 + $R3 + $R4 + $R5 + $R6;
        $RCSISPROC = ( $RSSISPROC / 5 );
        $RCTSISPROC = round( $RCSISPROC, 3 );
        $RTSISPROC = number_format( $RCTSISPROC * 100, 2 );

        $notalanio = '';
        $notalmes = '';
        $totanio1 = 0;

        $anio = date( "Y", strtotime( $fecha ) );
        $mes = date( "m", strtotime( $fecha ) );
        if ( $notalanio != $anio || $notalmes != $mes ) {
            $totanio1 = $RTSISPROC;
            $notalanio = $anio;

            $notalmes = $mes;

            if ( $notalmes != '' ) {
                $json .= '{"fecha": [{"'.$notalanio.'" : '.$totanio1.'}], "tabla": "'.$fields['impulsores'].'", "anio": "'.$notalanio.'", "mes": "'.$notalmes.'",  "puntaje": "'.$totanio1.'","tipo" : "'.$fields['tipo'].'" }';
            }
        }
    }
}
$EstSISPROC = 7.5;
//8.0
$EstSISPROCT = number_format( $EstSISPROC * 1, 2 );
$VarSISPROC = ( $EstSISPROCT - $RTSISPROC );
$EstandarOferta = 15;
$json_total = '{"datos" : ['.$json.']}';
$anios = str_replace( "}{", "},{", $json_total );
$anios6 = ( json_decode( $anios, true ) );