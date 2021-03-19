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
dise_organizacional,
sistema_de_incentivos,
integracion_de_ti,
centro_de_competencias,
tercerizacion,
universidad_corporativa,
gerencia_descentralizada,
gestion_del_conocimiento,
aprovechamiento_de_activos_de_otras_comp,
estandarizacion_de_activos
from estructura ".$validacion;

$result = $con->prepare($consult);
$result->execute(array());

while ($field = $result->fetch(PDO::FETCH_ASSOC)) {

    $dise_organizacional = "{$field['dise_organizacional']}";
    $sistema_de_incentivos = "{$field['sistema_de_incentivos']}";
    $integracion_de_ti = "{$field['integracion_de_ti']}";
    $centro_de_competencias = "{$field['centro_de_competencias']}";
    $tercerizacion = "{$field['tercerizacion']}";
    $universidad_corporativa = "{$field['universidad_corporativa']}";
    $gerencia_descentralizada = "{$field['gerencia_descentralizada']}";
    $gestion_del_conocimiento = "{$field['gestion_del_conocimiento']}";
    $aprovechamiento_de_activos_de_otras_comp = "{$field['aprovechamiento_de_activos_de_otras_comp']}";
    $estandarizacion_de_activos = "{$field['estandarizacion_de_activos']}";
    $N = 111;

    $RC1 = ($dise_organizacional / $N);
    $R1 = round($RC1, 3);

    $RC2 = ($sistema_de_incentivos / $N);
    $R2 = round($RC2, 3);

    $RC3 = ($integracion_de_ti / $N);
    $R3 = round($RC3, 3);

    $RC4 = ($centro_de_competencias / $N);
    $R4 = round($RC4, 3);

    $RC5 = ($tercerizacion / $N);
    $R5 = round($RC5, 3);

    $RC6 = ($universidad_corporativa / $N);
    $R6 = round($RC6, 3);

    $RC7 = ($gerencia_descentralizada / $N);
    $R7 = round($RC7, 3);

    $RC8 = ($gestion_del_conocimiento / $N);
    $R8 = round($RC8, 3);

    $RC9 = ($aprovechamiento_de_activos_de_otras_comp / $N);
    $R9 = round($RC9, 3);

    $RC10 = ($estandarizacion_de_activos / $N);
    $R10 = round($RC10, 3);

    $RSEST = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8 + $R9 + $R10;
    $RCEST = ($RSEST / 5);
    $RCTEST = round($RCEST, 3);
    $RTEST = number_format($RCTEST * 100, 2);
    $EstEST = 9.0;
    $EstCEST = number_format($EstEST * 1, 2);
    $VarEST = ($EstEST - $RTEST);
}
