<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuidado Capilar</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/global.css?v=<?php echo time(); ?>">
    <link rel="icon" href="img/favicon/icono.jpeg">
</head>
<body>

    <?php 
        include './includes/header.php'; 
        include './includes/nav.php';
    ?>

    <div class="main">
        <section class="contenedor">
            <h1 class="titulo">Shampoo</h1>
            <div class="productos">
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
                        <img src="./img/pelo/champoo (3).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Champú Hidratante MOROCCANOIL</p>
                    <p class="precioProducto">25,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/pelo/champoo (2).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Honey Infused Wash GISOU</p>
                    <p class="precioProducto">9,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/pelo/champoo (1).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Brazilian Joia Shampoo SOL DE JANEIRO</p>
                    <p class="precioProducto">12,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
            <section class="contenedor">
            <h1 class="titulo">Macarilla</h1>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/pelo/mascarilla (4).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Medium Hair Treatment OUAI</p>
                    <p class="precioProducto">39,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
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
                        <img src="./img/pelo/mascarilla (2).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Olaplex 3 Hair Perfector OLAPLEX</p>
                    <p class="precioProducto">29,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/pelo/mascarilla (1).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Mascarilla Capilar MOROCCANOIL</p>
                    <p class="precioProducto">43,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
            <section class="contenedor">
            <h1 class="titulo">Acondicionador</h1>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/pelo/acondicionador (1).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Acondicionador MOROCCANOIL</p>
                    <p class="precioProducto">26,99 €</p>
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
                        <img src="./img/pelo/acondicionador (3).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Medium Hair Acondic. OUAI</p>
                    <p class="precioProducto">55,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="./img/pelo/acondicionador (4).jpeg" alt="limpiador1">
                    </figure>
                    <p class="nombreProducto">Brasilianischer Joia™ SOL DE JANEIRO</p>
                    <p class="precioProducto">11,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
        </section>
        <section class="contenedor">

        </section>
    </div>

    <?php 
        include './includes/footer.php'; 
    ?>

</body>
</html>
