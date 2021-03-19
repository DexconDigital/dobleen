<!-- Codigo del preloader -->
<style>
    #wrap-preload {
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 1032;
    }

    #wrap-preload.close {
        opacity: 0;
        visibility: hidden;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    #wrap-preload>img.gif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
        height: 15%;
    }
</style>
<div id="wrap-preload">
    <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
</div>
<script>
    var loader = document.getElementById("wrap-preload");
    window.addEventListener("load", function() {
        loader.style.visibility = "hidden";
    });
</script>
<!-- Fin de codigo preloader -->

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
        <nav class="overlay-menu">
            <ul class="lista_menu ml-4 ">
                <li><a  class="h3" href="index.php">Inicio</a></li>
                <!-- <li><a href="demo.php">Demo</a></li> -->
                <li><a href="https://www.dexcondigital.com/tiendavirtual" target="_blanck">Tienda</a></li>
                <li><a href="metodologia.php">Método</a></li>
                <li><a class="text-break" href="casos.php">Caso de Estudio</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="!#" data-toggle="modal" data-target="#login">Ingresar</a></li>
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

<!-- modal demo -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="card form-holder border-0">
                                <div class="card-body fm-regular">
                                    <form id="contact-form" action="" method="post">
                                        <div id="mensaje"></div>
                                        <div class="form-group ">
                                            <label>Correo</label>
                                            <input type="text" name="correo" class="form-control" placeholder="Ej. usuario@dominio.com" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" name="clave" class="form-control" placeholder="Contraseña" required/>
                                        </div>
                                        <div class="row">
                                            <div class="col-8 text-left">
                                                <a href="#" class="btn btn-link fs-2">¿Olvidaste la contraseña?</a>
                                            </div>
                                            <div class="col-4 text-right mt-1">
                                                <button type="submit" class="btn btn-negro enviar">Entrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>