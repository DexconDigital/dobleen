<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodología | Dobleen</title>
    <?php include 'layout/archivosheader.php' ?>
</head>

<body>

    <!-- menu -->
    <?php include 'layout/menu.php' ?>
    <!-- menu -->

    <!-- primera seccion -->
    <section id="seccionuno" class="borde">
        <div class="container borde d-flex justify-content-center" style="margin-top: 6rem;">
            <div class="col-11 borde d-flex justify-content-start">
                <h1 style="font-size: 56px;font-weight:700">Nuestro <br> Método</h1>
            </div>
        </div>
        <div class="container borde">
            <div class="col-12 borde d-flex flex-wrap text-center">
                <div class="col-4 borde pr-0">
                    <div class="borde">
                        <p>IMAGINAR</p>
                    </div>
                    <div class="borde" style="cursor:pointer;">
                        <a onclick="ScrollTo('imaginar')"><img src="images/IMAGINAR.png" style="width: 60%;" class="h-100" alt=""></a>
                    </div>
                    <div class="col-12 borde d-flex justify-content-center">
                        <div class="col-10" style="box-sizing: border-box;border-top: 6px solid rgba(52, 240, 255, 1);"></div>
                    </div>

                </div>
                <div class="col-4 borde p-0">
                    <div class="borde">
                        <P>DISEÑAR</P>
                    </div>
                    <div class="borde" style="cursor:pointer;">
                        <a  onclick="ScrollTo('diseñar')">
                            <img src="images/DISEÑAR.png" style="width: 57%;" class="h-100" alt="">
                        </a>
                    </div>
                    <div class="col-12 borde d-flex justify-content-center">
                        <div class="col-10" style="box-sizing: border-box;border-top: 6px solid rgba(253, 211, 0, 1);"></div>
                    </div>
                </div>
                <div class="col-4 borde pl-0">
                    <div class="borde">
                        <P>ENTREGAR EL FUTURO</P>
                    </div>
                    <div class="borde" style="cursor:pointer;">
                        <a onclick="ScrollTo('futuro')">
                             <img src="images/ENTREGAR.png" style="width: 60%;" class="h-100" alt="">
                        </a>
                    </div>
                    <div class="col-12 borde d-flex justify-content-center">
                        <div class="col-10" style="box-sizing: border-box;border-top: 6px solid rgba(52, 240, 255, 1);"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- fin primera seccion -->

    <!-- segunda seccion -->
    <section class="borde" style="margin-top: 10rem;">
        <div id="imaginar" class="container">
            <p>Imaginar</p>
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
        </div>
    </section>
    <!-- fin segunda seccion -->

    <!-- tercera seccion -->
    <section class="borde">
        <div id="diseñar" class="container">
            <p>Diseñar</p>
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
        </div>
    </section>
    <!-- fin tercera seccion -->

    <!-- cuarta seccion -->
    <section class="borde">
        <div id="futuro" class="container">
            <p>Entregar el futuro</p>
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
        </div>
    </section>
    <!-- fin cuarta seccion -->

    <!-- footer seccion -->
    <!-- <?php include 'layout/footer.php' ?> -->
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

</html>