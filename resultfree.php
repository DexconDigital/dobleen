<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados | Dobleen</title>
    <?php include 'layout/archivosheader.php' ?>
    <?php include 'variables/seguridad.php' ?>
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
    <?php $DesviaOferta =  $TOTALOFERTA - $VarOferta ?>



    <!-- configuracion -->
    <?php $TOTALCONFIC = $MDG + $RED + $EST + $PROC  ?>
    <?PHP $TOTALCONFI = number_format($TOTALCONFIC * 1, 2); ?>
    <?php $VarConfi =  $EstandarConfi ?>
    <?php $DesviaConfi = $TOTALCONFI - $VarConfi  ?>


    <!-- Experiencia -->
    <?php $TOTALEXPEC = $MARCA + $CANAL + $CLIENTE + $SERVI ?>
    <?PHP $TOTALEXPE = number_format($TOTALEXPEC * 1, 2); ?>
    <?php $VarExpe = $EstandarExpe ?>
    <?php $DesviaExpe = $TOTALEXPE - $VarExpe  ?>

    <!-- Sumas -->
    <?php $TOTALUSERC = $TOTALOFERTA + $TOTALCONFI + $TOTALEXPE ?>
    <?PHP $TOTALUSER = number_format($TOTALUSERC * 1, 2); ?>
    <?php $TOTALESTANDAR = $VarExpe + $VarOferta + $VarConfi ?>
    <?php $TOTALDESVIACION = $DesviaConfi + $DesviaExpe + $DesviaOferta ?>

