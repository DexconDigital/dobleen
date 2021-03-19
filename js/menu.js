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
                    if(data == "error") {
                        $("#mensaje").html('<div class="alert alert-danger" role="alert">ERROR: Usuario/Contraseña no es valido.</div>');
                    }else if(data == 0){
                        $("#mensaje").html('<div class="alert alert-danger" role="alert">Actuamente no posee la versión pro.</div>');   
                    }else {
                        $("#mensaje").remove();
                        window.location.href='resultpro.php';
                    }
                }
            });
            return false;
        }
    });
});
