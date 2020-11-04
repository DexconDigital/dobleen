<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $Asunto = "Suscripción al newsletter de Dobleen";
    $telefono = $_POST['telefono'];
    $destinatario = "wdsp9898@gmail.com";
    $email = $_POST['email'];
    $header = "From: DexconDigital@DexconDobleen.com" . "\r\n";
    $header .= "Reply-To:" . $email . " " . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion();
    $body = "Buen día, $nombre quiere suscribirse al newsletter y ser avisado cuando se publique un nuevo episodio de su Podcast.\r\n
    Los datos de contacto son:\r\n
    Nombre:  $nombre 
    Teléfono: $telefono 
    Correo:  $email 

    Gracias y que tenga un buen día.";


    $mail = mail($destinatario, $Asunto, $body, $header);

    if ($mail) {
        echo
            header('Location:exito.php');
    } else {
        header('Location:error.php');
    }
}