</head>
<style>
    .tabla {
        overflow: auto;
        white-space: nowrap;
    }

    div.tabla .item {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.tabla .item2 {
        display: inline-block;
        color: white;
        padding: 14px;
        text-decoration: none;
    }
</style>

<body id="seccionfree">
    <!-- menu -->
    <!-- Menu principal -->
    <section>
        <div class="container">
        </div>

        <div class="button_container" id="toggle">
            <span class="top blanco"></span>
            <span class="middle blanco"></span>
            <span class="bottom blanco"></span>
        </div>

        <div class="overlay" id="overlay">
            <nav class="overlay-menu ">
                <ul class="lista_menu">
                    <li><a href="index.php">Inicio</a></li>
                    <!-- <li><a href="demo.php">Demo</a></li> -->
                    <li><a href="https://www.dexcondigital.com/tiendavirtual" target="_blanck">Tienda</a></li>
                    <li><a href="metodologia.php">Método</a></li>
                    <li><a class="text-break" href="casos.php">Caso de Estudio</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- Menu Secundario -->
    <section id="contenedor">
        <div class="cajamenudos">
            <a href="javascript:abrir()" class="color_negro_free"><i class="fas fa-th btn2"></i></a>
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
    <!-- logo Dobleen -->
    <section>
        <div class="container contenedor_logo mt-4 mb-5">
            <div class="col-12 text-center logo_free">
                <img src="images/LOGO-DOBLEEN.png" class="dimencion tamañp_logo_free" alt="">
            </div>
        </div>
    </section>
    <!-- fin logo Dobleen -->
    <section>
        <div class="col-12">
            <h1 class="cont_titulo_free">Reporte Perfil Innovador</h1>
        </div>
    </section>
    <!-- tabla -->
    <section>
        <div class="container">
            <div class="col-12 d-flex  text-center tabla">
                <div class="col-lg-3 col-md-4 col-8 p-0 borde_free item">
                    <div class="col-12 color_verde">
                        <span>Palanca</span>
                    </div>
                    <div class="col-12 color_negro_free">
                        <span>Configuración</span>
                    </div>
                    <div class="col-12 color_blanco">
                        <span>Oferta</span>
                    </div>
                    <div class="col-12 color_negro_free">
                        <span>Experiencia</span>
                    </div>
                    <div class="col-12 color_blanco">
                        <span>Total perfil Innovador</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-2 col-5 p-0 borde_free item">
                    <div class="col-12 color_verde">
                        <span>Resultado</span>
                    </div>
                    <div class="col-12 color_negro_free">
                        <span><?php echo $TOTALCONFI ?>%</span>
                    </div>
                    <div class="col-12 color_blanco">
                        <span><?php echo $TOTALOFERTA ?>%</span>
                    </div>
                    <div class="col-12 color_negro_free">
                        <span><?php echo $TOTALEXPE ?>%</span>
                    </div>
                    <div class="col-12 color_blanco">
                        <span><?PHP echo $TOTALUSER ?>%</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-5 p-0 borde_free item">
                    <div class="col-12 color_verde">
                        <span>Estandar</span>
                    </div>
                    <div class="col-12 color_negro_free">
                        <span><?php echo $VarConfi ?>%</span>
                    </div>
                    <div class="col-12 color_blanco">
                        <span><?php echo $VarOferta ?>%</span>
                    </div>
                    <div class="col-12 color_negro_free">
                        <span><?php echo $VarExpe ?>%</span>
                    </div>
                    <div class="col-12 color_blanco">
                        <span><?php echo $TOTALESTANDAR ?>%</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-5 p-0 borde_free item">
                    <div class="col-12 color_verde">
                        <span>Desviación</span>
                    </div>
                    <div class="col-12 color_negro_free">
                        <span><?php echo $DesviaConfi ?>%</span>
                    </div>
                    <div class="col-12 color_blanco">
                        <span><?php echo $DesviaOferta ?>%</span>
                    </div>
                    <div class="col-12 color_negro_free">
                        <span><?php echo $DesviaExpe ?>%</span>
                    </div>
                    <div class="col-12 color_blanco">
                        <span><?php echo $TOTALDESVIACION ?>%</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- tabla -->
    <section>
        <div id="container" class="mt-5" style="width:100%; height:400px;"></div>
    </section>


    <!-- tabla descrip-->
    <section class="resultados_tabla_free">
        <div class="container">
            <div class="col-12 d-flex tabla">
                <div class="col-lg-3 col-md-4 col-8 p-0 borde_free item2">
                    <div class="col-12 color_amarillo espacio_estandar_tabla">
                        <span class="negrita">Configuración</span>
                    </div>
                    <div class="col-12 color_amarillo_free A_esp_uno">
                        <span>de 0% a 11%</span>
                    </div>
                    <div class="col-12 color_blanco A_esp_dos">
                        <span>de 11,01% a 23%</span>
                    </div>
                    <div class="col-12 color_amarillo_free A_esp_tres">
                        <span>de 23,01% a 35%</span>
                    </div>


                    <div class=" col-12 color_verde espacio_estandar_tabla">
                        <span class="negrita">Oferta</span>
                    </div>
                    <div class=" col-12 color_negro_free V_esp_uno">
                        <span>de 0% a 5%</span>
                    </div>
                    <div class=" col-12 color_blanco V_esp_dos">
                        <span>de 5,01% a 10%</span>
                    </div>
                    <div class=" col-12 color_negro_free V_esp_tres">
                        <span>de 10,015% a 15%</span>
                    </div>


                    <div class=" col-12 color_azul espacio_estandar_tabla">
                        <span class="negrita">Experiencia</span>
                    </div>
                    <div class=" col-12 color_azul_free Az_esp_uno">
                        <span>de 0% a 16%</span>
                    </div>
                    <div class=" col-12 color_blanco Az_esp_dos">
                        <span>de 16,01% a 33%</span>
                    </div>
                    <div class=" col-12 color_azul_free Az_esp_tres">
                        <span>de 33,01% a 50%</span>
                    </div>
                </div>

                <div class="col-lg-9 col-md-12 col-12 p-0 borde_free item2">
                    <div class="col-12 color_amarillo espacio_estandar_tabla">
                        <span>&nbsp&nbsp</span>
                    </div>
                    <div class="col-12 color_amarillo_free">
                        <span class="text-wrap">Tienes una base, pero debes reflexionar sobre cómo puedes mejorar, descubre cómo.</span>
                    </div>
                    <div class="col-12 color_blanco">
                        <span class="text-wrap">No esta mal, tu puntaje es promedio en comparación con otras empresas de tu industria, conoce como puedes optimizar</span>
                    </div>
                    <div class="col-12 color_amarillo_free">
                        <span class="text-wrap">Buen trabajo, pero hay todavía espacio para mejorar, podemos desarrollar contigo innovaciones, descubre cómo .</span>
                    </div>


                    <div class="col-12 color_verde espacio_estandar_tabla">
                        <span>&nbsp&nbsp</span>
                    </div>
                    <div class="col-12 color_negro_free">
                        <span class="text-wrap"> Tienes una base, pero debes reflexionar sobre cómo puedes mejorar, descubre cómo.</span>
                    </div>
                    <div class="col-12 color_blanco">
                        <span class="text-wrap"> No esta mal, tu puntaje es promedio en comparación con otras empresas de tu industria, conoce como puedes optimizar.</span>
                    </div>
                    <div class="col-12 color_negro_free">
                        <span class="text-wrap"> Buen trabajo, pero hay todavía espacio para mejorar, podemos desarrollar contigo innovaciones, descubre cómo.</span>
                    </div>


                    <div class="col-12 color_azul espacio_estandar_tabla">
                        <span>&nbsp&nbsp</span>
                    </div>
                    <div class="col-12 color_azul_free">
                        <span class="text-wrap"> Tienes una base, pero debes reflexionar sobre cómo puedes mejorar, descubre cómo.</span>
                    </div>
                    <div class="col-12 color_blanco">
                        <span class="text-wrap"> No esta mal, tu puntaje es promedio en comparación con otras empresas de tu industria, conoce como puedes optimizar.</span>
                    </div>
                    <div class="col-12 color_azul_free">
                        <span class="text-wrap"> Buen trabajo, pero hay todavía espacio para mejorar, podemos desarrollar contigo innovaciones, descubre cómo.</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="descrip_resultfree">
        <div class="col-12 d-flex justify-content-center pt-5">
            <div class="col-lg-10 col-md-10 col-12  text-center">
                <p>Si quieres vivir la experiencia completa y conocer más detalle de tus resultados, accede a una suscripción premium.</p>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center pb-5">
            <a href="https://www.dexcondigital.com/tiendavirtual" target="_blank" class=" container_btn_free negrita btn tamaño_standar"><span class="negrita">Comprar Ahora</span></a>
        </div>
    </section>




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
    Highcharts.setOptions({
        chart: {
            style: {
                fontFamily: 'OpenSans-Regular'
            }
        }
    });
    Highcharts.chart('container', {
        lang: {
            downloadCSV: "Descarga CSV",
            viewFullscreen: "Ver en pantalla completa",
            downloadXLS: "Descargar XLS",
            printChart: "Tabla de impresión",
            downloadPNG: "Descargar imagen PNG",
            downloadJPEG: "Descargar imagen JPEG",
            downloadPDF: "Descargar PDF",
            downloadSVG: "Descargar imagen SGV",
            viewData: "Ver tabla de datos"
        },
        chart: {
            type: 'line'
        },
        title: {
            text: ''
        },
        subtitle: {

            text: ''
        },
        xAxis: {

            categories: ['Configuración', 'Oferta', 'Experiencias'],
            labels: {
                style: {
                    color: 'white'
                }
            }
        },
        yAxis: {
            title: {
                color: '#ffffffff',
                fontWeight: 'bold',
                text: 'Resultado'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Estandar',
            color: '#34F0FF',
            data: [<?php echo $VarConfi ?>, <?php echo $VarOferta ?>, <?php echo $VarExpe ?>],
            zones: [{
                color: '#34F0FF'
            }]

        }, {
            name: 'Resultado',
            color: '#86F200',
            data: [<?php echo $TOTALCONFI  ?>, <?php echo $TOTALOFERTA ?>, <?php echo $TOTALEXPE ?>],
            zones: [{
                color: '#86F200'
            }],



        }]




    });
</script>

</html>