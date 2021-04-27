$(document).ready(function () {
    var intro = $(".intro");
    var episodio = $(".episodio")
    var epsdo = $(".epsdo");
    var serie = $(".serie");
    var autor = $(".autor");
    var nombre = $(".nombre");
    var img = $(".imagen");
    var descr = $(".descripcion");
    var audio = $("#audio");
    var seccion_audio = $("#seccion_audio");
    var sig_text = $("#sig_text");
    var ant_text = $("#ant_text");
    var siguiente = $("#siguiente");
    var anterior = $("#anterior");
    siguiente.hide();
    anterior.hide();

    var feedURL = "https://anchor.fm/s/2d877670/podcast/rss";
    var json_parse = "https://api.rss2json.com/v1/api.json?rss_url=";
    $.ajax({
        method: "GET",
        url: json_parse + feedURL,
        'dataType': "json",
        success: function (data) {
            var j = 1;
            var episodios = $(".episodios");
            var episodios_serie = $(".episodios_serie");

            for (var h = 0; h < data.items.length; h++) {

                var episds = data.items[h];
                var fila = '<div class="col-md-6">' +
                    '<div class="row">' +
                    '<div class="pdc-w pdc-aling-center">' +
                    '<div class="col-md-12 d-flex justify-content-between p-3">' +
                    '<span>PODCAST</span>' +
                    '<span>T01-EP-<span>' + j + '</span></span>' +
                    '</div>' +
                    '<a class="col-md-12  d-flex justify-content-center podcst" href="#!" pos="' + h + '">' +
                    '<img src="' + episds.thumbnail + '" class="container imagen pdc-img">' +
                    '<div class="pdc-img-div p-3 position-absolute fm-regular">' +
                    '<p class="p-0 m-0 font-weight-bold nombre text-left">' + episds.title + '</p>' +
                    '</div>' +
                    '</a>' +
                    '<div class="col-md-12  p-3">' +
                    '<div class="row">' +
                    '<div class="col-6">' +
                    '<span class="serie">' + data.feed.title + '</span>' +
                    '</div>' +
                    '<div class="col-6 text-right">' +
                    '<span class="autor">@ ' + data.feed.author + '</span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';

                var fila2 = '<div class="col-md-6">' +
                    '<div class="row">' +
                    '<div class="pdc-w pdc-aling-center">' +
                    '<div class="col-md-12 d-flex justify-content-between p-3">' +
                    '<span>PODCAST</span>' +
                    '<span>T01-EP-<span>' + j + '</span></span>' +
                    '</div>' +
                    '<span class="pl-3 m-0 font-weight-bold nombre text-left fs-1-2">' + episds.title + '</span>' +
                    '<a class="col-md-12  d-flex justify-content-center podcst" href="#!" pos="' + h + '">' +
                    '<img src="images/play.png" class="imagen">' +
                    '</a>' +
                    '<div class="col-md-12  p-3">' +
                    '<div class="row">' +
                    '<div class="col-6">' +
                    '<span class="serie">' + data.feed.title + '</span>' +
                    '</div>' +
                    '<div class="col-6 text-right">' +
                    '<span class="autor">@ ' + data.feed.author + '</span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';

                j++
                episodios.append(fila);
                episodios_serie.append(fila2);
            }

            $(".podcst").click(function (e) {
                var act_pos = $(this).attr("pos");
                window.localStorage.setItem("posiciones", act_pos);
                window.localStorage.setItem("num_eps", parseInt(act_pos) + 1);
                window.location.href = "podcast.php";
            });

            var total = (data.items.length - (1));
            var pos = (localStorage.posiciones == null || localStorage.posiciones > total) ? 0 : localStorage.posiciones;
            var i = (localStorage.num_eps == null) ? 0 : localStorage.num_eps;
            var dato = data.items[pos];

            var nuevo = (pos >= total) ? pos : parseInt(pos) + 1;
            var viejo = (pos <= 0) ? pos : parseInt(pos) - 1;
            var descripcion = dato.description.replace("<p>", "");

            serie.text(data.feed.title);
            intro.text(data.feed.description);;
            epsdo.text(i);
            autor.text("@" + data.feed.author);
            img.attr('src', data.feed.image);

            episodio.text(i + ". " + dato.title);
            nombre.text(dato.title);
            descr.html(dato.description);
            audio.html('<audio id="player" preload="metadata"  src="' + dato.enclosure.link + '" ></audio>');
            seccion_audio.html('<div class="row aud-bg-gris rounded-lg">' +
                '<div class="col-xl-3 col-lg-3 col-md-3 col-12 p-3 d-flex justify-content-center">' +
                '<img src="' + dato.thumbnail + '" class="img-fluid w-11-rem rounded-lg shadow" alt="...">' +
                '</div>' +
                '<div class="col-xl-9 col-lg-9 col-md-9 col-12 pt-3">' +
                '<h5 class="fm-regular font-weight-bold text-light mb-0 mt-3 text-truncate">' + dato.title + '</h5>' +
                '<a class="fs-1-rem text-white text-left texto_descr_parrafo col-12 col-sm-8 text-truncate pl-0" href="' + data.feed.link + '" target="_blank">' + descripcion + '</a><br>' +
                '<a class="btn btn-outline-light btn-sm fs-2 cursor-pointer text-light link font-weight-bold" href="' + dato.link + '" target="_blank">Seguir</a>' +
                '<div class="form-row mt-4">' +
                '<div class="col-1 text-right">' +
                '<a class="btn_15menos text-light shadow-none" href="#!" title="Retrasar 15 segundos"><i class="fas fa-reply fa-xs"></i></a>' +
                '</div>' +
                '<div class="col-6 col-sm-8 col-lg-8">' +
                '<input id="dur" class="w-100 mt-4 h-5 shadow-none form-control-range"  type="range" name="rng" min="0" step="0.25" value="0">' +
                '</div>' +
                '<div class="col-1">' +
                '<a class="btn_15mas text-light shadow-none" href="#!" title="Adelantar 15 segundos"><i class="fas fa-share fa-xs"></i></a>' +
                '</div>' +
                '<div class="col-2 col-sm-1">' +
                '<div class="text-light mt-2"><span id="duracion">0:00</span></div>' +
                '</div>' +
                '<div class="col-1 pb-2">' +
                '<div class="btn btn_play btn-light aud-text-gris shadow-none"><span id="icono_play"><i class="fas fa-play fa-xs"></i></span></div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>');


            (total == 0) ? siguiente.hide(): siguiente.show();
            (pos <= 0) ? anterior.hide(): anterior.show();
            sig_text.text(data.items[nuevo].title);

            //Reproductor
            var player = $('#player');
            var dur = $('#dur');
            var icono_play = $("#icono_play");
            var btn_play = $('.btn_play');
            var btn_15mas = $('.btn_15mas');
            var btn_15menos = $('.btn_15menos');

            var duracion = $("#duracion");

            dur.change(function () {
                player[0].currentTime = dur.val();
            });

            btn_15mas.click(function () {
                var act_tiempo = player[0].currentTime;
                player[0].currentTime = act_tiempo + 15;
            });

            btn_15menos.click(function () {
                var act_tiempo = player[0].currentTime;
                player[0].currentTime = act_tiempo - 15;
            });

            player.on('loadedmetadata', function (e) {
                dur.attr('max', this.duration)
            });

            btn_play.click(function () {
                if (player[0].paused == false) {
                    player[0].pause();
                    icono_play.html('<i class=" fas fa-play fa-xs"></i>');
                } else {
                    player[0].play();
                    icono_play.html('<i class=" fas fa-pause fa-xs"></i>');
                }
            });

            player.on('timeupdate', function () {
                var track_length = this.duration;
                var secs = this.currentTime;
                var progress = (secs / track_length) * 100;
                var val = (secs - dur.attr('min')) / (dur.attr('max') - dur.attr('min'));
                var percent = val * 100;

                var tcMins = parseInt(secs / 60);
                var tcSecs = parseInt(secs - (tcMins * 60));

                if (tcSecs < 10) {
                    tcSecs = '0' + tcSecs;
                }

                // Muesta el tiempo
                duracion.html(tcMins + ':' + tcSecs);
                dur.val(secs);

                dur.css('background-image',
                    '-webkit-gradient(linear, left top, right top, ' +
                    'color-stop(' + percent + '%, #F1F1F1), ' +
                    'color-stop(' + percent + '%, #B8B8B8)' +
                    ')');

                dur.css('background-image',
                    '-moz-linear-gradient(left center, #F1F1F1 0%, #F1F1F1 ' + percent + '%, #B8B8B8 ' + percent + '%, #B8B8B8 100%)');
            });

            player.on('ended', function () {
                icono_play.html('<i class=" fas fa-play fa-xs"></i>');
                playing = false;
            });


            siguiente.click(function (e) {
                pos++;
                i++;
                e.preventDefault();
                var dato = data.items[pos];
                var nuevo = (pos >= total) ? pos : pos + 1;
                var viejo = (pos <= 0) ? pos : pos - 1;
                (pos >= total) ? $(this).hide(): $(this).show();
                (pos <= 0) ? anterior.hide(): anterior.show();

                episodio.text(i + ". " + dato.title);
                epsdo.text(i);
                img.attr('src', data.feed.image);
                nombre.text(dato.title);
                descr.html(dato.description);
                audio.html('<audio id="player" preload="metadata"  src="' + dato.enclosure.link + '" ></audio>');
                seccion_audio.html('<div class="row aud-bg-gris rounded-lg">' +
                    '<div class="col-xl-3 col-lg-3 col-md-3 col-12 p-3 d-flex justify-content-center">' +
                    '<img src="' + dato.thumbnail + '" class="img-fluid w-11-rem rounded-lg shadow" alt="...">' +
                    '</div>' +
                    '<div class="col-xl-9 col-lg-9 col-md-9 col-12 pt-3">' +
                    '<h5 class="fm-regular font-weight-bold text-light mb-0 mt-3 text-truncate">' + dato.title + '</h5>' +
                    '<a class="fs-1-rem text-white text-left texto_descr_parrafo col-12 col-sm-8 text-truncate pl-0" href="' + data.feed.link + '" target="_blank">' + descripcion + '</a><br>' +
                    '<a class="btn btn-outline-light btn-sm fs-2 cursor-pointer text-light link font-weight-bold" href="' + dato.link + '" target="_blank">Seguir</a>' +
                    '<div class="form-row mt-4">' +
                    '<div class="col-1 text-right">' +
                    '<a class="btn_15menos text-light shadow-none" href="#!" title="Retrasar 15 segundos"><i class="fas fa-reply fa-xs"></i></a>' +
                    '</div>' +
                    '<div class="col-6 col-sm-8 col-lg-8">' +
                    '<input id="dur" class="w-100 mt-4 h-5 shadow-none form-control-range"  type="range" name="rng" min="0" step="0.25" value="0">' +
                    '</div>' +
                    '<div class="col-1">' +
                    '<a class="btn_15mas text-light shadow-none" href="#!" title="Adelantar 15 segundos"><i class="fas fa-share fa-xs"></i></a>' +
                    '</div>' +
                    '<div class="col-2 col-sm-1">' +
                    '<div class="text-light mt-2"><span id="duracion">0:00</span></div>' +
                    '</div>' +
                    '<div class="col-1 pb-2">' +
                    '<div class="btn btn_play btn-light aud-text-gris shadow-none"><span id="icono_play"><i class="fas fa-play fa-xs"></i></span></div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>');


                (total == 0) ? siguiente.hide(): siguiente.show();
                (pos <= 0) ? anterior.hide(): anterior.show();
                sig_text.text(data.items[nuevo].title);

                //Reproductor
                var player = $('#player');
                var dur = $('#dur');
                var icono_play = $("#icono_play");
                var btn_play = $('.btn_play');
                var btn_15mas = $('.btn_15mas');
                var btn_15menos = $('.btn_15menos');

                var duracion = $("#duracion");

                dur.change(function () {
                    player[0].currentTime = dur.val();
                });

                btn_15mas.click(function () {
                    var act_tiempo = player[0].currentTime;
                    player[0].currentTime = act_tiempo + 15;
                });

                btn_15menos.click(function () {
                    var act_tiempo = player[0].currentTime;
                    player[0].currentTime = act_tiempo - 15;
                });

                player.on('loadedmetadata', function (e) {
                    dur.attr('max', this.duration)
                });

                btn_play.click(function () {
                    if (player[0].paused == false) {
                        player[0].pause();
                        icono_play.html('<i class=" fas fa-play fa-xs"></i>');
                    } else {
                        player[0].play();
                        icono_play.html('<i class=" fas fa-pause fa-xs"></i>');
                    }
                });

                player.on('timeupdate', function () {
                    var track_length = this.duration;
                    var secs = this.currentTime;
                    var progress = (secs / track_length) * 100;
                    var val = (this.currentTime - dur.attr('min')) / (dur.attr('max') - dur.attr('min'));
                    var percent = val * 100;

                    var tcMins = parseInt(secs / 60);
                    var tcSecs = parseInt(secs - (tcMins * 60));

                    if (tcSecs < 10) {
                        tcSecs = '0' + tcSecs;
                    }

                    // Muesta el tiempo
                    duracion.html(tcMins + ':' + tcSecs);
                    dur.val(this.currentTime);

                    dur.css('background-image',
                        '-webkit-gradient(linear, left top, right top, ' +
                        'color-stop(' + percent + '%, #F1F1F1), ' +
                        'color-stop(' + percent + '%, #B8B8B8)' +
                        ')');

                    dur.css('background-image',
                        '-moz-linear-gradient(left center, #F1F1F1 0%, #F1F1F1 ' + percent + '%, #B8B8B8 ' + percent + '%, #B8B8B8 100%)');
                });

                player.on('ended', function () {
                    icono_play.html('<i class=" fas fa-play fa-xs"></i>');
                    playing = false;
                });

            });

            anterior.click(function (e) {
                pos--;
                i--;
                e.preventDefault();
                var dato = data.items[pos];
                var nuevo = (pos >= total) ? pos : pos + 1;
                var viejo = (pos <= 0) ? pos : pos - 1;
                (pos >= total) ? siguiente.hide(): siguiente.show();
                (pos <= 0) ? $(this).hide(): $(this).show();

                episodio.text(i + ". " + dato.title);
                epsdo.text(i);
                img.attr('src', data.feed.image);
                nombre.text(dato.title);
                descr.html(dato.description);
                audio.html('<audio id="player" preload="metadata"  src="' + dato.enclosure.link + '" ></audio>');
                seccion_audio.html('<div class="row aud-bg-gris rounded-lg">' +
                    '<div class="col-xl-3 col-lg-3 col-md-3 col-12 p-3 d-flex justify-content-center">' +
                    '<img src="' + dato.thumbnail + '" class="img-fluid w-11-rem rounded-lg shadow" alt="...">' +
                    '</div>' +
                    '<div class="col-xl-9 col-lg-9 col-md-9 col-12 pt-3">' +
                    '<h5 class="fm-regular font-weight-bold text-light mb-0 mt-3 text-truncate">' + dato.title + '</h5>' +
                    '<a class="fs-1-rem text-white text-left texto_descr_parrafo col-12 col-sm-8 text-truncate pl-0" href="' + data.feed.link + '" target="_blank">' + descripcion + '</a><br>' +
                    '<a class="btn btn-outline-light btn-sm fs-2 cursor-pointer text-light link font-weight-bold" href="' + dato.link + '" target="_blank">Seguir</a>' +
                    '<div class="form-row mt-4">' +
                    '<div class="col-1 text-right">' +
                    '<a class="btn_15menos text-light shadow-none" href="#!" title="Retrasar 15 segundos"><i class="fas fa-reply fa-xs"></i></a>' +
                    '</div>' +
                    '<div class="col-6 col-sm-8 col-lg-8">' +
                    '<input id="dur" class="w-100 mt-4 h-5 shadow-none form-control-range"  type="range" name="rng" min="0" step="0.25" value="0">' +
                    '</div>' +
                    '<div class="col-1">' +
                    '<a class="btn_15mas text-light shadow-none" href="#!" title="Adelantar 15 segundos"><i class="fas fa-share fa-xs"></i></a>' +
                    '</div>' +
                    '<div class="col-2 col-sm-1">' +
                    '<div class="text-light mt-2"><span id="duracion">0:00</span></div>' +
                    '</div>' +
                    '<div class="col-1 pb-2">' +
                    '<div class="btn btn_play btn-light aud-text-gris shadow-none"><span id="icono_play"><i class="fas fa-play fa-xs"></i></span></div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>');


                (total == 0) ? siguiente.hide(): siguiente.show();
                (pos <= 0) ? anterior.hide(): anterior.show();
                sig_text.text(data.items[nuevo].title);

                //Reproductor
                var player = $('#player');
                var dur = $('#dur');
                var icono_play = $("#icono_play");
                var btn_play = $('.btn_play');
                var btn_15mas = $('.btn_15mas');
                var btn_15menos = $('.btn_15menos');

                var duracion = $("#duracion");

                dur.change(function () {
                    player[0].currentTime = dur.val();
                });

                btn_15mas.click(function () {
                    var act_tiempo = player[0].currentTime;
                    player[0].currentTime = act_tiempo + 15;
                });

                btn_15menos.click(function () {
                    var act_tiempo = player[0].currentTime;
                    player[0].currentTime = act_tiempo - 15;
                });

                player.on('loadedmetadata', function (e) {
                    dur.attr('max', this.duration)
                });

                btn_play.click(function () {
                    if (player[0].paused == false) {
                        player[0].pause();
                        icono_play.html('<i class=" fas fa-play fa-xs"></i>');
                    } else {
                        player[0].play();
                        icono_play.html('<i class=" fas fa-pause fa-xs"></i>');
                    }

                });

                player.on('timeupdate', function () {
                    var track_length = this.duration;
                    var secs = this.currentTime;
                    var progress = (secs / track_length) * 100;
                    var val = (this.currentTime - dur.attr('min')) / (dur.attr('max') - dur.attr('min'));
                    var percent = val * 100;

                    var tcMins = parseInt(secs / 60);
                    var tcSecs = parseInt(secs - (tcMins * 60));

                    if (tcSecs < 10) {
                        tcSecs = '0' + tcSecs;
                    }

                    // Muesta el tiempo
                    duracion.html(tcMins + ':' + tcSecs);
                    dur.val(this.currentTime);

                    dur.css('background-image',
                        '-webkit-gradient(linear, left top, right top, ' +
                        'color-stop(' + percent + '%, #F1F1F1), ' +
                        'color-stop(' + percent + '%, #B8B8B8)' +
                        ')');

                    dur.css('background-image',
                        '-moz-linear-gradient(left center, #F1F1F1 0%, #F1F1F1 ' + percent + '%, #B8B8B8 ' + percent + '%, #B8B8B8 100%)');
                });

                player.on('ended', function () {
                    icono_play.html('<i class=" fas fa-play fa-xs"></i>');
                    playing = false;
                });
            });


        },
    });

});
