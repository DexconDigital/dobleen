<?php
$url_pagina = $_SERVER["REQUEST_URI"];
?>
<footer id="footer">
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-4 col-sm-12 text-center">
                <img src="images/logoDD-blanco-app.png" class="img-8" alt="">
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <ul class="social-nav model-1">
                    <li><a class="google-plus" href="https://www.instagram.com/dexcondigital/" target="_blanck"><i class="fab fa-instagram fa-lg" aria-hidden="true"></i></a></li>
                    <li><a class="twitter" href="https://twitter.com/dexcondigital" target="_blanck"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="facebook" href="https://www.facebook.com/DexconDigital/" target="_blanck"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a class="linkedin" href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQE8C7iNTBlokgAAAXPjpkroB1AlXJFFpu-_sLrNOQXj57Q13zJ24P88iVym7_9l6Cb5mDLb1rlMvM-njgNDD07Xu03n2ozN_YN1ZRWRG_dADu-9E8_fPA2ndmHW5Cd5sSkR3O0=&originalReferer=https://www.dexcondigital.com/&sessionRedirect=https%3A%2F%2Fco.linkedin.com%2Fin%2Fdexcon" target="_blanck"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a class="pinterest" href="https://www.youtube.com/channel/UCAZOEdpzzIlktWBsLOkyIZA" target="_blanck"><i class="fab fa-youtube"></i></a></li>
                    <li><a class="pinterest" href="https://open.spotify.com/show/6E08i2bDylNUe0VYi2W6MC" target="_black"><i class="fab fa-spotify"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <img src="images/LOGO-DOBLEEN-blanco.png" class="w-50" alt="">
            </div>
        </div>
        <div class="text-center container w-70 mt-3">
            <h5 class="text-light fm-regular">Suscríbete al newsletter para que te avise cuando se publique un nuevo episodio de nuestra Serie Podcast: "El Cerebro en el Desván". </h5>
        </div>
        <div id="form" class="container">
            <div class="pl-5">
                <h5 class="text-light fm-regular">Newsletter</h5>
                <form action="email/footer.php" method="POST" autocomplete="off">
                    <div class="col-12 p-0 d-flex flex-wrap">
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <input type="text" class="form-control form hover_btn1" name="nombre" aria-describedby="emailHelp" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <input type="email" class="form-control form hover_btn2" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <input type="text" class="form-control form hover_btn3" name="telefono" aria-describedby="emailHelp" placeholder="Teléfono">
                            </div>
                        </div>
                        <select name="urlpagina" style="display:none">
                            <option value=" <?php echo $url_pagina ?>"> <?php echo $url_pagina; ?></option>
                        </select>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="form-group">
                                <button type="submit" class="form-control form negrita hover_btn_enviar" aria-describedby="emailHelp">Suscribirse</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="redirect" class="form-row text-center">
            <div class="col-md-4 col-sm-6">
                <a class="fs-2 text-light" href="https://2b0a0abc-aec7-41e6-a91a-170468afb36b.filesusr.com/ugd/5aa9ce_e8ebb0c5e3ac4beb9b3e7dde139bc47c.pdf" target="_blank">Términos de Uso , Aviso de Privacidad & Cookies </a>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <a class="fs-2 text-light" href="https://2b0a0abc-aec7-41e6-a91a-170468afb36b.filesusr.com/ugd/5aa9ce_8053ff2654d84d97813f98a02c0809b6.pdf" target="_blank">Política de Privacidad & Tratamiento de datos Personales </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a class="fs-2 text-light" href="https://2b0a0abc-aec7-41e6-a91a-170468afb36b.filesusr.com/ugd/5aa9ce_501bf089973148eb8107e7e000e16071.pdf" target="_blank">Términos & Condiciones Tienda Virtual </a>
            </div>
        </div>
        <div id="copyright" class="text-center mt-2">
            <p class="fs-2 text-light">Copyright 2020 Dexcon Digital - Dexcon Consultores SAS - Todos los derechos reservados</p>
        </div>
    </div>
</footer>
