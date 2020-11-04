<?php

require_once 'conexion.php';

// if ($_POST){
// Configuracion Modelo Ganancia uno
$Premium = $_POST['Premium'];
$Liderazgoencostos = $_POST['Liderazgoencostos'];
$Transaccionesaescala = $_POST['Transaccionesaescala'];
$Microtransacciones = $_POST['Microtransacciones'];
$Escasezforzada = $_POST['Escasezforzada'];
$Suscripcion = $_POST['Suscripcion'];
$Membresias = $_POST['Membresias'];
$Capacidadinstalada = $_POST['Capacidadinstalada'];
$Conexiones = $_POST['Conexiones'];
$Subasta = $_POST['Subasta'];

$Definidoporelusuario = $_POST['Definidoporelusuario'];
$Fremmium = $_POST['Fremmium'];
$PrecioFlexible = $_POST['PrecioFlexible'];
$Flotador = $_POST['Flotador'];
$Financiamiento = $_POST['Financiamiento'];
$Financiamientoporpublicidad = $_POST['Financiamientoporpublicidad'];
$Licenciamiento = $_POST['Licenciamiento'];
$Usomedido = $_POST['Usomedido'];
$Preciosagrupados = $_POST['Preciosagrupados'];
$Desagregarprecios = $_POST['Desagregarprecios'];
$RiesgoCompartido = $_POST['RiesgoCompartido'];

$Fusionesyadquisiciones = $_POST['Fusionesyadquisiciones'];
$Consolidacion = $_POST['Consolidacion'];
$Innovacionabierta = $_POST['Innovacionabierta'];
$Mercadossecundarios = $_POST['Mercadossecundarios'];
$Integraciondelacadenadesuministros = $_POST['Integraciondelacadenadesuministros'];
$Participacioncomplementaria = $_POST['Participacioncomplementaria'];
$Alianzas = $_POST['Alianzas'];
$Franquiciamiento = $_POST['Franquiciamiento'];
$Cooperacion = $_POST['Cooperacion'];
$Lanzamientodeplataformasdelacompetencia = $_POST['Lanzamientodeplataformasdelacompetencia'];
$Colaboracion = $_POST['Colaboracion'];
$fecha = $_REQUEST["fecha"];
$fecha = date("Y-m-d");

$Disenoorganizacional = $_POST['Disenoorganizacional'];
$Sistemadeincentivos = $_POST['Sistemadeincentivos'];
$IntegraciondeTI = $_POST['IntegraciondeTI'];
$Centrodecompetencias = $_POST['Centrodecompetencias'];
$Tercerizacion = $_POST['Tercerizacion'];
$Universidadcorporativa = $_POST['Universidadcorporativa'];
$Gerenciadescentralizada = $_POST['Gerenciadescentralizada'];
$Gestiondelconocimiento = $_POST['Gestiondelconocimiento'];
$Aprovechamientodeactivos = $_POST['Aprovechamientodeactivos'];
$Estandarizaciondeactivos = $_POST['Estandarizaciondeactivos'];

$Estandarizaciondeprocesos = $_POST['Estandarizaciondeprocesos'];
$Localizacion = $_POST['Localizacion'];
$Eficienciadeprocesos = $_POST['Eficienciadeprocesos'];
$Manufacturaflexible = $_POST['Manufacturaflexible'];
$Automatizaciondeprocesos = $_POST['Automatizaciondeprocesos'];
$Crowdsourcing = $_POST['Crowdsourcing'];
$Produccionbajodemanda = $_POST['Produccionbajodemanda'];
$Produccionlimpia = $_POST['Produccionlimpia'];
$Sistemaslogisticos = $_POST['Sistemaslogisticos'];
$Disenoestrategico = $_POST['Disenoestrategico'];
$Propiedadintelectual = $_POST['Propiedadintelectual'];
$Generacionporelusuario = $_POST['Generacionporelusuario'];
$Analisispredictivo = $_POST['Analisispredictivo'];

