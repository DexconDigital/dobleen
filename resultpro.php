<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados | Dobleen</title>
    <?php include 'variables/seguridad.php' ?>
    <?php include 'layout/archivosheader.php' ?>
    <!-- Datos de Modelo de Gestion -->
    <?php $MDG = $RT;
    $VARM = $VarMDG;
    $ESTM = $EstCMDG; ?>
    <!-- Datos de res -->
    <?php $ESTR = $EstCRED;
    $RED = $RTR;
    $VRED = $VarRED;  ?>
    <!-- Datos de Estructura -->
    <?php $ESTEST = $EstCEST;
    $EST = $RTEST;
    $VEST = $VarEST ?>
    <!-- Datos de Procesos -->
    <?php $ESTPROC = $EstCPROC;
    $PROC = $RTPROC;
    $VPROC = $VarPROC ?>

    <!-- Desempeño del producto -->
    <?php $DESPROC = $RTDESPROC;
    $VRDESPROC = $VarDESPROC;
    $VarDesProc = $EstDESPROCT;
    ?>

    <!-- Sistema del Producto -->
    <?php $SISPROC = $RTSISPROC;
    $VRSISPROC = $VarSISPROC;
    $VarDesProc = $EstDESPROCT;
    ?>

    <!-- Servicio -->
    <?php $SERVI = $RTSERVI ?>

    <!-- Marca -->
    <?php $MARCA = $RTMARCA ?>

    <!-- Canal -->
    <?php $CANAL = $RTCANAL ?>

    <!-- Cliente -->
    <?php $CLIENTE = $RTCLIENTE ?>

    <!-- OFERTA -->
    <?php $TOTALOFERTAC = $DESPROC + $SISPROC; ?>
    <?php $TOTALOFERTA =  number_format($TOTALOFERTAC * 1, 2); ?>
    <?php $VarOferta = $EstandarOferta ?>
    <?php $VariaOferta =  $VarOferta - $TOTALOFERTA ?>
    <?php $DesviaOferta =  $TOTALOFERTA - $VarOferta ?>

    <!-- configuracion -->
    <?php $TOTALCONFIC = $MDG + $RED + $EST + $PROC  ?>
    <?PHP $TOTALCONFI = number_format($TOTALCONFIC * 1, 2); ?>
    <?php $VarConfi =  $EstandarConfi ?>
    <?php $VariaConfi = $VarConfi - $TOTALCONFI ?>
    <?php $DesviaConfi = $TOTALCONFI - $VarConfi  ?>

    <!-- Experiencia -->
    <?php $TOTALEXPEC = $MARCA + $CANAL + $CLIENTE + $SERVI ?>
    <?PHP $TOTALEXPE = number_format($TOTALEXPEC * 1, 2); ?>
    <?php $VarExpe = $EstandarExpe ?>
    <?php $VariaExpe =  $VarExpe - $TOTALEXPE  ?>
    <?php $DesviaExpe = $TOTALEXPE - $VarExpe  ?>
    
    <!-- Sumas -->
    <?php $TOTALUSERC = $TOTALOFERTA + $TOTALCONFI + $TOTALEXPE ?>
    <?PHP $TOTALUSER = number_format($TOTALUSERC * 1, 2); ?>
    <?php $TOTALESTANDAR = $VarExpe + $VarOferta + $VarConfi ?>
    <?php $TOTALDESVIACION = $DesviaConfi + $DesviaExpe + $DesviaOferta ?>

</head>

