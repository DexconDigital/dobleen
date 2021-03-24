$(document).ready(function () {
    //https://anchor.fm/s/4c745d00/podcast/rss
    var episodio = $("#episodio");
    var epsdo = $("#epsdo");
    var serie = $("#serie");
    var autor = $("#autor");
    var nombre = $("#nombre");
    var img = $("#imagen");
    var descr = $("#descripcion");
    var audio = $("#audio");
    var sig_text = $("#sig_text");
    var ant_text = $("#ant_text");
    var siguiente = $("#siguiente");
    var anterior = $("#anterior");
    anterior.hide();

    var feedURL = "https://anchor.fm/s/2d877670/podcast/rss";
    var json_parse = "https://api.rss2json.com/v1/api.json?rss_url=";
    $.ajax({
        method: "GET",
        url: json_parse + feedURL,
        'dataType': "json",
        success: function (data) {
            var pos = 0;
            var i = 1;
            var imas = 2;
            var dato = data.items[0];
            var total = (data.items.length - (1));
            var nuevo = (pos >= total) ? pos : pos + 1;
            var viejo = (pos <= 0) ? pos : pos - 1;

            serie.text(data.feed.title);
            epsdo.text(i);
            autor.text("@" + data.feed.author);
            img.attr('src', data.feed.image);

            episodio.text(i + ". " + dato.title);
            nombre.text(dato.title);
            descr.html(dato.description);
            audio.append('<audio class="sonido w-100" controls><source src="' + dato.enclosure.link + '" type="audio/ogg"><source src="' + dato.enclosure.link + '" type="audio/mpeg">Tu buscador no soporta el audio.</audio>');
            (total == 0) ? siguiente.hide(): siguiente.show();
            sig_text.text(imas + ". " + data.items[nuevo].title);

            siguiente.click(function (e) {
                pos++;
                i++;
                imas++;
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
                audio.html('<audio class="sonido w-100" controls><source src="' + dato.enclosure.link + '" type="audio/ogg"><source src="' + dato.enclosure.link + '" type="audio/mpeg">Tu buscador no soporta el audio.</audio>');

                sig_text.text(imas + ". " + data.items[nuevo].title);
                ant_text.text(pos + ". " + data.items[viejo].title);
            });

            anterior.click(function (e) {
                pos--;
                i--;
                imas--;
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
                audio.html('<audio class="sonido w-100" controls><source src="' + dato.enclosure.link + '" type="audio/ogg"><source src="' + dato.enclosure.link + '" type="audio/mpeg">Tu buscador no soporta el audio.</audio>');

                sig_text.text(imas + ". " + data.items[nuevo].title);
                ant_text.text(pos + ". " + data.items[viejo].title);
            });
        },
    });
});