$Productossuperiores = $_POST['Productossuperiores'];
$Facilidaddeuso = $_POST['Facilidaddeuso'];
$Funcionalidadatractiva = $_POST['Funcionalidadatractiva'];
$Seguridad = $_POST['Seguridad'];
$Agregacionfutura = $_POST['Agregacionfutura'];
$Adiciondefuncionalidades = $_POST['Adiciondefuncionalidades'];
$Simplificaciondeldesempeno = $_POST['Simplificaciondeldesempeno'];
$Sensibilidadambiental = $_POST['Sensibilidadambiental'];
$Conservacion = $_POST['Conservacion'];
$Customizacion = $_POST['Customizacion'];
$Enfoque = $_POST['Enfoque'];
$Estilo = $_POST['Estilo'];

$Complementos = $_POST['Complementos'];
$Extensionesplugins = $_POST['Extensionesplugins'];
$Construcciondeproductos = $_POST['Construcciondeproductos'];
$Sistemasmodulares = $_POST['Sistemasmodulares'];
$Plataformasdeproductos = $_POST['Plataformasdeproductos'];
$Ofertasintegradas = $_POST['Ofertasintegradas'];

$Probarantesdecomprar = $_POST['Probarantesdecomprar'];
$Garantias = $_POST['Garantias'];
$Programasdefidelizacion = $_POST['Programasdefidelizacion'];
$Adiciondevalor = $_POST['Adiciondevalor'];
$Consejeria = $_POST['Consejeria'];
$Gestiontotaldelaexperiencia = $_POST['Gestiontotaldelaexperiencia'];
$Serviciossuplementarios = $_POST['Serviciossuplementarios'];
$ServicioSuperior = $_POST['ServicioSuperior'];
$Serviciopersonalizado = $_POST['Serviciopersonalizado'];
$Comunidaddeusuarios = $_POST['Comunidaddeusuarios'];
$Arrendamientooprestamo = $_POST['Arrendamientooprestamo'];
$Autoservicio = $_POST['Autoservicio'];

$Diversificacion = $_POST['Diversificacion'];
$IrDirecto = $_POST['IrDirecto'];
$Tiendaprincipal = $_POST['Tiendaprincipal'];
$Canalesnotradicionales = $_POST['Canalesnotradicionales'];
$Presenciapopup = $_POST['Presenciapopup'];
$Distribucionindirecta = $_POST['Distribucionindirecta'];
$Marketingmultinivel = $_POST['Marketingmultinivel'];
$Ventacruzada = $_POST['Ventacruzada'];
$Bajodemanda = $_POST['Bajodemanda'];
$Contextoespecifico = $_POST['Contextoespecifico'];
$Centrodeexperiencias = $_POST['Centrodeexperiencias'];

$Marcacompartida = $_POST['Marcacompartida'];
$Apalancamientodemarca = $_POST['Apalancamientodemarca'];
$Etiquetaprivada = $_POST['Etiquetaprivada'];
$Extensiondemarca = $_POST['Extensiondemarca'];
$Componentesdemarca = $_POST['Componentesdemarca'];
$Transparencia = $_POST['Transparencia'];
$Alineaciondevalores = $_POST['Alineaciondevalores'];
$Certificacion = $_POST['Certificacion'];

$Automatizaciondeprocesos = $_POST['Automatizaciondeprocesos'];
$Simplificaciondeexperiencias = $_POST['Simplificaciondeexperiencias'];
$Curacion = $_POST['Curacion'];
$Habilitaciondeexperiencias = $_POST['Habilitaciondeexperiencias'];
$Maestria = $_POST['Maestria'];
$Autonomiayautoridad = $_POST['Autonomiayautoridad'];
$Comunidadypertenencia = $_POST['Comunidadypertenencia'];
$Personalizacion = $_POST['Personalizacion'];
$Personalidadyhumanizacion = $_POST['Personalidadyhumanizacion'];
$Estatusyreconocimiento = $_POST['Estatusyreconocimiento'];

$con = Conect();

$con = Conect();
$qry = "SELECT * FROM usuario ORDER by id_usuario DESC LIMIT 1 ";
$resultado = $con->prepare($qry);
$resultado->execute(array());

while($res = $resultado->fetch(PDO::FETCH_ASSOC)){
        $id_usuario="{$res['id_usuario']}";
}


