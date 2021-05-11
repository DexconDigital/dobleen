<?php


if ( isset( $_POST['llave'] ) == "true" ) {
    if (isset($_POST['id'])) {
        require_once '../Controller/conexion.php';
        $con = Conect();
        $condicion = $_POST['id'];
        $consult = "SELECT * from usuario where id_usuario = {$condicion}";
        $resulta = $con->prepare( $consult );
        $resulta->execute( array() );
        $varsesion = $resulta->fetch( PDO::FETCH_OBJ );

    } else {
        include '../variables/seguridad.php';
    }

    include '../Controller/consultaMDG.php';
    include '../Controller/consultaRED.php';
    include '../Controller/consultaEST.php';
    include '../Controller/consultaEST.php';
    include '../Controller/consultaPROC.php';
    include '../Controller/consultaDESPROC.php';
    include '../Controller/consultaSISPROC.php';
    include '../Controller/consultaSERVI.php';
    include '../Controller/consultaMARCA.php';
    include '../Controller/consultaCANAL.php';
    include '../Controller/consultaCLIENTE.php';

    //Datos de Modelo de Gestion
    $MDG = $RT;
    $VARM = $VarMDG;
    $ESTM = $EstCMDG;
    $DESVMDG = ( $RT - $EstMDG );
    //Datos de res
    $ESTR = $EstCRED;
    $RED = $RTR;
    $VRED = $VarRED;
    $DESVRED = ( $RED - $EstRED );
    //Datos de Estructura
    $ESTEST = $EstCEST;
    $EST = $RTEST;
    $VEST = $VarEST;
    $DESVEST = ( $EST - $EstEST );
    //Datos de Procesos
    $ESTPROC = $EstCPROC;
    $PROC = $RTPROC;
    $VPROC = $VarPROC;
    $DESVPROC = ( $PROC - $EstPROC );
    //Desempeño del producto
    $DESPROC = $RTDESPROC;
    $VRDESPROC = $VarDESPROC;
    $VarDesProc = $EstDESPROCT;
    $DESVDESPROC = ( $DESPROC - $VarDesProc );
    //Sistema del Producto
    $SISPROC = $RTSISPROC;
    $VRSISPROC = $VarSISPROC;
    $VarDesProc = $EstDESPROCT;
    $DESVSISPROC = ( $RTSISPROC - $EstSISPROCT );
    //Servicio
    $SERVI = $RTSERVI;
    $DESVSERVI = ( $SERVI - $EstSERVIT );
    //Marca
    $MARCA = $RTMARCA;
    $DESVMARCA = ( $MARCA - $EstMARCAT );
    //Canal
    $CANAL = $RTCANAL;
    $DESVCANAL = ( $CANAL - $EstCANALT );
    //Cliente
    $CLIENTE = $RTCLIENTE;
    $DESVCLIENTE = ( $CLIENTE - $EstCLIENTET );
    //OFERTA
    $TOTALOFERTAC = $DESPROC + $SISPROC;
    $TOTALOFERTA =  number_format( $TOTALOFERTAC * 1, 2 );
    $VarOferta = $EstandarOferta;
    $VariaOferta =  $VarOferta - $TOTALOFERTA;
    $DesviaOferta =  $TOTALOFERTA - $VarOferta;

    //configuracion
    $TOTALCONFIC = $MDG + $RED + $EST + $PROC;
    $TOTALCONFI = number_format( $TOTALCONFIC * 1, 2 );
    $VarConfi =  $EstandarConfi;
    $VariaConfi = $VarConfi - $TOTALCONFI;
    $DesviaConfi = $TOTALCONFI - $VarConfi;

    //Experiencia
    $TOTALEXPEC = $MARCA + $CANAL + $CLIENTE + $SERVI;
    $TOTALEXPE = number_format( $TOTALEXPEC * 1, 2 );
    $VarExpe = $EstandarExpe;
    $VariaExpe =  $VarExpe - $TOTALEXPE;
    $DesviaExpe = $TOTALEXPE - $VarExpe;

    //Sumas
    $TOTALUSERC = $TOTALOFERTA + $TOTALCONFI + $TOTALEXPE;
    $TOTALUSER = number_format( $TOTALUSERC * 1, 2 );
    $TOTALESTANDAR = $VarExpe + $VarOferta + $VarConfi;
    $TOTALDESVIACION = $DesviaConfi + $DesviaExpe + $DesviaOferta;

    $fecha = date( 'd-m-Y' );

    $total_anios = array ( $anios1, $anios2, $anios3, $anios4, $anios5, $anios6, $anios7, $anios8, $anios9, $anios10 );
    $arreglos = array ( $field1, $field2, $field3, $field4, $field5, $field6, $field7, $field8, $field9, $field10 );

    $aniossumArray = [];
    $result = [];
    $nuevoarray = [];
    $generalarray = [];
    $total_innovador = 0;
    foreach ( $total_anios as $key => $value ) {
        foreach ( $value as $llave =>$valor ) {
            foreach ( $valor as $llav =>$val ) {
                foreach ( $val as $llav_fech =>$val_fech ) {
                    if ( $llav_fech == "fecha" ) {
                        foreach ( $val_fech as $v_f ) {
                            foreach ( $v_f as $llave_final => $valor_final ) {
                                if ( !array_key_exists( $llave_final, $aniossumArray ) ) {
                                    $aniossumArray[$llave_final] = 0;
                                }
                                $aniossumArray[$llave_final] += $valor_final;
                            }
                        }
                    }
                    
                }
                if ( $val['fecha'] != "fecha" ) {
                    $mesint = intval($val['mes']);
                    $nuevoarray[$val['anio']][$val['tipo']][$val['tabla']][$mesint] = $val['puntaje'];
                    
                    if (!isset($generalarray[$val['anio']][$val['tipo']][$mesint])){
                        $generalarray[$val['anio']][$val['tipo']][$mesint] = 0;
                    } 
                    $generalarray[$val['anio']][$val['tipo']][$mesint] += $val['puntaje'];
                    
                }
            }
        }
    }
    //echo "<pre>";print_r($generalarray);echo "</pre>";
    //exit();
    $total_innovador = 0;
    foreach ( $aniossumArray as $value ) {
        $total_innovador = $value;
    }
    $total_inndesv = $total_innovador - $TOTALESTANDAR;
    krsort( $aniossumArray );
    //Armar pdf
    $header = '<head> 
                  <style>
                        h1 { font-family: chronicle;margin-top: 0; margin-bottom: 0;font-weight: normal; }
                        h4 { font-family: chronicle; font-size: 10pt; text-align:center; margin-top: 0; margin-bottom: 0;font-weight: normal; }
                        h6 { font-family: chronicle; font-size: 6pt; font-weight: 100; text-align:center; margin-top: 0; margin-bottom: 0;font-weight: normal;}
                        table, td {border-collapse: collapse; color: black !important;font-size:14px; }
                        body{font-family: opensans;}
                        .fs-12 {font-size:12px;}
                        .mb-3 {margin-bottom: 1rem !important;}
                        .bg-configuracion {background-color: #fdd300;}
                        .bg-oferta {background-color: #85f100;}
                        .bg-experiencias {background-color: #34F0FF;}
                  </style> 
               </head>';

    $cabecera = "<table style='width: 100%;margin-bottom:20px;'>
                    <tr>
                        <td style='text-align:left;'>
                            <img style='width: 15%;' src='../images/logo.png'>
                        </td>
                        <td style='text-align:center;'>
                            <h1 style='font-size: 22pt;'>Reporte de Seguimiento Anual</h1> 
                        </td>
                        <td style='text-align:right;'>
                            <img style='width: 20%;;' src='../images/logo-dobleen-black.png'>
                        </td>
                        
                    </tr>
                </table>";
    $cabecera.= "<pagefooter name='odds' 
                            content-center='© Copyright 2021 | Dexcon Consultores SAS – Dexcon Digital | Todos los derechos reservados. Dobleen un producto de Dexcon Digital.'
                            footer-style='font-size: 8pt;' line='0' /> 
                         <setpagefooter name='odds' page='O' value='on' /> ";

    $cuerpo = "";
    
    foreach ( $aniossumArray as $key => $value ) {
        $cuerpo .= "<div style='margin-bottom:2%;'>
                    <table style='width:100%;'>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan='12' style='text-align: center;border: 0.5px solid #858796;'><b>{$key}</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style='text-align: center;border: 0.5px solid #858796;padding:4px;'><b>enero</b></td>
                            <td style='text-align: center;border: 0.5px solid #858796;padding:4px;'><b>febrero</b></td>
                            <td style='text-align: center;border: 0.5px solid #858796;padding:4px;'><b>marzo</b></td>
                            <td style='text-align: center;border: 0.5px solid #858796;padding:4px;'><b>abril</b></td>
                            <td style='text-align: center;border: 0.5px solid #858796;padding:4px;'><b>mayo</b></td>
                            <td style='text-align: center;border: 0.5px solid #858796;padding:4px;'><b>junio</b></td>
                            <td style='text-align: center;border: 0.5px solid #858796;padding:4px;'><b>julio</b></td>
                            <td style='text-align: center;border: 0.5px solid #858796;padding:4px;'><b>agosto</b></td>
                            <td style='text-align: center;border: 0.5px solid #858796;padding:4px;'><b>septiembre</b></td>
                            <td style='text-align: center;border: 0.5px solid #858796;padding:4px;'><b>octubre</b></td>
                            <td style='text-align: center;border: 0.5px solid #858796;padding:4px;'><b>noviembre</b></td>
                            <td style='text-align: center;border: 0.5px solid #858796;padding:4px;'><b>diciembre</b></td>
                        </tr>";

        foreach ( $tipos as $tipo ) {
            $color = ( $tipo == "Configuración" ) ? "configuracion" : "";
            $color .= ( $tipo == "Oferta" ) ? "oferta" : "";
            $color .= ( $tipo == "Experiencias" ) ? "experiencias" : "";

            $cuerpo .= "<tr>
                            <td class='bg-{$color}' colspan='3' style='text-align: center;border: 0.5px solid #858796;padding-left:4px;padding-right:4px;text-align:left;'><b>{$tipo}</b></td>";
            
            foreach($generalarray as $generalkey => $generalval) { 
                if($generalkey == $key){
                    foreach($generalval as $tipokey => $tipoval){
                        if($tipokey == $tipo){ 
                            for($month=1;$month<=12;$month++ ) {
                                if (isset($tipoval[$month])) {
                                    $puntaje_total = $tipoval[$month];
                                    $cuerpo .= "<td style='text-align: center;border: 0.5px solid #858796;'>{$puntaje_total}%</td>";
                                }else {
                                    $cuerpo .= "<td style='text-align: center;border: 0.5px solid #858796;'></td>";
                                }
                             }
                        }
                    }
                }
            }
            $cuerpo .= "</tr>";
                                    
            for ( $i = 0; $i <= 9; $i++ ) {
               
                foreach ( $impulsores as $impulsor ) {

                    foreach ( $arreglos[$i] as $nuevokey => $nuevovalue ) {
                        
                        if ( $nuevovalue['impulsores'] == $impulsor && $nuevovalue['tipo'] == $tipo) {
                            $cuerpo .= "<tr>
                                    <td style='width:5%'></td>
                                    <td class='bg-{$color}' colspan='2' style='text-align: center;border: 0.5px solid #858796;padding-left:4px;padding-right:4px;text-align:left;width:5%'><b>{$impulsor}</b></td>";
                            
                            //separacion de arreglo con resultados por mes
                            foreach($nuevoarray as $newkey => $newval) {
                                if($newkey == $key){
                                    foreach($newval as $tipokey => $tipoval){
                                        if($tipokey == $tipo){ 
                                            foreach($tipoval as $impulsorkey => $impulsorval){
                                                if($impulsorkey == $impulsor){ 
                                                    for($month=1;$month<=12;$month++ ) {
                                                        if (isset($impulsorval[$month])) {
                                                            $puntaje_total = $impulsorval[$month];
                                                            $cuerpo .= "<td style='text-align: center;border: 0.5px solid #858796;'>{$puntaje_total}%</td>";
                                                        }else {
                                                            $cuerpo .= "<td style='text-align: center;border: 0.5px solid #858796;'></td>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                                        
                            $cuerpo .= "</tr>";
                            
                            $primer_val = $nuevovalue[0];
                            foreach ( $primer_val as $key_puntaje => $val_puntaje ) {
                                if ($key_puntaje != "fecha"){
                                    $llaves_principales[$impulsor][$tipo][]['a'] = $key_puntaje;
                                    unset($nuevovalue["tipo"]);
                                    unset($nuevovalue["impulsores"]);
                                    
                                    //agrupar los resultados por año y mes
                                    foreach($nuevovalue as $llave_valores => $valor_puntuacion ) {
                                        $anio = "";
                                        $mes = "";
                                        if(isset($valor_puntuacion['fecha'])) {
                                            $anio = date( "Y", strtotime( $valor_puntuacion['fecha'] ) );
                                            $mes = intval(date( "m", strtotime( $valor_puntuacion['fecha'] ) ));
                                        }
                                        unset($valor_puntuacion["fecha"]);
                                        $result[$anio][$impulsor][$mes] = $valor_puntuacion;
                                    }
                                    
                                    $cuerpo .= "<tr>
                                                <td style='width:5%'></td>
                                                <td style='width:5%'></td>
                                                <td class='bg-{$color}' style='text-align: center;border: 0.5px solid #858796;padding-left:4px;padding-right:4px;text-align:left;width:20%'><b>{$key_puntaje}</b></td>";
                                    
                                    foreach ($result as $keyresult => $valresult) {
                                        if($keyresult == $key){
                                            foreach ($valresult as $kresul => $vresul) {
                                                if($kresul == $impulsor){
                                                    //echo "<pre>";print_r($vresul[3]);echo "</pre>";
                                                    for($month=1;$month<=12;$month++ ) {
                                                        if (isset($vresul[$month])) {
                                                            $puntaje_total = $vresul[$month][$key_puntaje];
                                                            $cuerpo .= "<td style='text-align: center;border: 0.5px solid #858796;'>{$puntaje_total}</td>";
                                                        }else {
                                                            $cuerpo .= "<td style='text-align: center;border: 0.5px solid #858796;'></td>";
                                                        }
                                                   }
                                               }
                                           }
                                        }
                                    }
                                    $cuerpo .=  "</tr>";
                                }
                            }
                        }
                    }
                }
            }
        }

        $cuerpo .= "</table>
                </div>";
    }
    $ehtml = "<html> 
                {$header}
                <body> 
                    {$cabecera}
                    {$cuerpo}
                    <div style='clear: both; margin: 0pt; padding: 0pt; '></div>
                </body>                    
              </html>";
    //var_dump( $ehtml );
    //exit();
    require_once '../vendor/mpdf/autoload.php';
    $mpdf = new \Mpdf\Mpdf( ['mode' => 'utf-8', 'format' => 'A4-L'] );
    $mpdf->WriteHTML( $ehtml );
    //$pdfString = $mpdf->Output();exit();
    $pdfString = $mpdf->Output( '', 'S' );
    $pdfBase64 = base64_encode( $pdfString );
    $PDF = 'data:application/pdf;base64,' . $pdfBase64;
    echo json_encode(["codigo" => 1, "nombre" => $varsesion->empresa,"pdf" => $PDF]);
}else{
    echo json_encode(["codigo" => 0, "mensaje" => "Error, Acceso Restringido!"]);
}