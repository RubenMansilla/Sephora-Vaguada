<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./styles/index.css?v=<?php echo time(); ?>">
    <link rel="icon" href="img/favicon/icono.jpeg">
</head>
<body>
    <?php 
        include './includes/header.php'; 
        include './includes/nav.php';
    ?>
    <div class="main">
        <section class="contenedor hero">
            <div class="leftHero">
                <ul class="imageHero">
                    <li id="heroImage1" class="imageActual"><img src="./img/index/hero-image-1.jpg" alt="Perfumes imagen"></li>
                    <li id="heroImage2" class=""><img src="./img/index/hero-image-2.jpg" alt="Bloqueadores y SkinCare imagen"></li>
                    <li id="heroImage3" class=""><img src="./img/index/hero-image-3.jpg" alt="Maquillaje imagen"></li>
                    <li id="heroImage4" class="Productos body care imagen"><img src="./img/index/hero-image-4.jpg" alt=""></li>
                </ul>
                <div>
                    <div class="textHero">
                        <h1>
                            Bienvenido a Sephora
                        </h1>
                        <p>
                            Descubre nuestras novedades y ofertas exclusivas
                        </p>
                        <a class="btn" href="#primer-contenedor">
                            Mira la tienda
                        </a>
                    </div>
                </div>
            </div>
            <ul class="imagesSelector">
                <li id="heroSelector1" class="heroSelectorActual"><img src="./img/index/hero-image-1.jpg" alt="Perfumes selector"></li>
                <li id="heroSelector2" class=""><img src="./img/index/hero-image-2.jpg" alt="Bloqueadores y SkinCare selector"></li>
                <li id="heroSelector3" class=""><img src="./img/index/hero-image-3.jpg" alt="Maquillaje selector"></li>
                <li id="heroSelector4" class=""><img src="./img/index/hero-image-4.jpg" alt="Productos body care selector"></li>
            </ul>
        </section>
        <section class="contenedor" id="primer-contenedor">
            <h2 class="titulo"><a href="maquillaje.php">Destacados en <span>MAQUILLAJE</span></a></h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto14" src="img/maquillaje/GloWish - Soft Radiance Bronzing Powder.jpg"
                            alt="GloWish - Soft Radiance Bronzing Powder">
                    </figure>
                    <p class="nombreProducto">Huda Beauty | GloWish Soft Radiance Bronzing Powder</p>
                    <p class="precioProducto">19,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto16" src="img/maquillaje/KVD Beauty Tattoo Liner Eyeliner.jpg"
                            alt="KVD Beauty | Tattoo Liner Eyeliner">
                    </figure>
                    <p class="nombreProducto">KVD Beauty | Tattoo Liner Eyeliner</p>
                    <p class="precioProducto">23,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto7"
                            src="img/maquillaje/Forever Skin Correct - Corrector de alta cobertura  .jpg"
                            alt="Forever Skin Correct - Corrector de alta cobertura ">
                    </figure>
                    <p class="nombreProducto">Dior | Forever Skin Correct de alta cobertura </p>
                    <p class="precioProducto">41,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto4" src="img/maquillaje/Cofre Diorshow Esencial Ojos.jpg"
                            alt="Cofre Diorshow Esencial Ojos">
                    </figure>
                    <p class="nombreProducto">Dior | Cofre Diorshow Esencial Ojos</p>
                    <p class="precioProducto">44,60 €</p>
                    <a href="maquillaje.php" class="botonCompra">Ver más</a>
                </div>
            </div>
        </section>
        <section class="contenedor">
            <a class="banner bannerSkinCare" href="skinCare.php">
                <figure class="bannerImg">
                    <img src="./img/index/skincare.jpg"
                        alt="Imagen con productos variados del cuidado facial / skin care">
                </figure>
                <div class="contenidoBanner">
                    <div href="perfumes.php" class="textoBanner">
                        <h3>
                            Encuentra tu match perfecto
                        </h3>
                        <p>
                            Descubre tu rutina de cuidado facial ideal en la página de Skin Care
                        </p>
                    </div>
                    <button>
                        ¡Haz match ya!
                    </button>
                </div>
            </a>
        </section>
        <section class="contenedor">
            <h2 class="titulo"><a href="skinCare.php">Destacados en <span>SKIN CARE</span></a></h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/skincare/BYOMA_limpiadorFacial.jpg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Gel-Crema Limpiador BYOMA</p>
                    <p class="precioProducto">12,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/skincare/skincare (15).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Aqua bomb jelly cleanser BELIF</p>
                    <p class="precioProducto">25,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/skincare/skincare (12).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">GLOW TONER Charlotte Tilbury</p>
                    <p class="precioProducto">49,00 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/skincare/skincare (11).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Water Bank Blue Hyaluronic</p>
                    <p class="precioProducto">24,99 €</p>
                    <a href="skinCare.php" class="botonCompra">Ver más</a>
                </div>
            </div>
        </section>
        <section class="contenedor">
            <a class="banner bannerPerfume" href="perfumes.php">
                <figure class="bannerImg">
                    <img src="./img/index/bannercologne.jpg"
                        alt="Foto linda de Perfume en paisaje natural con colores anaranjados">
                </figure>
                <div class="contenidoBanner">
                    <div href="perfumes.php" class="textoBanner">
                        <h3>
                            ¡Descubre las novedades de la semana!
                        </h3>
                        <p>Mira nuestra página de Perfumes</p>
                    </div>
                    <button>
                        Ver más
                    </button>
                </div>
            </a>
        </section>
        <section class="contenedor">
            <h2 class="titulo"><a href="perfumes.php">Destacados en <span>PERFUMES</span></a></h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto6" src="img/perfumes/Versace Eros for Men Eau de Toilette 100ml.png"
                            alt="Versace Eros for Men Eau de Toilette 100ml">
                    </figure>
                    <p class="nombreProducto">Versace Eros for Men Eau de Toilette 100ml</p>
                    <p class="precioProducto">96,45 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto1"
                            src="img/perfumes/Good Girl 100ml Eau de Parfum Refillable Edition.png"
                            alt="Good Girl 100ml Eau de Parfum Refillable Edition">
                    </figure>
                    <p class="nombreProducto">Good Girl 100ml Eau de Parfum Refillable Edition</p>
                    <p class="precioProducto">70,00 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto4" src="img/perfumes/BOSS Bottled Elixir - Fragancia intensa.png"
                            alt="BOSS Bottled Elixir - Fragancia intensa">
                    </figure>
                    <p class="nombreProducto">BOSS Bottled Elixir - Fragancia intensa</p>
                    <p class="precioProducto">109,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto5"
                            src="img/perfumes/Jean Paul Gaultier Le Male Agua de Colonia 125ml.png"
                            alt="Jean Paul Gaultier Le Male Agua de Colonia 125ml">
                    </figure>
                    <p class="nombreProducto">Jean Paul Gaultier Le Male Agua de Colonia 125ml</p>
                    <p class="precioProducto">77,45 €</p>
                    <a href="perfumes.php" class="botonCompra">Ver más</a>
                </div>
            </div>
        </section>
        <section class="contenedor">
            <h2 class="titulo"><a href="cuidadoCapilar.php">Destacados en <span>CUIDADO CAPILAR</span></a></h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/pelo/mascarilla (3).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Honey Infused Mask GISOU</p>
                    <p class="precioProducto">46,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/pelo/champoo (4).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">No.4 Bond Shampoo OLAPLEX</p>
                    <p class="precioProducto">29,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/pelo/acondicionador (2).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Honey Conditioner GISOU</p>
                    <p class="precioProducto">29,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto5" src="./img/pelo/champoo (2).jpeg" alt="Honey Infused Wash GISOU">
                    </figure>
                    <p class="nombreProducto">Honey Infused Wash GISOU</p>
                    <p class="precioProducto">9,99 €</p>
                    <a href="perfumes.php" class="botonCompra">Ver más</a>
                </div>
            </div>
        </section>
        <section class="contenedor contenedorVentajas" id="ventajas">
            <div class="textoVentajas">
                <div>
                    <h2>Ventajas de comprar en Sephora</h2>
                    <p>Estas son <span>algunas</span> de las muchas ventajas de comprar en Sephora</p>
                </div>
            </div>
            <div class="ventajas">
                <div class="ventaja">
                    <figure>
                        <img src="./img/index/ventajas-evio-gratis.jpg" alt="Envio gratis imagen">
                        <figcaption>
                            <div></div>
                            <h5>Envíos gratis</h2>
                                <p>Envió gratis a partir de 30€</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="ventaja">
                    <figure>
                        <img src="./img/index/ventajas-muestra.jpg" alt="Varias muestras imagen">
                        <figcaption>
                            <div></div>
                            <h5>Muestras</h2>
                                <p>Hasta dos muestras</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="ventaja">
                    <figure>
                        <img src="./img/index/ventajas-devolucion.jpg" alt="Retorno en tienda imagen">
                        <figcaption>
                            <div></div>
                            <h5>Devoluciones</h2>
                                <p>60 días para cambios y devoluciones gratis</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="ventaja">
                    <figure>
                        <img src="./img/index/ventajas-recoge-tienda.jpg" alt="Recoge en tienda imagen">
                        <figcaption>
                            <div></div>
                            <h5>Click & Collect</h2>
                                <p>Recoge en 2 horas gratis</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="ventaja">
                    <figure>
                        <img src="./img/index/ventajas-puntos-recogida.jpg" alt="Puntos de recogida imagen">
                        <figcaption>
                            <div></div>
                            <h5>Puntos de recogida</h5>
                            <p>Recibe tu pedido en un punto de recogida cercano</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="ventaja">
                    <figure>
                        <img src="./img/index/ventajas-ayuda-contacto.jpg" alt="Ayuda y contacto imagen">
                        <figcaption>
                            <div></div>
                            <h5>Ayuda y Contacto</h5>
                            <p>¿Necesitas ayuda? Contacta con nosotros</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <section class="contenedor contenedorFormulario" id="newsletter">
            <div class="newsletter">
                <div class="newsletterText">
                    <h4 class="titulo">¡Suscríbete a nuestro newsletter!</h4>
                    <p>Recibe en tu correo electrónico las últimas novedades, consejos y ofertas exclusivas.</p>
                    <p class="Oferta">Además, te regalamos un 10% de descuento en tu próxima compra.</p>
                </div>
                <form class="emailForm">
                    <input type="text" placeholder="Introduce tu email" />
                    <button type="reset">Enviar</button>
                </form>
            </div>
            <div class="clear"></div>
            <div class="condiciones">
                <a href="#">(1) Ver condiciones de la oferta</a>
            </div>
        </section>
    </div>

    <?php 
        include './includes/footer.php'; 
    ?>

    <script src="./scripts/index.js"></script>

</body>
</html>
