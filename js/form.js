$(document).ready(function(){  
  var form_count = 1, previous_form, next_form, total_forms;
  total_forms = $("fieldset").length;  
  $(".next-form").click(function(){
    previous_form = $(this).parent();
    next_form = $(this).parent().next();
    next_form.show();
    previous_form.hide();
    setProgressBarValue(++form_count);
  });  
  $(".previous-form").click(function(){
    previous_form = $(this).parent();
    next_form = $(this).parent().prev();
    next_form.show();
    previous_form.hide();
    setProgressBarValue(--form_count);
  });
  setProgressBarValue(form_count);  
  function setProgressBarValue(value){
    var percent = parseFloat(100 / total_forms) * value;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  } 
  // Handle form submit and validation
  $( "#register_form" ).submit(function(event) {    
  var error_message = '';
  // Modelo de Ganancia primer Bloque
	if($("#Premium option:selected").val() == 0) {
		error_message+="Configuración / Modelo de Ganancias / Premium se encuentra Vacia";
  }
  if($("#Liderazgoencostos option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Liderazgo en costos se encuentra Vacia";
  }
  if($("#Transaccionesaescala option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Transacciones a escala se encuentra Vacia";
	}
  if($("#Microtransacciones option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Microtransacciones se encuentra Vacia";
	}
  if($("#Escasezforzada option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Escasez forzada se encuentra Vacia";
	}
  if($("#Suscripcion option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Suscripción se encuentra Vacia";
	}
  if($("#Membresias option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Membresías se encuentra Vacia";
	}
  if($("#Capacidadinstalada option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Capacidad instalada se encuentra Vacia";
	}
  if($("#Conexiones option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Conexiones se encuentra Vacia";
	}
  if($("#Subasta option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Subasta se encuentra Vacia";
  }
  if($("#Definidoporelusuario option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Definido por el usuario se encuentra Vacia";
  }
  if($("#Fremmium option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Fremmium se encuentra Vacia";
  }
  if($("#PrecioFlexible option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Precio Flexible se encuentra Vacia";
  }
  if($("#Flotador option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Flotador se encuentra Vacia";
  }
  if($("#Financiamiento option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Financiamiento se encuentra Vacia";
  }
  if($("#Financiamientoporpublicidad option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Financiamiento por publicidad se encuentra Vacia";
  }
  if($("#Licenciamiento option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Licenciamiento se encuentra Vacia";
  }
  if($("#Usomedido option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Uso medido se encuentra Vacia";
  }
  if($("#Preciosagrupados option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Precios agrupados se encuentra Vacia";
  }
  if($("#Desagregarprecios option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Desagregar precios se encuentra Vacia";
  }
  if($("#RiesgoCompartido option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Riesgo Compartido se encuentra Vacia";
  }
  if($("#Definidoporelusuario option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Definido por el usuario se encuentra Vacia";
	}
  if($("#Fusionesyadquisiciones option:selected").val() == 0) {
		error_message+="<br>Configuración / Red / Fusiones y adquisiciones se encuentra Vacia";
  }
  if($("#Consolidacion option:selected").val() == 0) {
		error_message+="<br>Configuración / Red / Consolidación se encuentra Vacia";
  }
  if($("#Innovacionabierta option:selected").val() == 0) {
		error_message+="<br>Configuración / Red / Innovación abierta se encuentra Vacia";
  }
  if($("#Mercadossecundarios option:selected").val() == 0) {
		error_message+="<br>Configuración / Red / Mercados secundarios se encuentra Vacia";
  }
  if($("#Integraciondelacadenadesuministros option:selected").val() == 0) {
		error_message+="<br>Configuración / Red / Integración de la cadena de suministros se encuentra Vacia";
  }
  if($("#Participacioncomplementaria option:selected").val() == 0) {
		error_message+="<br>Configuración / Red / Participación complementaria se encuentra Vacia";
  }
  if($("#Alianzas option:selected").val() == 0) {
		error_message+="<br>Configuración / Red / Alianzas se encuentra Vacia";
  }
  if($("#Franquiciamiento option:selected").val() == 0) {
		error_message+="<br>Configuración / Red / Franquiciamiento se encuentra Vacia";
  }
  if($("#Cooperacion option:selected").val() == 0) {
		error_message+="<br>Configuración / Red / Cooperacion se encuentra Vacia";
  }
  if($("#Lanzamientodeplataformasdelacompetencia option:selected").val() == 0) {
		error_message+="<br>Configuración / Red / Lanzamiento de plataformas de la competencia se encuentra Vacia";
  }
  if($("#Colaboracion option:selected").val() == 0) {
		error_message+="<br>Configuración / Red / Colaboración se encuentra Vacia";
  }
  if($("#Disenoorganizacional option:selected").val() == 0) {
		error_message+="<br>Configuración / Estructura / Diseño organizacional se encuentra Vacia";
  }
  if($("#Sistemadeincentivos option:selected").val() == 0) {
		error_message+="<br>Configuración / Estructura / Sistema de incentivos se encuentra Vacia";
  }
  if($("#IntegraciondeTI option:selected").val() == 0) {
		error_message+="<br>Configuración / Estructura / Integración de TI se encuentra Vacia";
  }
  if($("#Centrodecompetencias option:selected").val() == 0) {
		error_message+="<br>Configuración / Estructura / Centro de competencias se encuentra Vacia";
  }
  if($("#Tercerizacion option:selected").val() == 0) {
		error_message+="<br>Configuración / Estructura / Tercerización se encuentra Vacia";
  }
  if($("#Universidadcorporativa option:selected").val() == 0) {
		error_message+="<br>Configuración / Estructura / Universidad corporativa se encuentra Vacia";
  }
  if($("#Gerenciadescentralizada option:selected").val() == 0) {
		error_message+="<br>Configuración / Estructura / Gerencia descentralizada se encuentra Vacia";
  }
  if($("#Gestiondelconocimiento option:selected").val() == 0) {
		error_message+="<br>Configuración / Estructura / Gestión del conocimiento se encuentra Vacia";
  }
  if($("#Aprovechamientodeactivos option:selected").val() == 0) {
		error_message+="<br>Configuración / Estructura / Aprovechamiento de activos de otras compañías se encuentra Vacia";
  }
  if($("#Estandarizaciondeactivos option:selected").val() == 0) {
		error_message+="<br>Configuración / Estructura / Estandarización de activos se encuentra Vacia";
  }
  if($("#Estandarizaciondeprocesos option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Estandarización de procesos se encuentra Vacia";
  }
  if($("#Localizacion option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Localización se encuentra Vacia";
  }
  if($("#Eficienciadeprocesos option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Eficiencia de procesos se encuentra Vacia";
  }
  if($("#Manufacturaflexible option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Manufactura flexible se encuentra Vacia";
  }
  if($("#Automatizaciondeprocesos option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Automatización de procesos se encuentra Vacia";
  }
  if($("#Crowdsourcing option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Crowdsourcing se encuentra Vacia";
  }
  if($("#Produccionbajodemanda option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Producción bajo demanda se encuentra Vacia";
  }
  if($("#Produccionlimpia option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Producción limpia se encuentra Vacia";
  }
  if($("#Sistemaslogisticos option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Sistemas logísticos se encuentra Vacia";
  }
  if($("#Disenoestrategico option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Diseño estratégico se encuentra Vacia";
  }
  if($("#Propiedadintelectual option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Propiedad intelectual se encuentra Vacia";
  }
  if($("#Generacionporelusuario option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Generación por el usuario se encuentra Vacia";
  }
  if($("#Analisispredictivo option:selected").val() == 0) {
		error_message+="<br>Configuración / Procesos / Análisis predictivo se encuentra Vacia";
  }
  if($("#Productossuperiores option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Productos superiores se encuentra Vacia";
  }
  if($("#Facilidaddeuso option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Facilidad de uso se encuentra Vacia";
  }
  if($("#Funcionalidadatractiva option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Funcionalidad atractiva se encuentra Vacia";
  }
  if($("#Seguridad option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Seguridad se encuentra Vacia";
  }
  if($("#Agregacionfutura option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Agregación futura se encuentra Vacia";
  }
  if($("#Adiciondefuncionalidades option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Adición de funcionalidades se encuentra Vacia";
  }
  if($("#Simplificaciondeldesempeno option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Simplificación del desempeño se encuentra Vacia";
  }
  if($("#Sensibilidadambiental option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Sensibilidad ambiental se encuentra Vacia";
  }
  if($("#Conservacion option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Conservación se encuentra Vacia";
  }
  if($("#Customizacion option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Customización se encuentra Vacia";
  }
  if($("#Enfoque option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Enfoque se encuentra Vacia";
  }
  if($("#Estilo option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Estilo se encuentra Vacia";
  }
  if($("#Complementos option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Complementos se encuentra Vacia";
  }
  if($("#Extensionesplugins option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Extensiones plug-ins se encuentra Vacia";
  }
  if($("#Construcciondeproductos option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Construcción de productos se encuentra Vacia";
  }
  if($("#Sistemasmodulares option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Sistemas modulares se encuentra Vacia";
  }
  if($("#Plataformasdeproductos option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Plataformas de productos / servicios se encuentra Vacia";
  }
  if($("#Ofertasintegradas option:selected").val() == 0) {
		error_message+="<br>Oferta / Desempeño del Producto / Ofertas integradas se encuentra Vacia";
  }
  if($("#Probarantesdecomprar option:selected").val() == 0) {
		error_message+="<br>Experiencias / Servicios / Probar antes de comprar se encuentra Vacia";
  }
  if($("#Garantias option:selected").val() == 0) {
		error_message+="<br>Experiencias / Servicios / Garantías se encuentra Vacia";
  }
  if($("#Programasdefidelizacion option:selected").val() == 0) {
		error_message+="<br>Experiencias / Servicios / Programas de fidelización se encuentra Vacia";
  }
  if($("#Adiciondevalor option:selected").val() == 0) {
		error_message+="<br>Experiencias / Servicios / Adicion de valor se encuentra Vacia";
  }
  if($("#Consejeria option:selected").val() == 0) {
		error_message+="<br>Experiencias / Servicios / Consejería se encuentra Vacia";
  }
  if($("#Gestiontotaldelaexperiencia option:selected").val() == 0) {
		error_message+="<br>Experiencias / Servicios / Gestión total de la experiencia se encuentra Vacia";
  }
  if($("#Serviciossuplementarios option:selected").val() == 0) {
		error_message+="<br>Experiencias / Servicios / Servicios suplementarios se encuentra Vacia";
  }
  if($("#ServicioSuperior option:selected").val() == 0) {
		error_message+="<br>Experiencias / Servicios / Servicio Superior se encuentra Vacia";
  }
  if($("#Serviciopersonalizado option:selected").val() == 0) {
		error_message+="<br>Experiencias / Servicios / Servicio personalizado se encuentra Vacia";
  }
  if($("#Comunidaddeusuarios option:selected").val() == 0) {
		error_message+="<br>Experiencias / Servicios / Comunidad de usuarios / soporte de sistemas se encuentra Vacia";
  }
  if($("#Arrendamientooprestamo option:selected").val() == 0) {
		error_message+="<br>Experiencias / Servicios / Arrendamiento o préstamo se encuentra Vacia";
  }
  if($("#Autoservicio option:selected").val() == 0) {
		error_message+="<br>Experiencias / Servicios / Autoservicio se encuentra Vacia";
  }
  if($("#Diversificacion option:selected").val() == 0) {
		error_message+="<br>Experiencias / Canales / Diversificación se encuentra Vacia";
  }
  if($("#IrDirecto option:selected").val() == 0) {
		error_message+="<br>Experiencias / Canales / Ir Directo se encuentra Vacia";
  }
  if($("#Tiendaprincipal option:selected").val() == 0) {
		error_message+="<br>Experiencias / Canales / Tienda principal se encuentra Vacia";
  }
  if($("#Canalesnotradicionales option:selected").val() == 0) {
		error_message+="<br>Experiencias / Canales / Canales no tradicionales se encuentra Vacia";
  }
  if($("#Presenciapopup option:selected").val() == 0) {
		error_message+="<br>Experiencias / Canales / Presencia pop-up se encuentra Vacia";
  }
  if($("#Distribucionindirecta option:selected").val() == 0) {
		error_message+="<br>Experiencias / Canales / Distribución indirecta se encuentra Vacia";
  }
  if($("#Marketingmultinivel option:selected").val() == 0) {
		error_message+="<br>Experiencias / Canales / Marketing multinivel se encuentra Vacia";
  }
  if($("#Ventacruzada option:selected").val() == 0) {
		error_message+="<br>Experiencias / Canales / Venta cruzada se encuentra Vacia";
  }
  if($("#Bajodemanda option:selected").val() == 0) {
		error_message+="<br>Experiencias / Canales / Bajo demanda se encuentra Vacia";
  }
  if($("#Contextoespecifico option:selected").val() == 0) {
		error_message+="<br>Experiencias / Canales / Contexto específico se encuentra Vacia";
  }
  if($("#Centrodeexperiencias option:selected").val() == 0) {
		error_message+="<br>Experiencias / Canales / Centro de experiencias se encuentra Vacia";
  }
  if($("#Marcacompartida option:selected").val() == 0) {
		error_message+="<br>Experiencias / Marca / Marca compartida se encuentra Vacia";
  }
  if($("#Apalancamientodemarca option:selected").val() == 0) {
		error_message+="<br>Experiencias / Marca / Apalancamiento de marca se encuentra Vacia";
  }
  if($("#Etiquetaprivada option:selected").val() == 0) {
		error_message+="<br>Experiencias / Marca / Etiqueta privada se encuentra Vacia";
  }
  if($("#Extensiondemarca option:selected").val() == 0) {
		error_message+="<br>Experiencias / Marca / Extensión de marca se encuentra Vacia";
  }
  if($("#Componentesdemarca option:selected").val() == 0) {
		error_message+="<br>Experiencias / Marca / Componentes de marca se encuentra Vacia";
  }
  if($("#Transparencia option:selected").val() == 0) {
		error_message+="<br>Experiencias / Marca / Transparencia se encuentra Vacia";
  }
  if($("#Alineaciondevalores option:selected").val() == 0) {
		error_message+="<br>Experiencias / Marca / Alineación de valores se encuentra Vacia";
  }
  if($("#Certificacion option:selected").val() == 0) {
		error_message+="<br>Experiencias / Marca / Certificación se encuentra Vacia";
  }
  if($("#Automatizaciondeprocesos option:selected").val() == 0) {
		error_message+="<br>Experiencias / Compromiso del Cliente / Automatización de procesos se encuentra Vacia";
  }
  if($("#Simplificaciondeexperiencias option:selected").val() == 0) {
		error_message+="<br>Experiencias / Compromiso del Cliente / Simplificación de experiencias se encuentra Vacia";
  }
  if($("#Curacion option:selected").val() == 0) {
		error_message+="<br>Experiencias / Compromiso del Cliente / Curación se encuentra Vacia";
  }
  if($("#Habilitaciondeexperiencias option:selected").val() == 0) {
		error_message+="<br>Experiencias / Compromiso del Cliente / Habilitación de experiencias se encuentra Vacia";
  }
  if($("#Maestria option:selected").val() == 0) {
		error_message+="<br>Experiencias / Compromiso del Cliente / Maestría se encuentra Vacia";
  }
  if($("#Autonomiayautoridad option:selected").val() == 0) {
		error_message+="<br>Experiencias / Compromiso del Cliente / Autonomia & autoridad se encuentra Vacia";
  }
  if($("#Comunidadypertenencia option:selected").val() == 0) {
		error_message+="<br>Experiencias / Compromiso del Cliente / Comunidad & pertenencia se encuentra Vacia";
  }
  if($("#Personalizacion option:selected").val() == 0) {
		error_message+="<br>Experiencias / Compromiso del Cliente / Personalización se encuentra Vacia";
  }
  if($("#Personalidadyhumanizacion option:selected").val() == 0) {
		error_message+="<br>Experiencias / Compromiso del Cliente / Personalidad & humanización se encuentra Vacia";
  }
  if($("#Estatusyreconocimiento option:selected").val() == 0) {
		error_message+="<br>Experiencias / Compromiso del Cliente / Estatús & reconocimiento se encuentra Vacia";
  }
  
	
	// Display error if any else submit form
	if(error_message) {
		$('.alert-danger').removeClass('hide').html(error_message);
		return false;
	} else {
		return true;	
	}    
  });  
});
// Modelo de Ganancia primer Bloque
function confiM(){
  var error_message = '';
	if($("#Premium option:selected").val() == 0) {
		error_message+="Configuración / Modelo de Ganancias / Premium se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Liderazgoencostos option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Liderazgo en costos se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Transaccionesaescala option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Transacciones a escala se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Microtransacciones option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Microtransacciones se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Escasezforzada option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Escasez forzada se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Suscripcion option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Suscripción se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Membresias option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Membresías se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Capacidadinstalada option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Capacidad instalada se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Conexiones option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Conexiones se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Subasta option:selected").val() == 0) {
		error_message+="<br>Configuración / Modelo de Ganancias / Subasta se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if(error_message) {
		$('.alert-danger').removeClass('hide').html(error_message);
		return false;
	} else {
		return true;	
	}    
};

// Modelo de Ganancia Segundo Bloque
function confMD(){
    var error_message = '';
    if($("#Definidoporelusuario option:selected").val() == 0) {
      error_message+="Configuración / Modelo de Ganancias / Definido por el usuario se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Fremmium option:selected").val() == 0) {
      error_message+="<br>Configuración / Modelo de Ganancias / Fremmium se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#PrecioFlexible option:selected").val() == 0) {
      error_message+="<br>Configuración / Modelo de Ganancias / Precio Flexible se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#RiesgoCompartido option:selected").val() == 0) {
      error_message+="<br>Configuración / Modelo de Ganancias / Riesgo Compartido se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Flotador option:selected").val() == 0) {
      error_message+="<br>Configuración / Modelo de Ganancias / Flotador se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Financiamiento option:selected").val() == 0) {
      error_message+="<br>Configuración / Modelo de Ganancias / Financiamiento se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Financiamientoporpublicidad option:selected").val() == 0) {
      error_message+="<br>Configuración / Modelo de Ganancias / Financiamiento por publicidad se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Licenciamiento option:selected").val() == 0) {
      error_message+="<br>Configuración / Modelo de Ganancias / Licenciamiento se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Usomedido option:selected").val() == 0) {
      error_message+="<br>Configuración / Modelo de Ganancias / Uso medido se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Preciosagrupados option:selected").val() == 0) {
      error_message+="<br>Configuración / Modelo de Ganancias / Precios agrupados se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Desagregarprecios option:selected").val() == 0) {
      error_message+="<br>Configuración / Modelo de Ganancias / Desagregar precios se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }

    if(error_message) {
      $('.alert-danger').removeClass('hide').html(error_message);
      return false;
    } else {
      return true;	
    }    
};

// Red
function confR(){
    var error_message = '';
    if($("#Colaboracion option:selected").val() == 0) {
      error_message+="Configuración / Red / Colaboración se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Fusionesyadquisiciones option:selected").val() == 0) {
      error_message+="<br>Configuración / Red / Fusiones y adquisiciones se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Consolidacion option:selected").val() == 0) {
      error_message+="<br>Configuración / Red / Consolidación se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Innovacionabierta option:selected").val() == 0) {
      error_message+="<br>Configuración / Red / Innovación abierta se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Mercadossecundarios option:selected").val() == 0) {
      error_message+="<br>Configuración / Red / Mercados secundarios se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Integraciondelacadenadesuministros option:selected").val() == 0) {
      error_message+="<br>Configuración / Red / Integración de la cadena de suministros se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Participacioncomplementaria option:selected").val() == 0) {
      error_message+="<br>Configuración / Red / Participación complementaria se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Alianzas option:selected").val() == 0) {
      error_message+="<br>Configuración / Red / Alianzas se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Franquiciamiento option:selected").val() == 0) {
      error_message+="<br>Configuración / Red / Franquiciamiento se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Cooperacion option:selected").val() == 0) {
      error_message+="<br>Configuración / Red / Cooperacion se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }
    if($("#Lanzamientodeplataformasdelacompetencia option:selected").val() == 0) {
      error_message+="<br>Configuración / Red / Lanzamiento de plataformas de la competencia se encuentra Vacio";
    }else{
      $('.alert-danger').addClass('hide').html(error_message);
    }

    if(error_message) {
      $('.alert-danger').removeClass('hide').html(error_message);
      return false;
    } else {
      return true;	
    }    
};


// Estructura
function confE(){
  var error_message = '';
  if($("#Disenoorganizacional option:selected").val() == 0) {
    error_message+="Configuración / Estructura / Diseño organizacional se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Sistemadeincentivos option:selected").val() == 0) {
    error_message+="<br>Configuración / Estructura / Sistema de incentivos se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#IntegraciondeTI option:selected").val() == 0) {
    error_message+="<br>Configuración / Estructura / Integración de TI se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Centrodecompetencias option:selected").val() == 0) {
    error_message+="<br>Configuración / Estructura / Centro de competencias se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Tercerizacion option:selected").val() == 0) {
    error_message+="<br>Configuración / Estructura / Tercerización se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Universidadcorporativa option:selected").val() == 0) {
    error_message+="<br>Configuración / Estructura / Universidad corporativa se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Gerenciadescentralizada option:selected").val() == 0) {
    error_message+="<br>Configuración / Estructura / Gerencia descentralizada se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Gestiondelconocimiento option:selected").val() == 0) {
    error_message+="<br>Configuración / Estructura / Gestión del conocimiento se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Aprovechamientodeactivos option:selected").val() == 0) {
    error_message+="<br>Configuración / Estructura / Aprovechamiento de activos de otras compañías se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Estandarizaciondeactivos option:selected").val() == 0) {
    error_message+="<br>Configuración / Estructura / Estandarización de activos compañías se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  

  if(error_message) {
    $('.alert-danger').removeClass('hide').html(error_message);
    return false;
  } else {
    return true;	
  }    
};


// Procesos
function confP(){
  var error_message = '';
  if($("#Estandarizaciondeprocesos option:selected").val() == 0) {
    error_message+="Configuración / Procesos / Estandarización de procesos se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Localizacion option:selected").val() == 0) {
    error_message+="<br>Configuración / Procesos / Localización se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Eficienciadeprocesos option:selected").val() == 0) {
    error_message+="<br>Configuración / Procesos / Eficiencia de procesos se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Manufacturaflexible option:selected").val() == 0) {
    error_message+="<br>Configuración / Procesos / Manufactura flexible se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Automatizaciondeprocesos option:selected").val() == 0) {
    error_message+="<br>Configuración / Procesos / Automatización de procesos se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Crowdsourcing option:selected").val() == 0) {
    error_message+="<br>Configuración / Procesos / Crowdsourcing se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Produccionbajodemanda option:selected").val() == 0) {
    error_message+="<br>Configuración / Procesos / Producción bajo demanda se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Produccionlimpia option:selected").val() == 0) {
    error_message+="<br>Configuración / Procesos / Producción limpia se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Sistemaslogisticos option:selected").val() == 0) {
    error_message+="<br>Configuración / Procesos / Sistemas logísticos se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Disenoestrategico option:selected").val() == 0) {
    error_message+="<br>Configuración / Procesos / Diseño estratégico se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Propiedadintelectual option:selected").val() == 0) {
    error_message+="<br>Configuración / Procesos / Propiedad intelectual se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Generacionporelusuario option:selected").val() == 0) {
    error_message+="<br>Configuración / Procesos / Generación por el usuario se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Analisispredictivo option:selected").val() == 0) {
    error_message+="<br>Configuración / Procesos / Análisis predictivo se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  

  if(error_message) {
    $('.alert-danger').removeClass('hide').html(error_message);
    return false;
  } else {
    return true;	
  }    
};


// Desempeño del Producto
function ofertaD(){
  var error_message = '';
  if($("#Productossuperiores option:selected").val() == 0) {
    error_message+="Oferta / Desempeño del Producto / Productos superiores se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Facilidaddeuso option:selected").val() == 0) {
    error_message+="<br>Oferta / Desempeño del Producto / Facilidad de uso se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Funcionalidadatractiva option:selected").val() == 0) {
    error_message+="<br>Oferta / Desempeño del Producto / Funcionalidad atractiva se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Seguridad option:selected").val() == 0) {
    error_message+="<br>Oferta / Desempeño del Producto / Seguridad se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Agregacionfutura option:selected").val() == 0) {
    error_message+="<br>Oferta / Desempeño del Producto / Agregación futura se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Adiciondefuncionalidades option:selected").val() == 0) {
    error_message+="<br>Oferta / Desempeño del Producto / Adición de funcionalidades se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Simplificaciondeldesempeno option:selected").val() == 0) {
    error_message+="<br>Oferta / Desempeño del Producto / Simplificación del desempeño se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Sensibilidadambiental option:selected").val() == 0) {
    error_message+="<br>Oferta / Desempeño del Producto / Sensibilidad ambiental se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Conservacion option:selected").val() == 0) {
    error_message+="<br>Oferta / Desempeño del Producto / Conservación se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Customizacion option:selected").val() == 0) {
    error_message+="<br>Oferta / Desempeño del Producto / Customización se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Enfoque option:selected").val() == 0) {
    error_message+="<br>Oferta / Desempeño del Producto / Enfoque se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Estilo option:selected").val() == 0) {
    error_message+="<br>Oferta / Desempeño del Producto / Estilo se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  


  if(error_message) {
    $('.alert-danger').removeClass('hide').html(error_message);
    return false;
  } else {
    return true;	
  }    
};


// Sistema de Productos
function ofertaS(){
  var error_message = '';
  if($("#Complementos option:selected").val() == 0) {
    error_message+="Oferta / Sistema de Productos / Complementos se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Extensionesplugins option:selected").val() == 0) {
    error_message+="<br>Oferta / Sistema de Productos / Extensiones plug-ins se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Construcciondeproductos option:selected").val() == 0) {
    error_message+="<br>Oferta / Sistema de Productos / Construcción de productos se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Sistemasmodulares option:selected").val() == 0) {
    error_message+="<br>Oferta / Sistema de Productos / Sistemas modulares se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Plataformasdeproductos option:selected").val() == 0) {
    error_message+="<br>Oferta / Sistema de Productos / Plataformas de productos / servicios se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Ofertasintegradas option:selected").val() == 0) {
    error_message+="<br>Oferta / Sistema de Productos / Ofertas integradas se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  


  if(error_message) {
    $('.alert-danger').removeClass('hide').html(error_message);
    return false;
  } else {
    return true;	
  }    
};


