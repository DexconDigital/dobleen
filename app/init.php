<?php

use ReCaptcha\ReCaptcha;

require_once '../variables/captcha.php';
$SecretK = Secret_Key;

$recaptcha  = new ReCaptcha($SecretK);
$response = $recaptcha->verify($_POST['g-recaptcha-response']);


if ($response->isSuccess()) {

    existeuser();
} else {


    echo "<script>alert('¡Captcha Invalido! , Es necesario completar el Captcha.');window.location.href='../index.php'</script>";
}