// Modelo de Ganancia
$pdoQuery = "INSERT INTO modelo_de_ganancias 
( premium, definido_por_el_usuario,liderazgo_en_costos,fremmium, transacciones_a_escala,  precio_flexible,microtransacciones, 
  flotador, escasez_forzada, financiamiento, suscripcion, financiamiento_por_publicidad, 
  membresias, licenciamiento,capacidad_instalada, uso_medido, conexiones, precios_agrupados, subasta, desagregar_precios, riesgo_compartido, fecha , id_usuario)
    
     VALUES 
     (:premium,:definido_por_el_usuario, :liderazgo_en_costos, :fremmium,:transacciones_a_escala, :precio_flexible, 
     :microtransacciones, :flotador, :escasez_forzada, :financiamiento, :suscripcion, :financiamiento_por_publicidad, :membresias, :licenciamiento, 
     :capacidad_instalada, :uso_medido, :conexiones, :precios_agrupados, :subasta, :desagregar_precios, :riesgo_compartido, :fecha, :id_usuario)";

$pdoResult = $con->prepare($pdoQuery);

$pdoExec = $pdoResult->execute(array(
  ':premium' => $Premium, ':definido_por_el_usuario' => $Definidoporelusuario, ':liderazgo_en_costos' => $Liderazgoencostos, ':fremmium' => $Fremmium,
  ':transacciones_a_escala' => $Transaccionesaescala, ':precio_flexible' => $PrecioFlexible, ':microtransacciones' => $Microtransacciones, ':flotador' => $Flotador,
  ':escasez_forzada' => $Escasezforzada, ':financiamiento' => $Financiamiento, ':suscripcion' => $Suscripcion, ':financiamiento_por_publicidad' => $Financiamientoporpublicidad,
  ':membresias' => $Membresias, ':licenciamiento' => $Licenciamiento, ':capacidad_instalada' => $Capacidadinstalada, ':uso_medido' => $Usomedido,
  ':conexiones' => $Conexiones, ':precios_agrupados' => $Preciosagrupados, ':subasta' => $Subasta, ':desagregar_precios' => $Desagregarprecios, ':riesgo_compartido' => $RiesgoCompartido, ':fecha' => $fecha,
  ':id_usuario'=>$id_usuario
));


// Red
$pdoQuery2 = "INSERT INTO red ( fusiones_y_adquisiciones , consolidacion , Innovacion_abierta , mercados_secundarios,  integracion_de_la_cadena_de_suministros,
    participacion_complementaria,  alianzas, franquiciamiento, cooperacion, lanzamiento_de_plataformas_de_la_competencia, colaboracion, fecha, id_usuario)
  
   VALUES (:fusiones_y_adquisiciones , :consolidacion , :Innovacion_abierta , :mercados_secundarios, :integracion_de_la_cadena_de_suministros, 
   :participacion_complementaria, :alianzas, :franquiciamiento, :cooperacion, :lanzamiento_de_plataformas_de_la_competencia, :colaboracion, :fecha, :id_usuario)";

$pdoResult2 = $con->prepare($pdoQuery2);

$pdoExec = $pdoResult2->execute(array(
  ':fusiones_y_adquisiciones' => $Fusionesyadquisiciones, ':consolidacion' => $Consolidacion, ':Innovacion_abierta' => $Innovacionabierta,
  ':mercados_secundarios' => $Mercadossecundarios, ':integracion_de_la_cadena_de_suministros' => $Integraciondelacadenadesuministros, ':participacion_complementaria' => $Participacioncomplementaria,
  ':alianzas' => $Alianzas, ':franquiciamiento' => $Franquiciamiento, ':cooperacion' => $Cooperacion, ':lanzamiento_de_plataformas_de_la_competencia' => $Lanzamientodeplataformasdelacompetencia,
  ':colaboracion' => $Colaboracion, ':fecha' => $fecha, ':id_usuario'=>$id_usuario
));

