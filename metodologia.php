<?php
require_once 'variables/captcha.php';
$WebK = Web_Key;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodología | Dobleen</title>
    <?php include 'layout/archivosheader.php' ?>
    <?php include 'variables/validaterminar.php' ?>
</head>

<body>

    <!-- menu -->
    <?php include 'layout/menu.php' ?>
    <!-- menu -->

    <!-- primera seccion -->
    <section id="seccionuno" class="borde">
        <div class="container borde d-flex justify-content-center espacio_conte">
            <div class="col-11 borde d-flex justify-content-start mb-3">
                <h1 class="titulo">Nuestro<br>Método</h1>
            </div>
        </div>
        <div class="container borde">
            <div class="col-12 borde d-flex flex-wrap text-center d-flex justify-content-center ">
                <div class="col-lg-4 col-md-6 col-12 borde div1">
                    <div class="borde">
                        <p class="tamaño_titulos">IMAGINAR</p>
                    </div>
                    <div class="borde cursor">
                        <a onclick="ScrollTo('imaginar')"><img src="images/IMAGINAR.png" class="tamaño_iconos" alt=""></a>
                    </div>
                    <div class="col-12 borde d-flex justify-content-center">
                        <div class="col-10 decoracion_verde"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 borde div2">
                    <div class="borde">
                        <P class="tamaño_titulos">DISEÑAR</P>
                    </div>
                    <div class="borde cursor">
                        <a onclick="ScrollTo('diseñar')">
                            <img src="images/DISE.png" class="tamaño_iconos2" alt="">
                        </a>
                    </div>
                    <div class="col-12 borde d-flex justify-content-center">
                        <div class="col-10 decoracion_amarillo"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 borde div3">
                    <div class="borde">
                        <P class="tamaño_titulos">ENTREGAR EL FUTURO</P>
                    </div>
                    <div class="borde cursor">
                        <a onclick="ScrollTo('futuro')">
                            <img src="images/ENTREGAR.png" class="tamaño_iconos" alt="">
                        </a>
                    </div>
                    <div class="col-12 borde d-flex justify-content-center">
                        <div class="col-10 decoracion_azul"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin primera seccion -->

    <!-- segunda seccion -->
    <section id="secciondos" class="borde espaciotop">

        <div id="imaginar" class="col-12 d-flex flex-wrap borde p-0">
            <div class="col-lg-6 col-md-12 col-12 borde p-0 d-flex justify-content-center estop_relative">
                <img src="images/metodologia1.png" class="w-100 h-100 imagen_tabled cuatro" alt="">

                <div class="div_padre">
                    <div class="col-8 div_hijo">
                        <h1 class="text_div_hijo">
                            Un equipo <br>
                            talentoso.</h1>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-12 borde espcio_secundo_div">
                <div class="borde col-lg-6 col-md-6 col-9 corte_color">
                    <h1 class="borde color_titulo">Imaginar</h1>
                </div>
                <div class="col-lg-9 col-md-9 col-12  borde texto_div2">
                    <p>En esta fase, el foco se centra en el cliente, investigando e identificando nuevas formas de comprender a la audiencia obtener el enfoque correcto, combinamos el pensamiento estructurado con el diseño y métodos de prototipado para dar vida a conceptos emocionantes e innovadores. Nuestro objetivo es diseñar un futuro en el que las personas se beneficien de ecosistemas de negocio más simples e inteligentes. </p>
                </div>
            </div>
        </div>

    </section>
    <!-- fin segunda seccion -->

    <!-- tercera seccion -->
    <section id="secciontres" class="borde">

        <div id="diseñar" class="col-12 d-flex flex-wrap borde p-0">
            <div id="div_movil" class="col-lg-6 col-md-12 col-12 p-0 d-flex justify-content-center estop_relative">
                <img src="images/metodologia2.jpg" class="w-100 h-100 imagen_tabled cuatro" alt="">


                <div class="div_padre">
                    <div class="col-lg-8 col-md-8 col-12 div_hijo">
                        <h1 class="text_div_hijo text-left">
                            Herramientas <br>
                            probadas
                        </h1>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-12" style="background-color: #F4F6F1;">
                <div class="borde col-lg-6 col-md-6 col-8 corte_color espcio_secundo_div">
                    <h1 class="borde color_titulo">Diseñar</h1>
                </div>
                <div class=" ol-lg-9 col-md-9 col-12  borde texto_div2">
                    <p>Acertamos en el concepto, combinamos la estrategia, la creatividad con la tecnología para integrar las necesidades de las personas con las posibilidades de lo digital, con lo económicamente factible para simplificar la vida de nuestros clientes y lo más importante de sus usuarios, consumidores y clientes finales para lograr el éxito. </p>
                </div>
            </div>
            <div id="div_tabled" class="col-lg-6 col-md-12 col-12 p-0 d-flex justify-content-center estop_relative">
                <img src="images/metodologia2.jpg" class="w-100 h-100 imagen_tabled cuatro" alt="">


                <div class="div_padre">
                    <div class="col-lg-8 col-md-8 col-12 div_hijo">
                        <h1 class="text_div_hijo text-left">
                            Herramientas <br>
                            probadas
                        </h1>
                    </div>
                </div>

            </div>
        </div>


    </section>
    <!-- fin tercera seccion -->

    <!-- cuarta seccion -->
    <section id="seccioncuadtro" class="borde">
        <div id="futuro" class="col-12 d-flex flex-wrap borde p-0">
            <div class="col-lg-6 col-md-12 col-12 borde p-0 d-flex justify-content-center estop_relative">
                <img src="images/metodologia3.png" class="w-100 h-100 imagen_tabled cuatro" alt="">

                <div class="div_padre">
                    <div class="col-8 div_hijo">
                        <h1 class="text_div_hijo">
                            Somos <br>
                            Costo-<br>
                            eficientes.
                        </h1>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-12 borde espcio_secundo_div">
                <div class="borde col-lg-11 col-md-10 col-12 corte_color">
                    <h1 class="borde color_titulo">Entregar el futuro</h1>
                </div>
                <div class="col-lg-9 col-md-9 col-12  borde texto_div2">
                    <p>Logramos que tu negocio se impulse, mediante un enfoque único basado en el análisis, la optimización y la confiabilidad, aseguramos la sostenibilidad de nuestro trabajo a través del tiempo y la transformación del paisaje de mercados.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- fin cuarta seccion -->

    <!-- quienta secciom -->
    <section id="seccionquinta">
        <div class="container">
            <div class=" col-12 text-center">
                <a class="container_btn negrita btn tamaño_btn_metodo" data-toggle="modal" data-target="#exampleModal"><span class="cont_btn negrita">Iniciar Demo Dobleen Free-Trial</span></a>
            </div>
        </div>
    </section>
    <!-- fin quinta seccion -->

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

                <div class="modal-body">
                    <form action="insert/empresa.php" method="POST" autocomplete="off">
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
    <!-- modal demo -->

    <!-- footer seccion -->
    <?php include 'layout/footer.php' ?>
    <!-- fin footer seccion -->


</body>
<?php include 'layout/archivosfooter.php' ?>
<script>
    function ScrollTo(name) {
        //init thread
        ScrollToResolver(document.getElementById(name));
    }

    function ScrollToResolver(elem) {
        var jump = parseInt(elem.getBoundingClientRect().top * .2);
        document.body.scrollTop += jump;
        document.documentElement.scrollTop += jump;
        //lastjump detects anchor unreachable, also manual scrolling to cancel animation if scroll > jump
        if (!elem.lastjump || elem.lastjump > Math.abs(jump)) {
            elem.lastjump = Math.abs(jump);
            setTimeout(function() {
                ScrollToResolver(elem);
            }, "100");
        } else {
            elem.lastjump = null;
        }
    }
</script>
<!-- composer require google/recaptcha -->
<script src="https://www.google.com/recaptcha/api.js"></script>

</html>