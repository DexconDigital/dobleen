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
            <nav class="overlay-menu">
                <ul class="lista_menu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Demo</a></li>
                    <li><a href="#">Tienda</a></li>
                    <li><a href="#">Método</a></li>
                    <li><a href="#">Caso de Estudio</a></li>
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
    <section class="fondo_segundom">
        <div class="container ventana animate__animated animate__bounceInDown" id="vent">
            <div class="col-12  d-flex flex-wrap justify-content-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="text-center" style="padding: 14%;">
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
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="text-center" style="padding: 14%;">
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
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="text-center" style="padding: 14%;">
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
                        <i class="fas fa-times cerrar_style"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container border mt-4 mb-5">
            <div class="col-12 text-center border">
                <img src="images/logo.png" style="width:60%; height:100%;" alt="">
            </div>

        </div>
    </section>
    <section>
        <div class="container border mt-5">
            <div class="col-12 border d-flex contenedor_contenido_inical">
                <div class="col-7 border segundo_cont_inicio">
                    <div class="contenedor_texto_inicio">
                       
                        <div class="linea_contenedor">
                            <div class="p-4">
                                <span class="texto_inicio">Consultora Digital  Creativa.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 border primera_imagen_inicio">
                    <!-- <img src="images/imagen_inicio.png" alt=""> -->
                </div>

            </div>
        </div>
    </section>
    <section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>

</body>
<script src="js/jquery.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/all.js"></script>
<script>
    function abrir() {
        document.getElementById("vent").style.display = "block";
    }

    function cerrar() {
        document.getElementById("vent").style.display = "none";
    }
</script>

</html>