<?php
require_once 'variables/captcha.php';
$WebK = Web_Key;
$varsesion = '';

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Dobleen</title>
    <?php include 'layout/archivosheader.php' ?>
    <?php include 'variables/terminarsesion.php' ?>

</head>

<body>

    <!-- menu -->
    <?php include 'layout/menu.php' ?>
    <!-- menu -->

    <!-- logo dexcon -->
    <section>
        <div class="container contenedor_logo mt-4 mb-5">
            <div class="col-12 text-center logo">
                <img src="images/logo.png" class="dimencion" style="width:60%; height:100%;" alt="">
            </div>

        </div>
    </section>
    <!-- fin logo dexcon -->


    <!-- primera seccion -->
    <section>
        <div class="container mt-5 espacio_entre_seccion">
            <div class="col-12 d-flex flext-wrap contenedor_contenido_inical">
                <div class="col-lg-6 col-md-7 col-12 segundo_cont_inicio">
                    <div class="contenedor_texto_inicio">
                        <div class="linea_contenedor">
                            <div class="espacio_cont">
                                <span class="texto_inicio">Consultora Digital Creativa.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 primera_imagen_inicio">
                </div>
                <div class="col-lg-6 col-md-12 col-12 segunda_imagen_inicio" style="justify-content: flex-end;">
                    <img class="uno" style="width: 80%;" src="images/imagen_inicio_original.png" alt="">
                </div>

            </div>
        </div>
    </section>
    <!-- fin primera seccion -->

    <!-- segunda seccion -->
    <section class=" imagen_fondo">
        <section class="cont_segunda_imagen"><img class="dos" style="width: 100%;" src="images/segunda_imagen_2.png" alt=""></section>
        <section class="cont_segunda_imagen_movil"><img class="dos" style="width: 100%;" src="images/segunda_imagen_movil.png" alt=""></section>
        <section class="cont_segunda_imagen_movil2"><img class="dos" style="width: 100%;" src="images/segunda_imagen_movil2.png" alt=""></section>
        <div class="container p-0">
            <div class="  col-11 container_numero2"><span class=" style_numero2">01</span></div>
            <img src="images/puntos.png" class="imagen_puntos" alt="">
            <div class="col-12  d-flex flex-wrap">
                <div class="col-lg-6 col-md- 12 col-12 ">
                    <div class="" style="margin-top:5rem;">
                        <img src="images/fotobanner.png" class="tamaño_defaul_img" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md- 12 col-12  espacio_entre_divs">
                    <div class=" container_numero"><span class=" style_numero">01</span></div>
                    <div class=" container_titulo">
                        <h1 class="text-left tamaño_texto">Enfoque <br>único</h1>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12  container_contenido_text">
                        <p class="">Combinamos estrategia, creatividad y tecnología para transformar negocios, conectándolos con las marcas, basados en los momentos que más importan en la vida de las personas.</p>
                    </div>
                    <div class=" contendor_cont_btn">
                        <a class="container_btn negrita btn tamaño_standar" href="metodologia.php "><span class="cont_btn negrita">Metodología</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin segunda seccion -->

    <!-- tercera seccion -->
    <section class="">
        <div class="espacio_entre_seccion2 espacio_especial">
            <div class="imagen_numero2 "> <img class="tres" style="width: 100%;" src="images/numero2_tablet.png" alt=""> </div>
            <div class="col-12 d-flex flex-wrap  contenedor_responsive pl-0">
                <div class="imagen_numero "></div>
                <div class="col-lg-7  col-md-12 col-12  fondo_verde">
                    <div class="contenedor_imagen">
                        <img class=" tamaño_defaul_img" src="images/team3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-12  espacio_entre_divs2 posicion_div">
                    <div class=" espacio_entre_titulo_parrafo">
                        <h1 class="text-left titulo_decrip">Objetivos <br>Comerciales</h1>
                    </div>
                    <div class=" col-lg-10 col-md-10 col-12 container_contenido_text">
                        <p class="">Integramos a cada proyecto de transformación tus objetivos comerciales, para crear algo novedoso que impacte a tus clientes a través de innovaciones disruptivas.</p>
                    </div>
                    <div class=" contendor_cont_btn">
                        <a class="container_btn negrita btn tamaño_standar" href="casos.php"><span class="cont_btn negrita">Caso de Estudio</span></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- fin tercera seccion -->

    <!-- cuarta seccion -->
    <section class=" contenedor_video ">
        <div class="my-fixed-item">
            <div class=" container cont_video">
                <div class="ParallaxVideo">
                    <video autoplay muted loop style="width: 100%;height: 100%;">
                        <source src="images/video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>
    <!-- fin cuarta seccion -->

    <!-- video tabledt y movil -->
    <section class=" cont_movil_tabled">
        <div class="container p-0">
            <div class="">
                <video autoplay muted loop style="width: 100%;height: 100%;">
                    <source src="images/video.mp4" type="video/mp4">
                </video>
            </div>
        </div>

    </section>
    <!-- video tabledt y movil -->

    <!-- quinta seccion -->
    <section class="">
        <div class="col-12  d-flex flex-wrap pr-0 container espacio_entre_seccion2 espacio_especial cont_quinta">
            <div class="col-lg-5 col-md-12 col-12 mayor_cont">
                <div class="cont_movil">
                    <div class="col-10  espacio_entre_titulo_parrafo">
                        <h1 class="text-left tamaño_texto">Centrados <br>en el ser<br>humano.</h1>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12  container_contenido_text_humano">
                        <p class="">Dobleen es un proceso centrado en el ser humano, basado en años de experiencia de Dexcon Digital que permitirá impulsar tu organización hacía el siguiente nivel, mediante un trabajo creativo y colaborativo.</p>
                    </div>
                    <div class="col-lg-10 col-md-10 col-12  contendor_cont_btn">
                        <a href="https://www.dexcondigital.com/tiendavirtual" target="_blank" class="container_btn negrita btn tamaño_standar"><span class="cont_btn">Tienda en línea</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7  col-md-12 col-12 cont_fondo" style="background-color: #FDD300;">
                <div class="imagen_numero2 "> <img class="tres" style="width: 100%;" src="images/numero3 - copia.png" alt=""> </div>
                <div class="imagen_numero3 pr-4"></div>
                <div class="contenedor_imagen2">
                    <img class="tamaño_defaul_img" src="images/cafe2.jpg" alt="">
                </div>
            </div>
        </div>


    </section>
    <!-- fin quinta cuarta seccion -->
    <!-- sexta seccion -->
    <section class="" id="demo">
        <div class=" espacio_entre_seccion2">
            <div class="col-12  d-flex flex-wrap p-0">
                <div class="imagen_numero4 "></div>
                <div class="col-lg-6 col-md-12 col-12 p-0 imagen_sexta">
                    <div class="imagen_numero2 "> <img class="tres" style="width: 100%;" src="images/numero4_tabledt_movil.png" alt=""> </div>
                    <img src="images/image4.png" style="width: 100%; height:auto" alt="">
                </div>
                <div id="espacio_entre_footer" class="col-lg-6 col-md-12 col-12  p-0 posicion_div4">
                    <div class=" cuadro_verde"></div>
                    <div class=" espacio_entre_divs mt-4">
                        <img src="images/DOBLEEN.jpg" alt="">
                    </div>
                    <div class=" espacio_entre_divs mt-3">
                        <h6 class="sub negrita">¿Que es Dobleen?</h6>
                    </div>
                    <div class=" espacio_entre_divs mt-2">
                        <p class="">¡Se dice doblin! Y se escribe dobleen.</p>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12  espacio_entre_divs mt-2">
                        <p class="">Dobleen te presenta iniciativas de innovación en un formato fácil, creativo para que tengas opciones para impulsar, transformar y hacer crecer tu negocio, en un contexto dinámico y cambiante como el que vivimos. Si estás aquí, ya nos conoces. Te invitamos a darle un vistazo a lo que tenemos para ofrecerte.</p>
                    </div>
                    <div class=" espacio_entre_divsbtn contendor_cont_btn">
                        <a class="container_btn negrita btn tamaño_standar" data-toggle="modal" data-target="#exampleModal"><span class="cont_btn negrita">Demo</span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 p-0 imagen_sexta2 mt-5">
                    <div class="imagen_numero2"> <img class="tres" style="width: 100%;" src="images/numero4_tabledt_movil.png" alt=""> </div>
                    <img src="images/image4.png" style="width: 100%; height:100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--Fin sexta seccion -->
    <!-- modal demo -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title sub text-center tipo_regular" id="exampleModalLabel">Para vivir la experiencia Dobleen necesitamos que nos proporciones los siguientes datos, los cuales protegeremos y trataremos conforme a nuestra política de datos personales. Sin estos datos no podrás continuar.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="insert/empresa.php" method="POST" autocomplete="off">
                    <div class="modal-body">
                        <div class="col-12 d-flex flex-wrap mb-4">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="sub tipo_regular">Nombres:</label>
                                    <input type="text" class="form-control" name="nombres" aria-describedby="emailHelp" placeholder="Nombre Completo" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="sub tipo_regular">Número de Contacto:</label>
                                    <input type="text" class="form-control" name="telefono" aria-describedby="emailHelp" placeholder="Fijo ó Celular" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="sub tipo_regular">Correo Electrónico:</label>
                                    <input type="email" class="form-control" name="correo" aria-describedby="emailHelp" placeholder="ejemplo@dominio.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="sub tipo_regular">Nombre de la Empresa:</label>
                                    <input type="text" class="form-control" name="empresa" aria-describedby="emailHelp" placeholder="Nombre Completo" required>
                                </div>
                                <input type="hidden" id="fecha" name="fecha">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="sub tipo_regular">Clave:</label>
                                    <input type="password" class="form-control" name="clave" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="sub tipo_regular">Confirmar clave:</label>
                                    <input type="password" class="form-control" name="confirmarclave" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="d-flex align-items-baseline mb-2 mt-2">
                            <input type="checkbox" class="d-flex align-items-center justify-content-center mr-2" required>
                            <p>Confirmo que he leído, entendido y acepto la <a class="ml-1 color_a_contacto" href="archivos/Política_de_Privacidad_para_el_Tratamiento_de_Datos_Personales.pdf" target="_blank"> política de tratamiento de datos personales.</a></p>
                        </div>
                        <div class="g-recaptcha" data-sitekey="<?php echo $WebK ?>" required></div>
                        <div class="col-12 mb-4"><small id="tituloHepl" class="form-text text-muted tipo_regular">Este campo es obligatorio</small></div>

                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit" class="container_btn negrita btn tamaño_standar">Seguir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Septima seccion -->
    <?php include 'layout/footer.php' ?>
    <!-- Septima seccion -->
</body>
<?php include 'layout/archivosfooter.php' ?>
<!-- composer require google/recaptcha -->
<script src="https://www.google.com/recaptcha/api.js"></script>

</html>
