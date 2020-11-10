<?php
$url_pagina = $_SERVER["REQUEST_URI"];
?>
<section id="footer">
    <div class="">
        <div class="col-12 d-flex flex-wrap pt-3 espacio_footer">
            <div class="col-lg-1 col-md-1 col-1"></div>
            <div class="col-lg-2 col-md-2 col-12   d-flex p-0 margen_dexcon">
                <img src="images/logoDD-blanco-app.png" class="tamaño_logo_dexc cont_logo_dexcon" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-12  p-0">
                <div class=" text-center">
                    <ul class="social-nav model-1">
                        <li><a class="google-plus" href="https://www.instagram.com/dexcondigital/" target="_blanck"><i class="fab fa-instagram" aria-hidden="true"></i></i></a></li>
                        <li><a class="twitter" href="https://twitter.com/dexcondigital" target="_blanck"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="facebook" href="https://www.facebook.com/DexconDigital/" target="_blanck"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQE8C7iNTBlokgAAAXPjpkroB1AlXJFFpu-_sLrNOQXj57Q13zJ24P88iVym7_9l6Cb5mDLb1rlMvM-njgNDD07Xu03n2ozN_YN1ZRWRG_dADu-9E8_fPA2ndmHW5Cd5sSkR3O0=&originalReferer=https://www.dexcondigital.com/&sessionRedirect=https%3A%2F%2Fco.linkedin.com%2Fin%2Fdexcon" target="_blanck"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="pinterest" href="https://www.youtube.com/channel/UCAZOEdpzzIlktWBsLOkyIZA" target="_blanck"><i class="fab fa-youtube "></i></a></li>
                        <li><a class="pinterest" href="https://open.spotify.com/show/6E08i2bDylNUe0VYi2W6MC" target="_black"><i class="fab fa-spotify"></i></a></li>
                    </ul>
                </div>
                <div class=" text-center">
                    <p class="negrita">Suscríbete al newsletter para que te avise cuando se publique un nuevo episodio de nuestro Podcast:</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12  d-flex justify-content-center margen_dexcon" style="width: 100%;height: 100%;">
                <img src="images/LOGO-DOBLEEN-blanco.png" class="tamaño_logo_doblee" alt="">
            </div>
        </div>
        <div class="container">
            <p class="negrita pl-2">Newsletter</p>
        </div>
        <div class="container p-0">
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
        <div class="text-center mt-4 copi_footer">
            <p>Copyright 2020 <a class="color_copi" href="https://www.dexcondigital.com/" target="_blank">Dexcon Digital - Dexcon Consultores SAS</a> - Todos los derechos reservados</p>
        </div>
    </div>
</section>