//estrucutra
$pdoQuery3 = "INSERT INTO estructura ( dise_organizacional , sistema_de_incentivos , integracion_de_ti , centro_de_competencias,  tercerizacion,
    universidad_corporativa,  gerencia_descentralizada, gestion_del_conocimiento, aprovechamiento_de_activos_de_otras_comp, estandarizacion_de_activos, fecha, id_usuario)
  
   VALUES (:dise_organizacional , :sistema_de_incentivos , :integracion_de_ti , :centro_de_competencias, :tercerizacion, 
   :universidad_corporativa, :gerencia_descentralizada, :gestion_del_conocimiento, :aprovechamiento_de_activos_de_otras_comp, :estandarizacion_de_activos, :fecha, :id_usuario)";

$pdoResult3 = $con->prepare($pdoQuery3);

$pdoExec = $pdoResult3->execute(array(
  ':dise_organizacional' => $Disenoorganizacional, ':sistema_de_incentivos' => $Sistemadeincentivos, ':integracion_de_ti' => $IntegraciondeTI,
  ':centro_de_competencias' => $Centrodecompetencias, ':tercerizacion' => $Tercerizacion, ':universidad_corporativa' => $Universidadcorporativa,
  ':gerencia_descentralizada' => $Gerenciadescentralizada, ':gestion_del_conocimiento' => $Gestiondelconocimiento, ':aprovechamiento_de_activos_de_otras_comp' => $Aprovechamientodeactivos, ':estandarizacion_de_activos' => $Estandarizaciondeactivos,
  ':fecha' => $fecha, ':id_usuario'=>$id_usuario
));


//  procesos
$pdoQuery4 = "INSERT INTO procesos ( estandarizacion_de_procesos , localizacion , eficiencia_de_procesos , manufactura_flexible,  automatizacion_de_procesos,
    crowdsourcing,  produccion_bajo_demanda, produccion_limpia, sistemas_logisticos, dis_estrategico, propiedad_intelectual, generacion_por_el_usuario, analisis_predictivo, fecha, id_usuario)
  
   VALUES (:estandarizacion_de_procesos , :localizacion , :eficiencia_de_procesos , :manufactura_flexible, :automatizacion_de_procesos, 
   :crowdsourcing, :produccion_bajo_demanda, :produccion_limpia, :sistemas_logisticos, :dis_estrategico, :propiedad_intelectual, :generacion_por_el_usuario, :analisis_predictivo,:fecha, :id_usuario)";

$pdoResult4 = $con->prepare($pdoQuery4);

$pdoExec = $pdoResult4->execute(array(
  ':estandarizacion_de_procesos' => $Estandarizaciondeprocesos, ':localizacion' => $Localizacion, ':eficiencia_de_procesos' => $Eficienciadeprocesos,
  ':manufactura_flexible' => $Manufacturaflexible, ':automatizacion_de_procesos' => $Automatizaciondeprocesos, ':crowdsourcing' => $Crowdsourcing,
  ':produccion_bajo_demanda' => $Produccionbajodemanda, ':produccion_limpia' => $Produccionlimpia, ':sistemas_logisticos' => $Sistemaslogisticos, ':dis_estrategico' => $Disenoestrategico,
  ':propiedad_intelectual' => $Propiedadintelectual, ':generacion_por_el_usuario' => $Generacionporelusuario,  ':analisis_predictivo' => $Analisispredictivo, ':fecha' => $fecha, ':id_usuario'=>$id_usuario
));


//  desemp_del _producto
$pdoQuery5 = "INSERT INTO desemp_del_producto ( productos_superiores, facilidad_de_uso, funcionalidad_atractiva, seguridad,  agregacion_futura,
    adicion_de_funcionalidades,  simplificacion_del_desempe, sensibilidad_ambiental, conservacion, customizacion, enfoque, estilo, fecha , id_usuario)
  
   VALUES (:productos_superiores, :facilidad_de_uso, :funcionalidad_atractiva, :seguridad, :agregacion_futura, 
   :adicion_de_funcionalidades, :simplificacion_del_desempe, :sensibilidad_ambiental, :conservacion, :customizacion, :enfoque, :estilo, :fecha, :id_usuario)";

$pdoResult5 = $con->prepare($pdoQuery5);