// Servicios
function expeS(){
  var error_message = '';
  if($("#Probarantesdecomprar option:selected").val() == 0) {
    error_message+="Experiencias / Servicios / Probar antes de comprar se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Garantias option:selected").val() == 0) {
    error_message+="<br>Experiencias / Servicios / Garantías se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Programasdefidelizacion option:selected").val() == 0) {
    error_message+="<br>Experiencias / Servicios / Programas de fidelización se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Adiciondevalor  option:selected").val() == 0) {
    error_message+="<br>Experiencias / Servicios / Adicion de valor se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Consejeria option:selected").val() == 0) {
    error_message+="<br>Experiencias / Servicios / Consejería se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Gestiontotaldelaexperiencia option:selected").val() == 0) {
    error_message+="<br>Experiencias / Servicios / Gestión total de la experiencia se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Serviciossuplementarios option:selected").val() == 0) {
    error_message+="<br>Experiencias / Servicios / Servicios suplementarios se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#ServicioSuperior option:selected").val() == 0) {
    error_message+="<br>Experiencias / Servicios / Servicio Superior se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Serviciopersonalizado option:selected").val() == 0) {
    error_message+="<br>Experiencias / Servicios / Servicio personalizado se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Comunidaddeusuarios option:selected").val() == 0) {
    error_message+="<br>Experiencias / Servicios / Comunidad de usuarios / soporte de sistemas se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Arrendamientooprestamo option:selected").val() == 0) {
    error_message+="<br>Experiencias / Servicios / Arrendamiento o préstamo se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Autoservicio option:selected").val() == 0) {
    error_message+="<br>Experiencias / Servicios / Autoservicio se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  
  


  if(error_message) {
    $('.alert-danger').removeClass('hide').html(error_message);
    return false;
  } else {
    return true;	
  }    
};


