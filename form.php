<?php 

if ($_POST){
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
}

echo 'Premium '. $Premium.'<br>';
echo 'Liderazgo en costos '. $Liderazgoencostos.'<br>';
echo 'Transacciones a escala '. $Transaccionesaescala.'<br>';
echo 'Microtransacciones '. $Microtransacciones.'<br>';
echo 'Escasez forzada '. $Escasezforzada.'<br>';
echo 'Suscripción '. $Suscripcion.'<br>';
echo 'Membresías '. $Membresias.'<br>';
echo 'Capacidad instalada '. $Capacidadinstalada.'<br>';
echo 'Conexiones '. $Conexiones.'<br>';
echo 'Subasta '. $Subasta.'<br>'.'<br>';

echo 'Definido por el usuario '. $Definidoporelusuario.'<br>';
echo 'Fremmium '. $Fremmium.'<br>';
echo 'Precio Flexible '. $PrecioFlexible.'<br>';
echo 'Flotador '. $Flotador.'<br>';
echo 'Financiamiento '. $Financiamiento.'<br>';
echo 'Financiamiento por publicidad '. $Financiamientoporpublicidad.'<br>';
echo 'Licenciamiento '. $Licenciamiento.'<br>';
echo 'Uso medido '. $Usomedido.'<br>';
echo 'Precios agrupados '. $Preciosagrupados.'<br>';
echo 'Desagregar precios '. $Desagregarprecios.'<br>';
echo 'Riesgo Compartido '. $RiesgoCompartido.'<br>'.'<br>';

echo 'Fusiones y adquisiciones '. $Fusionesyadquisiciones.'<br>';
echo 'Consolidación '. $Fusionesyadquisiciones.'<br>';
echo 'Innovación abierta '. $Innovacionabierta.'<br>';
echo 'Mercados secundarios '. $Mercadossecundarios.'<br>';
echo 'Integración de la cadena de suministros '. $Integraciondelacadenadesuministros.'<br>';
echo 'Participación complementaria '. $Participacioncomplementaria.'<br>';
echo 'Alianzas '. $Alianzas.'<br>';
echo 'Franquiciamiento '. $Franquiciamiento.'<br>';
echo 'Cooperacion '. $Cooperacion.'<br>';
echo 'Lanzamiento de plataformas de la competencia '. $Lanzamientodeplataformasdelacompetencia.'<br>';
echo 'Colaboración '. $Colaboracion.'<br>'.'<br>';

echo 'Diseño organizacional '. $Disenoorganizacional.'<br>';
echo 'Sistema de incentivos '. $Sistemadeincentivos.'<br>';
echo 'Integración de TI '. $IntegraciondeTI.'<br>';
echo 'Centro de competencias '. $Centrodecompetencias.'<br>';
echo 'Tercerización '. $Tercerizacion.'<br>';
echo 'Universidad corporativa '. $Universidadcorporativa.'<br>';
echo 'Gerencia descentralizada '. $Gerenciadescentralizada.'<br>';
echo 'Gestión del conocimiento '. $Gestiondelconocimiento.'<br>';
echo 'Aprovechamiento de activos '. $Aprovechamientodeactivos.'<br>';
echo 'Estandarización de activos '. $Estandarizaciondeactivos.'<br>'.'<br>';

echo 'Estandarización de procesos '. $Estandarizaciondeprocesos.'<br>';
echo 'Localización '. $Localizacion.'<br>';
echo 'Eficienciadeprocesos '. $Eficienciadeprocesos.'<br>';
echo 'Manufactura flexible '. $Manufacturaflexible.'<br>';
echo 'Automatización de procesos '. $Automatizaciondeprocesos.'<br>';
echo 'Crowdsourcing '. $Crowdsourcing.'<br>';
echo 'Producción bajo demanda '. $Produccionbajodemanda.'<br>';
echo 'Produccion limpia '. $Produccionlimpia.'<br>';
echo 'Sistemas logísticos '. $Sistemaslogisticos.'<br>';
echo 'Diseño estratégico '. $Disenoestrategico.'<br>';
echo 'Propiedad intelectual '. $Propiedadintelectual.'<br>';
echo 'Generación por el usuario '. $Generacionporelusuario.'<br>';
echo 'Análisis predictivo '. $Analisispredictivo.'<br>'.'<br>';

