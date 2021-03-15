<?php

require_once 'conexion.php';

$con = Conect();
$array = array();

$consult = "SELECT 
productos_superiores,
facilidad_de_uso,
funcionalidad_atractiva,
seguridad,
agregacion_futura,
adicion_de_funcionalidades,
simplificacion_del_desempe,
sensibilidad_ambiental,
conservacion,
customizacion,
enfoque,
estilo
from desemp_del_producto	 ORDER BY id DESC LIMIT 1";

$result = $con->prepare($consult);
$result->execute(array());

while ($field = $result->fetch(PDO::FETCH_ASSOC)) {

    $productos_superiores = "{$field['productos_superiores']}";
    $facilidad_de_uso = "{$field['facilidad_de_uso']}";
    $funcionalidad_atractiva = "{$field['funcionalidad_atractiva']}";
    $seguridad = "{$field['seguridad']}";
    $agregacion_futura = "{$field['agregacion_futura']}";
    $adicion_de_funcionalidades = "{$field['adicion_de_funcionalidades']}";
    $simplificacion_del_desempe = "{$field['simplificacion_del_desempe']}";
    $sensibilidad_ambiental = "{$field['sensibilidad_ambiental']}";
    $conservacion = "{$field['conservacion']}";
    $customizacion = "{$field['customizacion']}";
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
