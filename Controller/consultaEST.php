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
dise_organizacional as 'diseño organizacional',
sistema_de_incentivos as 'sistema de incentivos',
integracion_de_ti as 'integración de TI',
centro_de_competencias as 'centro de competencias',
tercerizacion as 'tercerización',
universidad_corporativa as 'universidad corporativa',
gerencia_descentralizada as 'gerencia descentralizada',
gestion_del_conocimiento as 'gestión del conocimiento',
aprovechamiento_de_activos_de_otras_comp as 'aprovechamiento de activos de otras compañias',
fecha,
estandarizacion_de_activos as 'estandarización de activos'
from estructura {$validacion}";

$result = $con->prepare( $consult );
$result->execute( array() );
$field3 = array ( "Estructura" => $result->fetchAll( PDO::FETCH_ASSOC ) );

$RTEST = 0;
$json = "";
foreach ( $field3 as $key => &$fields ) {
    foreach ( $fields as $key => $field ) {
        $fields['impulsores'] = "Estructura";
        $fields['tipo'] = "Configuración";
        $dise_organizacional = "{$field['diseño organizacional']}";
        $sistema_de_incentivos = "{$field['sistema de incentivos']}";
        $integracion_de_ti = "{$field['integración de TI']}";
        $centro_de_competencias = "{$field['centro de competencias']}";
        $tercerizacion = "{$field['tercerización']}";
        $universidad_corporativa = "{$field['universidad corporativa']}";
        $gerencia_descentralizada = "{$field['gerencia descentralizada']}";
        $gestion_del_conocimiento = "{$field['gestión del conocimiento']}";
        $aprovechamiento_de_activos_de_otras_comp = "{$field['aprovechamiento de activos de otras compañias']}";
        $estandarizacion_de_activos = "{$field['estandarización de activos']}";
        $fecha = "{$field['fecha']}";
        $N = 111;

        $RC1 = ( $dise_organizacional / $N );
        $R1 = round( $RC1, 3 );

        $RC2 = ( $sistema_de_incentivos / $N );
        $R2 = round( $RC2, 3 );

        $RC3 = ( $integracion_de_ti / $N );
        $R3 = round( $RC3, 3 );

        $RC4 = ( $centro_de_competencias / $N );
        $R4 = round( $RC4, 3 );

        $RC5 = ( $tercerizacion / $N );
        $R5 = round( $RC5, 3 );

        $RC6 = ( $universidad_corporativa / $N );
        $R6 = round( $RC6, 3 );

        $RC7 = ( $gerencia_descentralizada / $N );
        $R7 = round( $RC7, 3 );

        $RC8 = ( $gestion_del_conocimiento / $N );
        $R8 = round( $RC8, 3 );

        $RC9 = ( $aprovechamiento_de_activos_de_otras_comp / $N );
        $R9 = round( $RC9, 3 );

        $RC10 = ( $estandarizacion_de_activos / $N );
        $R10 = round( $RC10, 3 );

        $RSEST = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8 + $R9 + $R10;
        $RCEST = ( $RSEST / 5 );
        $RCTEST = round( $RCEST, 3 );
        $RTEST = number_format( $RCTEST * 100, 2 );

        $notalanio = '';
        $notalmes = '';
        $totanio1 = 0;

        $anio = date( "Y", strtotime( $fecha ) );
        $mes = date( "m", strtotime( $fecha ) );
        if ( $notalanio != $anio || $notalmes != $mes ) {
            $totanio1 = $RTEST;
            $notalanio = $anio;

            $notalmes = $mes;

            if ( $notalmes != '' ) {
                $json .= '{"fecha": [{"'.$notalanio.'" : '.$totanio1.'}], "tabla": "'.$fields['impulsores'].'", "anio": "'.$notalanio.'", "mes": "'.$notalmes.'",  "puntaje": "'.$totanio1.'","tipo" : "'.$fields['tipo'].'" }';
            }
        }
    }
}
$EstEST = 9.0;
$EstCEST = number_format( $EstEST * 1, 2 );
$VarEST = ( $EstEST - $RTEST );
$json_total = '{"datos" : ['.$json.']}';
$anios = str_replace( "}{", "},{", $json_total );
$anios3 = ( json_decode( $anios, true ) );
