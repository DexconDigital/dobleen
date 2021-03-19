<?php
require_once 'variables/captcha.php';
$WebK = Web_Key;
$url_pagina = $_SERVER["REQUEST_URI"];
$varsesion = '';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Dobleen</title>
    <?php include 'layout/archivosheader.php' ?>
    <?php include 'variables/terminarsesion.php' ?>
</head>

<style>

</style>

<body>
    <!-- menu -->
    <?php include 'layout/menu.php' ?>
    <!-- menu -->

    <!-- formulario -->
    <section id="contacto" class="borde">
        <div class="col-12 borde borde d-flex flex-wrap p-0">
            <div class="col-lg-6 col-md-6 col-12 borde" id="formulariocontacto">
                <div class="col-12">
                    <h1 class="titulo_contacto">Contacto</h1>
                </div>
                <div class="col-12 borde text-center">
                    <p class="mb-0">Whatsapp Business: <a class="negrita color_negro iper_cont" href="https://wa.me/573223029577" target="_blank">+57 (1) 322 3029577</a></p>
                </div>
                <div class="col-12 borde text-center">
                    <p class="mb-0"><a class="negrita color_negro iper_cont" href="mailto:info@dexcondigital.com" target="_blank">info@dexcondigital.com</a></p>
                </div>
                <div class="col-12 borde text-center">
                    <p class="mb-0"><a class="negrita color_negro iper_cont" href="https://www.dexcondigital.com/" target="_blank">www.dexcondigital.com</a></p>
                </div>
                <form action="email/contacto.php" method="POST" autocomplete="off">
                    <div class="d-flex flex-wrap cont-form justify-content-center borde">

                        <div class="group borde col-lg-4 col-8 col-8 p-0 mr-2">
                            <input type="text" name="nombre" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Nombre</label>
                        </div>


                        <div class="group borde col-lg-4 col-8 col-8 p-0">
                            <input type="email" name="correo" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Email</label>
                        </div>

                        <div class="group borde col-8 p-0">
                            <input type="text" name="asunto" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Asunto</label>
                        </div>

                        <div class="group borde col-8 p-0">
                            <textarea type="text" name="mensaje" required></textarea>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Mensaje</label>
                        </div>
                        <select name="urlpagina" style="display:none">
                            <option value=" <?php echo $url_pagina ?>"> <?php echo $url_pagina; ?></option>
                        </select>
                        <div class="col-lg-8 col-md-12 col-11 p-0">
                            <div class="d-flex align-items-baseline mb-2 mt-2">
                                <input type="checkbox" class="d-flex align-items-center justify-content-center mr-2 check" required>
                                <p>Confirmo que he leído, entendido y acepto la <a class="ml-1 color_a_contacto" href="archivos/Política_de_Privacidad_para_el_Tratamiento_de_Datos_Personales.pdf" target="_blank"> política de tratamiento de datos personales.</a></p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12 p-0">
                            <div class="g-recaptcha cont_captcha" data-sitekey="<?php echo $WebK ?>" required></div>
                            <div class="col-12 mb-4 cont_captcha"><small id="tituloHepl" class="form-text text-muted tipo_regular">Este campo es obligatorio</small></div>
                        </div>
                        <div class="group borde col-10 p-0 text-center">
                            <button class="container_btn_contacto negrita btn tamaño_btn_metodo" data-toggle="modal" data-target="#exampleModal"><span class="">Enviar</span></button>
                        </div>
                </form>

            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 borde p-0 img_contacto">
            <img src="images/contacto.png" class="img_contacto" alt="">
        </div>
        </div>
    </section>


</body>
<!-- Septima seccion -->
<?php include 'layout/footer.php' ?>
<!-- Septima seccion -->
<?php include 'layout/archivosfooter.php' ?>
<!-- composer require google/recaptcha -->
<script src="https://www.google.com/recaptcha/api.js"></script>

</html>