echo 'Productos superiores '. $Productossuperiores.'<br>';
echo 'Facilidad de uso '. $Facilidaddeuso.'<br>';
echo 'Funcionalidad atractiva '. $Funcionalidadatractiva.'<br>';
echo 'Seguridad '. $Seguridad.'<br>';
echo 'Agregación futura '. $Agregacionfutura.'<br>';
echo 'Adición de funcionalidades '. $Adiciondefuncionalidades.'<br>';
echo 'Simplificación del desempeño '. $Simplificaciondeldesempeno.'<br>';
echo 'Sensibilidad ambiental '. $Sensibilidadambiental.'<br>';
echo 'Conservación '. $Conservacion.'<br>';
echo 'Customización '. $Customizacion.'<br>';
echo 'Enfoque '. $Enfoque.'<br>';
echo 'Estilo '. $Estilo.'<br>'.'<br>';

echo 'Complementos '. $Complementos.'<br>';
echo 'Extensiones plug-ins '. $Extensionesplugins.'<br>';
echo 'Construcción de productos '. $Construcciondeproductos.'<br>';
echo 'Sistemas modulares '. $Sistemasmodulares.'<br>';
echo 'Plataformas de productos '. $Plataformasdeproductos.'<br>';
echo 'Ofertas integradas '. $Ofertasintegradas.'<br>'.'<br>';

echo 'Probar antes de comprar '. $Probarantesdecomprar.'<br>';
echo 'Garantías '. $Garantias.'<br>';
echo 'Programas de fidelización '. $Programasdefidelizacion.'<br>';
echo 'Adicion de valor '. $Adiciondevalor.'<br>';
echo 'Consejería '. $Consejeria.'<br>';
echo 'Gestión total de la experiencia '. $Gestiontotaldelaexperiencia.'<br>';
echo 'Servicios suplementarios '. $Serviciossuplementarios.'<br>';
echo 'Servicio Superior '. $ServicioSuperior.'<br>';
echo 'Servicio personalizado '. $Serviciopersonalizado.'<br>';
echo 'Comunidad de usuarios '. $Comunidaddeusuarios.'<br>';
echo 'Arrendamiento o prestamo '. $Arrendamientooprestamo.'<br>'.'<br>';

echo 'Diversificación '. $Diversificacion.'<br>';
echo 'Ir Directo '. $IrDirecto.'<br>';
echo 'Tienda principal '. $Tiendaprincipal.'<br>';
echo 'Canales no tradicionales '. $Canalesnotradicionales.'<br>';
echo 'Presencia pop-up '. $Presenciapopup.'<br>';
echo 'Distribución indirecta '. $Distribucionindirecta.'<br>';
echo 'Marketing multinivel '. $Marketingmultinivel.'<br>';
echo 'Venta cruzada '. $Ventacruzada.'<br>';
echo 'Bajo demanda '. $Bajodemanda.'<br>';
echo 'Contexto específico '. $Contextoespecifico.'<br>';
echo 'Centro de experiencias '. $Centrodeexperiencias.'<br>'.'<br>';

echo 'Marca compartida '. $Marcacompartida.'<br>';
echo 'Apalancamiento de marca '. $Apalancamientodemarca.'<br>';
echo 'Etiqueta privada '. $Etiquetaprivada.'<br>';
echo 'Extension de marca '. $Extensiondemarca.'<br>';
echo 'Componentes de marca '. $Componentesdemarca.'<br>';
echo 'Transparencia '. $Transparencia.'<br>';
echo 'Alineaciondevalores '. $Alineaciondevalores.'<br>';
echo 'Certificación '. $Certificacion.'<br>'.'<br>';

echo 'Automatización de procesos '. $Automatizaciondeprocesos.'<br>';
echo 'Simplificación de experiencias '. $Simplificaciondeexperiencias.'<br>';
echo 'Curación '. $Curacion.'<br>';
echo 'Habilitación de experiencias '. $Habilitaciondeexperiencias.'<br>';
echo 'Maestría '. $Maestria.'<br>';
echo 'Autonomía & autoridad '. $Autonomiayautoridad.'<br>';
echo 'Personalidad & humanización '. $Personalidadyhumanizacion.'<br>';
echo 'Personalización '. $Personalizacion.'<br>';
echo 'Comunidad & pertenencia' .$Comunidadypertenencia.'<br>';
echo 'Estatús & reconocimiento '. $Estatusyreconocimiento.'<br>';








?>