<body id="seccionpro">
    <!-- menu -->
    <!-- Menu principal -->
    <section>
        <div class="container">
        </div>

        <div class="button_container" id="toggle">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </div>

        <div class="overlay color_negro" id="overlay">
            <nav class="overlay-menu ">
                <ul class="lista_menu">
                    <!-- <li><a href="demo.php">Demo</a></li> -->
                    <li><a href="https://www.dexcondigital.com/tiendavirtual" target="_blanck">Tienda</a></li>
                    <li><a href="metodologia.php">Método</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a class="text-break" href="casos.php">Caso de Estudio</a></li>
                    <li><a href="index.php">Salir</a></li>

                </ul>
            </nav>
        </div>
    </section>
    <!-- Menu Secundario -->
    <section id="contenedor ">
        <div class="cajamenudos ">
            <a href="javascript:abrir()" class="color_negro_free"><i class="fas fa-th btn2 color_negro"></i></a>
        </div>
    </section>
    <section class="fondo_segundom sticky-top">
        <div class="container ventana animate__animated animate__bounceInDown cont_menu2_movil" id="vent">
            <div class="col-12  d-flex flex-wrap justify-content-center">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="text-center margen_img_men2">
                        <a href="metodologia.php" class="hover_menu2">
                            <img src="images/segundo_menu1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body text-center">
                            <a href="metodologia.php" class="hover_menu2">
                                <h5 class="card-title color_menu2">Método</h5>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="text-center margen_img_men2">
                        <a href="https://www.dexcondigital.com/tiendavirtual" target="_blank" class="hover_menu2">
                            <img src="images/caja_de_regalo.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body text-center">
                            <a href="https://www.dexcondigital.com/tiendavirtual" target="_blank" class="hover_menu2">
                                <h5 class="card-title color_menu2">Tienda</h5>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 ">
                    <div class="text-center margen_img_men2">
                        <a href="casos.php" class="hover_menu2">
                            <img src="images/segundo_menu3.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body text-center">
                            <a href="casos.php" class="hover_menu2">
                                <h5 class="card-title color_menu2">Caso de Estudio</h5>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="text-center margen_img_men2">
                        <a href="" class="hover_menu2">
                            <img src="images/segundo_menu3.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body text-center">
                            <a href="" class="hover_menu2">
                                <h5 class="card-title color_menu2">Caso de Estudio</h5>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="caja_cerrar">
                    <a href="javascript:cerrar()">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x cerrar_style" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z" />
                            <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z" />
                        </svg>
                        <!-- <i class="fas fa-times cerrar_style"></i> -->
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- menu -->

    <!-- texto Dobleen -->
    <section class="mt-3  d-flex justify-content-start container">
        <h1 class="display-2">Mi cuenta</h1>
    </section>
    <!-- texto Dobleen fin -->


    <!-- Contenido inicio -->
    <section class="bg-overlay mt-3">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <!-- Descargas -->
                    <h3 class="text-light">Descargas</h3>
                    <div class="bg-verde-pastel pt-1 mb-3 container">
                        <h6 class="font-weight-bold fm-regular">REPORTE DE INNOVACIÓN</h6>
                        <a class="btn btn-negro btn-block font-weight-bold rounded-0 mb-3 disabled">Descargar</a>
                    </div>
                    <div class="bg-azul-pastel pt-1 mb-3 container">
                        <h6 class="font-weight-bold fm-regular">MANUAL DE USO DOBLEEN</h6>
                        <a class="btn btn-negro btn-block font-weight-bold rounded-0 mb-3" href="archivos/Manual-dobleen2.pdf" target="_blank">Descargar</a>
                    </div>
                    <div class="bg-amarillo-pastel pt-1 mb-4 container">
                        <h6 class="font-weight-bold fm-regular">LAYOUT DE INNOVACIÓN</h6>
                        <a class="btn btn-negro btn-block font-weight-bold rounded-0 mb-3" href="archivos/canvas%20innovacion.pdf" target="_blank">Descargar</a>
                    </div>
                    <!-- Seguimiento -->
                    <h3 class="text-light mb-4">Seguimiento</h3>
                    <div class="bg-aqua pt-1 mb-4 container">
                        <h6 class="font-weight-bold fm-regular">SEGUIMIENTO RESULTADOS</h6>
                        <a class="btn btn-negro btn-block font-weight-bold rounded-0 mb-3" href="seguimiento.php">Hacer seguimiento</a>
                    </div>
                    <!-- Podcast -->
                    <h3 class="text-light mb-4">Serie Podcast</h3>
                    <div class="bg-darkblue pt-1 mb-4 container">
                        <h6 class="font-weight-bold fm-regular">SERIE PODCAST EL CEREBRO EN EL DESVÁN</h6>
                        <a class="btn btn-negro btn-block font-weight-bold rounded-0 mb-3" href="serie.php">Ir a serie</a>
                    </div>
                    <!-- Agenda -->
                    <h3 class="text-light">Mi Agenda</h3>
                    <div class="bg-gris pt-1 mb-3 container">
                        <h6 class="font-weight-bold fm-regular">SOLICITAR CITA WORKSHOP INNOVACIÓN</h6>
                        <a class="btn btn-negro btn-block font-weight-bold rounded-0 mb-3" href="#cita">Solicitar</a>
                    </div>
                    <div class="bg-gris-oscuro pt-1 mb-3 container">
                        <h6 class="font-weight-bold fm-regular" >SOLICITAR CITA ASESORÍA-COACHING</h6>
                        <a class="btn btn-negro btn-block font-weight-bold rounded-0 mb-3" href="#cita">Solicitar</a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 bg-container">
                    <div id="titulo" class="mt-3">
                        <div class="col-12 text-center logo_free">
                            <img src="images/LOGO-DOBLEEN.png" class="dimencion tamañp_logo_free" alt="">
                        </div>
                        <div class="col-12">
                            <h1 class="cont_titulo_free">Reporte Perfil Innovador</h1>
                            <hr class="bg-light">
                        </div>
                    </div>
                    <!-- tabla -->
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-dark h7 fm-regular">
                            <thead class="text-center">
                                <tr class="color_verde">
                                    <th scope="col">Palanca</th>
                                    <th scope="col">Resultado</th>
                                    <th scope="col">Estandar</th>
                                    <th scope="col">Desviación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="color_negro_free">
                                    <td scope="row">Configuración</td>
                                    <td><?php echo $TOTALCONFI; ?>%</td>
                                    <td><?php echo $VarConfi; ?>%</td>
                                    <td><?php echo $DesviaConfi; ?>%</td>
                                </tr>
                                <tr class="color_blanco">
                                    <td scope="row">Oferta</td>
                                    <td><?php echo $TOTALOFERTA; ?>%</td>
                                    <td><?php echo $VarOferta; ?>%</td>
                                    <td><?php echo $DesviaOferta; ?>%</td>
                                </tr>
                                <tr class="color_negro_free">
                                    <td scope="row">Experiencias</td>
                                    <td><?php echo $TOTALEXPE; ?>%</td>
                                    <td><?php echo $VarExpe; ?>%</td>
                                    <td><?php echo $DesviaExpe; ?>%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- tabla -->
                    <!-- grafica #1 -->
                    <div id="container" class="" style="width:100%; height:400px;"></div>
                    <!-- grafica #1 -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link ml-1 active" id="nav-config-tab" data-toggle="tab" href="#config" role="tab" aria-controls="nav-home" aria-selected="true">Resultados Configuración</a>
                            <a class="nav-item ml-1 nav-link" id="nav-oferta-tab" data-toggle="tab" href="#oferta" role="tab" aria-controls="nav-profile" aria-selected="false">Resultados Oferta</a>
                            <a class="nav-item ml-1 nav-link" id="nav-experiencia-tab" data-toggle="tab" href="#experiencia" role="tab" aria-controls="nav-contact" aria-selected="false">Resultados Experiencias</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane mt-3 fade show active" id="config" role="tabpanel" aria-labelledby="nav-home-tab">
                            <!-- tabla Resultados configuración-->
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered table-dark h7 fm-regular">
                                    <thead class="text-center">
                                        <tr class="color_verde">
                                            <th scope="col">Palanca e Impulsores</th>
                                            <th scope="col">Resultado</th>
                                            <th scope="col">Estandar</th>
                                            <th scope="col">Variación</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="color_negro_free">
                                            <td scope="row">Palanca: Configuración</td>
                                            <td><?php echo $TOTALCONFI; ?>%</td>
                                            <td><?php echo $VarConfi; ?>%</td>
                                            <td><?php echo $VariaConfi; ?>%</td>
                                        </tr>
                                        <tr class="color_blanco">
                                            <td scope="row">Modelo de Ganancias</td>
                                            <td><?php echo $MDG; ?>%</td>
                                            <td><?php echo $EstMDG; ?>%</td>
                                            <td><?php echo $VARM; ?>%</td>
                                        </tr>
                                        <tr class="color_negro_free">
                                            <td scope="row">Red</td>
                                            <td><?php echo $RED; ?>%</td>
                                            <td><?php echo $EstRED; ?>%</td>
                                            <td><?php echo $VRED; ?>%</td>
                                        </tr>
                                        <tr class="color_blanco">
                                            <td scope="row">Estructura</td>
                                            <td><?php echo $EST; ?>%</td>
                                            <td><?php echo $EstEST; ?>%</td>
                                            <td><?php echo $VEST; ?>%</td>
                                        </tr>
                                        <tr class="color_negro_free">
                                            <td scope="row">Procesos</td>
                                            <td><?php echo $PROC; ?>%</td>
                                            <td><?php echo $EstPROC; ?>%</td>
                                            <td><?php echo $VPROC; ?>%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- tabla -->
                        </div>
                        <div class="tab-pane mt-3 fade" id="oferta" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <!-- tabla Resultados oferta-->
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered table-dark h7 fm-regular">
                                    <thead class="text-center">
                                        <tr class="color_verde">
                                            <th scope="col">Palanca e Impulsores</th>
                                            <th scope="col">Resultado</th>
                                            <th scope="col">Estandar</th>
                                            <th scope="col">Variación</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="color_negro_free">
                                            <td scope="row">Palanca: Oferta</td>
                                            <td><?php echo $TOTALOFERTA; ?>%</td>
                                            <td><?php echo $VarOferta; ?>%</td>
                                            <td><?php echo $VariaOferta; ?>%</td>
                                        </tr>
                                        <tr class="color_blanco">
                                            <td scope="row">Desempeño de Procesos</td>
                                            <td><?php echo $DESPROC; ?>%</td>
                                            <td><?php echo $EstDESPROC; ?>%</td>
                                            <td><?php echo $VRDESPROC; ?>%</td>
                                        </tr>
                                        <tr class="color_negro_free">
                                            <td scope="row">Sistema de Productos</td>
                                            <td><?php echo $SISPROC; ?>%</td>
                                            <td><?php echo $EstSISPROC; ?>%</td>
                                            <td><?php echo $VRSISPROC; ?>%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- tabla -->
                        </div>
                        <div class="tab-pane mt-3 fade" id="experiencia" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <!-- tabla Resultados experiencias-->
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered table-dark h7 fm-regular">
                                    <thead class="text-center">
                                        <tr class="color_verde">
                                            <th scope="col">Palanca e Impulsores</th>
                                            <th scope="col">Resultado</th>
                                            <th scope="col">Estandar</th>
                                            <th scope="col">Variación</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="color_negro_free">
                                            <td scope="row">Palanca: Experiencias</td>
                                            <td><?php echo $TOTALEXPE; ?>%</td>
                                            <td><?php echo $VarExpe; ?>%</td>
                                            <td><?php echo $VariaExpe; ?>%</td>
                                        </tr>
                                        <tr class="color_blanco">
                                            <td scope="row">Servicios</td>
                                            <td><?php echo $SERVI; ?>%</td>
                                            <td><?php echo $EstSERVI; ?>%</td>
                                            <td><?php echo $VarSERVI; ?>%</td>
                                        </tr>
                                        <tr class="color_negro_free">
                                            <td scope="row">Canales</td>
                                            <td><?php echo $CANAL; ?>%</td>
                                            <td><?php echo $EstCANAL; ?>%</td>
                                            <td><?php echo $VarCANAL; ?>%</td>
                                        </tr>
                                        <tr class="color_blanco">
                                            <td scope="row">Marca</td>
                                            <td><?php echo $MARCA; ?>%</td>
                                            <td><?php echo $EstMARCA; ?>%</td>
                                            <td><?php echo $VarMARCA; ?>%</td>
                                        </tr>
                                        <tr class="color_negro_free">
                                            <td scope="row">Compromiso con el Cliente</td>
                                            <td><?php echo $CLIENTE; ?>%</td>
                                            <td><?php echo $EstCLIENTE; ?>%</td>
                                            <td><?php echo $VarCLIENTE; ?>%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- tabla -->
                        </div>
                    </div>
                    <!-- grafica #2 -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link ml-1 active" id="nav-config-tab" data-toggle="tab" href="#config_barras" role="tab" aria-controls="nav-home" aria-selected="true">Resultados Configuración</a>
                            <a class="nav-item ml-1 nav-link" id="nav-oferta-tab" data-toggle="tab" href="#oferta_barras" role="tab" aria-controls="nav-profile" aria-selected="false">Resultados Oferta</a>
                            <a class="nav-item ml-1 nav-link" id="nav-experiencia-tab" data-toggle="tab" href="#experiencia_barras" role="tab" aria-controls="nav-contact" aria-selected="false">Resultados Experiencias</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane mt-3 fade show active" id="config_barras" role="tabpanel" aria-labelledby="nav-home-tab">
                            <!-- tabla Resultados configuración-->
                            <div id="barras1" class="" style="width:100%; height:400px;"></div>
                            <!-- tabla -->
                        </div>
                        <div class="tab-pane mt-3 fade" id="oferta_barras" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <!-- tabla Resultados oferta-->
                            <div id="barras2" class="" style="width:100%; height:400px;"></div>
                            <!-- tabla -->
                        </div>
                        <div class="tab-pane mt-3 fade" id="experiencia_barras" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <!-- tabla Resultados experiencias-->
                            <div id="barras3" class="" style="width:100%; height:400px;"></div>
                            <!-- tabla -->
                        </div>
                    </div>

                    <!-- grafica #2 -->
                </div>
            </div>
        </div>
    </section>
    <!-- Contenido Fin -->
    
    <!-- Reserva cita -->
    <section id="cita">
        <div class="container mt-4">
            <h1 class="text-left pl-5">Reservar Cita</h1>
        </div>
        <div class="section_cita bg-aqua">
            <div class="container  pt-4 pb-4 d-flex justify-content-center">
                <iframe sandbox="allow-same-origin allow-forms allow-popups allow-scripts allow-pointer-lock" class="_3HLqS bg-light border-0" title="htmlComp-iframe" name="htmlComp-iframe" width="600px" height="618px" data-src="" src="https://dexcondigital.appointlet.com/b/dexcondigital"></iframe>
            </div>
        </div>
    </section>
    <!-- Reserva cita fin -->
    
    <!-- Septima seccion -->
    <?php include 'layout/footer.php' ?>
    
    <!-- Septima seccion -->
    <?php include 'layout/archivosfooter.php' ?>
