<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <style>
        .container {
            /* display: flex; */
            /* align-items: center;
            flex-direction: column; */
            /* max-height: 400px;
                overflow: auto; */
        }
    </style>
</head>

<body>
    <section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>
    <section class="container">
        <div class="border col-12" style="text-align: center;">
            <img class="thumbnail" src="images/image4.png" alt="image">
        </div>
    </section>
    <section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/simpleParallax.min.js"></script>
<script>
    var image = document.getElementsByClassName('thumbnail');
    new simpleParallax(image, {
        scale: 1.9,
    });
</script>

</html>