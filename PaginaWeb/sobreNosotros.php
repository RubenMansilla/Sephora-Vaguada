<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Sephora</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./styles/sobreNosotros.css?v=<?php echo time(); ?>">
    <link rel="icon" href="img/favicon/icono.jpeg">
</head>
<body>
    <?php 
        include './includes/header.php'; 
        include './includes/nav.php';
    ?>

    <div class="main">
        <section class="section">
            <div class="contenido">
                <h1>Sobre <span>Sephora</span></h1>
                <p>
                    Creemos que la belleza prospera en la diversidad y el descubrimiento.
                    Nuestro propósito es ampliar la forma en que el mundo ve la belleza potenciando lo <span>Extra-Ordinario</span>
                    que hay en cada uno de nosotros.
                </p>
            </div>
        </section>
        <section class="section">
            <div class="contenido">
                <h2>PATRIMONIO</h2>
                <p>Desde el principio, nuestra fundadora creyó que Sephora no sólo podría revolucionar la <span>venta minorista</span> de productos de belleza, sino que tendría un impacto positivo en el mundo.</p>
            </div>
        </section>
        <section class="section">
            <div class="contenido">
                <h2>ADN</h2>
                <p>Servir a nuestros clientes ha sido nuestra obsesión desde el principio. Nuestro placer es ofrecer una experiencia de belleza de prestigio, innovadora y cuidada, que da a las personas la libertad de explorar su belleza y conocer la mejor versión de sí mismas.</p>
            </div>
        </section>
        <section class="section">
            <div class="contenido">
                <p>Sephora cree en un mundo que defienda toda la belleza. Un mundo en el que cada uno de nosotros se sienta reconocido por lo que es, no por lo que otros quieren que sea.</p>
            </div>
        </section>
        <section class="section">
            <div class="contenido">
                <h2>Selección de productos</h2>
                <p>En Sephora, nuestro compromiso es ofrecer la selección más única y especial en belleza de prestigio.</p>
            </div>
        </section>
        <section class="section">
            <div class="contenido">
                <p>Como parte de la familia LVMH, el grupo de artículos de lujo líder en el mundo, Sephora tiene una poderosa presencia en mercados de todo el mundo, transformando y elevando constantemente la experiencia de compra de productos de belleza.</p>
            </div>
        </section>
        <section class="section">
            <div class="contenido contenidoMapa">
                <div>
                    <h2>Ubicaciones</h2>
                    <p>Estamos presentes en 36 mercados con más de <span>3 000</span> puntos de venta y más de 30 sitios de comercio electrónico.</p>
                </div>
                <div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3034.823387965801!2d-3.710786924280617!3d40.47917205183705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229c0a9e65f33%3A0xa53864eef9d64f8b!2sSephora!5e0!3m2!1ses-419!2ses!4v1702243849443!5m2!1ses-419!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h2>Ubicación Destacada</h2>
                </div>
            </div>
        </section>
    </div>

    <?php 
        include './includes/footer.php'; 
    ?>
</body>
</html>
