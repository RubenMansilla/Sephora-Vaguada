<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/global.css?v=<?php echo time(); ?>">
    <link rel="icon" href="img/favicon/icono.jpeg">
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/skincare.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php 
        include './includes/header.php'; 
        include './includes/nav.php';
    ?>

    <div class="main">
        <section class="contenedor">
            <img class="imagen" src="./img/skincare/BYOMA_limpiadorFacial.jpg" alt="limpiador1">
            <p class="nombre">Gel-Crema Limpiador <br> BYOMA</p>
            <p class="precio">12,99 €</p>
            <p class="comprar">Comprar</p>
        </section>
    </div>

    <?php 
        include './includes/footer.php'; 
    ?>
</body>
</html>