// Canales
function expeC(){
  var error_message = '';
  if($("#Diversificacion option:selected").val() == 0) {
    error_message+="Experiencias / Canales / Diversificación se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#IrDirecto option:selected").val() == 0) {
    error_message+="<br>Experiencias / Canales / Ir Directo se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Tiendaprincipal option:selected").val() == 0) {
    error_message+="<br>Experiencias / Canales / Tienda principal se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Canalesnotradicionales option:selected").val() == 0) {
    error_message+="<br>Experiencias / Canales / Canales no tradicionales se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Presenciapopup option:selected").val() == 0) {
    error_message+="<br>Experiencias / Canales / Presencia pop-up se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Distribucionindirecta option:selected").val() == 0) {
    error_message+="<br>Experiencias / Canales / Distribución indirecta se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Marketingmultinivel option:selected").val() == 0) {
    error_message+="<br>Experiencias / Canales / Marketing multinivel se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Ventacruzada option:selected").val() == 0) {
    error_message+="<br>Experiencias / Canales / Venta cruzada se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Bajodemanda option:selected").val() == 0) {
    error_message+="<br>Experiencias / Canales / Bajo demanda se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Contextoespecifico option:selected").val() == 0) {
    error_message+="<br>Experiencias / Canales / Contexto específico se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Centrodeexperiencias option:selected").val() == 0) {
    error_message+="<br>Experiencias / Canales / Centro de experiencias se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  
  


  if(error_message) {
    $('.alert-danger').removeClass('hide').html(error_message);
    return false;
  } else {
    return true;	
  }    
};