</body>
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>
<script src="js/export-data.js"></script>
<script src="js/accessibility.js"></script>
<script>
    Highcharts.setOptions({chart:{style:{fontFamily:'OpenSans-Regular'},},lang:{downloadCSV:"Descarga CSV",viewFullscreen:"Ver en pantalla completa",downloadXLS:"Descargar XLS",printChart:"Tabla de impresión",downloadPNG:"Descargar imagen PNG",downloadJPEG:"Descargar imagen JPEG",downloadPDF:"Descargar PDF",downloadSVG:"Descargar imagen SGV",viewData:"Ver tabla de datos"}});
    
    // Grafica lineal #1
    Highcharts.chart('container',{chart:{type:'line',},legend:{itemStyle:{color:'white'},itemHoverStyle:{color:'white'},},title:{text:''},subtitle:{text:''},xAxis:{categories:['Configuración','Oferta','Experiencias'],labels:{style:{color:'white'}}},plotOptions:{line:{dataLabels:{enabled:true},enableMouseTracking:false}},series:[{name:'Estandar',color:'#34F0FF',data:[<?php echo $VarConfi?>,<?php echo $VarOferta?>,<?php echo $VarExpe?>],zones:[{color:'#34F0FF'}]},{name:'Resultado',color:'#86F200',data:[<?php echo $TOTALCONFI?>,<?php echo $TOTALOFERTA?>,<?php echo $TOTALEXPE?>],zones:[{color:'#86F200'}],}]});

    // Grafica Barras #1
    var chart=Highcharts.chart('barras1',{chart:{type:'column'},legend:{itemStyle:{color:'white'},itemHoverStyle:{color:'white'},},title:{text:''},subtitle:{text:''},yAxis:{title:{text:'Resultado'}},tooltip:{style:{color:'#fff'},valueDecimals:0,backgroundColor:'#454545',borderColor:'#454545',borderRadius:10,borderWidth:3,},xAxis:{categories:['Palanca: Configuración','Modelo de Ganancias','Red','Estructura','Procesos'],labels:{style:{color:'white'}}},plotOptions:{line:{dataLabels:{enabled:true},enableMouseTracking:false}},series:[{name:'Resultado',color:'#34F0FF',data:[<?php echo $TOTALCONFI.','.$MDG.','.$RED.','.$EST.','.$PROC;?>],zones:[{color:'#34F0FF'}],},{name:'Estandar',type:'line',color:'#86F200',data:[<?php echo $VarConfi.','.$EstMDG.','.$EstRED.','.$EstEST.','.$EstPROC;?>],zones:[{color:'#86F200'}],}]});
    
    // Grafica Barras #2
    var chart=Highcharts.chart('barras2',{chart:{type:'column'},legend:{itemStyle:{color:'white'},itemHoverStyle:{color:'white'},},title:{text:''},subtitle:{text:''},yAxis:{title:{text:'Resultado'}},tooltip:{style:{color:'#fff'},valueDecimals:0,backgroundColor:'#454545',borderColor:'#454545',borderRadius:10,borderWidth:3,},xAxis:{categories:['Palanca: Oferta','Desempeño de Procesos','Sistema de Productos'],labels:{style:{color:'white'}}},plotOptions:{line:{dataLabels:{enabled:true},enableMouseTracking:false}},series:[{name:'Resultado',color:'#34F0FF',data:[<?php echo $TOTALOFERTA.','.$DESPROC.','.$SISPROC;?>],zones:[{color:'#34F0FF'}],},{name:'Estandar',type:'line',color:'#86F200',data:[<?php echo $VarOferta.','.$EstDESPROC.','.$EstSISPROC;?>],zones:[{color:'#86F200'}],}]});
    
    // Grafica Barras #3
    var chart=Highcharts.chart('barras3',{chart:{type:'column'},legend:{itemStyle:{color:'white'},itemHoverStyle:{color:'white'},},title:{text:''},subtitle:{text:''},yAxis:{title:{text:'Resultado'}},tooltip:{style:{color:'#fff'},valueDecimals:0,backgroundColor:'#454545',borderColor:'#454545',borderRadius:10,borderWidth:3,},xAxis:{categories:['Palanca: Experiencias','Servicios','Canales','Marca','Compromiso con el Cliente'],labels:{style:{color:'white'}}},plotOptions:{line:{dataLabels:{enabled:true},enableMouseTracking:false}},series:[{name:'Resultado',color:'#34F0FF',data:[<?php echo $TOTALEXPE.','.$SERVI.','.$CANAL.','.$MARCA.','.$CLIENTE;?>],zones:[{color:'#34F0FF'}],},{name:'Estandar',type:'line',color:'#86F200',data:[<?php echo $VarExpe.','.$EstSERVI.','.$EstCANAL.','.$EstMARCA.','.$EstCLIENTE;?>],zones:[{color:'#86F200'}],}]});

</script>
</html>
