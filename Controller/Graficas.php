
<?php 
if ( isset( $_POST['llave'] ) == "true" ) {
    if (isset($_POST['id'])) {
        require_once '../Controller/conexion.php';
        $con = Conect();
        $condicion = $_POST['id'];
        $consult = "SELECT * from usuario where id_usuario = {$condicion}";
        $resulta = $con->prepare( $consult );
        $resulta->execute( array() );
        $varsesion = $resulta->fetch( PDO::FETCH_OBJ );

    } else {
        include '../variables/seguridad.php';
    }
    include '../Controller/consultaMDG.php';
    include '../Controller/consultaRED.php';
    include '../Controller/consultaEST.php';
    include '../Controller/consultaEST.php';
    include '../Controller/consultaPROC.php';
    include '../Controller/consultaDESPROC.php';
    include '../Controller/consultaSISPROC.php';
    include '../Controller/consultaSERVI.php';
    include '../Controller/consultaMARCA.php';
    include '../Controller/consultaCANAL.php';
    include '../Controller/consultaCLIENTE.php';
    
    $MDG = $RT;
    $VARM = $VarMDG;
    $ESTM = $EstCMDG; ?>
    <!-- Datos de res -->
    <?php $ESTR = $EstCRED;
    $RED = $RTR;
    $VRED = $VarRED;  ?>
    <!-- Datos de Estructura -->
    <?php $ESTEST = $EstCEST;
    $EST = $RTEST;
    $VEST = $VarEST ?>
    <!-- Datos de Procesos -->
    <?php $ESTPROC = $EstCPROC;
    $PROC = $RTPROC;
    $VPROC = $VarPROC; ?>

    <!-- Desempeño del producto -->
    <?php $DESPROC = $RTDESPROC;
    $VRDESPROC = $VarDESPROC;
    $VarDesProc = $EstDESPROCT;
    ?>

    <!-- Sistema del Producto -->
    <?php $SISPROC = $RTSISPROC;
    $VRSISPROC = $VarSISPROC;
    $VarDesProc = $EstDESPROCT;
    ?>

    <!-- Servicio -->
    <?php $SERVI = $RTSERVI; ?>

    <!-- Marca -->
    <?php $MARCA = $RTMARCA; ?>

    <!-- Canal -->
    <?php $CANAL = $RTCANAL; ?>

    <!-- Cliente -->
    <?php $CLIENTE = $RTCLIENTE; ?>

    <!-- OFERTA -->
    <?php $TOTALOFERTAC = $DESPROC + $SISPROC; ?>
    <?php $TOTALOFERTA =  number_format($TOTALOFERTAC * 1, 2); ?>
    <?php $VarOferta = $EstandarOferta; ?>
    <?php $VariaOferta =  $VarOferta - $TOTALOFERTA; ?>
    <?php $DesviaOferta =  $TOTALOFERTA - $VarOferta; ?>

    <!-- configuracion -->
    <?php $TOTALCONFIC = $MDG + $RED + $EST + $PROC; ?>
    <?PHP $TOTALCONFI = number_format($TOTALCONFIC * 1, 2); ?>
    <?php $VarConfi =  $EstandarConfi; ?>
    <?php $VariaConfi = $VarConfi - $TOTALCONFI; ?>
    <?php $DesviaConfi = $TOTALCONFI - $VarConfi; ?>

    <!-- Experiencia -->
    <?php $TOTALEXPEC = $MARCA + $CANAL + $CLIENTE + $SERVI; ?>
    <?PHP $TOTALEXPE = number_format($TOTALEXPEC * 1, 2); ?>
    <?php $VarExpe = $EstandarExpe; ?>
    <?php $VariaExpe =  $VarExpe - $TOTALEXPE; ?>
    <?php $DesviaExpe = $TOTALEXPE - $VarExpe; ?>

    <!-- Sumas -->
    <?php $TOTALUSERC = $TOTALOFERTA + $TOTALCONFI + $TOTALEXPE; ?>
    <?PHP $TOTALUSER = number_format($TOTALUSERC * 1, 2); ?>
    <?php $TOTALESTANDAR = $VarExpe + $VarOferta + $VarConfi; ?>
    <?php $TOTALDESVIACION = $DesviaConfi + $DesviaExpe + $DesviaOferta;?>

    <?php
    $total_anios = array ($anios1, $anios2, $anios3, $anios4, $anios5, $anios6, $anios7, $anios8, $anios9, $anios10); 
    $aniossumArray = [];
    $sumArray = [];
    $generalArray = [];
    $total_anio = 0;
    foreach ($total_anios as $key => $value) {
        foreach ($value as $llave =>$valor) {
            foreach ($valor as $llav =>$val) {
                $sumArray[$val['anio']][$val['mes']] = 1;
                foreach ($val as $llav_fech =>$val_fech) {
                    if ($llav_fech == "fecha"){
                        foreach ( $val_fech as $v_f ){
                            foreach ($v_f as $llave_final => $valor_final){
                                if(!array_key_exists($llave_final, $aniossumArray)) {
                                    $aniossumArray[$llave_final] = 0;
                                }
                                $aniossumArray[$llave_final] += $valor_final;
                            }
                        }
                    }
                }
            }
        }
    }
    //divide por la cantidad de meses que haya por año 
    foreach ($aniossumArray as $aniokey => $aniovalue) {
        $generalArray[$aniokey] = $aniovalue /(count($sumArray[$aniokey]));
    }
    //echo "<pre>";print_r($generalArray);echo "</pre>";
    ?>

    <section id="graficas_reporte" class="d-none">
        <div id="consolidado" class="chartblanco"></div>
        <div id="palanca" class="chartblanco"></div>
        <div id="impulsor" class="chartblanco"></div>
        <div id="oferta_grap" class="chartblanco"></div>
        <div id="experiencia_grap" class="chartblanco"></div>
        <div id="rating" class="chartblanco"></div>
    </section>

    <script src="js/highcharts.js"></script>
    <script src="js/highcharts-more.js"></script>
    <script src="js/exporting.js"></script>
    <script src="js/export-data.js"></script>
    <script src="js/accessibility.js"></script>
    <script>
        Highcharts.setOptions({chart:{style:{fontFamily:'OpenSans-Regular'},},lang:{downloadCSV:"Descarga CSV",viewFullscreen:"Ver en pantalla completa",downloadXLS:"Descargar XLS",printChart:"Tabla de impresión",downloadPNG:"Descargar imagen PNG",downloadJPEG:"Descargar imagen JPEG",downloadPDF:"Descargar PDF",downloadSVG:"Descargar imagen SGV",viewData:"Ver tabla de datos"}});

        //consolidado 
        var consolidado=Highcharts.chart('consolidado',{chart:{type:'column'},title:{text:'Total perfil innovador'},xAxis:{visible:false},colors:['#34F0FF','#85f100','#fdd300'],plotOptions:{column:{colorByPoint:true,dataLabels:{enabled:true}}},series:[{showInLegend:false,data:[<?php echo"{$TOTALUSER},{$TOTALESTANDAR},{$TOTALDESVIACION}";?>]}]});

        //palanca
        var palanca=Highcharts.chart('palanca',{chart:{polar:true},title:{text:'Resultados por Palanca de Innovación'},xAxis:{categories:['Configuración','Oferta','Experiencia'],labels:{style:{fontSize:'15px'}}},series:[{name:'Resultado',type:'line',color:'#34F0FF',data:[<?php echo"{$TOTALCONFI},{$TOTALOFERTA},{$TOTALEXPE}";?>]},{name:'Estandar',type:'line',color:'#85f100',data:[<?php echo"{$VarConfi},{$VarOferta},{$VarExpe}";?>]}],});

        //impulsor
        var impulsor=Highcharts.chart('impulsor',{chart:{polar:true},title:{text:'Resultados Configuración'},xAxis:{categories:['Modelo Ganancias','Red','Estructura','Procesos'],labels:{style:{fontSize:'15px'}}},series:[{name:'Resultado',type:'line',color:'#34F0FF',data:[<?php echo"{$MDG},{$RED},{$EST},{$PROC}";?>]},{name:'Estandar',type:'line',color:'#85f100',data:[<?php echo"{$EstMDG},{$EstRED},{$EstEST},{$EstPROC}";?>]}],});

        //oferta
        var oferta=Highcharts.chart('oferta_grap',{chart:{type:'bar'},title:{text:'Resultados Oferta'},xAxis:{categories:['Sistema de Productos','Desempeño de Procesos'],labels:{style:{fontSize:'15px'}}},series:[{name:'Estandar',color:'#34F0FF',data:[<?php echo"{$EstDESPROC},{$EstSISPROC}";?>]},{name:'Resultado',color:'#85f100',data:[<?php echo"{$DESPROC},{$SISPROC}";?>]}],});

        //experiencia
        var experiencia=Highcharts.chart('experiencia_grap',{chart:{polar:true},title:{text:'Resultados Experiencia'},xAxis:{categories:['Servicios','Canales','Marca','Cliente'],labels:{style:{fontSize:'15px'}}},series:[{name:'Resultado',type:'line',color:'#34F0FF',data:[<?php echo"{$SERVI},{$CANAL},{$MARCA},{$CLIENTE}";?>]},{name:'Estandar',type:'line',color:'#85f100',data:[<?php echo"{$EstSERVI},{$EstCANAL},{$EstMARCA},{$EstCLIENTE}";?>]}],});

        //rating 
        var rating=Highcharts.chart('rating',{chart:{type:'column'},title:{text:'Evolución del Rating Innovador'},xAxis:{categories:[<?php foreach($generalArray as $key=>$value){echo"{$key},";}?>],labels:{style:{fontSize:'15px'}}},colors:['#34F0FF'],plotOptions:{column:{colorByPoint:true,dataLabels:{enabled:true}}},series:[{showInLegend:false,data:[<?php foreach($generalArray as $value){echo"{$value},";}?>]}]});
    </script>
<?php 
} ?>
