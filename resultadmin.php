<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados | Dobleen</title>
    <?php include 'variables/seguridad.php' ?>
    <?php 
    if($varsesion->admin != "1"){
        header('Location:index.php');
    }
    include 'Controller/consultaTODO.php';
    include 'layout/archivosheader.php';?>
?>

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
               
                    <div id="titulo" class="mt-3">
                        <div class="w-100">
                            <h1 class="cont_titulo_free">Usuarios</h1>
                            <hr class="bg-light">
                        </div>
                    </div>
                    <!-- tabla -->
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-dark h7 fm-regular">
                            <thead class="text-center">
                                <tr class="color_verde">
                                    <th scope="col">Empresa</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Reporte General</th>
                                    <th scope="col">Reporte Anual</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($todouser as $usuarios) { ?>
                                    <tr>
                                        <td><?php echo $usuarios->empresa; ?></td>
                                        <td><?php echo $usuarios->nombre; ?></td>
                                        <td><?php echo $usuarios->correo; ?></td>
                                        <td><a data-id="<?php echo $usuarios->id_usuario; ?>" class="btn-link text-light fs-2 reporte_general_total" href="#">Descargar</a></td>
                                        <td><a data-id="<?php echo $usuarios->id_usuario; ?>" class="btn-link text-light fs-2 reporte_anual_total" href="#">Descargar</a></td>
                                    </tr>
                                <?php 
                                } ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </section>
    <!-- Contenido Fin -->
    
    <div id="graficas_reporte_total">
    </div>
    <!-- Reserva cita fin -->
</body>
    
    

<!-- Septima seccion -->
<?php include 'layout/footer.php' ?>
<!-- Septima seccion -->
<?php include 'layout/archivosfooter.php' ?>
</html>
