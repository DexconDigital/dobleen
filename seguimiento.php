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
    <?php $TOTALDESVIACION = $DesviaConfi + $DesviaExpe + $DesviaOferta; ?>
    <?php $arreglos = array ($field1, $field2, $field3, $field4, $field5, $field6, $field7, $field8, $field9, $field10);
    //echo "<pre>";print_r($arreglos);echo "</pre>";?>

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

    <!-- contenido Dobleen -->
    <section class="mt-5 container">
        <div class="row mt-5">
            <div class="col-6 ">
                <h1 class="text-left">Seguimiento de Resultados</h1>
            </div>
            <div class="col-6 text-right">
                <img src="images/logo-dobleen-black.png" class="img-8" alt="">
            </div>
        </div>
        <!-- tabla -->
        <div id="accordion" class="mt-5">
            <?php 
            foreach ($tipos as $tipo) {
                $color = ($tipo == "Configuración") ? "negro" : "";
                $color.= ($tipo == "Oferta") ? "verde" : "";
                $color.= ($tipo == "Experiencias") ? "cyan" : "";?>
                <div class="card mb-0">
                    <button class="btn btn-<?php echo $color; ?> font-weight-bold" data-toggle="collapse" data-target="#<?php echo $tipo; ?>" aria-expanded="true" data-parent="#accordion">
                        <?php echo $tipo; ?>
                    </button>
                </div>
                <div id='<?php echo "contenidos_{$tipo}"; ?>'>
                    <?php 
                    for ($i = 0; $i <= 9; $i++) {
                        foreach($impulsores as $impulsor) {
                            $impul_vac = str_replace(' ', '', $impulsor);
                            foreach($arreglos[$i] as $key => $value) {
                                if ($value['impulsores'] == $impulsor && $value['tipo'] == $tipo) { ?>
                                    <div id="<?php echo $tipo; ?>" class="card collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <button class="btn btn-light text-dark text-left" data-toggle="collapse" data-target="#<?php echo "{$impul_vac}_fechas"; ?>" aria-expanded="true">
                                            <?php echo $impulsor;  ?>
                                        </button>

                                        <div id="<?php echo "{$impul_vac}_fechas"; ?>" class="collapse multi-collapse m-3" data-parent='<?php echo "#contenidos_{$tipo}"; ?>' data-toggle="collapse">
                                            <?php 
                                            $primer_val = $value[0];
                                            foreach ($primer_val as $key2 => $value2) {
                                                $fecha = $primer_val['fecha'];
                                                //echo "<pre>";print_r($key2);echo "</pre>";
                                                if($key2 != "fecha") {  
                                                    $index_simp = str_replace(' ', '', $key2);
                                                    $index = ucfirst($key2); ?>
                                                    <div class="card p-3">
                                                        <div class="row ">
                                                            <span class="col-sm-3 p-2 m-0 my-auto"><?php echo $index; ?></span>
                                                            <div class="col-sm text-center p-2 mt-auto">
                                                                <span>Puntaje inicial</span>
                                                                <div class="bg-amarillo p-2"><span><?php echo $value2; ?></span></div>
                                                            </div>
                                                            <div class="col-sm text-center p-2 mt-auto">
                                                                <span>Fecha evaluación inicial</span>
                                                                <div class="bg-amarillo p-2"><span><?php echo $fecha; ?></span></div>
                                                            </div>
                                                            <?php 
                                                            unset($value[0]);
                                                            unset($value["tipo"]);
                                                            unset($value["impulsores"]);
                                                            $total_cont = count($value);
                                                            $arreglo_seguimiento = (isset($value[$total_cont])) ? $value[$total_cont] : "";
                                                            if ($arreglo_seguimiento != "") {
                                                               foreach ($arreglo_seguimiento as $key3 => $value3) {
                                                                    if ($key3 === $key2) { ?>
                                                                        <div class="col-sm text-center p-2 mt-auto">
                                                                            <span class="h-25">Puntaje seguimiento</span>
                                                                            <div class="bg-azul-pastel p-2"><span><?php echo $value3; ?></span></div>
                                                                        </div>
                                                                        <div class="col-sm text-center p-2 mt-auto">
                                                                            <span>Fecha evaluación seguimiento</span>
                                                                            <div class="bg-azul-pastel p-2"><span><?php echo $arreglo_seguimiento["fecha"]; ?></span></div>
                                                                        </div>
                                                                    <?php 
                                                                    }
                                                                } 
                                                            } ?>
                                                        </div>
                                                    </div>
                                                <?php 
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                        }
                    }  ?>
                </div>
                <?php 
            } ?>
        </div>
        <!-- tabla -->
        <div class="mt-5 d-flex justify-content-center">
            <button id="reporte_anual" class="btn btn-negro font-weight-bold rounded-0 w-25  mb-3">Descargar</button>
        </div>
    </section>
    <!-- contenido Dobleen fin -->

    <!-- Septima seccion -->
    <?php include 'layout/footer.php' ?>

    <!-- Septima seccion -->
    <?php include 'layout/archivosfooter.php' ?>
</body>
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>
<script src="js/export-data.js"></script>
<script src="js/accessibility.js"></script>

</html>