$pdoExec = $pdoResult5->execute(array(
  ':productos_superiores' => $Productossuperiores, ':facilidad_de_uso' => $Facilidaddeuso, ':funcionalidad_atractiva' => $Funcionalidadatractiva,
  ':seguridad' => $Seguridad, ':agregacion_futura' => $Agregacionfutura, ':adicion_de_funcionalidades' => $Adiciondefuncionalidades,
  ':simplificacion_del_desempe' => $Simplificaciondeldesempeno, ':sensibilidad_ambiental' => $Sensibilidadambiental, ':conservacion' => $Conservacion, ':customizacion' => $Customizacion,
  ':enfoque' => $Enfoque, ':estilo' => $Estilo, ':fecha' => $fecha, ':id_usuario'=>$id_usuario
));

//  sistema_de_productos
$pdoQuery6 = "INSERT INTO sistema_de_productos ( complementos, extensiones_plugins, construccion_de_productos, sistemas_modulares,  plataformas_de_productos,
  ofertas_integradas, fecha, id_usuario)

 VALUES (:complementos, :extensiones_plugins, :construccion_de_productos, :sistemas_modulares, :plataformas_de_productos, 
 :ofertas_integradas,:fecha, :id_usuario)";

$pdoResult6 = $con->prepare($pdoQuery6);

$pdoExec = $pdoResult6->execute(array(
  ':complementos' => $Complementos, ':extensiones_plugins' => $Extensionesplugins, ':construccion_de_productos' => $Construcciondeproductos,
  ':sistemas_modulares' => $Sistemasmodulares, ':plataformas_de_productos' => $Plataformasdeproductos, ':ofertas_integradas' => $Ofertasintegradas, ':fecha' => $fecha, ':id_usuario'=>$id_usuario
));


//  servicios
$pdoQuery7 = "INSERT INTO servicios ( probar_antes_de_comprar, garantias, programas_de_fidelizacion, adicion_de_valor,  consejeria,
gestion_total_de_la_experiencia,  servicios_suplementarios, servicio_superior, servicio_personalizado, comunidad_de_usuarios_soporte_de_sistemas, arrendamiento_prestamo, autoservicio, fecha, id_usuario)

VALUES (:probar_antes_de_comprar, :garantias, :programas_de_fidelizacion, :adicion_de_valor, :consejeria, 
:gestion_total_de_la_experiencia, :servicios_suplementarios, :servicio_superior, :servicio_personalizado, :comunidad_de_usuarios_soporte_de_sistemas, :arrendamiento_prestamo, :autoservicio, :fecha, :id_usuario)";

$pdoResult7 = $con->prepare($pdoQuery7);

$pdoExec = $pdoResult7->execute(array(
  ':probar_antes_de_comprar' => $Probarantesdecomprar, ':garantias' => $Garantias, ':programas_de_fidelizacion' => $Programasdefidelizacion,
  ':adicion_de_valor' => $Adiciondevalor, ':consejeria' => $Consejeria, ':gestion_total_de_la_experiencia' => $Gestiontotaldelaexperiencia,
  ':servicios_suplementarios' => $Serviciossuplementarios, ':servicio_superior' => $ServicioSuperior, ':servicio_personalizado' => $Serviciopersonalizado, ':comunidad_de_usuarios_soporte_de_sistemas' => $Comunidaddeusuarios,
  ':arrendamiento_prestamo' => $Arrendamientooprestamo, ':autoservicio' => $Autoservicio, ':fecha' => $fecha, ':id_usuario'=>$id_usuario
));


//  canales
$pdoQuery8 = "INSERT INTO canales ( diversificacion, tienda_principal, ir_directo, canales_no_tradicionales,  presencia_popup,
distribucion_indirecta,  marketing_multinivel, venta_cruzada, bajo_demanda, contexto_especifico, centro_de_experiencias, fecha, id_usuario)

VALUES (:diversificacion, :tienda_principal, :ir_directo, :canales_no_tradicionales, :presencia_popup, 
:distribucion_indirecta, :marketing_multinivel, :venta_cruzada, :bajo_demanda, :contexto_especifico, :centro_de_experiencias, :fecha, :id_usuario )";

$pdoResult8 = $con->prepare($pdoQuery8);

