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
        <section class="contenedor">
            <!-- TODO -->
            <div class="slider"></div>
        </section>
        <section class="contenedor">
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
            <h2 class="titulo"><a href="skinCare.php">Destacados en <span>SKIN CARE</span></a></h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/skincare/skincare (1).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Gel-Crema BYOMA</p>
                    <p class="precioProducto">12,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/skincare/skincare (2).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Gel-Crema BYOMA</p>
                    <p class="precioProducto">12,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/skincare/skincare (3).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Gel-Crema BYOMA</p>
                    <p class="precioProducto">12,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/skincare/skincare (4).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Gel-Crema BYOMA</p>
                    <p class="precioProducto">12,99 €</p>
                    <button class="botonCompra">Ver más</button>
                </div>
            </div>
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
                    <button class="botonCompra">Ver más</button>
                </div>
            </div>
        </section>
        <section class="contenedor">
            <!-- TODO -->
            <h2 class="titulo"><a href="cuidadoCapilar.php">Destacados en <span>CUIDADO CAPILAR</span></a></h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/skincare/BYOMA_limpiadorFacial.jpg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Gel-Crema BYOMA</p>
                    <p class="precioProducto">12,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
        </section>
    </div>

    <?php 
        include './includes/footer.php'; 
    ?>
</body>
</html>
