<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast | Dobleen</title>
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

    <!-- podcast -->
    <section class="mt-5">
        <h2 class="fm-regular d-flex justify-content-center" id="episodio">Nombre del episodio</h2>
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="row">
                        <div class="pdc-w pdc-aling-center">
                            <div class="col-md-12 d-flex justify-content-between p-3">
                                <span>PODCAST</span>
                                <span>T01-EP-<span id="epsdo"></span></span>
                            </div>
                            <div class="col-md-12  d-flex justify-content-center">
                                <img id="imagen" src="images/no_image.png" class="container" style="width: 18em;height: 19em;">
                                <div class="pdc-img-div p-3 position-absolute fm-regular">
                                    <p id="nombre" class="p-0 m-0 font-weight-bold">Nombre.</p>
                                    <p class="p-0 m-0">Podcast</p>
                                </div>
                            </div>
                            <div class="col-md-12  p-3">
                                <div class="row">
                                    <div class="col-6">
                                        <span id="serie">Nombre de la serie</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span id="autor">@dexcondigital</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 bg-azul-pastel">
                    <div class="m-5">
                        <div id="descripcion" class="fm-regular">Descripción del Episodio</div>
                    </div>
                </div>
            </div>
            <div class="p-5">
              
                    <div id="audio"></div>

            </div>

        </div>
        <div class="p-5 container container-fluid">
            <div class="row">
                <div class="col-6 d-flex justify-content-center mt-2">
                    <a id="anterior" class="text-left" href="#">
                        <b class="p-0 m-0 fm-regular"><i class="fas fa-angle-left"></i> ANTERIOR</b>
                        <p class="p-0 m-0" id="ant_text">Nombre del episodio</p>
                    </a>
                </div>
                <div class="col-6 d-flex justify-content-center mt-2">
                    <a id="siguiente" class="text-left" href="#">
                        <b class="p-0 m-0 fm-regular">SIGUIENTE <i class="fas fa-angle-right"></i></b>
                        <p class="p-0 m-0" id="sig_text">Nombre del episodio</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- podcast fin -->
    <!-- Septima seccion -->
    <?php include 'layout/footer.php' ?>

    <!-- Septima seccion -->
    <?php include 'layout/archivosfooter.php' ?>

    <script src="js/spotify.js?v=<?php echo uniqid(); ?>"></script>
    <script src="https://www.jqueryscript.net/demo/Mobile-compatible-Html5-Audio-Player-with-jQuery-Light-AudioPlayer/js/audioplayer.js"></script>
</body>

</html>