$pdoExec = $pdoResult8->execute(array(
  ':diversificacion' => $Diversificacion, ':tienda_principal' => $Tiendaprincipal, ':ir_directo' => $IrDirecto,
  ':canales_no_tradicionales' => $Canalesnotradicionales, ':presencia_popup' => $Presenciapopup, ':distribucion_indirecta' => $Distribucionindirecta,
  ':marketing_multinivel' => $Marketingmultinivel, ':venta_cruzada' => $Ventacruzada, ':bajo_demanda' => $Bajodemanda, ':contexto_especifico' => $Contextoespecifico,
  ':centro_de_experiencias' => $Centrodeexperiencias, ':fecha' => $fecha, ':id_usuario'=>$id_usuario
));


//  marca
$pdoQuery9 = "INSERT INTO marca ( marca_compartida, apalancamiento_de_marca, etiqueta_privada, extension_de_marca,  componentes_de_marca,
  transparencia, alineacion_de_valores, certificacion, fecha, id_usuario)

 VALUES (:marca_compartida, :apalancamiento_de_marca, :etiqueta_privada, :extension_de_marca, :componentes_de_marca, 
 :transparencia, :alineacion_de_valores, :certificacion ,:fecha, :id_usuario)";

$pdoResult9 = $con->prepare($pdoQuery9);

$pdoExec = $pdoResult9->execute(array(
  ':marca_compartida' => $Marcacompartida, ':apalancamiento_de_marca' => $Apalancamientodemarca, ':etiqueta_privada' => $Etiquetaprivada,
  ':extension_de_marca' => $Extensiondemarca, ':componentes_de_marca' => $Componentesdemarca, ':transparencia' => $Transparencia, ':alineacion_de_valores'=>$Alineaciondevalores ,
  ':certificacion'=>$Certificacion,':fecha' => $fecha, ':id_usuario'=>$id_usuario
));

//  compromiso_del_cliente
$pdoQuery10 = "INSERT INTO compromiso_del_cliente ( Automatizacion_de_procesos, simplificacion_de_experiencias, curacion, habilitacion_de_experiencias,  maestria,
autonomia_y_autoridad,  comunidad_y_pertenencia, personalizacion, personalidad_y_humanizacion, estatus_y_reconocimiento, fecha, id_usuario)

VALUES (:Automatizacion_de_procesos, :simplificacion_de_experiencias, :curacion, :habilitacion_de_experiencias, :maestria, 
:autonomia_y_autoridad, :comunidad_y_pertenencia, :personalizacion, :personalidad_y_humanizacion, :estatus_y_reconocimiento,  :fecha, :id_usuario)";

$pdoResult10 = $con->prepare($pdoQuery10);

$pdoExec = $pdoResult10->execute(array(
  ':Automatizacion_de_procesos' => $Automatizaciondeprocesos, ':simplificacion_de_experiencias' => $Simplificaciondeexperiencias, ':curacion' => $Curacion,
  ':habilitacion_de_experiencias' => $Habilitaciondeexperiencias, ':maestria' => $Maestria, ':autonomia_y_autoridad' => $Autonomiayautoridad,
  ':comunidad_y_pertenencia' => $Comunidadypertenencia, ':personalizacion' => $Personalizacion, ':personalidad_y_humanizacion' => $Personalidadyhumanizacion, ':estatus_y_reconocimiento' => $Estatusyreconocimiento,
  ':fecha' => $fecha, ':id_usuario'=>$id_usuario
));


echo  "<script language='javascript'>
    window.location.href='../resultfree.php'
   </script>";



// }

// echo 'Premium '. $Premium.'<br>';
// echo 'Liderazgo en costos '. $Liderazgoencostos.'<br>';
// echo 'Transacciones a escala '. $Transaccionesaescala.'<br>';
// echo 'Microtransacciones '. $Microtransacciones.'<br>';
// echo 'Escasez forzada '. $Escasezforzada.'<br>';
// echo 'Suscripción '. $Suscripcion.'<br>';
// echo 'Membresías '. $Membresias.'<br>';
// echo 'Capacidad instalada '. $Capacidadinstalada.'<br>';
// echo 'Conexiones '. $Conexiones.'<br>';
// echo 'Subasta '. $Subasta.'<br>'.'<br>';

