<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./styles/maquillaje.css?v=<?php echo time(); ?>">
</head>
<body>
    
    <?php 
        include './includes/header.php'; 
        include './includes/nav.php';
    ?>

    <h1>Maquillaje</h1>

    <aside class="descuentoMaquillaje">
        <div class="cajaTexto">
            <p class="texto1">MAQUILLAJE</p>
            <p class="texto2">DE LUJO</p>
        </div>
        <div class="cajaDescuento">
            <p class="descuento">50%</p>
        </div>
    </aside>
    <aside class="descuentoMaquillaje2">
        <div class="cajaTexto">
            <p class="texto1">MAQUILLAJE</p>
            <p class="texto2">LOW-COST</p>
        </div>
        <div class="cajaDescuento">
            <p class="descuento">20%</p>
        </div>
    </aside>

    <section></section>

    <?php 
        include './includes/footer.php'; 
    ?>

</body>
</html>
