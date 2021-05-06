$(document).ready(function () {
    $('#toggle').click(function () {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });

    $("#contact-form").on("submit", function (e) {
        $(".enviar").attr('disabled', 'disabled').text("Cargando...");
        if (!e.isDefaultPrevented()) {
            var url = "Controller/login.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $("#contact-form").serialize(),
                success: function (data) {
                    $(".enviar").removeAttr('disabled').text("Entrar");
                    if (data == "error") {
                        $("#mensaje").html('<div class="alert alert-danger" role="alert">ERROR: Usuario/Contraseña no es valido.</div>');
                    } else if (data == 0) {
                        $("#mensaje").html('<div class="alert alert-danger" role="alert">Actuamente no posee la versión pro.</div>');
                    } else {
                        $("#mensaje").remove();
                        window.location.href = 'resultpro.php';
                    }
                }
            });
            return false;
        }
    });

    $('#reporte_general').click(function () {
        $(this).addClass("disabled").text("Generando...");
        var consolidado_img = consolidado.getSVG();
        var palanca_img = palanca.getSVG();
        var impulsor_img = impulsor.getSVG();
        var oferta_grap_img = oferta.getSVG();
        var experiencia_img = experiencia.getSVG();
        var rating_img = rating.getSVG();
        var url = "variables/reporte_general.php";
        var data = {
            'llave': true,
            'consolidado_img': consolidado_img,
            'palanca_img': palanca_img,
            'impulsor_img': impulsor_img,
            'oferta_grap_img': oferta_grap_img,
            'experiencia_img': experiencia_img,
            'rating_img': rating_img
        }
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data) {
                var resultado = JSON.parse(data);
                if (resultado.codigo == 1) {
                    $('#reporte_general').removeClass("disabled").text("Descargar");
                    var a = document.createElement("a");
                    a.href = resultado.pdf;
                    a.download = "Reporte_General_" + resultado.nombre + ".pdf";
                    a.click();
                }
            }
        });
        return false;
    });

    $('#reporte_anual').click(function () {
        $(this).attr("disabled", "disabled").text("Generando...");
        var url = "variables/reporte_anual.php";
        var data = {
            'llave': true
        }
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data) {
                var resultado = JSON.parse(data);
                if (resultado.codigo == 1) {
                    $('#reporte_anual').removeAttr("disabled").text("Descargar");
                    var a = document.createElement("a");
                    a.href = resultado.pdf;
                    a.download = "Reporte_Anual_" + resultado.nombre + ".pdf";
                    a.click();
                }
            }
        });
        return false;
    });

});
