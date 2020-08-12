<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Dobleen</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
</head>

<body>

    <!-- Menu principal -->
    <section>
        <div class="container">
        </div>

        <div class="button_container" id="toggle">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </div>

        <div class="overlay" id="overlay">
            <nav class="overlay-menu ">
                <ul class="lista_menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="prueba.php">Demo</a></li>
                    <li><a href="#">Tienda</a></li>
                    <li><a href="#">Método</a></li>
                    <li><a class="text-break" href="#">Caso de Estudio</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- Menu Secundario -->
    <section id="contenedor">
        <div class="cajamenudos">
            <a href="javascript:abrir()" class="color_negro"><i class="fas fa-th btn2"></i></a>
        </div>
    </section>
    <section class="fondo_segundom sticky-top">
        <div class="container ventana animate__animated animate__bounceInDown cont_menu2_movil" id="vent">
            <div class="col-12  d-flex flex-wrap justify-content-center">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="text-center margen_img_men2">
                        <a href="" class="hover_menu2">
                            <img src="images/segundo_menu1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body text-center">
                            <a href="" class="hover_menu2">
                                <h5 class="card-title color_menu2">Método</h5>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="text-center margen_img_men2">
                        <a href="" class="hover_menu2">
                            <img src="images/caja_de_regalo.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body text-center">
                            <a href="" class="hover_menu2">
                                <h5 class="card-title color_menu2">Tienda</h5>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 ">
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

    <section>
        <div class="container border contenedor_logo mt-4 mb-5">
            <div class="col-12 text-center border logo">
                <img src="images/logo.png" class="dimencion" style="width:60%; height:100%;" alt="">
            </div>

        </div>
    </section>
    <!-- primera seccion -->
    <section>
        <div class="container border mt-5 espacio_entre_seccion">
            <div class="col-12 border d-flex flext-wrap contenedor_contenido_inical">
                <div class="col-lg-6 col-md-7 col-12 segundo_cont_inicio">
                    <div class="contenedor_texto_inicio">
                        <div class="linea_contenedor">
                            <div class="espacio_cont">
                                <span class="texto_inicio">Consultora Digital Creativa.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 border primera_imagen_inicio">
                </div>
                <div class="col-lg-6 col-md-12 col-12 border segunda_imagen_inicio" style="justify-content: flex-end;">
                    <img class="uno" style="width: 80%;" src="images/imagen_inicio_original.png" alt="">
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- fin primera seccion -->

    <!-- segunda seccion -->
    <section class="border imagen_fondo">
        <section class="cont_segunda_imagen"><img class="dos" style="width: 100%;" src="images/segunda_imagen_2.png" alt=""></section>
        <section class="cont_segunda_imagen_movil"><img class="dos" style="width: 100%;" src="images/segunda_imagen_movil.png" alt=""></section>
        <section class="cont_segunda_imagen_movil2"><img class="dos" style="width: 100%;" src="images/segunda_imagen_movil2.png" alt=""></section>
        <div class="container p-0">
            <div class="border  col-11 container_numero2"><span class="border style_numero2">01</span></div>
            <img src="images/puntos.png" class="imagen_puntos" alt="">
            <div class="col-12 border d-flex flex-wrap">
                <div class="col-lg-6 col-md- 12 col-12 border">
                    <div class="" style="margin-top:5rem;">
                        <img src="images/fotobanner.png" class="tamaño_defaul_img" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md- 12 col-12 border espacio_entre_divs">
                    <div class="border container_numero"><span class="border style_numero">01</span></div>
                    <div class="border container_titulo">
                        <h1 class="text-left tamaño_texto">Enfoque <br>único</h1>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12 border container_contenido_text">
                        <p class="">Combinamos estrategia, creatividad y tecnología para transformar negocios, conectándolos con las marcas, basados en los momentos que más importan en la vida de las personas.</p>
                    </div>
                    <div class="border contendor_cont_btn">
                        <a class="container_btn negrita btn tamaño_standar"><span class="cont_btn negrita">Metodología</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin segunda seccion -->

    <!-- tercera seccion -->
    <section class="border">
        <div class="espacio_entre_seccion2 espacio_especial">
            <div class="imagen_numero2 border"> <img class="tres" style="width: 100%;" src="images/numero2_tablet.png" alt=""> </div>
            <div class="col-12 d-flex flex-wrap border contenedor_responsive pl-0">
                <div class="imagen_numero border"></div>
                <div class="col-lg-7  col-md-12 col-12 border fondo_verde">
                    <div class="contenedor_imagen">
                        <img class="border tamaño_defaul_img" src="images/team3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-12 border espacio_entre_divs2 posicion_div">
                    <div class="border espacio_entre_titulo_parrafo">
                        <h1 class="text-left titulo_decrip">Objetivos <br>Comerciales</h1>
                    </div>
                    <div class="border col-lg-10 col-md-10 col-12 container_contenido_text">
                        <p class="">Integramos a cada proyecto de transformación tus objetivos comerciales, para crear algo novedoso que impacte a tus clientes a través de innovaciones disruptivas.</p>
                    </div>
                    <div class="border contendor_cont_btn">
                        <a class="container_btn negrita btn tamaño_standar"><span class="cont_btn negrita">Caso de Estudio</span></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- fin tercera seccion -->

    <!-- cuarta seccion -->
    <section class="border contenedor_video ">
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
    <section class="border cont_movil_tabled">
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
    <section class="border">
        <div class="col-12  d-flex flex-wrap pr-0 container espacio_entre_seccion2 espacio_especial cont_quinta">
            <div class="col-lg-5 col-md-12 col-12 mayor_cont">
                <div class="cont_movil">
                    <div class="col-10 border espacio_entre_titulo_parrafo">
                        <h1 class="text-left tamaño_texto">Centrados <br>en el ser<br>humano.</h1>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12 border container_contenido_text">
                        <p class="">Dobleen es un proceso centrado en el ser humano, basado en años de experiencia de Dexcon Digital que permitirá impulsar tu organización hacía el siguiente nivel, mediante un trabajo creativo y colaborativo.</p>
                    </div>
                    <div class="col-lg-10 col-md-10 col-12 border contendor_cont_btn">
                        <a class="container_btn negrita btn tamaño_standar"><span class="cont_btn">Tienda en línea</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7  col-md-12 col-12 cont_fondo" style="background-color: #FDD300;">
                <div class="imagen_numero2 border"> <img class="tres" style="width: 100%;" src="images/numero3 - copia.png" alt=""> </div>
                <div class="imagen_numero3 pr-4"></div>
                <div class="contenedor_imagen2">
                    <img class="tamaño_defaul_img" src="images/cafe2.jpg" alt="">
                </div>
            </div>
        </div>


    </section>
    <!-- fin quinta cuarta seccion -->
    <!-- sexta seccion -->
    <section class="border">
        <div class=" espacio_entre_seccion2">
            <div class="col-12 border d-flex flex-wrap p-0">
                <div class="imagen_numero4 border"></div>
                <div class="col-lg-6 col-md-12 col-12 p-0 imagen_sexta">
                    <div class="imagen_numero2 border"> <img class="tres" style="width: 100%;" src="images/numero4_tabledt_movil.png" alt=""> </div>
                    <img src="images/image4.png" style="width: 100%; height:auto" alt="">
                </div>
                <div id="espacio_entre_footer" class="col-lg-6 col-md-12 col-12 border p-0 posicion_div4">
                    <div class="border cuadro_verde"></div>
                    <div class="border espacio_entre_divs mt-4">
                        <img src="images/DOBLEEN.jpg" alt="">
                    </div>
                    <div class="border espacio_entre_divs mt-3">
                        <h6 class="sub negrita">¿Que es Dobleen?</h6>
                    </div>
                    <div class="border espacio_entre_divs mt-2">
                        <p class="">¡Se dice doblin! Y se escribe dobleen.</p>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12 border espacio_entre_divs mt-2">
                        <p class="">Dobleen te presenta iniciativas de innovación en un formato fácil, creativo para que tengas opciones para impulsar, transformar y hacer crecer tu negocio, en un contexto dinámico y cambiante como el que vivimos. Si estás aquí, ya nos conoces. Te invitamos a darle un vistazo a lo que tenemos para ofrecerte.</p>
                    </div>
                    <div class="border espacio_entre_divsbtn contendor_cont_btn">
                        <a class="container_btn negrita btn tamaño_standar"><span class="cont_btn negrita">Demo</span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 p-0 imagen_sexta2 mt-5">
                    <div class="imagen_numero2 border"> <img class="tres" style="width: 100%;" src="images/numero4_tabledt_movil.png" alt=""> </div>
                    <img src="images/image4.png" style="width: 100%; height:100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--Fin sexta seccion -->
    <!-- Septima seccion -->
    <section id="footer">
        <div class="">
            <div class="col-12 d-flex flex-wrap pt-3 espacio_footer">
                <div class="col-lg-1 col-md-1 col-1"></div>
                <div class="col-lg-2 col-md-2 col-12 border  d-flex p-0 margen_dexcon">
                    <img src="images/logoDD-blanco-app.png" class="tamaño_logo_dexc cont_logo_dexcon" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-12 border p-0">
                    <div class="border text-center">
                        <ul class="social-nav model-1">
                            <li><a class="google-plus" href="https://www.instagram.com/dexcondigital/" target="_blanck"><i class="fab fa-instagram" aria-hidden="true"></i></i></a></li>
                            <li><a class="twitter" href="https://twitter.com/dexcondigital" target="_blanck"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="facebook" href="https://www.facebook.com/DexconDigital/" target="_blanck"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a class="linkedin" href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQE8C7iNTBlokgAAAXPjpkroB1AlXJFFpu-_sLrNOQXj57Q13zJ24P88iVym7_9l6Cb5mDLb1rlMvM-njgNDD07Xu03n2ozN_YN1ZRWRG_dADu-9E8_fPA2ndmHW5Cd5sSkR3O0=&originalReferer=https://www.dexcondigital.com/&sessionRedirect=https%3A%2F%2Fco.linkedin.com%2Fin%2Fdexcon" target="_blanck"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a class="pinterest" href="https://www.youtube.com/channel/UCAZOEdpzzIlktWBsLOkyIZA" target="_blanck"><i class="fab fa-youtube "></i></a></li>
                            <li><a class="pinterest" href="https://open.spotify.com/show/6E08i2bDylNUe0VYi2W6MC" target="_black"><i class="fab fa-spotify"></i></a></li>
                        </ul>
                    </div>
                    <div class="border text-center">
                        <p class="negrita">Suscríbete al newsletter para que te avise cuando se publique un nuevo episodio de nuestro Podcast:</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12 border  d-flex justify-content-center margen_dexcon" style="width: 100%;height: 100%;">
                    <img src="images/LOGO-DOBLEEN-blanco.png" class="tamaño_logo_doblee" alt="">
                </div>
            </div>
            <div class="container">
                <p class="negrita pl-2">Newsletter</p>
            </div>
            <div class="container p-0">
                <div class="col-12 p-0 border d-flex flex-wrap">
                    <div class="col-lg-3 col-md-3 col-12 border">
                        <div class="form-group">
                            <input type="text" class="form-control form hover_btn1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 border">
                        <div class="form-group">
                            <input type="email" class="form-control form hover_btn2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 border">
                        <div class="form-group">
                            <input type="text" class="form-control form hover_btn3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 border">
                        <div class="form-group">
                            <button type="submit" class="form-control form negrita hover_btn_enviar" id="exampleInputEmail1" aria-describedby="emailHelp">Suscribirse</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 border copi_footer">
                <p>Copyright 2020 <a class="color_copi" href="">Dexcon Digital - Dexcon Consultores SAS</a> - Todos los derechos reservados</p>
            </div>
        </div>
    </section>
    <!-- Septima seccion -->
</body>
<script src="js/jquery.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/all.js"></script>
<script src="js/simpleParallax.min.js"></script>
<script src="js/movimientos_img.js"></script>
<!-- <script src="js/simpleParallax.js"></script> -->
<script>
    function abrir() {
        document.getElementById("vent").style.display = "block";
    }

    function cerrar() {
        document.getElementById("vent").style.display = "none";
    }
</script>

</html>