// Marca
function expeM(){
  var error_message = '';
  if($("#Marcacompartida option:selected").val() == 0) {
    error_message+="Experiencias / Marcas / Marca compartida se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Apalancamientodemarca option:selected").val() == 0) {
    error_message+="<br>Experiencias / Marcas / Apalancamiento de marca se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Etiquetaprivada option:selected").val() == 0) {
    error_message+="<br>Experiencias / Marcas / Etiqueta privada se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Extensiondemarca option:selected").val() == 0) {
    error_message+="<br>Experiencias / Marcas / Extensión de marca se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Componentesdemarca option:selected").val() == 0) {
    error_message+="<br>Experiencias / Marcas / Componentes de marca se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Transparencia option:selected").val() == 0) {
    error_message+="<br>Experiencias / Marcas / Transparencia se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Alineaciondevalores option:selected").val() == 0) {
    error_message+="<br>Experiencias / Marcas / Alineación de valores se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  if($("#Certificacion option:selected").val() == 0) {
    error_message+="<br>Experiencias / Marcas / Certificación se encuentra Vacio";
  }else{
    $('.alert-danger').addClass('hide').html(error_message);
  }
  
  
  


  if(error_message) {
    $('.alert-danger').removeClass('hide').html(error_message);
    return false;
  } else {
    return true;	
  }    
};