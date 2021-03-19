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
complementos,
extensiones_plugins,
construccion_de_productos,
sistemas_modulares,
plataformas_de_productos,
ofertas_integradas
from sistema_de_productos ".$validacion;

$result = $con->prepare($consult);
$result->execute(array());

while ($field = $result->fetch(PDO::FETCH_ASSOC)) {

    $complementos = "{$field['complementos']}";
    $extensiones_plugins = "{$field['extensiones_plugins']}";
    $construccion_de_productos = "{$field['construccion_de_productos']}";
    $sistemas_modulares = "{$field['sistemas_modulares']}";
    $plataformas_de_productos = "{$field['plataformas_de_productos']}";
    $ofertas_integradas = "{$field['ofertas_integradas']}";

    $NSISPROC = 80;

    $RC1 = ($complementos / $NSISPROC);
    $R1 = round($RC1, 4);

    $RC2 = ($extensiones_plugins / $NSISPROC);
    $R2 = round($RC2, 4);

    $RC3 = ($construccion_de_productos / $NSISPROC);
    $R3 = round($RC3, 4);

    $RC4 = ($sistemas_modulares / $NSISPROC);
    $R4 = round($RC4, 4);

    $RC5 = ($plataformas_de_productos / $NSISPROC);
    $R5 = round($RC5, 4);

    $RC6 = ($ofertas_integradas / $NSISPROC);
    $R6 = round($RC6, 4);


    $RSSISPROC = $R1 + $R2 + $R3 + $R4 + $R5 + $R6;
    $RCSISPROC = ($RSSISPROC / 5);
    $RCTSISPROC = round($RCSISPROC, 3);
    $RTSISPROC = number_format($RCTSISPROC * 100, 2);
    $EstSISPROC = 7.5; //8.0
    $EstSISPROCT = number_format($EstSISPROC * 1, 2);
    $VarSISPROC = ($EstSISPROCT - $RTSISPROC);
    $EstandarOferta = 15;
}
