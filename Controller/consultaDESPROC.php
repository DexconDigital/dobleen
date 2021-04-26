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
productos_superiores as 'Productos superiores',
facilidad_de_uso as 'Facilidad de uso',
funcionalidad_atractiva as 'Funcionalidad atractiva',
seguridad,
agregacion_futura as 'Agregación futura',
adicion_de_funcionalidades as 'Adición de funcionalidades',
simplificacion_del_desempe as 'Simplificación del desempeño',
sensibilidad_ambiental as 'Sensibilidad ambiental',
conservacion as 'Conservación',
customizacion as 'Customización',
enfoque,
fecha,
estilo
from desemp_del_producto {$validacion}";

$result = $con->prepare($consult);
$result->execute(array());
$field5 = array ( "Desempeño del producto" => $result->fetchAll( PDO::FETCH_ASSOC ));

foreach ( $field5 as $key => &$fields ) {
    foreach ( $fields as $key => $field ) {
        $fields['impulsores'] = "Desempeño del producto";
        $fields['tipo'] = "Oferta";
        $productos_superiores = "{$field['Productos superiores']}";
        $facilidad_de_uso = "{$field['Facilidad de uso']}";
        $funcionalidad_atractiva = "{$field['Funcionalidad atractiva']}";
        $seguridad = "{$field['seguridad']}";
        $agregacion_futura = "{$field['Agregación futura']}";
        $adicion_de_funcionalidades = "{$field['Adición de funcionalidades']}";
        $simplificacion_del_desempe = "{$field['Simplificación del desempeño']}";
        $sensibilidad_ambiental = "{$field['Sensibilidad ambiental']}";
        $conservacion = "{$field['Conservación']}";
        $customizacion = "{$field['Customización']}";
        $enfoque = "{$field['enfoque']}";
        $estilo = "{$field['estilo']}";
        $NDESPROC = 160;

        $RC1 = ($productos_superiores / $NDESPROC);
        $R1 = round($RC1, 4);

        $RC2 = ($facilidad_de_uso / $NDESPROC);
        $R2 = round($RC2, 4);

        $RC3 = ($funcionalidad_atractiva / $NDESPROC);
        $R3 = round($RC3, 4);

        $RC4 = ($seguridad / $NDESPROC);
        $R4 = round($RC4, 4);

        $RC5 = ($agregacion_futura / $NDESPROC);
        $R5 = round($RC5, 4);

        $RC6 = ($adicion_de_funcionalidades / $NDESPROC);
        $R6 = round($RC6, 4);

        $RC7 = ($simplificacion_del_desempe / $NDESPROC);
        $R7 = round($RC7, 4);

        $RC8 = ($sensibilidad_ambiental / $NDESPROC);
        $R8 = round($RC8, 4);

        $RC9 = ($conservacion / $NDESPROC);
        $R9 = round($RC9, 4);

        $RC10 = ($customizacion / $NDESPROC);
        $R10 = round($RC10, 4);

        $RC11 = ($enfoque / $NDESPROC);
        $R11 = round($RC11, 4);

        $RC12 = ($estilo / $NDESPROC);
        $R12 = round($RC12, 4);

        $RSDESPROC = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8 + $R9 + $R10 + $R11 + $R12;
        $RCDESPROC = ($RSDESPROC / 5);
        $RCTDESPROC = round($RCDESPROC, 3);
        $RTDESPROC = number_format($RCTDESPROC * 100, 2);
        $EstDESPROC = 7.5;//8.0
        $EstDESPROCT = number_format($EstDESPROC * 1, 2);
        $VarDESPROC = ($EstDESPROCT - $RTDESPROC);
    }
}