// echo 'Definido por el usuario '. $Definidoporelusuario.'<br>';
// echo 'Fremmium '. $Fremmium.'<br>';
// echo 'Precio Flexible '. $PrecioFlexible.'<br>';
// echo 'Flotador '. $Flotador.'<br>';
// echo 'Financiamiento '. $Financiamiento.'<br>';
// echo 'Financiamiento por publicidad '. $Financiamientoporpublicidad.'<br>';
// echo 'Licenciamiento '. $Licenciamiento.'<br>';
// echo 'Uso medido '. $Usomedido.'<br>';
// echo 'Precios agrupados '. $Preciosagrupados.'<br>';
// echo 'Desagregar precios '. $Desagregarprecios.'<br>';
// echo 'Riesgo Compartido '. $RiesgoCompartido.'<br>'.'<br>';

// echo 'Fusiones y adquisiciones '. $Fusionesyadquisiciones.'<br>';
// echo 'Consolidación '. $Fusionesyadquisiciones.'<br>';
// echo 'Innovación abierta '. $Innovacionabierta.'<br>';
// echo 'Mercados secundarios '. $Mercadossecundarios.'<br>';
// echo 'Integración de la cadena de suministros '. $Integraciondelacadenadesuministros.'<br>';
// echo 'Participación complementaria '. $Participacioncomplementaria.'<br>';
// echo 'Alianzas '. $Alianzas.'<br>';
// echo 'Franquiciamiento '. $Franquiciamiento.'<br>';
// echo 'Cooperacion '. $Cooperacion.'<br>';
// echo 'Lanzamiento de plataformas de la competencia '. $Lanzamientodeplataformasdelacompetencia.'<br>';
// echo 'Colaboración '. $Colaboracion.'<br>'.'<br>';

// echo 'Diseño organizacional '. $Disenoorganizacional.'<br>';
// echo 'Sistema de incentivos '. $Sistemadeincentivos.'<br>';
// echo 'Integración de TI '. $IntegraciondeTI.'<br>';
// echo 'Centro de competencias '. $Centrodecompetencias.'<br>';
// echo 'Tercerización '. $Tercerizacion.'<br>';
// echo 'Universidad corporativa '. $Universidadcorporativa.'<br>';
// echo 'Gerencia descentralizada '. $Gerenciadescentralizada.'<br>';
// echo 'Gestión del conocimiento '. $Gestiondelconocimiento.'<br>';
// echo 'Aprovechamiento de activos '. $Aprovechamientodeactivos.'<br>';
// echo 'Estandarización de activos '. $Estandarizaciondeactivos.'<br>'.'<br>';

// echo 'Estandarización de procesos '. $Estandarizaciondeprocesos.'<br>';
// echo 'Localización '. $Localizacion.'<br>';
// echo 'Eficienciadeprocesos '. $Eficienciadeprocesos.'<br>';
// echo 'Manufactura flexible '. $Manufacturaflexible.'<br>';
// echo 'Automatización de procesos '. $Automatizaciondeprocesos.'<br>';
// echo 'Crowdsourcing '. $Crowdsourcing.'<br>';
// echo 'Producción bajo demanda '. $Produccionbajodemanda.'<br>';
// echo 'Produccion limpia '. $Produccionlimpia.'<br>';
// echo 'Sistemas logísticos '. $Sistemaslogisticos.'<br>';
// echo 'Diseño estratégico '. $Disenoestrategico.'<br>';
// echo 'Propiedad intelectual '. $Propiedadintelectual.'<br>';
// echo 'Generación por el usuario '. $Generacionporelusuario.'<br>';
// echo 'Análisis predictivo '. $Analisispredictivo.'<br>'.'<br>';

