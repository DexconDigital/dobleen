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
premium,
definido_por_el_usuario,
liderazgo_en_costos,
fremmium,
transacciones_a_escala,
precio_flexible,
microtransacciones,
flotador,
escasez_forzada,
financiamiento,
suscripcion,
financiamiento_por_publicidad,
membresias,
licenciamiento,
capacidad_instalada,
uso_medido,
conexiones,
precios_agrupados,
subasta,
desagregar_precios,
riesgo_compartido from modelo_de_ganancias ".$validacion;

$result = $con->prepare($consult);
$result->execute(array());

while ($field = $result->fetch(PDO::FETCH_ASSOC)) {

    $premium = "{$field['premium']}";
    $definido_por_el_usuario = "{$field['definido_por_el_usuario']}";
    $liderazgo_en_costos = "{$field['liderazgo_en_costos']}";
    $transacciones_a_escala = "{$field['transacciones_a_escala']}";
    $precio_flexible = "{$field['precio_flexible']}";
    $microtransacciones = "{$field['microtransacciones']}";
    $flotador = "{$field['flotador']}";
    $escasez_forzada = "{$field['escasez_forzada']}";
    $financiamiento = "{$field['financiamiento']}";
    $suscripcion = "{$field['suscripcion']}";
    $financiamiento_por_publicidad = "{$field['financiamiento_por_publicidad']}";
    $membresias = "{$field['membresias']}";
    $licenciamiento = "{$field['licenciamiento']}";
    $capacidad_instalada = "{$field['capacidad_instalada']}";
    $uso_medido = "{$field['uso_medido']}";
    $conexiones = "{$field['conexiones']}";
    $precios_agrupados = "{$field['precios_agrupados']}";
    $subasta = "{$field['subasta']}";
    $desagregar_precios = "{$field['desagregar_precios']}";
    $riesgo_compartido = "{$field['riesgo_compartido']}";
    $fremmium = "{$field['fremmium']}";
    $N = 210;

    $RC1 = ($premium / $N);
    $R1 = round($RC1, 3);

    $RC2 = ($definido_por_el_usuario / $N);
    $R2 = round($RC2, 3);

    $RC3 = ($liderazgo_en_costos / $N);
    $R3 = round($RC3, 3);

    $RC4 = ($transacciones_a_escala / $N);
    $R4 = round($RC4, 3);

    $RC5 = ($precio_flexible / $N);
    $R5 = round($RC5, 3);

    $RC6 = ($microtransacciones / $N);
    $R6 = round($RC6, 3);

    $RC7 = ($flotador / $N);
    $R7 = round($RC7, 3);

    $RC8 = ($escasez_forzada / $N);
    $R8 = round($RC8, 3);

    $RC9 = ($financiamiento / $N);
    $R9 = round($RC9, 3);

    $RC10 = ($suscripcion / $N);
    $R10 = round($RC10, 3);

    $RC11 = ($financiamiento_por_publicidad / $N);
    $R11 = round($RC11, 3);

    $RC12 = ($membresias / $N);
    $R12 = round($RC12, 3);

    $RC13 = ($licenciamiento / $N);
    $R13 = round($RC13, 3);

    $RC14 = ($capacidad_instalada / $N);
    $R14 = round($RC14, 3);

    $RC15 =  ($uso_medido / $N);
    $R15 = round($RC15, 3);

    $RC16 = ($conexiones / $N);
    $R16 = round($RC16, 3);

    $RC17 = ($precios_agrupados / $N);
    $R17 = round($RC17, 3);

    $RC18 = ($subasta / $N);
    $R18 = round($RC18, 3);

    $RC19 = ($desagregar_precios / $N);
    $R19 = round($RC19, 3);

    $RC20 = ($riesgo_compartido / $N);
    $R20 = round($RC20, 3);

    $RC21 = ($fremmium / $N);
    $R21 = round($RC21, 3);

    $RS = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8 + $R9 + $R10 + $R11 + $R12 + $R13 + $R14 + $R15 + $R16 + $R17 + $R18 + $R19 + $R20 + $R21;
    $RC = ($RS / 5);
    $RCT = round($RC, 3);
    $RT = number_format($RCT * 100, 2);
    $EstMDG = 10.0;
    $EstCMDG = number_format($EstMDG * 1, 2);
    $VarMDG = ($EstMDG - $RT);
    $EstandarConfi = 35;
}
