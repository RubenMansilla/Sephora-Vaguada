<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumes</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="styles/perfume.css?v=<?php echo time(); ?>">
    <link rel="icon" href="img/favicon/icono.jpeg">
</head>
<body>
    <?php
    include './includes/header.php';
    include './includes/nav.php';
    ?>

    <div class="main">
        <div class="contenedor">
            <video class="video" loop="loop" autoplay="autoplay" alt="Perfumes Carolina Herrera" playsinline=""
                crossorigin="anonymous"
                src="https://customer-jsjst1fdhj7sipkx.cloudflarestream.com/1958fdfffd097a3a52d42b7f8269f13e/thumbnails/thumbnail.mp4?&amp;width=1440&amp;duration=12s"></video>
        </div>

        <div class="contenedor">
            <h1 class="titulo">Fragancias y Perfumes</h1>
            <h6 class="subTitulo">Sumérgete en el mundo de las fragancias con nuestra colección de perfumes, cuidado
                personal
                e
                ideas para regalos.</h6>

            <div class="tipos">
                <a href="#populares" class="tipo">
                    <figure class="imagenTipo">
                        <img src="img/perfumes/conjuntoDePerfumes.jpg" alt="Perfumes populares">
                    </figure>
                    <p>Populares</p>
                </a>
                <a href="#mujer" class="tipo">
                    <figure class="imagenTipo">
                        <img src="img/perfumes/perfumeMujer.jpg" alt="Perfumes Mujer">
                    </figure>
                    <p>Perfumes Mujer</p>
                </a>
                <a href="#hombre" class="tipo">
                    <figure class="imagenTipo">
                        <img src="img/perfumes/perfumeHombre.jpg" alt="Perfumes Hombre">
                    </figure>
                    <p>Perfumes Hombre</p>
                </a>
                <a href="#regalos" class="tipo">
                    <figure class="imagenTipo">
                        <img src="img/perfumes/SetRegaloPerfumes.jpg" alt="Set Regalo de Perfumes">
                    </figure>
                    <p>Cofres Regalo</p>
                </a>
            </div>
        </div>

        <div class="contenedor banner">
            <div class="textoBanner">
                <h2 class="tituloBanner">Nuestro estado de ánimo al elegir perfume</h2>
                <p>Cuando utilizamos algún perfume, los sentimientos y el estado de ánimo que
                    sentimos
                    no
                    son casualidad. Hace tiempo que se conocen los efectos de los perfumes a la hora de despertar
                    diferentes
                    sensaciones. Por ejemplo, solemos recurrir a los amaderados si estamos deprimidos para que nos
                    recuerde
                    la
                    naturaleza, los árboles, la libertad. Si alguna vez has olido un perfume y has dicho ¡esto es lo que
                    buscaba!, no es ninguna casualidad.</p>
            </div>
            <figure class="imgBanner">
                <img src="https://static.thcdn.com/images/medium/webp/widgets/95-es/15/original-ES_LF_EU_12_DAYS__-_Untitled_Page_%285%29-101115.jpeg"
                    alt="Nuestro estado de ánimo al elegir perfume">
            </figure>
        </div>

        <section class="contenedor tipoProductos">
            <h2><a id="populares">Populares</a></h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto1" src="img/perfumes/ArmaniMyWayEaudeParfum-30ml.png"
                            alt="Armani My Way Eau de Parfum - 30ml">
                    </figure>
                    <p class="nombreProducto">Giorgio Armani My Way Eau de Parfum - 30ml</p>
                    <p class="precioProducto">52,95 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto1" src="img/perfumes/viktor-rolf-spicebomb-infrared-eau-de-toilette.png"
                            alt="Viktor & Rolf Spicebomb Infrared Eau de Toilette - 50ml">
                    </figure>
                    <p class="nombreProducto">Viktor & Rolf Spicebomb Infrared Eau de Toilette - 50ml</p>
                    <p class="precioProducto">75,45 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto2" src="img/perfumes/PerfectMarcJacobsEaudeParfum100ml.png"
                            alt="Perfect Marc Jacobs Eau de Parfum 100ml">
                    </figure>
                    <p class="nombreProducto">Perfect Marc Jacobs Eau de Parfum 100ml</p>
                    <p class="precioProducto">92,95 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto1"
                            src="img/perfumes/GoodGirl100mlEaudeParfumRefillableEdition.png"
                            alt="Good Girl 100ml Eau de Parfum Refillable Edition">
                    </figure>
                    <p class="nombreProducto">Good Girl 100ml Eau de Parfum Refillable Edition</p>
                    <p class="precioProducto">70,00 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3"
                            src="img/perfumes/CalendariodeadvientoHerrera12díasdebelleza.png"
                            alt="Calendario de adviento Herrera: 12 días de belleza">
                    </figure>
                    <p class="nombreProducto">Calendario de adviento Herrera 12 días de belleza</p>
                    <p class="precioProducto">99,50 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto4" src="img/perfumes/YvesSaintLaurentMYSLFEaudeParfum60ml.png"
                            alt="Yves Saint Laurent MYSLF Eau de Parfum 60ml">
                    </figure>
                    <p class="nombreProducto">Yves Saint Laurent MYSLF Eau de Parfum 60ml</p>
                    <p class="precioProducto">82,95 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto5"
                            src="img/perfumes/MUGLERAlienEaudeParfumNaturalSprayRecargable-90ml.png"
                            alt="MUGLER Alien Eau de Parfum Natural Spray Recargable - 90ml">
                    </figure>
                    <p class="nombreProducto">MUGLER Alien Eau de Parfum Natural Spray - 90ml</p>
                    <p class="precioProducto">116,45 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto6" src="img/perfumes/VersaceErosforMenEaudeToilette100ml.png"
                            alt="Versace Eros for Men Eau de Toilette 100ml">
                    </figure>
                    <p class="nombreProducto">Versace Eros for Men Eau de Toilette 100ml</p>
                    <p class="precioProducto">96,45 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
        </section>

        <div class="banner asideBanner">
            <div class="textoBanner">
                <h2 class="tituloBanner">BLACK FRIDAY: 10% EXTRA</h2>
                <p>¡Aprovecha hasta un 50% de descuento en compras + 10% EXTRA en tus porductos
                    favoritos!¡Elige un REGALO para ti o para alguién especial con compras superiores a
                    100€!Oferta disponuble hasta el 06/01/2024</p>
            </div>
            <figure class="imgBanner">
                <img src="img/perfumes/venta-perfumes-black-friday_66941-92.png" alt="">
            </figure>
        </div>

        <section class="contenedor tipoProductos">
            <h2><a id="mujer">Perfumes Mujer</a></h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto4" src="Img/perfumes/EaudeRochasL'essentiel-EaudeParfum.png"
                            alt="Eau de Rochas L'essentiel - Eau de Parfum">
                    </figure>
                    <p class="nombreProducto">Eau de Rochas L'essentiel - Eau de Parfum</p>
                    <p class="precioProducto">69,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3" src="img/perfumes/BurberryGoddessEaudeParfumforWomen100ml.jpg"
                            alt="Burberry Goddess Eau de Parfum for Women 100ml">
                    </figure>
                    <p class="nombreProducto">Burberry Goddess Eau de Parfum for Women 100ml</p>
                    <p class="precioProducto">113,45 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto2" src="img/perfumes/OdeToDullnes-EaudeParfum.png"
                            alt="Ode To Dullness - Eau de Parfum">
                    </figure>
                    <p class="nombreProducto">Ode To Dullness - Eau de Parfum</p>
                    <p class="precioProducto">125,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3"
                            src="img/perfumes/YvesSaintLaurentBlackOpiumEaudeParfum30ml.png"
                            alt="Yves Saint Laurent Black Opium Eau de Parfum 30ml">
                    </figure>
                    <p class="nombreProducto">Yves Saint Laurent Black Opium Eau de Parfum 30ml</p>
                    <p class="precioProducto">52,95 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto2" src="img/perfumes/AlienGoddessSupraFlorale-EaudeParfum.png"
                            alt="Alien Goddess Supra Florale - Eau de Parfum">
                    </figure>
                    <p class="nombreProducto">Alien Goddess Supra Florale - Eau de Parfum</p>
                    <p class="precioProducto">104,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto4" src="img/perfumes/BergamotBloom100mlEaudeToilette.png"
                            alt="Bergamot Bloom 100ml Eau de Toilette">
                    </figure>
                    <p class="nombreProducto">Bergamot Bloom 100ml Eau de Toilette</p>
                    <p class="precioProducto">125,00 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto5" src="img/perfumes/YvesSaintLaurentLibreEaudeParfum90ml.jpg"
                            alt="Yves Saint Laurent Libre Eau de Parfum 90ml">
                    </figure>
                    <p class="nombreProducto">Yves Saint Laurent Libre Eau de Parfum 90ml</p>
                    <p class="precioProducto">101,95 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto4" src="img/perfumes/MoreMorePink-EaudeToilette.jpg"
                            alt="More More Pink - Eau de Toilette">
                    </figure>
                    <p class="nombreProducto">More More Pink - Eau de Toilette</p>
                    <p class="precioProducto">89,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
        </section>

        <section class="contenedor cajaMarca">
            <h2 class="tituloMarca">Marcas Top</h2>
            <div class="marca">
                <figure class="imgMarca">
                    <img src="img/perfumes/marcaCarolinaHerrera.png">
                </figure>
                <div class="textoMarca">
                    <h3>Carolina Herrera </h3>
                    <p>¡Descubre los productos de Carolina Herrera para tener una fragancia excepcional!</p>
                </div>
            </div>
            <div class="marca">
                <figure class="imgMarca">
                    <img src="img/perfumes/marcaBoss2.jpg">
                </figure>
                <div class="textoMarca">
                    <h3>Boss</h3>
                    <p>¡Una amplia gama de productos de Boss te está esperando!</p>
                </div>
            </div>
            <div class="marca">
                <figure class="imgMarca">
                    <img src="img/perfumes/marcaPacoRabanne.jpg">
                </figure>
                <div class="textoMarca">
                    <h3>Paco Rabanne</h3>
                    <p>¡Disfruta de los productos más exclusivos de Paco Rabanne unicamente aquí!</p>
                </div>
            </div>
        </section>

        <section class="contenedor tipoProductos">
            <h2><a id="hombre">Perfumes Hombre</a></h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto4" src="img/perfumes/BOSSBottledElixir-Fraganciaintensa.png"
                            alt="BOSS Bottled Elixir - Fragancia intensa">
                    </figure>
                    <p class="nombreProducto">BOSS Bottled Elixir - Fragancia intensa</p>
                    <p class="precioProducto">109,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto4"
                            src="img/perfumes/BadBoy150mlEaudeToiletteRefillableEdition.png"
                            alt="Bad Boy 150ml Eau de Toilette Refillable Edition">
                    </figure>
                    <p class="nombreProducto">Bad Boy 150ml Eau de Toilette Refillable Edition</p>
                    <p class="precioProducto">137,50 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto1" src="img/perfumes/PacoRabanneInvictusEaudeToilette200ml.png"
                            alt="Paco Rabanne Invictus Eau de Toilette 200ml">
                    </figure>
                    <p class="nombreProducto">Paco Rabanne Invictus Eau de Toilette 200ml</p>
                    <p class="precioProducto">105,95 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto5"
                            src="img/perfumes/JeanPaulGaultierLeMaleAguadeColonia125ml.png"
                            alt="Jean Paul Gaultier Le Male Agua de Colonia 125ml">
                    </figure>
                    <p class="nombreProducto">Jean Paul Gaultier Le Male Agua de Colonia 125ml</p>
                    <p class="precioProducto">77,45 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto1"
                            src="img/perfumes/ValentinoBorninRomaUomoEaudeToiletteforHim100ml.png"
                            alt="Valentino Born in Roma Uomo Eau de Toilette for Him 100ml">
                    </figure>
                    <p class="nombreProducto">Valentino Born in Roma Uomo Eau de Toilette for Him 100ml</p>
                    <p class="precioProducto">73,45 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3" src="img/perfumes/PradaLunaRossaCarbonEaudeToilette-100ml.png"
                            alt="Prada Luna Rossa Carbon Eau de Toilette - 100ml">
                    </figure>
                    <p class="nombreProducto">Prada Luna Rossa Carbon Eau de Toilette - 100ml</p>
                    <p class="precioProducto">78,95 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto1"
                            src="img/perfumes/ArmaniAcquaDiGioHommeEaudeToilette-100ml.png"
                            alt="Armani Acqua Di Gio Homme Eau de Toilette - 100ml">
                    </figure>
                    <p class="nombreProducto">Armani Acqua Di Gio Homme Eau de Toilette - 100ml</p>
                    <p class="precioProducto">72,45 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3" src="img/perfumes/BurberryHeroEaudeParfumforMen50ml.png"
                            alt="Burberry Hero Eau de Parfum for Men 50ml">
                    </figure>
                    <p class="nombreProducto">Burberry Hero Eau de Parfum for Men 50ml</p>
                    <p class="precioProducto">67,95 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
        </section>

        <div class="contenedor cajaKitDeMuestra">
            <h3 class="tituloKitDeMuestra">Kit de Muestra</h3>
            <div class="kitDeMuestra">
                <img src="img/perfumes/Sample_New_Xerjoff-Com.png">
            </div>
            <div class="kitDeMuestra">
                <img src="img/perfumes/Sample_New_Xerjoff-Com_2.png">
            </div>
            <p class="textoKitMuestra">
                Sample Kit de Sephora es un servicio que le permite descubrir más perfumes del portafolio de Sephora.
                Agrega
                hasta cuatro muestras de tu elección al configurador de kits, pruébalas en la comodidad de tu hogar.
            </p>
            <button class="botonKit">ELIGE AHORA</button>
        </div>

        <section class="contenedor cajaCofresRegalo">
            <h2><a id="regalos">Cofres Regalo</a></h2>
            <div class="cofresRegalo">
                <figure class="imagenProducto">
                    <img class="imgProducto1"
                        src="img/perfumes/MarcJacobsChristmas2023DaisyEaudeToiletteSpray50mlGiftSet.jpg"
                        alt="Marc Jacobs Christmas 2023 Daisy Eau de Toilette Spray 50ml Gift Set">
                </figure>
                <p class="nombreProducto">Marc Jacobs Christmas 2023 Daisy Eau de Toilette Spray 50ml Gift Set</p>
                <p class="precioProducto">63,95 €</p>
                <button class="botonCompraCofre">Comprar</button>
            </div>
            <div class="cofresRegalo">
                <figure class="imagenProducto">
                    <img class="imgProducto1"
                        src="img/perfumes/BadBoy100mlEaudeToilette,GeldeDucha100mlyMegavaporizador10ml.png"
                        alt="Bad Boy 100 ml Eau de Toilette, Gel de Ducha 100 ml y Megavaporizador 10 ml">
                </figure>
                <p class="nombreProducto">Bad Boy 100 ml Eau de Toilette, Gel de Ducha 100 ml y Megavaporizador</p>
                <p class="precioProducto">117,00 €</p>
                <button class="botonCompraCofre">Comprar</button>
            </div>
        </section>
    </div>

    <?php
    include './includes/footer.php';
    ?>
</body>
</html>