// echo 'Productos superiores '. $Productossuperiores.'<br>';
// echo 'Facilidad de uso '. $Facilidaddeuso.'<br>';
// echo 'Funcionalidad atractiva '. $Funcionalidadatractiva.'<br>';
// echo 'Seguridad '. $Seguridad.'<br>';
// echo 'Agregación futura '. $Agregacionfutura.'<br>';
// echo 'Adición de funcionalidades '. $Adiciondefuncionalidades.'<br>';
// echo 'Simplificación del desempeño '. $Simplificaciondeldesempeno.'<br>';
// echo 'Sensibilidad ambiental '. $Sensibilidadambiental.'<br>';
// echo 'Conservación '. $Conservacion.'<br>';
// echo 'Customización '. $Customizacion.'<br>';
// echo 'Enfoque '. $Enfoque.'<br>';
// echo 'Estilo '. $Estilo.'<br>'.'<br>';

// echo 'Complementos '. $Complementos.'<br>';
// echo 'Extensiones plug-ins '. $Extensionesplugins.'<br>';
// echo 'Construcción de productos '. $Construcciondeproductos.'<br>';
// echo 'Sistemas modulares '. $Sistemasmodulares.'<br>';
// echo 'Plataformas de productos '. $Plataformasdeproductos.'<br>';
// echo 'Ofertas integradas '. $Ofertasintegradas.'<br>'.'<br>';

// echo 'Probar antes de comprar '. $Probarantesdecomprar.'<br>';
// echo 'Garantías '. $Garantias.'<br>';
// echo 'Programas de fidelización '. $Programasdefidelizacion.'<br>';
// echo 'Adicion de valor '. $Adiciondevalor.'<br>';
// echo 'Consejería '. $Consejeria.'<br>';
// echo 'Gestión total de la experiencia '. $Gestiontotaldelaexperiencia.'<br>';
// echo 'Servicios suplementarios '. $Serviciossuplementarios.'<br>';
// echo 'Servicio Superior '. $ServicioSuperior.'<br>';
// echo 'Servicio personalizado '. $Serviciopersonalizado.'<br>';
// echo 'Comunidad de usuarios '. $Comunidaddeusuarios.'<br>';
// echo 'Arrendamiento o prestamo '. $Arrendamientooprestamo.'<br>'.'<br>';

// echo 'Diversificación '. $Diversificacion.'<br>';
// echo 'Ir Directo '. $IrDirecto.'<br>';
// echo 'Tienda principal '. $Tiendaprincipal.'<br>';
// echo 'Canales no tradicionales '. $Canalesnotradicionales.'<br>';
// echo 'Presencia pop-up '. $Presenciapopup.'<br>';
// echo 'Distribución indirecta '. $Distribucionindirecta.'<br>';
// echo 'Marketing multinivel '. $Marketingmultinivel.'<br>';
// echo 'Venta cruzada '. $Ventacruzada.'<br>';
// echo 'Bajo demanda '. $Bajodemanda.'<br>';
// echo 'Contexto específico '. $Contextoespecifico.'<br>';
// echo 'Centro de experiencias '. $Centrodeexperiencias.'<br>'.'<br>';

// echo 'Marca compartida '. $Marcacompartida.'<br>';
// echo 'Apalancamiento de marca '. $Apalancamientodemarca.'<br>';
// echo 'Etiqueta privada '. $Etiquetaprivada.'<br>';
// echo 'Extension de marca '. $Extensiondemarca.'<br>';
// echo 'Componentes de marca '. $Componentesdemarca.'<br>';
// echo 'Transparencia '. $Transparencia.'<br>';
// echo 'Alineaciondevalores '. $Alineaciondevalores.'<br>';
// echo 'Certificación '. $Certificacion.'<br>'.'<br>';

// echo 'Automatización de procesos '. $Automatizaciondeprocesos.'<br>';
// echo 'Simplificación de experiencias '. $Simplificaciondeexperiencias.'<br>';
// echo 'Curación '. $Curacion.'<br>';
// echo 'Habilitación de experiencias '. $Habilitaciondeexperiencias.'<br>';
// echo 'Maestría '. $Maestria.'<br>';
// echo 'Autonomía & autoridad '. $Autonomiayautoridad.'<br>';
// echo 'Personalidad & humanización '. $Personalidadyhumanizacion.'<br>';
// echo 'Personalización '. $Personalizacion.'<br>';
// echo 'Comunidad & pertenencia' .$Comunidadypertenencia.'<br>';
// echo 'Estatús & reconocimiento '. $Estatusyreconocimiento.'<br>';
