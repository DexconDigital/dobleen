<?php

require_once 'conexion.php';

$con = Conect();
$array = array();

$consult = "SELECT 
probar_antes_de_comprar,
garantias,
programas_de_fidelizacion,
adicion_de_valor,
consejeria,
gestion_total_de_la_experiencia,
servicios_suplementarios,
servicio_superior,
servicio_personalizado,
comunidad_de_usuarios_soporte_de_sistemas,
arrendamiento_prestamo,
autoservicio
from servicios ORDER BY id DESC LIMIT 1";

$result = $con->prepare($consult);
$result->execute(array());

while ($field = $result->fetch(PDO::FETCH_ASSOC)) {

    $probar_antes_de_comprar = "{$field['probar_antes_de_comprar']}";
    $garantias = "{$field['garantias']}";
    $programas_de_fidelizacion = "{$field['programas_de_fidelizacion']}";
    $adicion_de_valor = "{$field['adicion_de_valor']}";
    $consejeria = "{$field['consejeria']}";
    $gestion_total_de_la_experiencia = "{$field['gestion_total_de_la_experiencia']}";
    $servicios_suplementarios = "{$field['servicios_suplementarios']}";
    $servicio_superior = "{$field['servicio_superior']}";
    $servicio_personalizado = "{$field['servicio_personalizado']}";
    $comunidad_de_usuarios_soporte_de_sistemas = "{$field['comunidad_de_usuarios_soporte_de_sistemas']}";
    $arrendamiento_prestamo = "{$field['arrendamiento_prestamo']}";
    $autoservicio = "{$field['autoservicio']}";
    $NSERVI = 120;

    $RC1 = ($probar_antes_de_comprar / $NSERVI);
    $R1 = round($RC1, 3);

    $RC2 = ($garantias / $NSERVI);
    $R2 = round($RC2, 3);

    $RC3 = ($programas_de_fidelizacion / $NSERVI);
    $R3 = round($RC3, 3);

    $RC4 = ($adicion_de_valor / $NSERVI);
    $R4 = round($RC4, 3);

    $RC5 = ($consejeria / $NSERVI);
    $R5 = round($RC5, 3);

    $RC6 = ($gestion_total_de_la_experiencia / $NSERVI);
    $R6 = round($RC6, 3);

    $RC7 = ($servicios_suplementarios / $NSERVI);
    $R7 = round($RC7, 3);

    $RC8 = ($servicio_superior / $NSERVI);
    $R8 = round($RC8, 3);

    $RC9 = ($servicio_personalizado / $NSERVI);
    $R9 = round($RC9, 3);

    $RC10 = ($comunidad_de_usuarios_soporte_de_sistemas / $NSERVI);
    $R10 = round($RC10, 3);

    $RC11 = ($arrendamiento_prestamo / $NSERVI);
    $R11 = round($RC11, 3);

    $RC12 = ($autoservicio / $NSERVI);
    $R12 = round($RC12, 3);

    $RSSERVI = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8 + $R9 + $R10 + $R11 + $R12;
    $RCSERVI = ($RSSERVI / 5);
    $RCTSERVI = round($RCSERVI, 2);
    $RTSERVI = number_format($RCTSERVI * 100, 2);
    $EstSERVI = 10.0; //8.0
    $EstSERVIT = number_format($EstSERVI * 1, 2);
    $VarSERVI = ($EstSERVIT - $RTSERVI);
    // echo $VarSERVI . "<br>";
}
