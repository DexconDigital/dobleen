<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $Asunto = "Suscripcion al newsletter de Dobleen";
    $url = $_POST['urlpagina'];
    $telefono = $_POST['telefono'];
    // $destinatario = "ceo@dexcondigital.com,gestion@dexcondigital.com,wdsp9898@gmail.com";
    $destinatario = "wdsp9898@gmail.com,desarrollo2@dexcondigital.com";
    $email = $_POST['email'];
    $header = "From: DexconDigital@DexconDobleen.com" . "\r\n";
    $header .= "Reply-To:" . $email . " " . "\r\n";
    $header .= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
    $header .= "X-Mailer: PHP/" . phpversion();
    $body = "<span>Buen día,<strong>$nombre</strong> quiere suscribirse al newsletter y ser avisado cuando se publique un nuevo episodio de su Podcast.</span>
    <h4>Los datos de contacto son:<br></h4>
    <ul>
        <li>Nombre:  $nombre </li>
        <li>Teléfono: $telefono </li>
        <li>Correo:  $email<br> </li>
    </ul>
    
    <h4>Gracias y que tenga un buen día.</h4>";


    $mail = mail($destinatario, $Asunto, $body, $header);


    if ($mail) {
        echo
            "<script>window.location.href='exito.php?var=$url'</script>";
    } else {
        echo "<script>window.location.href='error.php?var=$url'</script>";
    }
}
