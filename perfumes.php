<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/perfume.css?v=<?php echo time(); ?>">
</head>

<body>

    <?php
    include './includes/header.php';
    include './includes/nav.php';
    ?>

    <video class="video" loop="loop" autoplay="autoplay" title="Perfumes Carolina Herrera" playsinline="" crossorigin="anonymous" src="https://customer-jsjst1fdhj7sipkx.cloudflarestream.com/1958fdfffd097a3a52d42b7f8269f13e/thumbnails/thumbnail.mp4?&amp;width=1080&amp;duration=12s"></video>

    <h1 class="titulo">Fragancias y Perfumes</h1>
    <p class="subTitulo">Sumérgete en el mundo de las fragancias con nuestra colección de perfumes, cuidado personal e ideas para regalos.</p>

    <div class="tipos">
        <img src="img/conjuntoDePerfumes.jpg" alt="Perfumes populares">
        <a href="#populares"><p>Populares</p></a>
    </div>
    <div class="tipos">
        <img src="img/perfumeMujer.jpg" alt="Perfumes Mujer">
        <a href="#mujer"><p>Perfumes Mujer</p></a>
    </div>
    <div class="tipos">
        <img src="img/perfumeHombre.jpg" alt="Perfumes Hombre">
        <p>Perfumes Hombre</p>
    </div>
    <div class="tipos">
        <img src="img/SetRegaloPerfumes.jpg" alt="Set Regalo de Perfumes">
        <p>Cofres Regalo</p>
    </div>

    <div class="banner">
        <h2 class="tituloBanner">Nuestro estado de ánimo al elegir perfume</h2>
        <img class="imgBanner" src="https://static.thcdn.com/images/medium/webp/widgets/95-es/15/original-ES_LF_EU_12_DAYS__-_Untitled_Page_%285%29-101115.jpeg" alt="Nuestro estado de ánimo al elegir perfume">
        <p class="textoBanner">Cuando utilizamos algún perfume, los sentimientos y el estado de ánimo que sentimos no son casualidad. Hace tiempo que se conocen los efectos de los perfumes a la hora de despertar diferentes sensaciones. Por ejemplo, solemos recurrir a los amaderados si estamos deprimidos para que nos recuerde la naturaleza, los árboles, la libertad. Si alguna vez has olido un perfume y has dicho ¡esto es lo que buscaba!, no es ninguna casualidad.</p>
    </div>

    <section class="tipoProductos">
        <h2><a id="populares"></a>Populares</h2>
        <div class="producto">
            <img class="imgProducto1" src="img/Armani My Way Eau de Parfum - 30ml.png" alt="Armani My Way Eau de Parfum - 30ml">
            <p class="nombreProducto">Giorgio Armani My Way Eau de Parfum - 30ml</p>
            <p class="precioProducto"><strong>52,95€</strong></p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto">
            <img class="imgProducto1" src="img/viktor-rolf-spicebomb-infrared-eau-de-toilette.png" alt="Viktor & Rolf Spicebomb Infrared Eau de Toilette - 50ml">
            <p class="nombreProducto">Viktor & Rolf Spicebomb Infrared Eau de Toilette - 50ml</p>
            <p class="precioProducto">75,45€</p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto">
            <img class="imgProducto2" src="img/Perfect Marc Jacobs Eau de Parfum 100ml.png" alt="Perfect Marc Jacobs Eau de Parfum 100ml">
            <p class="nombreProducto">Perfect Marc Jacobs Eau de Parfum 100ml</p>
            <p class="precioProducto">92,95€</p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto">
            <img class="imgProducto1" src="img/Good Girl 100ml Eau de Parfum Refillable Edition.png" alt="Good Girl 100ml Eau de Parfum Refillable Edition">
            <p class="nombreProducto">Good Girl 100ml Eau de Parfum Refillable Edition</p>
            <p class="precioProducto">70,00€</p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto">
            <img class="imgProducto3" src="img/Calendario de adviento Herrera 12 días de belleza.png" alt="Calendario de adviento Herrera: 12 días de belleza">
            <p class="nombreProducto">Calendario de adviento Herrera: 12 días de belleza</p>
            <p class="precioProducto">99,50€</p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto" >
            <img class="imgProducto4" src="img/Yves Saint Laurent MYSLF Eau de Parfum 60ml.png" alt="Yves Saint Laurent MYSLF Eau de Parfum 60ml">
            <p class="nombreProducto">Yves Saint Laurent MYSLF Eau de Parfum 60ml</p>
            <p class="precioProducto">82,95€</p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto">
            <img class="imgProducto5" src="img/MUGLER Alien Eau de Parfum Natural Spray Recargable - 90ml.png" alt="MUGLER Alien Eau de Parfum Natural Spray Recargable - 90ml">
            <p class="nombreProducto">MUGLER Alien Eau de Parfum Natural Spray Recargable - 90ml</p>
            <p class="precioProducto">116,45€</p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto">
            <img class="imgProducto6" src="img/Versace Eros for Men Eau de Toilette 100ml.png" alt="Versace Eros for Men Eau de Toilette 100ml">
            <p class="nombreProducto">Versace Eros for Men Eau de Toilette 100ml</p>
            <p class="precioProducto">96,45€</p>
            <p class="botonCompra">Comprar</p>
        </div>
    </section>

    <section class="tipoProductos">
        <h2><a id="mujer"></a>Perfumes Mujer</h2>
        <div class="producto">
            <img class="imgProducto7" src="Img/Eau de Rochas L'essentiel - Eau de Parfum.png" alt="Eau de Rochas L'essentiel - Eau de Parfum">
            <p class="nombreProducto">Eau de Rochas L'essentiel - Eau de Parfum</p>
            <p class="precioProducto"><strong>69,99€</strong></p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto">
            <img class="imgProducto3" src="img/Burberry Goddess Eau de Parfum for Women 100ml.jpg" alt="Burberry Goddess Eau de Parfum for Women 100ml">
            <p class="nombreProducto">Burberry Goddess Eau de Parfum for Women 100ml</p>
            <p class="precioProducto">113,45€</p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto">
            <img class="imgProducto2" src="img/Ode To Dullness - Eau de Parfum.png" alt="Ode To Dullness - Eau de Parfum">
            <p class="nombreProducto">Ode To Dullness - Eau de Parfum</p>
            <p class="precioProducto">125,99€</p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto">
            <img class="imgProducto3" src="img/Yves Saint Laurent Black Opium Eau de Parfum 30ml.png" alt="Yves Saint Laurent Black Opium Eau de Parfum 30ml">
            <p class="nombreProducto">Yves Saint Laurent Black Opium Eau de Parfum 30ml</p>
            <p class="precioProducto">52,95€</p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto">
            <img class="imgProducto2" src="img/Alien Goddess Supra Florale - Eau de Parfum.png" alt="Alien Goddess Supra Florale - Eau de Parfum">
            <p class="nombreProducto">Alien Goddess Supra Florale - Eau de Parfum</p>
            <p class="precioProducto">104,99€</p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto" >
            <img class="imgProducto4" src="img/Bergamot Bloom 100ml Eau de Toilette.png" alt="Bergamot Bloom 100ml Eau de Toilette">
            <p class="nombreProducto">Bergamot Bloom 100ml Eau de Toilette</p>
            <p class="precioProducto">125,00€</p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto">
            <img class="imgProducto5" src="" alt="">
            <p class="nombreProducto"></p>
            <p class="precioProducto"></p>
            <p class="botonCompra">Comprar</p>
        </div>

        <div class="producto">
            <img class="imgProducto6" src="" alt="">
            <p class="nombreProducto"></p>
            <p class="precioProducto"></p>
            <p class="botonCompra">Comprar</p>
        </div>

    </section>

    <?php
    include './includes/footer.php';
    ?>

</body>

</html>