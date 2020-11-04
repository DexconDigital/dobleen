<?php

require_once 'conexion.php';

$con = Conect();
$array = array();

$consult = "SELECT 
estandarizacion_de_procesos,
localizacion,
eficiencia_de_procesos,
manufactura_flexible,
automatizacion_de_procesos,
crowdsourcing,
produccion_bajo_demanda,
produccion_limpia,
sistemas_logisticos,
dis_estrategico,
propiedad_intelectual,
generacion_por_el_usuario,
analisis_predictivo
from procesos ORDER BY id DESC LIMIT 1";

$result = $con->prepare($consult);
$result ->execute(array());

while ($field = $result->fetch(PDO::FETCH_ASSOC)){
    
    $estandarizacion_de_procesos = "{$field['estandarizacion_de_procesos']}";
    $localizacion = "{$field['localizacion']}";
    $eficiencia_de_procesos = "{$field['eficiencia_de_procesos']}";
    $manufactura_flexible = "{$field['manufactura_flexible']}";
    $automatizacion_de_procesos = "{$field['automatizacion_de_procesos']}";
    $crowdsourcing = "{$field['crowdsourcing']}";
    $produccion_bajo_demanda = "{$field['produccion_bajo_demanda']}";
    $produccion_limpia = "{$field['produccion_limpia']}";
    $sistemas_logisticos = "{$field['sistemas_logisticos']}";
    $dis_estrategico = "{$field['dis_estrategico']}";
    $propiedad_intelectual = "{$field['propiedad_intelectual']}";
    $generacion_por_el_usuario = "{$field['generacion_por_el_usuario']}";
    $analisis_predictivo = "{$field['analisis_predictivo']}";
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
    
    // echo $R1."<BR>";
    // echo $R2."<BR>";
    // echo $R3."<BR>";
    // echo $R4."<BR>";
    // echo $R5."<BR>";
    // echo $R6."<BR>";
    // echo $R7."<BR>";
    // echo $R8."<BR>";
    // echo $R19."<BR>";
    // echo $R10."<BR>";
    // echo $R11."<BR>";
    // echo $R12."<BR>";
    // echo $R13."<BR>";
    // echo $R14."<BR>";
    // echo $R15."<BR>";
    // echo $R16."<BR>";
    // echo $R17."<BR>";
    // echo $R18."<BR>";
    // echo $R19."<BR>";
    // echo $R20."<BR>";
    // echo $R21."<BR>";


    $RSPROC = $R1 + $R2 + $R3 + $R4 + $R5 + $R6 + $R7 + $R8 + $R9 + $R10 + $R11 + $R12 + $R13;
    $RCPROC = ($RSPROC / 5) ;
    $RCTPROC = round($RCPROC,3);
    $RTPROC = number_format($RCTPROC* 100, 2);
    
    $EstPROC = 7.0;
    $EstCPROC = number_format($EstPROC* 1,2);
    $VarPROC = ($EstPROC - $RTPROC);
    
    
    
    


}

?>


 
 

