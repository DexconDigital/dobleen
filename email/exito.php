<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación | Dobleen</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

</head>

<style>
    #cuerpo {
        background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%) !important;
    }

    .color_check {
        color: green;
    }

    .div_padre {
        position: relative;
    }

    @media (max-width: 2560px) {
        .cuadro_div {
            padding: 14rem 15rem;
            margin-top: 1rem;
            border: 4px solid white;
            border-radius: 5px;
            position: absolute;
            margin-left: 35rem;
            z-index: -1;
        }

        .texto_div {
            position: absolute;
            margin-top: 8rem;
            margin-left: 16rem;
            background-color: white;
            border-radius: 6px;
            padding: 2rem;
        }
    }

    @media (max-width: 768px) {
        .cuadro_div {
            padding: 14rem 15rem;
            margin-top: 1rem;
            border: 4px solid white;
            border-radius: 5px;
            position: absolute;
            margin-left: -2rem;
            z-index: -1;
        }

        .texto_div {
            padding: 0rem;
        }
    }

    @media (max-width: 425px) {
        .cuadro_div {
            padding: 38% 47%;
            margin-top: 5rem;
            border: 4px solid white;
            border-radius: 5px;
            position: absolute;
            margin-left: 0rem;
            z-index: -1;
            display: none;
        }

        .texto_div {
            margin-left: 0rem;
            position: inherit;
            padding: 2rem;
        }
    }

    @media (max-width: 360px) {
        .texto_div {
            padding: 1rem;
        }
    }
</style>

<body id="cuerpo">

    <div class="container">
        <div class="col-12 text-center mt-5 d-flex flex-wrap">
            <div class="col-12 div_padre">
                <div class="texto_div">
                    <h2 class="">
                        <span><i class="fas fa-check color_check"></i></span><br>
                        Mensaje Enviado con Exito !!
                    </h2>
                    <p>Gracias por suscribirte</p>
                </div>
                <div class="cuadro_div"></div>
            </div>
        </div>

    </div>


</body>

<?php $url2 = $_GET['var']; ?>

<script type="text/javascript">
    function redirec() {
        window.location = "<?php echo $url2; ?>";
    }
    setTimeout("redirec()", 4000)
</script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/all.js"></script>

</html>