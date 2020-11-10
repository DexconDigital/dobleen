<?php

require '../vendor/autoload.php';



function enviar()
{

    if ($_POST) {
        $nombre = $_POST['nombre'];
        $Asunto = $_POST['asunto'];
        $url = $_POST['urlpagina'];
        $mensaje = $_POST['mensaje'];
        // $destinatario = "ceo@dexcondigital.com,gestion@dexcondigital.com,wdsp9898@gmail.com";
        $destinatario = "wdsp9898@gmail.com,desarrollo2@dexcondigital.com";
        $email = $_POST['correo'];
        $header = "From: DexconDigital@DexconDobleen.com" . "\r\n";
        $header .= "Reply-To:" . $email . " " . "\r\n";
        $header .= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        $body = "<span>Buen día,<strong>$nombre</strong> quiere ser contactado por ustedes.</span>
    <h4>Sus datos de contacto son:<br></h4>
    <ul>
        <li>Nombre:  $nombre </li>
        <li>Asunto: $Asunto </li>
        <li>Correo:  $email </li> 
    </ul>
    <p>Mensaje: $mensaje</p><br>
    
    <h4>Gracias y que tenga un buen día.</h4>";


        $mail = mail($destinatario, $Asunto, $body, $header);


        if ($mail) {
            echo
                "<script>window.location.href='exito.php?var=$url'</script>";
        } else {
            echo "<script>window.location.href='error.php?var=$url'</script>";
        }
    }
}

require '../app/initcontact.php';
