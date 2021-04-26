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
estandarizacion_de_procesos as 'estandarización de procesos',
localizacion as 'localización',
eficiencia_de_procesos as 'eficiencia de procesos',
manufactura_flexible as 'manufactura flexible',
automatizacion_de_procesos as 'automatización de procesos',
crowdsourcing,
produccion_bajo_demanda as 'producción bajo demanda',
produccion_limpia as 'producción limpia',
sistemas_logisticos as 'Sistemas logísticos',
dis_estrategico as 'Diseño estratégico',
propiedad_intelectual as 'Propiedad intelectual',
generacion_por_el_usuario as 'Generación por el usuario',
fecha,
analisis_predictivo as 'Análisis predictivo'
from procesos {$validacion}";

$result = $con->prepare($consult);
$result ->execute(array());
$field4 = array ( "Procesos" => $result->fetchAll( PDO::FETCH_ASSOC ));

foreach ( $field4 as $key => &$fields ) {
    foreach ( $fields as $key => $field ) {
        $fields['impulsores'] = "Procesos";
        $fields['tipo'] = "Configuración";
        $estandarizacion_de_procesos = "{$field['estandarización de procesos']}";
        $localizacion = "{$field['localización']}";
        $eficiencia_de_procesos = "{$field['eficiencia de procesos']}";
        $manufactura_flexible = "{$field['manufactura flexible']}";
        $automatizacion_de_procesos = "{$field['automatización de procesos']}";
        $crowdsourcing = "{$field['crowdsourcing']}";
        $produccion_bajo_demanda = "{$field['producción bajo demanda']}";
        $produccion_limpia = "{$field['producción limpia']}";
        $sistemas_logisticos = "{$field['Sistemas logísticos']}";
        $dis_estrategico = "{$field['Diseño estratégico']}";
        $propiedad_intelectual = "{$field['Propiedad intelectual']}";
        $generacion_por_el_usuario = "{$field['Generación por el usuario']}";
        $analisis_predictivo = "{$field['Análisis predictivo']}";
        $N = 185;

        $RC1 = ($estandarizacion_de_procesos / $N) ;
        $R1 = round($RC1,3);

        $RC2 = ($localizacion / $N);
        $R2 = round($RC2,3);

        $RC3 = ($eficiencia_de_procesos / $N);
        $R3 = round($RC3,3);

        $RC4 = ($manufactura_flexible / $N);
        $R4 = round($RC4,3);

        $RC5 = ($automatizacion_de_procesos / $N) ;
        $R5 = round($RC5,3);

        $RC6 = ($crowdsourcing / $N) ;
        $R6 = round($RC6,3);

        $RC7 = ($produccion_bajo_demanda / $N);
        $R7 = round($RC7,3);

        $RC8 = ($produccion_limpia / $N);
        $R8 = round($RC8,3);

        $RC9 = ($sistemas_logisticos / $N);
        $R9 = round($RC9,3);

        $RC10 = ($dis_estrategico / $N) ;
        $R10 = round($RC10,3);

        $RC11 = ($propiedad_intelectual / $N);
        $R11 = round($RC11,3);

        $RC12 = ($generacion_por_el_usuario / $N);
        $R12 = round($RC12,3);

        $RC13 = ($analisis_predictivo / $N);
        $R13 = round($RC13,3);

        $RSPROC = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8 + $R9 + $R10 + $R11 + $R12 + $R13;
        $RCPROC = ($RSPROC / 5) ;
        $RCTPROC = round($RCPROC,3);
        $RTPROC = number_format($RCTPROC* 100, 2);

        $EstPROC = 7.0;
        $EstCPROC = number_format($EstPROC* 1,2);
        $VarPROC = ($EstPROC - $RTPROC);
    }
}
?>


 
 

