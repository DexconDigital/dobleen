<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo | Dobleen</title>
    <?php include 'layout/archivosheader.php' ?>
    <?php include 'variables/seguridad.php' ?>


</head>
<style type="text/css">
    #register_form fieldset:not(:first-of-type) {
        display: none;
    }

    .ocultar {
        display: none;

    }

    .mostrar {
        display: inherit;
    }
</style>

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


    <!-- Primera seccion -->
    <section id="primera_seccion_demo">
        <div class="col-12 borde d-flex justify-content-center align-items-center">
            <div class="col-lg-5 col-md-5 col-6 borde">
                <h1 class="texto_seccion_uno">Demo</h1>
            </div>
            <div class="col-lg-5 col-md-5 col-6 borde imagen_seccion_uno">
                <img src="images/DOBLEEN.jpg" class="imagen_uno_demo" alt="">
            </div>
        </div>
    </section>
    <!-- Fin Primera seccion -->

    <!-- Segunda seccion -->
    <section id="segunda_seccion_demo">
        <div class="col-12 borde">
            <div class="col-12 borde">
                <h1 class="titulo_seccion_dos_demo">
                    INICIATIVAS DE INNOVACIÓN PARA LA DISRUPCIÓN
                </h1>
            </div>
            <div class="col-12 text-center ">
                <p class=" texto_parrafo_demo_segunda">
                    Una herramienta intuitiva útil que puede utilizarse para diagnosticar y enriquecer el proceso de innovación, el modelo está estructurado mediante tres palancas de innovación mediante un código de colores, los del lado izquierdo se enfocan hacía el interior de la empresa y los de la derecha se centran en el cliente.
                </p>
            </div>
        </div>
    </section>
    <!-- Fin Segunda seccion -->

    <!-- Tercera seccion -->
    <section id="tercera_seccion_demo" style="position: relative;">
        <div class="col-3 borde cuadro_demo_tercera"></div>
        <div class="col-12 borde d-flex flex-wrap">
            <div class="col-lg-6 col-md-12 col-12 d-flex div_padre_demo_tercera">
                <div class="col-lg-6 col-md-12 col-12  borde">
                    <h1 class="texto_tercera_demo">Configuración</h1>
                    <p>Este tipo de innovación se enfoca en el funcionamiento de los procesos internos de la compañía, sistema comercial y su modelo de negocio.</p>
                </div>
            </div>
            <div id="div_movil_demo" class="col-lg-6 col-md-12 col-12 borde">
                <img src="images/demo.png" class="cuatro tamaño_img_demo" alt="">
            </div>
        </div>
    </section>
    <!-- Tercera seccion -->

    <!-- Cuarta seccion -->
    <section id="cuarta_seccion_demo">
        <div class="col-12 d-flex justify-content-center borde">
            <div class="col-lg-9 col-md-12 col-12 mt-4 mb-4 borde" id="div_padre_texto_demo_tres">
                <p class="titulo_seccion_tres_demo">INSTRUCCIONES GENERALES</p>
                <p>- Califica según su realidad cada iniciativa de innovación de 1 a 5 siendo 1 un aspecto a reforzar y 5 una fortaleza</p>
                <p>- Asegúrate de calificar todas las iniciativas, puesto que afectará el perfil innovador total</p>
                <p>- Una vez calificadas todas las iniciativas presiona el botón de calcular resultados para acceder a un consolidado de tus resultados. </p>
            </div>
        </div>
    </section>
    <!-- Fin Cuarta seccion -->

    <!-- Quinta seccion -->
    <section id="quinta_seccion_demo" class="mb-4">
        <div class="container">
            <div class="d-flex">
                <!-- <i class="fas fa-hourglass-half mr-2 mt-1"></i> -->
                <img src="iconos/reloj.gif" class="mr-2 h-50" alt="">
                <p class="titulo_forma_demo">PROGRESO</p>
            </div>

            <div class="progress mb-5" style="height:20px">
                <div class="progress-bar progress-bar-striped  progress-bar-animated" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div>
            <div class="alert alert-danger ocultar hide"></div>
            <form id="register_form" name="register_form" novalidate action="insert/form.php" method="post">
                <!-- CONFIGURACION / Modelo de Ganancias -->
                <fieldset>
                    <div class="col-12 borde d-flex justify-content-center mb-4">
                        <div class="col-lg-4 col-md-6 col-lg-4 borde">
                            <h1 class=" text-center">Configuración</h1>
                            <div class="col-12 decoracion_amarillo"></div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap align-items-center div_especial_manuel">
                        <div class="col-lg-5 col-md-5 col-5 borde text-right">
                            <img src="iconos/modelo de ganancias.png" class="icono_demo_especial" width="15%" alt="">
                        </div>
                        <div class="col-lg-7 col-md-7 col-7 borde text-left">
                            <h3>Modelo de Ganancias</h3>
                        </div>

                    </div>
                    <!-- premium -->
                    <div class="col-12 d-flex flex-wrap borde mb-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h4 class="mt-5">Premium</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Precio a un margen superior al de la competencia, generalmente para un producto, oferta, experiencia, servicio o marca superior.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Premium" name="Premium">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Liderazgo en costos -->
                    <div class="col-12 d-flex flex-wrap borde mb-3">
                        <div class="col-lg-6 col-md-6 col-12 borde">
                            <h4 class="mt-5">Liderazgo en costos</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingdos">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsedos" aria-expanded="true" aria-controls="collapsedos">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsedos" class="collapse" aria-labelledby="headingdos" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Mantenga un costo variable bajo y venda un gran volumen a precios bajos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Liderazgoencostos" name="Liderazgoencostos">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Transacciones a escala -->
                    <div class="col-12 d-flex flex-wrap borde mb-3">
                        <div class="col-lg-6 col-md-6 col-12 borde">
                            <h4 class="mt-5">Transacciones a escala</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingtres">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsetres" aria-expanded="true" aria-controls="collapsetres">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsetres" class="collapse" aria-labelledby="headingtres" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Maximizar los márgenes mediante la búsqueda de transacciones de gran volumen y gran escala cuando el costo unitario es relativamente fijo.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Transaccionesaescala" name="Transaccionesaescala">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Microtransacciones -->
                    <div class="col-12 d-flex flex-wrap borde mb-3">
                        <div class="col-lg-6 col-md-6 col-12 borde">
                            <h4 class="mt-5">Microtransacciones</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingcuatro">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsecuatro" aria-expanded="true" aria-controls="collapsecuatro">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsecuatro" class="collapse" aria-labelledby="headingcuatro" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Vender muchos artículos a muy bajo precio para impulsar las compras impulsivas a gran volumen.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Microtransacciones" name="Microtransacciones">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Escasez forzada -->
                    <div class="col-12 d-flex flex-wrap borde mb-3">
                        <div class="col-lg-6 col-md-6 col-12 borde">
                            <h4 class="mt-5">Escasez forzada</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingquinto">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsequinto" aria-expanded="true" aria-controls="collapsequinto">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsequinto" class="collapse" aria-labelledby="headingquinto" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Limitar la oferta disponible, por cantidad, plazo o acceso, para aumentar la demanda y / o los precios.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Escasezforzada" name="Escasezforzada">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Suscripción -->
                    <div class="col-12 d-flex flex-wrap borde mb-3">
                        <div class="col-lg-6 col-md-6 col-12 borde">
                            <h4 class="mt-5">Suscripción</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingsexto">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsesexto" aria-expanded="true" aria-controls="collapsesexto">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsesexto" class="collapse" aria-labelledby="headingsexto" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Crea un flujo de efectivo predecible al cobrar a los clientes por adelantado (una tarifa única o recurrente) para tener acceso al producto / servicio a lo largo del tiempo.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Suscripcion" name="Suscripcion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Membresías -->
                    <div class="col-12 d-flex flex-wrap borde mb-3">
                        <div class="col-lg-6 col-md-6 col-12 borde">
                            <h4 class="mt-5">Membresías</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingseptimo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapseseptimo" aria-expanded="true" aria-controls="collapseseptimo">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseseptimo" class="collapse" aria-labelledby="headingseptimo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Ofrece un producto, servicio especial a cambio de un cargo o pago por un periodo de tiempo determinado, al cual todos los clientes no tienen acceso.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Membresias" name="Membresias">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Capacidad instalada -->
                    <div class="col-12 d-flex flex-wrap borde mb-3">
                        <div class="col-lg-6 col-md-6 col-12 borde">
                            <h4 class="mt-5">Capacidad instalada</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingoctavo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapseoctavo" aria-expanded="true" aria-controls="collapseoctavo">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseoctavo" class="collapse" aria-labelledby="headingoctavo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Ofrece un producto central para márgenes reducidos (o incluso una pérdida) para impulsar la demanda y la lealtad; luego obtén ganancias en productos y servicios adicionales.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Capacidadinstalada" name="Capacidadinstalada">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Conexiones -->
                    <div class="col-12 d-flex flex-wrap borde mb-3">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Conexiones</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoveno">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoveno" aria-expanded="true" aria-controls="collapsenoveno">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoveno" class="collapse" aria-labelledby="headingnoveno" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Conecta a múltiples vendedores con múltiples compradores: cuantos más compradores y vendedores se unan, más valiosa serán los rendimientos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Conexiones" name="Conexiones">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Subasta -->
                    <div class="col-12 d-flex flex-wrap borde mb-3">
                        <div class="col-lg-6 col-md-6 col-12 borde">
                            <h4 class="mt-5">Subasta</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingdecimo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsedecimo" aria-expanded="true" aria-controls="collapsedecimo">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsedecimo" class="collapse" aria-labelledby="headingdecimo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Permite que un mercado y sus usuarios fijen el precio de los bienes y servicios
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Subasta" name="Subasta">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center next-form">
                        <input type="button" name="next" onclick="ScrollTo('cuarta_seccion_demo');confiM();" class="container_btn negrita btn tamaño_btn_metodo" value="Siguiente" />
                    </div>
                </fieldset>

                <!-- CONFIGURACION / Modelo de Ganancias -->
                <fieldset class="text-center">
                    <div class="col-12 borde d-flex justify-content-center mb-4">
                        <div class="col-lg-4 col-md-6 col-lg-4 borde">
                            <h1 class="text-center">Configuración</h1>
                            <div class="col-12 decoracion_amarillo"></div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap align-items-center div_especial_manuel">
                        <div class="col-lg-5 col-md-5 col-5 borde text-right">
                            <img src="iconos/modelo de ganancias.png" class="icono_demo_especial" width="15%" alt="">
                        </div>
                        <div class="col-lg-7 col-md-7 col-7 borde text-left">
                            <h3>Modelo de Ganancias</h3>
                        </div>
                    </div>

                    <!-- Definido por el usuario -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Definido por el usuario</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnodecimo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenodecimo" aria-expanded="true" aria-controls="collapsenodecimo">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenodecimo" class="collapse" aria-labelledby="headingnodecimo" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Invitar a los clientes a que establezcan un precio que ellos deseen pagar.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Definidoporelusuario" name="Definidoporelusuario">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Fremmium -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Fremmium</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoonce">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoonce" aria-expanded="true" aria-controls="collapsenoonce">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoonce" class="collapse" aria-labelledby="headingnoonce" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Ofrece servicios básicos de forma gratuita, mientras que cobra por funciones avanzadas o especiales.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Fremmium" name="Fremmium">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Precio Flexible -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Precio Flexible</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnodoce">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenodoce" aria-expanded="true" aria-controls="collapsenodoce">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenodoce" class="collapse" aria-labelledby="headingnodoce" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Varios precios para una oferta basada en la demanda.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="PrecioFlexible" name="PrecioFlexible">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Flotador -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Flotador</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnotrece">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenotrece" aria-expanded="true" aria-controls="collapsenotrece">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenotrece" class="collapse" aria-labelledby="headingnotrece" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Recibir el pago antes de construir la oferta y usar el efectivo para ganar intereses antes de hacer márgenes.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Flotador" name="Flotador">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Financiamiento -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Financiamiento</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocatorce">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocatorce" aria-expanded="true" aria-controls="collapsenocatorce">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocatorce" class="collapse" aria-labelledby="headingnocatorce" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Recibir ingresos no directamente de la venta de un producto, sino de planes de pago estructurados e intereses postventa.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Financiamiento" name="Financiamiento">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Financiamiento por publicidad -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Financiamiento por publicidad</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoquince">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoquince" aria-expanded="true" aria-controls="collapsenoquince">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoquince" class="collapse" aria-labelledby="headingnoquince" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Proporcionar contenido / servicios de forma gratuita a una de las partes mientras vende oyentes, espectadores a otra parte.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Financiamientoporpublicidad" name="Financiamientoporpublicidad">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Licenciamiento -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Licenciamiento</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnodieciseis">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenodieciseis" aria-expanded="true" aria-controls="collapsenodieciseis">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenodieciseis" class="collapse" aria-labelledby="headingnodieciseis" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Otorgue permiso a otro grupo o individuo para usar su oferta de manera definida para un pago específico.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Licenciamiento" name="Licenciamiento">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Uso medido -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Uso medido</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnodiecisiete">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenodiecisiete" aria-expanded="true" aria-controls="collapsenodiecisiete">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenodiecisiete" class="collapse" aria-labelledby="headingnodiecisiete" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Permite a los clientes pagar solo por lo que desean usar.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Usomedido" name="Usomedido">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Precios agrupados -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Precios agrupados</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnodieciocho">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenodieciocho" aria-expanded="true" aria-controls="collapsenodieciocho">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenodieciocho" class="collapse" aria-labelledby="headingnodieciocho" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Vender en una sola transacción dos o más artículos que podrían ser soldados como oferta independiente.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Preciosagrupados" name="Preciosagrupados">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Desagregar precios -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Desagregar precios</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnodiecinueve">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenodiecinueve" aria-expanded="true" aria-controls="collapsenodiecinueve">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenodiecinueve" class="collapse" aria-labelledby="headingnodiecinueve" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Permite a los clientes pagar exactamente y solamente lo que ellos quieren.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Desagregarprecios" name="Desagregarprecios">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Riesgo Compartido -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Riesgo Compartido</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoveinte">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoveinte" aria-expanded="true" aria-controls="collapsenoveinte">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoveinte" class="collapse" aria-labelledby="headingnoveinte" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Establecer métricas de inteligencia frente al riesgo y medidas de mitigación, con controles implementados. Se hace uso para impulsar el modelo de negocio.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="RiesgoCompartido" name="RiesgoCompartido">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <input type="button" name="previous" onclick="ScrollTo('cuarta_seccion_demo')" class=" previous-form btn btn-default tamaño_btn_pre" value="Anterior" />

                    <input type="button" name="next" onclick="ScrollTo('cuarta_seccion_demo');confMD();" class="next-form container_btn negrita btn tamaño_btn_metodo" value="Siguiente" />
                </fieldset>

                <!-- CONFIGURACION / Red -->
                <fieldset class="text-center">

                    <div class="col-12 borde d-flex justify-content-center mb-4">
                        <div class="col-lg-4 col-md-6 col-lg-4 borde">
                            <h1 class="text-center">Configuración</h1>
                            <div class="col-12 decoracion_amarillo"></div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap align-items-center div_especial_manuel">
                        <div class="col-lg-6 col-md-6 col-6 borde text-right">
                            <img src="iconos/red.png" class="icono_demo" width="12%" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-6 borde text-left">
                            <h3>Red</h3>
                        </div>

                    </div>

                    <!-- Fusiones y adquisiciones -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Fusiones y adquisiciones</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoveintiuno">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoveintiuno" aria-expanded="true" aria-controls="collapsenoveintiuno">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoveintiuno" class="collapse" aria-labelledby="headingnoveintiuno" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Combinar dos o más entidades para ganar acceso a capacidades o herramientas.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Fusionesyadquisiciones" name="Fusionesyadquisiciones">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Consolidación -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Consolidación</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoveintidos">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoveintidos" aria-expanded="true" aria-controls="collapsenoveintidos">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoveintidos" class="collapse" aria-labelledby="headingnoveintidos" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Adquirir múltiples compañías en el mismo mercado o mercados complementarios.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Consolidacion" name="Consolidacion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Innovación abierta -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Innovación abierta</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoveintitres">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoveintitres" aria-expanded="true" aria-controls="collapsenoveintitres">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoveintitres" class="collapse" aria-labelledby="headingnoveintitres" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Obtener acceso a procesos o patentes de otras compañías para aprovechar la experiencia extendida y desarrollada y hacer lo mismo con los procesos internos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Innovacionabierta" name="Innovacionabierta">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Mercados secundarios -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Mercados secundarios</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoveinticuatro">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoveinticuatro" aria-expanded="true" aria-controls="collapsenoveinticuatro">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoveinticuatro" class="collapse" aria-labelledby="headingnoveinticuatro" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Conecte flujos por productos u otras ofertas alternativas a quienes los deseen.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Mercadossecundarios" name="Mercadossecundarios">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Integración de la cadena de suministros -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Integración de la cadena de suministros</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoveinticinco">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoveinticinco" aria-expanded="true" aria-controls="collapsenoveinticinco">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoveinticinco" class="collapse" aria-labelledby="headingnoveinticinco" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Coordinar e integrar información o procesos a través de una empresa o funciones de la cadena de suministros.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Integraciondelacadenadesuministros" name="Integraciondelacadenadesuministros">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Participación complementaria -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Participación complementaria</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoveintiseis">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoveintiseis" aria-expanded="true" aria-controls="collapsenoveintiseis">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoveintiseis" class="collapse" aria-labelledby="headingnoveintiseis" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Aproveche los activos compartiéndolos con empresas que prestan servicios a mercados similares pero que ofrecen diferentes productos y servicios.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Participacioncomplementaria" name="Participacioncomplementaria">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Alianzas -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Alianzas</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoveintisiete">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoveintisiete" aria-expanded="true" aria-controls="collapsenoveintisiete">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoveintisiete" class="collapse" aria-labelledby="headingnoveintisiete" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Compartir riesgos e ingresos para mejorar conjuntamente la ventaja competitiva individual.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Alianzas" name="Alianzas">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Franquiciamiento -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Franquiciamiento</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoveintiocho">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoveintiocho" aria-expanded="true" aria-controls="collapsenoveintiocho">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoveintiocho" class="collapse" aria-labelledby="headingnoveintiocho" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Otorgar licencias comerciales, procesos y marcas a socios que paguen por ellas.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Franquiciamiento" name="Franquiciamiento">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Cooperación -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Cooperación</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnoveintinueve">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoveintinueve" aria-expanded="true" aria-controls="collapsenoveintinueve">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoveintinueve" class="collapse" aria-labelledby="headingnoveintinueve" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Unir fuerzas con alguien que normalmente es tu competidor para lograr un objetivo común.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Cooperacion" name="Cooperacion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Lanzamiento de plataformas de la competencia -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Lanzamiento de plataformas de la competencia</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnotreinta">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenotreinta" aria-expanded="true" aria-controls="collapsenotreinta">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenotreinta" class="collapse" aria-labelledby="headingnotreinta" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Hacer accesibles productos y servicios para el cliente dónde y cuándo los necesiten. Inclusive si es a través de competidores.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Lanzamientodeplataformasdelacompetencia" name="Lanzamientodeplataformasdelacompetencia">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Colaboración -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Colaboración</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnotreintauno">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenotreintauno" aria-expanded="true" aria-controls="collapsenotreintauno">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenotreintauno" class="collapse" aria-labelledby="headingnotreintauno" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Aliarse con otros para obtener un beneficio común.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Colaboracion" name="Colaboracion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <input type="button" name="previous" onclick="ScrollTo('cuarta_seccion_demo')" class=" previous-form btn btn-default tamaño_btn_pre" value="Anterior" />

                    <input type="button" name="next" onclick="ScrollTo('cuarta_seccion_demo');confR();" class="next-form container_btn negrita btn tamaño_btn_metodo" value="Siguiente" />
                </fieldset>

                <!-- CONFIGURACION / Estructura -->
                <fieldset class="text-center">

                    <div class="col-12 borde d-flex justify-content-center mb-4">
                        <div class="col-lg-4 col-md-6 col-lg-4 borde">
                            <h1 class="text-center">Configuración</h1>
                            <div class="col-12 decoracion_amarillo"></div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap align-items-center div_especial_manuel">
                        <div class="col-lg-6 col-md-6 col-5 borde text-right">
                            <img src="iconos/estructura.png" class="icono_demo" width="12%" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-7 borde text-left">
                            <h3>Estructura</h3>
                        </div>

                    </div>

                    <!-- Diseño organizacional -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Diseño organizacional</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnotreintauno">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenotreintauno" aria-expanded="true" aria-controls="collapsenotreintauno">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenotreintauno" class="collapse" aria-labelledby="headingnotreintauno" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Haz que la forma siga la función y alinea la infraestructura con el core del negocio y los procesos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Disenoorganizacional" name="Disenoorganizacional">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Sistema de incentivos -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Sistema de incentivos</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnotreintados">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenotreintados" aria-expanded="true" aria-controls="collapsenotreintados">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenotreintados" class="collapse" aria-labelledby="headingnotreintados" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Ofrecer recompensas financieras o no financieras para proporcionar motivación para un curso de acción particular.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Sistemadeincentivos" name="Sistemadeincentivos">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Integración de TI -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Integración de TI</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnotreintatres">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenotreintatres" aria-expanded="true" aria-controls="collapsenotreintatres">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenotreintatres" class="collapse" aria-labelledby="headingnotreintatres" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Integrar tecnologías, recursos y aplicaciones.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="IntegraciondeTI" name="IntegraciondeTI">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Centro de competencias -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Centro de competencias</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnotreintacuatro">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenotreintacuatro" aria-expanded="true" aria-controls="collapsenotreintacuatro">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenotreintacuatro" class="collapse" aria-labelledby="headingnotreintacuatro" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Agrupa recursos, prácticas y experiencia en centros de soporte que aumenten la eficiencia y la efectividad en toda la organización.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Centrodecompetencias" name="Centrodecompetencias">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Tercerización -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Tercerización</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnotreintacinco">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenotreintacinco" aria-expanded="true" aria-controls="collapsenotreintacinco">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenotreintacinco" class="collapse" aria-labelledby="headingnotreintacinco" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Asignar la responsabilidad de desarrollar o mantener un sistema a otro vendedor.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Tercerizacion" name="Tercerizacion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Universidad corporativa -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Universidad corporativa</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnotreintaseis">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenotreintaseis" aria-expanded="true" aria-controls="collapsenotreintaseis">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenotreintaseis" class="collapse" aria-labelledby="headingnotreintaseis" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Proporcionar capacitación específica para el trabajo o la empresa a gerentes.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Universidadcorporativa" name="Universidadcorporativa">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Gerencia descentralizada -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Gerencia descentralizada</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnotreintasiete">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenotreintasiete" aria-expanded="true" aria-controls="collapsenotreintasiete">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenotreintasiete" class="collapse" aria-labelledby="headingnotreintasiete" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Distribuir el gobierno y la toma de decisiones más cerca de los clientes u otras interfases de negocio clave.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Gerenciadescentralizada" name="Gerenciadescentralizada">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Gestión del conocimiento -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Gestión del conocimiento</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnotreintaocho">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenotreintaocho" aria-expanded="true" aria-controls="collapsenotreintaocho">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenotreintaocho" class="collapse" aria-labelledby="headingnotreintaocho" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Compartir información relevante internamente para reducir redundancias y mejorar el desempeño.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Gestiondelconocimiento" name="Gestiondelconocimiento">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Aprovechamiento de activos de otras compañías -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Aprovechamiento de activos de otras compañías</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnotreintanueve">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenotreintanueve" aria-expanded="true" aria-controls="collapsenotreintanueve">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenotreintanueve" class="collapse" aria-labelledby="headingnotreintanueve" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            No hacer compra de activos, sino rentarlos y hacer que estos proporcionen rendimientos mediante mecanismos de aprovechamiento alternos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Aprovechamientodeactivos" name="Aprovechamientodeactivos">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Estandarización de activos -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Estandarización de activos</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocuarenta">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocuarenta" aria-expanded="true" aria-controls="collapsenocuarenta">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocuarenta" class="collapse" aria-labelledby="headingnocuarenta" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Reducir costos de operación e incrementar la conectividad y modularidad mediante la estandarización de activos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Estandarizaciondeactivos" name="Estandarizaciondeactivos">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>



                    <input type="button" name="previous" onclick="ScrollTo('cuarta_seccion_demo')" class="previous-form btn btn-default tamaño_btn_pre" value="Anterior" />

                    <input type="button" name="next" onclick="ScrollTo('cuarta_seccion_demo');confE();" class="next-form container_btn negrita btn tamaño_btn_metodo" value="Siguiente" />
                </fieldset>

                <!-- CONFIGURACION / Procesos -->
                <fieldset class="text-center">

                    <div class="col-12 borde d-flex justify-content-center mb-4">
                        <div class="col-lg-4 col-md-6 col-lg-4 borde">
                            <h1 class="text-center">Configuración</h1>
                            <div class="col-12 decoracion_amarillo"></div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap align-items-center div_especial_manuel">
                        <div class="col-lg-6 col-md-6 col-5 borde text-right">
                            <img src="iconos/procesos.png" class="icono_demo" width="12%" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-7 borde text-left">
                            <h3>Procesos</h3>
                        </div>

                    </div>

                    <!-- Estandarización de procesos -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Estandarización de procesos</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocuarentauno">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocuarentauno" aria-expanded="true" aria-controls="collapsenocuarentauno">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocuarentauno" class="collapse" aria-labelledby="headingnocuarentauno" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Use productos, procesos, procedimientos y políticas comunes para reducir la complejidad, el costo y los errores.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Estandarizaciondeprocesos" name="Estandarizaciondeprocesos">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Localización -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Localización</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocuarentados">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocuarentados" aria-expanded="true" aria-controls="collapsenocuarentados">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocuarentados" class="collapse" aria-labelledby="headingnocuarentados" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Adapte una oferta, proceso o experiencia para apuntar a una cultura o región.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Localizacion" name="Localizacion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Eficiencia de procesos -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Eficiencia de procesos</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocuarentatres">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocuarentatres" aria-expanded="true" aria-controls="collapsenocuarentatres">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocuarentatres" class="collapse" aria-labelledby="headingnocuarentatres" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Cree o produzca más utilizando menos recursos, medidos en materiales, consumo de energía o tiempo.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Eficienciadeprocesos" name="Eficienciadeprocesos">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Manufactura flexible -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Manufactura flexible</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocuarentacuatro">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocuarentacuatro" aria-expanded="true" aria-controls="collapsenocuarentacuatro">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocuarentacuatro" class="collapse" aria-labelledby="headingnocuarentacuatro" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Use un sistema de producción que pueda reaccionar rápidamente a los cambios y continuar operando eficientemente.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Manufacturaflexible" name="Manufacturaflexible">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Automatización de procesos -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Automatización de procesos</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocuarentacinco">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocuarentacinco" aria-expanded="true" aria-controls="collapsenocuarentacinco">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocuarentacinco" class="collapse" aria-labelledby="headingnocuarentacinco" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Aplicar herramientas e infraestructuras para administrar actividades rutinarias con el fin de liberar a los trabajadores.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Automatizaciondeprocesos" name="Automatizaciondeprocesos">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Crowdsourcing -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Crowdsourcing</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocuarentaseis">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocuarentaseis" aria-expanded="true" aria-controls="collapsenocuarentaseis">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocuarentaseis" class="collapse" aria-labelledby="headingnocuarentaseis" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Externalizar el trabajo repetitivo o desafiante a un gran grupo de personas semi organizadas.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Crowdsourcing" name="Crowdsourcing">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Producción bajo demanda -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Producción bajo demanda</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocuarentasieste">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocuarentasieste" aria-expanded="true" aria-controls="collapsenocuarentasieste">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocuarentasieste" class="collapse" aria-labelledby="headingnocuarentasieste" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Producir artículos después de que se haya recibido un pedido para evitar el costo de inventario
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Produccionbajodemanda" name="Produccionbajodemanda">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Producción limpia -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Producción limpia</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocuarentaocho">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocuarentaocho" aria-expanded="true" aria-controls="collapsenocuarentaocho">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocuarentaocho" class="collapse" aria-labelledby="headingnocuarentaocho" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Reduce el desperdicio y el costo en su proceso de fabricación y otras operaciones.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Produccionlimpia" name="Produccionlimpia">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Sistemas logísticos -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Sistemas logísticos</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocuarentaochouno">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocuarentaochouno" aria-expanded="true" aria-controls="collapsenocuarentaochouno">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocuarentaochouno" class="collapse" aria-labelledby="headingnocuarentaochouno" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Gestionar el flujo de bienes, información y otros recursos entre el punto de origen y el punto de uso.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Sistemaslogisticos" name="Sistemaslogisticos">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Diseño estratégico -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Diseño estratégico</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocuarentanueve">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocuarentanueve" aria-expanded="true" aria-controls="collapsenocuarentanueve">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocuarentanueve" class="collapse" aria-labelledby="headingnocuarentanueve" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Emplea un enfoque contundente que se multiplique de manera consistente en todas las ofertas, marcas y experiencias.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Disenoestrategico" name="Disenoestrategico">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Propiedad intelectual -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Propiedad intelectual</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocincuenta">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocincuenta" aria-expanded="true" aria-controls="collapsenocincuenta">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocincuenta" class="collapse" aria-labelledby="headingnocincuenta" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Proteger una idea que tenga valor comercial, como una receta o un proceso industrial, con herramientas legales como las patentes.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Propiedadintelectual" name="Propiedadintelectual">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Generación por el usuario -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Generación por el usuario</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocincuentauno">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocincuentauno" aria-expanded="true" aria-controls="collapsenocincuentauno">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocincuentauno" class="collapse" aria-labelledby="headingnocincuentauno" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Pon a tus usuarios a trabajar en la creación y conservación de contenido que impulse tus ofertas.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Generacionporelusuario" name="Generacionporelusuario">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Análisis predictivo -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Análisis predictivo</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo" id="headingnocincuentados">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocincuentados" aria-expanded="true" aria-controls="collapsenocincuentados">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocincuentados" class="collapse" aria-labelledby="headingnocincuentados" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Modela los datos de desempeño pasados y haz predicciones de resultados futuros para diseñar y ofertar precios en consecuencia.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">
                            <div class="col-12 d-flex flex-wrap p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>
                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Analisispredictivo" name="Analisispredictivo">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <input type="button" name="previous" onclick="ScrollTo('cuarta_seccion_demo')" class="previous-form btn btn-default tamaño_btn_pre" value="Anterior" />

                    <input type="button" name="next" onclick="ScrollTo('cuarta_seccion_demo');confP();" class="next-form container_btn negrita btn tamaño_btn_metodo" value="Siguiente" />

                </fieldset>

                <!-- OFERTA / Desempeño del Producto -->
                <fieldset class="text-center">

                    <div class="col-12  d-flex justify-content-center mb-4">
                        <div class="col-lg-4 col-md-6 col-lg-4 ">
                            <h1 class="text-center">Oferta</h1>
                            <div class="col-12 decoracion_verde"></div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap align-items-center div_especial_manuel">
                        <div class="col-lg-5 col-md-5 col-5  text-right">
                            <img src="iconos/desempeño producto.png" class="icono_demo" width="12%" alt="">
                        </div>
                        <div class="col-lg-7 col-md-7 col-7  text-left">
                            <h3>Desempeño del Producto</h3>
                        </div>

                    </div>

                    <!-- Productos superiores -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Productos superiores</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnocincuentatres">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocincuentatres" aria-expanded="true" aria-controls="collapsenocincuentatres">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocincuentatres" class="collapse" aria-labelledby="headingnocincuentatres" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Desarrollar y ofrecer un diseño excepcional, calidad y/o experiencia.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Productossuperiores" name="Productossuperiores">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Facilidad de uso -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Facilidad de uso</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnocincuentacuatro">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocincuentacuatro" aria-expanded="true" aria-controls="collapsenocincuentacuatro">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocincuentacuatro" class="collapse" aria-labelledby="headingnocincuentacuatro" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Hacer tu producto simple, intuitivo y confortable para usar.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Facilidaddeuso" name="Facilidaddeuso">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Funcionalidad atractiva -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Funcionalidad atractiva</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnocincuentacinco">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocincuentacinco" aria-expanded="true" aria-controls="collapsenocincuentacinco">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocincuentacinco" class="collapse" aria-labelledby="headingnocincuentacinco" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Proporcionar un componente experimental inesperado o de interés periodístico que eleva la interacción con el cliente.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Funcionalidadatractiva" name="Funcionalidadatractiva">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seguridad -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Seguridad</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnocincuentaseis">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocincuentaseis" aria-expanded="true" aria-controls="collapsenocincuentaseis">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocincuentaseis" class="collapse" aria-labelledby="headingnocincuentaseis" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Incrementar el nivel de confianza y seguridad para el cliente.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Seguridad" name="Seguridad">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Agregación futura -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Agregación futura</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnocincuentasiete">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocincuentasiete" aria-expanded="true" aria-controls="collapsenocincuentasiete">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocincuentasiete" class="collapse" aria-labelledby="headingnocincuentasiete" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Combina las características existentes que se encuentran en las ofertas en una sola.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Agregacionfutura" name="Agregacionfutura">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Adición de funcionalidades -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Adición de funcionalidades</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnocincuentaocho">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocincuentaocho" aria-expanded="true" aria-controls="collapsenocincuentaocho">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocincuentaocho" class="collapse" aria-labelledby="headingnocincuentaocho" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Agregar funcionalidades nuevas a una oferta existente.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Adiciondefuncionalidades" name="Adiciondefuncionalidades">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Simplificación del desempeño -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Simplificación del desempeño</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnocincuentanueve">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenocincuentanueve" aria-expanded="true" aria-controls="collapsenocincuentanueve">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenocincuentanueve" class="collapse" aria-labelledby="headingnocincuentanueve" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Omitir detalles, funcionalidades e interacciones superfluas para reducir la complejidad.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Simplificaciondeldesempeno" name="Simplificaciondeldesempeno">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sensibilidad ambiental -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Sensibilidad ambiental</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnosesenta">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesenta" aria-expanded="true" aria-controls="collapsenosesenta">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesenta" class="collapse" aria-labelledby="headingnosesenta" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Proveer ofertas que no impacten de forma adversa el medioambiente, o prevenir el impacto.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Sensibilidadambiental" name="Sensibilidadambiental">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Conservación -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Conservación</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnosesentauno">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesentauno" aria-expanded="true" aria-controls="collapsenosesentauno">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesentauno" class="collapse" aria-labelledby="headingnosesentauno" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Diseñar productos o servicios para que los clientes puedan reducir el consumo de energía, recursos naturales o materiales.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Conservacion" name="Conservacion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Customización -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Customización</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnosesentados">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesentados" aria-expanded="true" aria-controls="collapsenosesentados">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesentados" class="collapse" aria-labelledby="headingnosesentados" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Permitir la alteración del producto o servicio para satisfacer los requisitos o especificaciones individuales.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Customizacion" name="Customizacion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enfoque -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Enfoque</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnosesentatres">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesentatres" aria-expanded="true" aria-controls="collapsenosesentatres">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesentatres" class="collapse" aria-labelledby="headingnosesentatres" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Diseñar una oferta específicamente para un público en particular a expensas de otros.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Enfoque" name="Enfoque">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Estilo -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Estilo</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnosesentacuatro">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesentacuatro" aria-expanded="true" aria-controls="collapsenosesentacuatro">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesentacuatro" class="collapse" aria-labelledby="headingnosesentacuatro" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Imponer un estilo, imagen o moda.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Estilo" name="Estilo">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="button" name="previous" onclick="ScrollTo('cuarta_seccion_demo')" class="previous-form btn btn-default tamaño_btn_pre_verde" value="Anterior" />

                    <input type="button" name="next" onclick="ScrollTo('cuarta_seccion_demo');ofertaD();" class="next-form container_btn_verde negrita btn tamaño_btn_metodo" value="Siguiente" />
                </fieldset>

                <!-- OFERTA / Sistema de Productos -->
                <fieldset class="text-center">

                    <div class="col-12 borde d-flex justify-content-center mb-4">
                        <div class="col-lg-4 col-md-6 col-lg-4 borde">
                            <h1 class="text-center">Oferta</h1>
                            <div class="col-12 decoracion_verde"></div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap align-items-center div_especial_manuel">
                        <div class="col-lg-5 col-md-5 col-5 borde text-right">
                            <img src="iconos/sistemas de producto.png" class="icono_demo" width="12%" alt="">
                        </div>
                        <div class="col-lg-7 col-md-7 col-7 borde text-left">
                            <h3>Sistema de Productos</h3>
                        </div>

                    </div>


                    <!-- Complementos -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Complementos</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnosesentacinco">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesentacinco" aria-expanded="true" aria-controls="collapsenosesentacinco">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesentacinco" class="collapse" aria-labelledby="headingnosesentacinco" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Vender productos o servicios adicionales relacionados o auxiliares a un cliente.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Complementos" name="Complementos">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Extensiones plug-ins -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Extensiones plug-ins</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnosesentaseis">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesentaseis" aria-expanded="true" aria-controls="collapsenosesentaseis">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesentaseis" class="collapse" aria-labelledby="headingnosesentaseis" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Permitir adiciones de funcionalidades de primera o de tercera parte.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Extensionesplugins" name="Extensionesplugins">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Construcción de productos -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Construcción de productos</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnosesentasiete">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesentasiete" aria-expanded="true" aria-controls="collapsenosesentasiete">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesentasiete" class="collapse" aria-labelledby="headingnosesentasiete" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Ofrecer varios productos a la venta como un producto combinado.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Construcciondeproductos" name="Construcciondeproductos">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sistemas modulares -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Sistemas modulares</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnosesentaocho">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesentaocho" aria-expanded="true" aria-controls="collapsenosesentaocho">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesentaocho" class="collapse" aria-labelledby="headingnosesentaocho" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Proporcionar un conjunto de componentes individuales que se puedan usar de forma independiente pero ganen utilidad cuando se combinen.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Sistemasmodulares" name="Sistemasmodulares">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Plataformas de productos / servicios -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Plataformas de productos / servicios</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnosesentanueve">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesentanueve" aria-expanded="true" aria-controls="collapsenosesentanueve">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesentanueve" class="collapse" aria-labelledby="headingnosesentanueve" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Desarrollar sistemas que se conecten con otros productos y servicios para crear una oferta holística.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Plataformasdeproductos" name="Plataformasdeproductos">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ofertas integradas -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Ofertas integradas</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_verde" id="headingnosesetenta">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesetenta" aria-expanded="true" aria-controls="collapsenosesetenta">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesetenta" class="collapse" aria-labelledby="headingnosesetenta" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Combine componentes en una experiencia completa.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Ofertasintegradas" name="Ofertasintegradas">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="button" name="previous" onclick="ScrollTo('cuarta_seccion_demo')" class="previous-form btn btn-default tamaño_btn_pre_verde" value="Anterior" />

                    <input type="button" name="next" onclick="ScrollTo('cuarta_seccion_demo');ofertaS()" class="next-form container_btn_verde negrita btn tamaño_btn_metodo" value="Siguiente" />
                </fieldset>

                <!-- EXPERIENCIAS / Servicios -->
                <fieldset class="text-center">

                    <div class="col-12 borde d-flex justify-content-center mb-4">
                        <div class="col-lg-4 col-md-6 col-lg-4 borde">
                            <h1 class="text-center">Experiencias</h1>
                            <div class="col-12 decoracion_azul"></div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap align-items-center div_especial_manuel">
                        <div class="col-lg-6 col-md-6 col-5 borde text-right">
                            <img src="iconos/servicios.png" class="icono_demo" width="12%" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-7 borde text-left">
                            <h3>Servicios</h3>
                        </div>

                    </div>


                    <!-- Probar antes de comprar -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Probar antes de comprar</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosesetentauno">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesetentauno" aria-expanded="true" aria-controls="collapsenosesetentauno">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesetentauno" class="collapse" aria-labelledby="headingnosesetentauno" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Permitir que un cliente pruebe y viva la experiencia de una oferta antes de invertir en ella.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Probarantesdecomprar" name="Probarantesdecomprar">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Garantías -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Garantías</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosesetentados">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesetentados" aria-expanded="true" aria-controls="collapsenosesetentados">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesetentados" class="collapse" aria-labelledby="headingnosesetentados" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Elimina el riesgo del cliente de perder dinero o tiempo derivado de la falla del producto o error de compra.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Garantias" name="Garantias">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Programas de fidelización -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Programas de fidelización</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosesetentatres">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesetentatres" aria-expanded="true" aria-controls="collapsenosesetentatres">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesetentatres" class="collapse" aria-labelledby="headingnosesetentatres" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Proporcionar beneficios y / o descuentos a clientes frecuentes y de alto valor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Programasdefidelizacion" name="Programasdefidelizacion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Adición de valor -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Adición de valor</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosesetentacuatro">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesetentacuatro" aria-expanded="true" aria-controls="collapsenosesetentacuatro">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesetentacuatro" class="collapse" aria-labelledby="headingnosesetentacuatro" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Incluir un servicio adicional o función como parte del precio base.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Adiciondevalor" name="Adiciondevalor">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Consejería -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Consejería</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosesetentacinco">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesetentacinco" aria-expanded="true" aria-controls="collapsenosesetentacinco">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesetentacinco" class="collapse" aria-labelledby="headingnosesetentacinco" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Brindar un servicio premium asumiendo tareas para las cuales los clientes no tienen tiempo.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Consejeria" name="Consejeria">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gestión total de la experiencia -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Gestión total de la experiencia</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosesetentaseis">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesetentaseis" aria-expanded="true" aria-controls="collapsenosesetentaseis">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesetentaseis" class="collapse" aria-labelledby="headingnosesetentaseis" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Proporcionar una gestión integral y reflexiva de la experiencia del cliente a lo largo del ciclo de vida de una oferta.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Gestiontotaldelaexperiencia" name="Gestiontotaldelaexperiencia">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicios suplementarios -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Servicios suplementarios</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosesetentasiete">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesetentasiete" aria-expanded="true" aria-controls="collapsenosesetentasiete">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesetentasiete" class="collapse" aria-labelledby="headingnosesetentasiete" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Ofrezca servicios suplementarios que se ajusten a la oferta base.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Serviciossuplementarios" name="Serviciossuplementarios">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio Superior -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Servicio Superior</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosesetentaocho">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesetentaocho" aria-expanded="true" aria-controls="collapsenosesetentaocho">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesetentaocho" class="collapse" aria-labelledby="headingnosesetentaocho" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Proveer servicios de alta calidad, eficiencia, o con mejor experiencia que los competidores.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="ServicioSuperior" name="ServicioSuperior">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio personalizado -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Servicio personalizado</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosesetentanueve">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosesetentanueve" aria-expanded="true" aria-controls="collapsenosesetentanueve">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosesetentanueve" class="collapse" aria-labelledby="headingnosesetentanueve" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Usa los datos personales del cliente para proveer un servicio perfectamente calibrado y altamente personalizado.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Serviciopersonalizado" name="Serviciopersonalizado">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comunidad de usuarios / soporte de sistemas -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Comunidad de usuarios / soporte de sistemas</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseochenta">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseochenta" aria-expanded="true" aria-controls="collapsenoseochenta">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseochenta" class="collapse" aria-labelledby="headingnoseochenta" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Proporcionar un recurso comunitario para productos, servicios, soporte, uso y extensión.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Comunidaddeusuarios" name="Comunidaddeusuarios">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Arrendamiento o préstamo -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Arrendamiento o préstamo</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseochentauno">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseochentauno" aria-expanded="true" aria-controls="collapsenoseochentauno">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseochentauno" class="collapse" aria-labelledby="headingnoseochentauno" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Deje que las clientes paguen por el tiempo para reducir los costos iniciales.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Arrendamientooprestamo" name="Arrendamientooprestamo">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Autoservicio -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Autoservicio</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseochentados">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseochentados" aria-expanded="true" aria-controls="collapsenoseochentados">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseochentados" class="collapse" aria-labelledby="headingnoseochentados" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Proporcionar a los usuarios control sobre las actividades que de otro modo requerirían un intermediario para completar.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Autoservicio" name="Autoservicio">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="button" name="previous" onclick="ScrollTo('cuarta_seccion_demo')" class="previous-form btn btn-default tamaño_btn_pre_azul" value="Anterior" />

                    <input type="button" name="next" onclick="ScrollTo('cuarta_seccion_demo');expeS();" class="next-form container_btn_azul negrita btn tamaño_btn_metodo" value="Siguiente" />
                </fieldset>

                <!-- EXPERIENCIAS / Canales -->
                <fieldset class="text-center">

                    <div class="col-12 borde d-flex justify-content-center mb-4">
                        <div class="col-lg-4 col-md-6 col-lg-4 borde">
                            <h1 class="text-center">Experiencias</h1>
                            <div class="col-12 decoracion_azul"></div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap align-items-center div_especial_manuel">
                        <div class="col-lg-6 col-md-6 col-6 borde text-right">
                            <img src="iconos/canales.png" class="icono_demo" width="12%" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-6 borde text-left">
                            <h3>Canales</h3>
                        </div>

                    </div>

                    <!-- Diversificación -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Diversificación</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseochentatres">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseochentatres" aria-expanded="true" aria-controls="collapsenoseochentatres">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseochentatres" class="collapse" aria-labelledby="headingnoseochentatres" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Adicionar y expandir dentro de nuevos o diferentes canales.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Diversificacion" name="Diversificacion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tienda principal -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Tienda principal</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseochentacuatro">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseochentacuatro" aria-expanded="true" aria-controls="collapsenoseochentacuatro">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseochentacuatro" class="collapse" aria-labelledby="headingnoseochentacuatro" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Crear una tienda para mostrar.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Tiendaprincipal" name="Tiendaprincipal">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ir Directo -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Ir Directo</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseochentacinco">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseochentacinco" aria-expanded="true" aria-controls="collapsenoseochentacinco">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseochentacinco" class="collapse" aria-labelledby="headingnoseochentacinco" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Omitir los canales minoristas tradicionales y el contenido e ir directamente con los clientes.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="IrDirecto" name="IrDirecto">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Canales no tradicionales -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Canales no tradicionales</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseochentaseis">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseochentaseis" aria-expanded="true" aria-controls="collapsenoseochentaseis">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseochentaseis" class="collapse" aria-labelledby="headingnoseochentaseis" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Emplear nuevas y relevantes vías para llegar a los clientes.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Canalesnotradicionales" name="Canalesnotradicionales">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Presencia pop-up -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Presencia pop-up</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseochentasiete">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseochentasiete" aria-expanded="true" aria-controls="collapsenoseochentasiete">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseochentasiete" class="collapse" aria-labelledby="headingnoseochentasiete" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Crear notas atractivas pero temporales para exhibir o vender ofertas.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Presenciapopup" name="Presenciapopup">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Distribución indirecta -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Distribución indirecta</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseochentaocho">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseochentaocho" aria-expanded="true" aria-controls="collapsenoseochentaocho">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseochentaocho" class="collapse" aria-labelledby="headingnoseochentaocho" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Usar a otros como revendedores que se apropien de entregar la oferta al usuario final.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Distribucionindirecta" name="Distribucionindirecta">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Marketing multinivel -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Marketing multinivel</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseochentanueve">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseochentanueve" aria-expanded="true" aria-controls="collapsenoseochentanueve">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseochentanueve" class="collapse" aria-labelledby="headingnoseochentanueve" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Vender productos a granel o paquetizados a una fuerza de ventas afiliada pero independiente que venda por usted.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Marketingmultinivel" name="Marketingmultinivel">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Venta cruzada -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Venta cruzada</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosenoventa">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosenoventa" aria-expanded="true" aria-controls="collapsenosenoventa">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosenoventa" class="collapse" aria-labelledby="headingnosenoventa" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Colocar productos, servicios o información que mejorará una experiencia en situaciones en las que es probable que los clientes quieran acceder a ellos.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Ventacruzada" name="Ventacruzada">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bajo demanda -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Bajo demanda</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosenoventauno">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosenoventauno" aria-expanded="true" aria-controls="collapsenosenoventauno">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosenoventauno" class="collapse" aria-labelledby="headingnosenoventauno" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Entregar productos en tiempo real cuando y donde se desee.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Bajodemanda" name="Bajodemanda">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contexto específico -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Contexto específico</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosenoventados">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosenoventados" aria-expanded="true" aria-controls="collapsenosenoventados">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosenoventados" class="collapse" aria-labelledby="headingnosenoventados" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Ofrecer acceso oportuno a productos que sean apropiados para una ubicación, ocasión o situación específica.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Contextoespecifico" name="Contextoespecifico">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Centro de experiencias -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Centro de experiencias</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosenoventatres">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosenoventatres" aria-expanded="true" aria-controls="collapsenosenoventatres">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosenoventatres" class="collapse" aria-labelledby="headingnosenoventatres" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Cree un espacio que anime a sus clientes a interactuar con sus ofertas, pero que los puedan comprar a través de un canal diferente (y a menudo de menor costo).
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Centrodeexperiencias" name="Centrodeexperiencias">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="button" name="previous" onclick="ScrollTo('cuarta_seccion_demo')" class="previous-form btn btn-default tamaño_btn_pre_azul" value="Anterior" />

                    <input type="button" name="next" onclick="ScrollTo('cuarta_seccion_demo');expeC();" class="next-form container_btn_azul negrita btn tamaño_btn_metodo" value="Siguiente" />

                </fieldset>

                <!-- EXPERIENCIAS / Marca -->
                <fieldset class="text-center">

                    <div class="col-12 borde d-flex justify-content-center mb-4">
                        <div class="col-lg-4 col-md-6 col-lg-4 borde">
                            <h1 class="text-center">Experiencias</h1>
                            <div class="col-12 decoracion_azul"></div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap align-items-center div_especial_manuel">
                        <div class="col-lg-6 col-md-6 col-6 borde text-right">
                            <img src="iconos/marca.png" class="icono_demo" width="12%" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-6 borde text-left">
                            <h3>Marca</h3>
                        </div>

                    </div>


                    <!-- Marca compartida -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Marca compartida</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosenoventacuatro">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosenoventacuatro" aria-expanded="true" aria-controls="collapsenosenoventacuatro">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosenoventacuatro" class="collapse" aria-labelledby="headingnosenoventacuatro" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Combine la marca para reforzar mutuamente los atributos clave o mejore la credibilidad de una oferta.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Marcacompartida" name="Marcacompartida">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Apalancamiento de marca -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Apalancamiento de marca</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosenoventacinco">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosenoventacinco" aria-expanded="true" aria-controls="collapsenosenoventacinco">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosenoventacinco" class="collapse" aria-labelledby="headingnosenoventacinco" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Preste su credibilidad y permita que otros usen su nombre, extendiendo así el alcance de su marca.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Apalancamientodemarca" name="Apalancamientodemarca">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Etiqueta privada -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Etiqueta privada</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosenoventaseis">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosenoventaseis" aria-expanded="true" aria-controls="collapsenosenoventaseis">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosenoventaseis" class="collapse" aria-labelledby="headingnosenoventaseis" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Proporcionar productos o servicios fabricados o desarrollados por terceros a nombre de su empresa.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Etiquetaprivada" name="Etiquetaprivada">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Extensión de marca -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Extensión de marca</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosenoventasiete">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosenoventasiete" aria-expanded="true" aria-controls="collapsenosenoventasiete">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosenoventasiete" class="collapse" aria-labelledby="headingnosenoventasiete" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Ofrecer nuevos productos o servicios bajo una marca ya existente.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Extensiondemarca" name="Extensiondemarca">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Componentes de marca -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Componentes de marca</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosenoventaocho">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosenoventaocho" aria-expanded="true" aria-controls="collapsenosenoventaocho">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosenoventaocho" class="collapse" aria-labelledby="headingnosenoventaocho" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Crear un componente integral para hacer que una oferta final parezca más valiosa.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Componentesdemarca" name="Componentesdemarca">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Transparencia -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Transparencia</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosenoventanueve">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosenoventanueve" aria-expanded="true" aria-controls="collapsenosenoventanueve">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosenoventanueve" class="collapse" aria-labelledby="headingnosenoventanueve" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Dejar que los clientes vean sus operaciones e interactúen con su marca y sus ofertas.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Transparencia" name="Transparencia">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alineación de valores -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Alineación de valores</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosecien">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosecien" aria-expanded="true" aria-controls="collapsenosecien">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosecien" class="collapse" aria-labelledby="headingnosecien" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Haz que tu marca defienda una gran idea o un conjunto de valores y los exprese consistentemente en todos los aspectos de tu empresa.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Alineaciondevalores" name="Alineaciondevalores">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Certificación -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Certificación</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosecienuno">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosecienuno" aria-expanded="true" aria-controls="collapsenosecienuno">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosecienuno" class="collapse" aria-labelledby="headingnosecienuno" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Desarrollar una marca o mercado que signifique y garantice ciertas características en las ofertas a través de un tercero.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Certificacion" name="Certificacion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="button" name="previous" onclick="ScrollTo('cuarta_seccion_demo')" class="previous-form btn btn-default tamaño_btn_pre_azul" value="Anterior" />

                    <input type="button" name="next" onclick="ScrollTo('cuarta_seccion_demo');expeM();" class="next-form container_btn_azul negrita btn tamaño_btn_metodo" value="Siguiente" />


                </fieldset>

                <!-- EXPERIENCIAS / Compromiso del Cliente -->
                <fieldset class="text-center">

                    <div class="col-12 borde d-flex justify-content-center mb-4">
                        <div class="col-lg-4 col-md-6 col-lg-4 borde">
                            <h1 class="text-center">Experiencias</h1>
                            <div class="col-12 decoracion_azul"></div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap align-items-center div_especial_manuel">
                        <div class="col-lg-5 col-md-5 col-5 borde text-right">
                            <img src="iconos/compromiso con el cliente.png" class="icono_demo" width="12%" alt="">
                        </div>
                        <div class="col-lg-7 col-md-7 col-7 borde text-left">
                            <h3>Compromiso del Cliente</h3>
                        </div>

                    </div>

                    <!-- Automatización de procesos -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Automatización de procesos</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseciendos">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseciendos" aria-expanded="true" aria-controls="collapsenoseciendos">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseciendos" class="collapse" aria-labelledby="headingnoseciendos" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Eliminar la carga de la tarea repetitiva del usuario para simplificar la vida y hacer que las nuevas experiencias parezcan mágicas.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Automatizaciondeprocesos" name="Automatizaciondeprocesos">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Simplificación de experiencias -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Simplificación de experiencias</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosecientres">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosecientres" aria-expanded="true" aria-controls="collapsenosecientres">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosecientres" class="collapse" aria-labelledby="headingnosecientres" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Reducir la complejidad y concéntrese en ofrecer experiencias específicas excepcionalmente bien.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Simplificaciondeexperiencias" name="Simplificaciondeexperiencias">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Curación -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Curación</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseciencuatro">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseciencuatro" aria-expanded="true" aria-controls="collapsenoseciencuatro">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseciencuatro" class="collapse" aria-labelledby="headingnoseciencuatro" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Usar un punto de vista distinto para separar elementos y en el proceso crear una identidad fuerte para ti y sus seguidores.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Curacion" name="Curacion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Habilitación de experiencias -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Habilitación de experiencias</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseciencinco">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseciencinco" aria-expanded="true" aria-controls="collapsenoseciencinco">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseciencinco" class="collapse" aria-labelledby="headingnoseciencinco" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Ampliar el ámbito de lo que es posible para ofrecer una experiencia previamente improbable.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Habilitaciondeexperiencias" name="Habilitaciondeexperiencias">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Maestría -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Maestría</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosecienseis">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosecienseis" aria-expanded="true" aria-controls="collapsenosecienseis">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosecienseis" class="collapse" aria-labelledby="headingnosecienseis" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Ayudar a los clientes a obtener una gran habilidad o un conocimiento profundo de alguna actividad o tema.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Maestria" name="Maestria">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Autonomía & autoridad -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Autonomía & autoridad</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseciensiete">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseciensiete" aria-expanded="true" aria-controls="collapsenoseciensiete">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseciensiete" class="collapse" aria-labelledby="headingnoseciensiete" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Otorgue a tus clientes y usuarios el poder de usar sus ofertas para dar forma a su propia experiencia.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Autonomiayautoridad" name="Autonomiayautoridad">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comunidad & pertenencia -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Comunidad & pertenencia</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosecienocho">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosecienocho" aria-expanded="true" aria-controls="collapsenosecienocho">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosecienocho" class="collapse" aria-labelledby="headingnosecienocho" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Facilitar las conexiones viscerales para que las personas sientan que son parte de un grupo o movimiento.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Comunidadypertenencia" name="Comunidadypertenencia">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Personalización -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Personalización</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseciennueve">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseciennueve" aria-expanded="true" aria-controls="collapsenoseciennueve">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseciennueve" class="collapse" aria-labelledby="headingnoseciennueve" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Modificar las ofertas estándar para permitir la proyección de la identidad del cliente.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Personalizacion" name="Personalizacion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Personalidad & humanización -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Personalidad & humanización</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnoseciendiez">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenoseciendiez" aria-expanded="true" aria-controls="collapsenoseciendiez">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenoseciendiez" class="collapse" aria-labelledby="headingnoseciendiez" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Humaniza tu oferta con pequeños atributos de marca, en formas de mensajes, para darle vida a productos y servicios.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Personalidadyhumanizacion" name="Personalidadyhumanizacion">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Estatús & reconocimiento -->
                    <div class="col-12 d-flex flex-wrap borde mb-3 text-left">
                        <div class="col-lg-6 col-md-6 col-12  borde">
                            <h4 class="mt-5">Estatús & reconocimiento</h4>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header color_option_descrip_demo_azul" id="headingnosecienonce">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left btn_option_descrip_demo" type="button" data-toggle="collapse" data-target="#collapsenosecienonce" aria-expanded="true" aria-controls="collapsenosecienonce">
                                                Descripción <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsenosecienonce" class="collapse" aria-labelledby="headingnosecienonce" data-parent="#accordionExample">
                                        <div class="card-body text-left">
                                            Ofrecer señales que infieren significado, permitiendo a los usuarios y a quienes interactúan con ellos desarrollar y nutrir aspectos de su identidad.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  borde cont_optiones_demo">

                            <div class="col-12 d-flex flex-wrap  p-0">
                                <div class="col-lg-3 col-md-3 col-12 calificacion_demo">
                                    <p>Calificación:</p>
                                </div>

                                <div class="form-group col-lg-9 col-md-9 col-12">
                                    <select class="form-control tipografia_demo_option" required id="Estatusyreconocimiento" name="Estatusyreconocimiento">
                                        <option value="0"> - Calificación -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <input type="hidden" id="fecha" name="fecha">
                            </div>
                        </div>
                    </div>

                    <input type="button" name="previous" onclick="ScrollTo('cuarta_seccion_demo');expeCli();" class="previous-form btn btn-default tamaño_btn_pre_azul" value="Anterior" />

                    <input type="submit" name="submit" class="submit container_btn_azul negrita btn tamaño_btn_metodo" value="Ver Resultados" />
                    <!-- <button class="btn submit container_btn_azul negrita tamaño_btn_metodo" type="submit" value="Submit">Enviar</button> -->


                </fieldset>

            </form>
        </div>

    </section>

    <!-- Septima seccion -->
    <?php include 'layout/footer.php' ?>
    <!-- Septima seccion -->
</body>
<?php include 'layout/archivosfooter.php' ?>
<script src="js/form.js"></script>

<script>
    function ScrollTo(name) {
        //init thread
        ScrollToResolver(document.getElementById(name));
    }

    function ScrollToResolver(elem) {
        var jump = parseInt(elem.getBoundingClientRect().top * .4);
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