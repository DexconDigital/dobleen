<?php

if ( isset( $_POST['llave'] ) == "true" ) {
    include '../variables/seguridad.php';
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

    $empresa = $varsesion->empresa;
    $correo = $varsesion->correo;
    $fecha = date( 'd-m-Y' );
    $consolidado_img = $_POST['consolidado_img'];
    $palanca_img = $_POST['palanca_img'];
    $impulsor_img = $_POST['impulsor_img'];
    $oferta_grap_img = $_POST['oferta_grap_img'];
    $experiencia_img = $_POST['experiencia_img'];
    $rating_img = $_POST['rating_img'];
    $total_anios = array ( $anios1, $anios2, $anios3, $anios4, $anios5, $anios6, $anios7, $anios8, $anios9, $anios10 );

    $aniossumArray = [];
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
            }
        }
    }
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
                        table, td {border-collapse: collapse; color: black !important;font-size:12px; }
                        body{font-family: opensans;}
                        .fs-12 {font-size:12px;}
                        .mb-3 {margin-bottom: 1rem !important;}
                        .bg-red {background-color: #C00000;color: #f8f9fc !important;}
                        .bg-dark-yellow {background-color: #E55407;color: #f8f9fc !important;}
                        .bg-yellow {background-color: #FDD300;}
                        .bg-dark-green {background-color: #86F200;}
                        .bg-aqua {background-color: #3EFAC5;}
                        .bg-lila {background-color: #852766;color: white !important;}
                        .bg-amarillo {background-color: #FDD300;}
                        .bg-verde {background-color: #86F200;}
                        .bg-verde-palido {background-color: #B6E500;}
                        .bg-cyan {background-color: #34F0FF;}
                        .bg-ladrillo {background-color: #F07B3B;color: white !important;}
                  </style> 
               </head>';

    $footer = "<div style='width: 100%; margin: 0 auto; padding-top: 3%;'>
                    <div style='text-align: left;'> 
                        <div style='font-size: 17pt;border-top: 1px solid #0070C0;border-bottom: 1px solid #0070C0;'>
                            <div>Resultados Evaluación Perfil Innovador</div>
                        </div> 
                    </div>
                    <div style='text-align: center;'> 
                        <div style='font-size: 17pt;'>
                            <a href='https://www.dexcondigital.com/' target='_blank' style='color:#0070C0;text-decoration:none;'>www.dexcondigital.com</a>
                        </div> 
                    </div>
                    <div style='text-align: left;'> 
                        <div style='font-size: 16pt;'>
                            <div>Dexcon Consultores S.A.S.</div>
                        </div> 
                    </div>
                </div>";

    $portada = "<div style='margin-bottom:150px;'> 
                    <div style='float: left; width: 30%; text-align:left;' > 
                        <img src='../images/logo.png'>
                    </div> 
                </div>
                <div style='text-align:center;'>
                    <div style='width: 80%; margin: 0 auto;border: 1px solid #0070C0;'>
                        <div style='background-color: #DEEBFF;'>
                            <h1 style='font-size: 22pt;text-align: center;'>Resultados Evaluación Perfil Innovador</h1> 
                        </div>
                        <div style='text-align: left;'>
                            <table>
                                <tr>
                                    <td style='font-size: 14pt;padding-left: 2%;padding-top:1%;'>Empresa:</td>
                                    <td style='font-size: 14pt;padding-left: 2%;padding-top:1%;'>{$empresa}</td>
                                </tr>
                            </table>

                        </div>
                        <div style='text-align: center;'>
                            <div style='font-size: 14pt;padding-left: 2%;padding-top:6%;padding-bottom:1%;'>Fecha de reporte: {$fecha}</div> 
                        </div>
                    </div>
                    <div style='width: 45%; margin: 0 auto; padding-top:25%;'>
                        <div style='text-align: left;'> 
                            <div style='font-size: 14pt;padding-left: 10%;'>
                                <div>DEXCON CONSULTORES SAS</div>
                                <div>Nit: 900.630.067-0</div>
                                <div>Bogotá D..C, Colombia</div><br>
                                <div>(571) 322 3029577</div>
                                <a href='https://www.dexcondigital.com/' target='_blank' style='color:#0070C0;'>www.dexcondigital.com</a>
                                <a href='mailto:comercial@dexcondigital.com' style='color:#0070C0;' target='_blank'>comercial@dexcondigital.com</a>
                            </div> 
                        </div>
                    </div>
                </div>
                <pagebreak/>";

    $page2 = "<div style='margin-bottom:50px;'> 
                <div style='float: left; width: 30%; text-align:left;' > 
                    <img src='../images/logo.png'>
                </div> 
            </div>
            <h1 style='font-size: 25pt;text-align: left;margin-bottom:30px;'>Resumen Ejecutivo</h1> 
            <div style='background-color: #DEEBFF;'>
                <div style='font-size: 19pt;text-align: left;padding-left:1%;'>Identificación & Características</div> 
            </div>
            <div>
                <table style='border-collapse: collapse;width:100%;'>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;width:50%;'><b>Fecha de consulta del informe:</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;'>{$fecha}</td>
                    </tr>
                    <tr style='border-bottom: 1pt solid black;'>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;'><b>Razón Social:</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;'>{$empresa}</td>
                    </tr>
                    <tr style='border-bottom: 1pt solid black;'>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;'><b>Correo electrónico:</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;'>{$correo}</td>
                    </tr>
                </table>
            </div>
            <div style='background-color: #DEEBFF;margin-top:3%'>
                <div style='font-size: 19pt;text-align: left;padding-left:1%;'>Resultados Consolidados</div> 
            </div>
            <div style='width: 70%;display: block;margin: 0 auto;'>
                {$consolidado_img}
            </div>
            <div>
                <table style='border-collapse: collapse;width:80%;margin: 0 auto;'>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;'></td>
                        <td style='font-size: 10pt;padding-left: 2%;border: 0.5px solid #858796;'>Puntaje Obtenido</td>
                        <td style='font-size: 10pt;padding-left: 2%;border: 0.5px solid #858796;'>Estándar</td>
                        <td style='font-size: 10pt;padding-left: 2%;border: 0.5px solid #858796;'>Desviación</td>
                    </tr>
                    <tr>
                        <td style='font-size: 10pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;'>Total perfil innovador</td>
                        <td style='font-size: 10pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;'>{$TOTALUSER}%</td>
                        <td style='font-size: 10pt;padding-left: 2%;border: 0.5px solid #858796;width:20%;'>{$TOTALESTANDAR}%</td>
                        <td style='font-size: 10pt;padding-left: 2%;border: 0.5px solid #858796;width:20%;'>{$TOTALDESVIACION}%</td>
                    </tr>
                </table>
            </div>
            <pagebreak/>";

    $page3 = "<div style='margin-bottom:50px;'> 
                <div style='float: left; width: 30%; text-align:left;' > 
                    <img src='../images/logo.png'>
                </div> 
            </div>
            <h1 style='font-size: 25pt;text-align: left;margin-bottom:30px;'>Resultados por Impulsor de Innovación</h1> 
            <div style='background-color: #DEEBFF;margin-bottom:20px;'>
                <div style='font-size: 19pt;text-align: left;padding-left:1%;'>Resultados Consolidados</div> 
            </div>
            <div style='margin-bottom:20px;'>
                <table style='border-collapse: collapse;width:100%;margin: 0 auto;'>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Palanca de Innovación</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Puntaje Obtenido</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Estándar</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Desviación</b></td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;background-color: #fdd300;'><b>Configuración</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;text-align:center;'>{$TOTALCONFI}%</td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:20%;text-align:center;'>{$VarConfi}%</td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DesviaConfi}%</td>
                    </tr>
                    <tr >
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;background-color: #85f100;'><b>Oferta</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;text-align:center;'>{$TOTALOFERTA}%</td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:20%;text-align:center;'>{$VarOferta}%</td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DesviaOferta}%</td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;background-color: #34F0FF;'><b>Experiencias</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;text-align:center;'>{$TOTALEXPE}%</td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:20%;text-align:center;'>{$VarExpe}%</td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DesviaExpe}%</td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;'><b>Total perfil innovador</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;text-align:center;'><b>{$TOTALUSER}%</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:20%;text-align:center;'><b>{$TOTALESTANDAR}%</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:20%;text-align:center;'><b>{$TOTALDESVIACION}%</b></td>
                    </tr>
                </table>
            </div>
            <div style='width: 90%;display: block;margin: 0 auto;'>
                {$palanca_img}
            </div>
            <pagebreak/>";

    $page4 = "<div style='margin-bottom:50px;'> 
                <div style='float: left; width: 30%; text-align:left;' > 
                    <img src='../images/logo.png'>
                </div> 
            </div>
            <h1 style='font-size: 25pt;text-align: left;margin-bottom:30px;'>Resultados por Impulsor de Innovación</h1> 
            <div style='background-color: #DEEBFF;margin-bottom:20px;'>
                <div style='font-size: 19pt;text-align: left;padding-left:1%;'>Resultados Configuración</div> 
            </div>
            <div style='margin-bottom:20px;'>
                <table style='border-collapse: collapse;width:100%;margin: 0 auto;'>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Impulsor de Innovación</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;text-align:center;'><b>Puntaje Obtenido</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;text-align:center;'><b>Estándar</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;text-align:center;'><b>Desviación</b></td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;background-color: #fdd300;'><b>Modelo de Ganancias</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:30%;text-align:center;'>{$MDG}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$EstMDG}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DESVMDG}%</td>
                    </tr>
                    <tr >
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;background-color: #fdd300;'><b>Red</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:30%;text-align:center;'>{$RED}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$EstRED}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DESVRED}%</td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;background-color: #fdd300;'><b>Estructura</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:30%;text-align:center;'>{$EST}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$EstEST}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DESVEST}%</td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;width:30%;background-color: #fdd300;'><b>Procesos</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:30%;text-align:center;'>{$PROC}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$EstPROC}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DESVPROC}%</td>
                    </tr>
                </table>
            </div>
            <div style='width: 90%;display: block;margin: 0 auto;'>
                {$impulsor_img}
            </div>
            <pagebreak/>";

    $page5 = "<div style='margin-bottom:50px;'> 
                <div style='float: left; width: 30%; text-align:left;' > 
                    <img src='../images/logo.png'>
                </div> 
            </div>
            <h1 style='font-size: 25pt;text-align: left;margin-bottom:30px;'>Resultados por Impulsor de Innovación</h1> 
            <div style='background-color: #DEEBFF;margin-bottom:20px;'>
                <div style='font-size: 19pt;text-align: left;padding-left:1%;'>Resultados Oferta</div> 
            </div>
            <div style='margin-bottom:20px;'>
                <table style='border-collapse: collapse;width:100%;margin: 0 auto;'>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Impulsor de Innovación</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Puntaje Obtenido</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Estándar</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Desviación</b></td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;border: 0.5px solid #858796;width:30%;background-color: #85f100;'><b>Desempeño de Procesos</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:30%;text-align:center;'>{$DESPROC}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$EstDESPROC}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DESVDESPROC}%</td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;border: 0.5px solid #858796;width:30%;background-color: #85f100;'><b>Sistema de Productos</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:30%;text-align:center;'>{$SISPROC}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$EstSISPROC}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DESVSISPROC}%</td>
                    </tr>
                </table>
            </div>
            <div style='width: 90%;display: block;margin: 0 auto;'>
                {$oferta_grap_img}
            </div>
            <pagebreak/>";

    $page6 = "<div style='margin-bottom:50px;'> 
                <div style='float: left; width: 30%; text-align:left;' > 
                    <img src='../images/logo.png'>
                </div> 
            </div>
            <h1 style='font-size: 25pt;text-align: left;margin-bottom:30px;'>Resultados por Impulsor de Innovación</h1> 
            <div style='background-color: #DEEBFF;margin-bottom:20px;'>
                <div style='font-size: 19pt;text-align: left;padding-left:1%;'>Resultados Experiencia</div> 
            </div>
            <div style='margin-bottom:20px;'>
                <table style='border-collapse: collapse;width:100%;margin: 0 auto;'>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Impulsor de Innovación</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Puntaje Obtenido</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Estándar</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Desviación</b></td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;border: 0.5px solid #858796;width:35%;background-color: #34F0FF;'><b>Servicios</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:30%;text-align:center;'>{$SERVI}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$EstSERVI}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DESVSERVI}%</td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;border: 0.5px solid #858796;width:30%;background-color: #34F0FF;'><b>Canales</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:30%;text-align:center;'>{$CANAL}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$EstCANAL}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DESVCANAL}%</td>
                    </tr>
                    <tr >
                        <td style='font-size: 12pt;padding-left: 1%;border: 0.5px solid #858796;width:30%;background-color: #34F0FF;'><b>Marca</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:30%;text-align:center;'>{$MARCA}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$EstMARCA}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DESVMARCA}%</td>
                    </tr>
                    <tr >
                        <td style='font-size: 12pt;padding-left: 1%;border: 0.5px solid #858796;width:30%;background-color: #34F0FF;'><b>Compromiso con el Cliente</b></td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:30%;text-align:center;'>{$CLIENTE}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$EstCLIENTE}%</td>
                        <td style='font-size: 12pt;border: 0.5px solid #858796;width:20%;text-align:center;'>{$DESVCLIENTE}%</td>
                    </tr>
                </table>
            </div>
            <div style='width: 90%;display: block;margin: 0 auto;'>
                {$experiencia_img}
            </div>
            <pagebreak/>";

    $page7 = "<div style='margin-bottom:50px;'> 
                <div style='float: left; width: 30%; text-align:left;' > 
                    <img src='../images/logo.png'>
                </div> 
            </div>
            <h1 style='font-size: 25pt;text-align: left;margin-bottom:30px;'>Perfil Innovador</h1> 
            <div style='background-color: #DEEBFF;'>
                <div style='font-size: 19pt;text-align: left;padding-left:1%;'>Síntesis</div> 
            </div>
            <div>
                <table style='border-collapse: collapse;width:100%;'>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;width:50%;'><b>Puntaje obtenido total:</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;'>{$total_innovador}%</td>
                    </tr>
                    <tr style='border-bottom: 1pt solid black;'>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;'><b>Estándar:</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;'>{$TOTALESTANDAR}%</td>
                    </tr>
                    <tr style='border-bottom: 1pt solid black;'>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;'><b>Desviación:</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;'>{$total_inndesv}%</td>
                    </tr>
                </table>
            </div>";
    
    $total_int = $total_innovador;
    $color_cab = "red";
    $total = $total_innovador;
    $nivel = "En desarrollo";
    $nivel_texto = "Procesos no definidos, mal controlados, basados en acciones de innovación reactivas, debe intervenir urgentemente";

    if ( $total >= 25.1 ) {
        $color_cab = "dark-yellow";
        $nivel = "Básico";
        $nivel_texto = "Procesos semi estructurados, con controles incipientes, existen políticas y estándares mínimos de innovación, debe mejorar";
    }
    if ( $total >= 50.1 ) {
        $color_cab = "yellow";
        $nivel = "Avanzado";
        $nivel_texto = "Existe estructura de procesos y controles, políticas y estándares documentados enfocados a la generación de innovación, debe continuar hasta lograr ser líder en innovación";
    }
    if ( $total >= 75.1 ) {
        $color_cab = "dark-green";
        $nivel = "Líder";
        $nivel_texto = "Enfoque, cultura orientada a la innovación, existe estructura y sistemas de gestión de innovación, enfocado a la prevención y control de los riesgos, continuar optimizando";
    }

    $page7 .= "<div style='background-color: #DEEBFF;margin-top:3%'>
                <div style='font-size: 19pt;text-align: left;padding-left:1%;'>Opinión</div> 
            </div>
            <div>
                <table style='border-collapse: collapse;width:100%;'>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;width:40%;'><b>Opinión perfil innovador:</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;padding-top:1%;border-bottom: 0.5px solid gray;'>{$nivel_texto}</td>
                    </tr>
                </table>
            </div>
            <div style='background-color: #DEEBFF;margin-top:5%'>
                <div style='font-size: 19pt;text-align: left;padding-left:1%;'>Rating</div> 
            </div>
            <div class='bg-{$color_cab}' style='margin-top:2%;margin-bottom:2%;text-align: center;'>
                <div style='font-size: 19pt;padding:1%;'><b>{$total_int}/{$TOTALESTANDAR}</b></div> 
            </div>
            <hr >
            <div style='margin-top:5%'>
                <div style='font-size: 16pt;text-align: left;padding-left:1%;'><span style='border-bottom: 2px solid black;'><b>Nivel de Innovación:</b></span></div> 
                <div style='font-size: 19pt;text-align: left;padding-left:1%;'><b>{$nivel}</b></div>
            </div>
            <div style='margin-top:5%'>
                <div style='font-size: 16pt;text-align: left;padding-left:1%;'>Análisis realizado el: {$fecha}</div>
            </div>
            <pagebreak/>";

    $page8 = "<div style='margin-bottom:50px;'> 
                <div style='float: left; width: 30%; text-align:left;' > 
                    <img src='../images/logo.png'>
                </div> 
            </div>
            <h1 style='font-size: 25pt;text-align: left;margin-bottom:30px;'>Evolución del Rating</h1> 
            <div style='width: 90%;display: block;margin: 0 auto;'>
                {$rating_img}
            </div>
            <div style='margin-bottom:20px;'>
                <table style='border-collapse: collapse;width:100%;margin: 0 auto;'>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Año</b></td>
                        <td style='font-size: 12pt;padding-left: 2%;border: 0.5px solid #858796;text-align:center;'><b>Valor</b></td>
                    </tr>";
    foreach ( $aniossumArray as $key => $value ) {
        $page8 .= "<tr>
                    <td style='font-size: 12pt;border: 0.5px solid #858796;width:30%;text-align:left;'>{$key}</td>
                    <td style='font-size: 12pt;border: 0.5px solid #858796;width:30%;text-align:left;'>{$value}/{$TOTALESTANDAR}</td>
                </tr>";
    }

    $page8 .= "</table>
            </div>
            <pagebreak/>";

    $page9 = "<div style='margin-bottom:50px;'> 
                <div style='float: left; width: 30%; text-align:left;' > 
                    <img src='../images/logo.png'>
                </div> 
            </div>
            <h1 style='font-size: 25pt;text-align: left;margin-bottom:30px;'>Resultados por Impulsor de Innovación</h1>
            <div style='background-color: #DEEBFF;margin-bottom:20px;'>
                <div style='font-size: 19pt;text-align: left;padding-left:1%;'>Interpretación de Resultados</div> 
            </div>
            <div style='margin-bottom:20px;'>
                <table style='border-collapse: collapse;width:100%;margin: 0 auto;'>
                    <tr>
                        <td colspan='2' style='font-size: 12pt;padding-left: 2%;text-align:center;background-color: #fdd300;'><b>Configuración</b></td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;width:30%;'><b>de 0% a 11%</b></td>
                        <td style='font-size: 12pt;'>Tienes una base, pero debes reflexionar sobre cómo puedes mejorar, descubre cómo.</td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;width:30%;'><b>de 11,01% a 23%</b></td>
                        <td style='font-size: 12pt;'>No esta mal, tu puntaje es promedio en comparación con otras empresas de tu industria, conoce como puedes optimizar.</td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;width:30%;'><b>de 23,01% a 35%</b></td>
                        <td style='font-size: 12pt;'>Buen trabajo, pero hay todavía espacio para mejorar, podemos desarrollar contigo innovaciones, descubre cómo.</td>
                    </tr>
                    <tr>
                        <td colspan='2' style='font-size: 12pt;padding-left: 2%;text-align:center;background-color: #85f100;'><b>Oferta</b></td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;width:30%;'><b>de 0% a 5%</b></td>
                        <td style='font-size: 12pt;'>Tienes una base, pero debes reflexionar sobre cómo puedes mejorar, descubre cómo.</td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;width:30%;'><b>de 5,01% a 10%</b></td>
                        <td style='font-size: 12pt;'>No esta mal, tu puntaje es promedio en comparación con otras empresas de tu industria, conoce como puedes optimizar.</td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;width:30%;'><b>de 10,015% a 15%</b></td>
                        <td style='font-size: 12pt;'>Buen trabajo, pero hay todavía espacio para mejorar, podemos desarrollar contigo innovaciones, descubre cómo.</td>
                    </tr>

                    <tr>
                        <td colspan='2' style='font-size: 12pt;padding-left: 2%;text-align:center;background-color: #34F0FF;'><b>Experiencia</b></td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;width:30%;'><b>de 0% a 16%</b></td>
                        <td style='font-size: 12pt;'>Tienes una base, pero debes reflexionar sobre cómo puedes mejorar, descubre cómo.</td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;width:30%;'><b>de 16,01% a 33%</b></td>
                        <td style='font-size: 12pt;'>No esta mal, tu puntaje es promedio en comparación con otras empresas de tu industria, conoce como puedes optimizar.</td>
                    </tr>
                    <tr>
                        <td style='font-size: 12pt;padding-left: 1%;width:30%;'><b>de 33,01% a 50%</b></td>
                        <td style='font-size: 12pt;'>Buen trabajo, pero hay todavía espacio para mejorar, podemos desarrollar contigo innovaciones, descubre cómo.</td>
                    </tr>

                </table>
            </div>";

    $ehtml = "<html> 
                {$header}
                <body> 
                    {$portada}
                    {$page2}
                    {$page3}
                    {$page4}
                    {$page5}
                    {$page6}
                    {$page7}
                    {$page8}
                    {$page9}
                    <div style='clear: both; margin: 0pt; padding: 0pt; '></div>
                </body>                    
              </html>";
    require_once '../vendor/mpdf/autoload.php';
    $mpdf = new \Mpdf\Mpdf( ['mode' => 'utf-8', 'format' => 'A4'] );
    $mpdf->SetHTMLFooter( $footer );
    $mpdf->WriteHTML( $ehtml );
    //$pdfString = $mpdf->Output();exit();
    $pdfString = $mpdf->Output( '', 'S' );
    $pdfBase64 = base64_encode( $pdfString );
    $PDF = 'data:application/pdf;base64,' . $pdfBase64;
    echo json_encode(["codigo" => 1, "nombre" => $varsesion->empresa,"pdf" => $PDF]);
} else {
    echo json_encode(["codigo" => 0, "mensaje" => "Error, Acceso Restringido!"]);
}
