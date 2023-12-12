<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sephora Maquillajes</title>
    <link rel="icon" href="img/favicon/icono.jpeg">
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/global.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./styles/maquillaje.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php
    include './includes/header.php';
    include './includes/nav.php';
    ?>

    <div class="main">
        <section class="contenedor contenedorDescuentos">
            <aside class="descuentoMaquillaje">
                <div class="cajaTexto">
                    <p>MAQUILLAJE</p>
                    <p>DE LUJO</p>
                </div>
                <div class="cajaDescuento">
                    <p>50%</p>
                </div>
            </aside>
            <aside class="descuentoMaquillaje">
                <div class="cajaTexto">
                    <p class="texto1">MAQUILLAJE</p>
                    <p class="texto2">LOW-COST</p>
                </div>
                <div class="cajaDescuento">
                    <p>20%</p>
                </div>
            </aside>
        </section>

        <section class="contenedor contenedorProductos">
            <h2 class="tituloProductos">Máscara de Pestañas</h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img src="img/maquillaje/HighImpactHigh-FiFullVolume.png"
                            alt="High Impact High-Fi Full Volume">
                    </figure>
                    <p class="nombreProducto">High Impact High-Fi <br> Full Volume</p>
                    <p class="precioProducto">36,00 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto2" src="img/maquillaje/HighImpactLashAmplifyingSerum.jpeg"
                            alt="High Impact Lash Amplifying Serum">
                    </figure>
                    <p class="nombreProducto">High Impact Lash Amplifying Serum</p>
                    <p class="precioProducto">53,00 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3" src="img/maquillaje/BrowHarmonyFlexibleLiftingGel.jpeg"
                            alt="Brow Harmony Flexible Lifting Gel">
                    </figure>
                    <p class="nombreProducto">Brow Harmony Flexible Lifting Gel</p>
                    <p class="precioProducto">21,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto2" src="img/maquillaje/DEFINITIVEMASCARADEJORGEDELAGARZA.jpeg"
                            alt="DEFINITIVE MASCARA DE JORGE DE LA GARZA">
                    </figure>
                    <p class="nombreProducto">Defenitive | Mascara De Jorge De La Garza</p>
                    <p class="precioProducto">20,50 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto4" src="img/maquillaje/CofreDiorshowEsencialOjos.jpg"
                            alt="Cofre Diorshow Esencial Ojos">
                    </figure>
                    <p class="nombreProducto">Dior | Cofre Diorshow Esencial Ojos</p>
                    <p class="precioProducto">44,60 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3" src="img/maquillaje/EVOEYESERUMCRECIMIENTODEPESTAÑAS.jpg"
                            alt="EVOEYE SERUM CRECIMIENTO DE PESTAÑAS">
                    </figure>
                    <p class="nombreProducto">Evoeye | Serum Crecimiento De Pestañas</p>
                    <p class="precioProducto">69,95 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto2" src="img/maquillaje/MasterBladeLapizdecejas.jpg"
                            alt="Master Blade® -Lapiz de cejas">
                    </figure>
                    <p class="nombreProducto">Mario | Master Blade Lapiz de cejas</p>
                    <p class="precioProducto">26,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto2" src="img/maquillaje/MiniBrowGenius-SérumparacejasMINI.jpg"
                            alt="Mini Brow Genius - Sérum para cejas MINI">
                    </figure>
                    <p class="nombreProducto">Mini Brow Genius Sérum para cejas MINI</p>
                    <p class="precioProducto">40,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
        </section>

        <section class="contenedor contenedorProductos">
            <h2 class="tituloProductos">Labios</h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto5" src="img/maquillaje/Hydra-PeptideLipButter.jpg"
                            alt="Hydra-Peptide Lip Butter ">
                    </figure>
                    <p class="nombreProducto">Nudestix | Hydra-Peptide Lip Butter </p>
                    <p class="precioProducto">17,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3" src="img/maquillaje/NudiesAllOverFaceColorMatte+Glow.jpg"
                            alt="Nudies All Over Face Color Matte + Glow ">
                    </figure>
                    <p class="nombreProducto">Nudestix | Nudies All Over Face Color Matte </p>
                    <p class="precioProducto">25,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto2" src="img/maquillaje/HoneyInfusedGolenShimmerGlowLipOil.jpg"
                            alt="Honey Infused Golden Shimmer Glow Lip Oil ">
                    </figure>
                    <p class="nombreProducto">Honey Infused Golden Shimmer Glow Lip Oil </p>
                    <p class="precioProducto">27,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto6"
                            src="img/maquillaje/DoubleWear24HStay-in-Place-Delineadordelabios.jpg"
                            alt="Double Wear 24H Stay-in-Place - Delineador de labios">
                    </figure>
                    <p class="nombreProducto">Double Wear 24H Stay-in-Place - Delineador de labios</p>
                    <p class="precioProducto">30,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto2"
                            src="img/maquillaje/GlossBombCream-Brillodelabioslacadodecolorintenso.jpg"
                            alt="Gloss Bomb Cream - Brillo de labios lacado de color intenso">
                    </figure>
                    <p class="nombreProducto">Gloss Bomb Cream - Brillo de labios lacado de color intenso</p>
                    <p class="precioProducto">22,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto2"
                            src="img/maquillaje/JoliRouge-RecambioVelvetJoliRougeVelvet-Barradelabiosacabadomate.jpg"
                            alt="Joli Rouge - Recambio Velvet Joli Rouge Velvet - Barra de labios acabado mate">
                    </figure>
                    <p class="nombreProducto">Joli Rouge - Barra de labios acabado mate</p>
                    <p class="precioProducto">24,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3"
                            src="img/maquillaje/SoftMatte&Easy-Barradelabiosmatesuave.jpg"
                            alt="Soft Matte & Easy - Barra de labios mate suave">
                    </figure>
                    <p class="nombreProducto">Soft Matte - Barra de labios acabado mate suave</p>
                    <p class="precioProducto">13,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto7" src="img/maquillaje/UltraSuede-Barradelabiosmate.jpg"
                            alt="Ultra Suede® - Barra de labios mate">
                    </figure>
                    <p class="nombreProducto">Mario | Ultra Suede - Barra de labios mate</p>
                    <p class="precioProducto">28,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
        </section>

        <aside class="cajaProbador">
            <div>
                <h2 class="tituloProbador">PROBADOR DE MAQUILLAJE VIRTUAL</h2>
                <p class="textoProbador">¿Quieres saber cómo te quedan tus productos favoritos de Sephora y de tus
                    marcas
                    favoritas? ¡Pruébalos ahora mismo!</p>
                <p class="botonExplorar">EXPLORAR MÁS</p>
                <img class="imgBoton" src="img/maquillaje/flecha.png">
            </div>
            <figure class="comparativaMaquillaje">
                <img src="img/maquillaje/comparativaMaquillaje.jpeg">
            </figure>
        </aside>

        <section class="contenedor contenedorProductos">
            <h2 class="tituloProductos">Bases de Maquillaje</h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto8"
                            src="img/maquillaje/DiorForeverSkinCorrect-Correctordealtacobertura.jpg"
                            alt="Dior Forever Skin Correct - Corrector de alta cobertura">
                    </figure>
                    <p class="nombreProducto">Dior Forever Skin Correct de alta cobertura</p>
                    <p class="precioProducto">41,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto5" src="img/maquillaje/GlowishMultidew-CremaHidratanteConColor.jpg"
                            alt="Glowish Multidew - Crema Hidratante Con Color">
                    </figure>
                    <p class="nombreProducto">Glowish Multidew - Crema Hidratante Con Color</p>
                    <p class="precioProducto">40,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3"
                            src="img/maquillaje/LuminousSilk-Basedemaquillajeacabadoluminosoynatural.jpg"
                            alt="Luminous Silk - Base de maquillaje acabado luminoso y natural">
                    </figure>
                    <p class="nombreProducto">Giogio Armani | Luminous Silk - Base con acabado luminoso</p>
                    <p class="precioProducto">60,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto5"
                            src="img/maquillaje/RareBeautyLiquidTouchbrBasedemaquillajeligera.jpg"
                            alt="Rare Beauty | Liquid Touch Base de maquillaje ligera">
                    </figure>
                    <p class="nombreProducto">Rare Beauty | Liquid Touch Base de maquillaje ligera</p>
                    <p class="precioProducto">34,49 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3" src="img/maquillaje/MilkyBoost-Lechedesmaquillante.jpg"
                            alt="Milky Boost - Leche desmaquillante">
                    </figure>
                    <p class="nombreProducto">Clarins | Milky Boost - Leche desmaquillante</p>
                    <p class="precioProducto">41,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3"
                            src="img/maquillaje/MatteVelvetSkin-Basedemaquillajefluidamate.jpg"
                            alt="Matte Velvet Skin - Base de maquillaje fluida mate">
                    </figure>
                    <p class="nombreProducto">Make up Forever | Matte Velvet Skin - Base de maquillaje mate</p>
                    <p class="precioProducto">41,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto4"
                            src="img/maquillaje/Eazedrop-BasedeMaquillajeEfectoDifuminado.jpg"
                            alt="Eaze drop - Base de Maquillaje Efecto Difuminado">
                    </figure>
                    <p class="nombreProducto">Fenty Beauty | Eaze drop Base de Efecto Difuminado</p>
                    <p class="precioProducto">36,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto5" src="img/maquillaje/FaceGlowFoundation-Basedemaquillaje.jpg"
                            alt="Face Glow Foundation - Base de maquillaje">
                    </figure>
                    <p class="nombreProducto">Natasha Denona | Face Glow Foundation - Base de maquillaje</p>
                    <p class="precioProducto">44,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
        </section>

        <section class="contenedor contenedorProductos">
            <h2 class="tituloProductos">Correctores</h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto9"
                            src="img/maquillaje/PositiveLight-Correctorlíquidoultraligero.jpg"
                            alt="Positive Light - Corrector líquido ultraligero">
                    </figure>
                    <p class="nombreProducto">Rare Beauty | Positive Light Corrector líquido ultraligero</p>
                    <p class="precioProducto">29,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3"
                            src="img/maquillaje/CorrectorPowerFabric+-Correctordelargaduración.jpg"
                            alt="Corrector Power Fabric + - Corrector de larga duración">
                    </figure>
                    <p class="nombreProducto">Armani | Corrector Power Fabric Corrector de larga duración</p>
                    <p class="precioProducto">41,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3" src="img/maquillaje/InstantConcealer-Correctorantiojeras.jpg"
                            alt="Instant Concealer - Corrector antiojeras">
                    </figure>
                    <p class="nombreProducto">Clarins | Instant Concealer - Corrector antiojeras</p>
                    <p class="precioProducto">34,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3" src="img/maquillaje/HDSkinConcealer-Correctorimperceptible.jpg"
                            alt="HD Skin Concealer - Corrector imperceptible">
                    </figure>
                    <p class="nombreProducto">Make Up Forever | HD Skin Concealer - Corrector imperceptible</p>
                    <p class="precioProducto">29,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3"
                            src="img/maquillaje/SoftMatte&Easy-Barradelabiosmatesuave.jpg"
                            alt="Stay Naked Quickie 24Hr - Corretor Muti Usos">
                    </figure>
                    <p class="nombreProducto">Urban Decay | Stay Naked Quickie 24Hr - Corretor Muti Usos</p>
                    <p class="precioProducto">34,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto7" src="img/maquillaje/BornThisWaySuperCoverageConcealer.jpg"
                            alt="Born This Way Super Coverage Concealer">
                    </figure>
                    <p class="nombreProducto">Too Faced | Born This Way Super Coverage Concealer</p>
                    <p class="precioProducto">16,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto4" src="img/maquillaje/PrismeLibreSkinCaringCorrector.jpg"
                            alt="Prisme Libre Skin-Caring Corrector">
                    </figure>
                    <p class="nombreProducto">Givenchy | Prisme Libre Skin-Caring Corrector</p>
                    <p class="precioProducto">37,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto7"
                            src="img/maquillaje/ForeverSkinCorrect-Correctordealtacobertura.jpg"
                            alt="Forever Skin Correct - Corrector de alta cobertura ">
                    </figure>
                    <p class="nombreProducto">Dior | Forever Skin Correct de alta cobertura </p>
                    <p class="precioProducto">41,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
        </section>

        <aside class="contenedor contenedorTrucos">
            <h2>TRUCOS Y TUTORIALES</h2>
            <div class="trucos">
                <div class="truco1">
                    <p>MAKE UP: APRENDE A HACERLO</p>
                </div>
                <div class="truco2">
                    <p>STRAWBERRY MAKEUP</p>
                </div>
                <div class="truco3">
                    <p>COMO PINTARSE LOS OJOS PASO A PASO</p>
                </div>
                <div class="truco4">
                    <p>TIPS DE MAQUILLAJE</p>
                </div>
            </div>
        </aside>

        <section class="contenedor contenedorProductos">
            <h2 class="tituloProductos">Colorete</h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto5" src="img/maquillaje/ColorHaze-CremaMulti-usoColorHaze.jpg"
                            alt="Color Haze - Crema Multi-uso Color Haze">
                    </figure>
                    <p class="nombreProducto">Ilia | Color Haze - Crema Multi-uso Color Haze</p>
                    <p class="precioProducto">34,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto10"
                            src="img/maquillaje/Chachatint-Coloretelíquidobenefitparamejillasylabios.jpg"
                            alt="Chachatint - Colorete líquido benefit para mejillas y labios">
                    </figure>
                    <p class="nombreProducto">Chachatint | Colorete líquido benefit para mejillas y labios</p>
                    <p class="precioProducto">22,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto11" src="img/maquillaje/StayVulnerable-Coloretesegundapiel.jpg"
                            alt="Stay Vulnerable - Colorete 'segunda piel'">
                    </figure>
                    <p class="nombreProducto">Rare Beauty | Stay Vulnerable - Colorete "segunda piel"</p>
                    <p class="precioProducto">27,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto6" src="img/maquillaje/BrochaprosefionalparacoloretePronº93.jpg"
                            alt="Brocha prosefional para colorete Pro nº 93">
                    </figure>
                    <p class="nombreProducto">Sephora | Brocha prosefional para colorete Pro nº 93</p>
                    <p class="precioProducto">24,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto10" src="img/maquillaje/MatchStixColorAdaptiveCheek+LipStick.jpg"
                            alt="Match Stix Color Adaptive Cheek + Lip Stick ">
                    </figure>
                    <p class="nombreProducto">Fenty Beauty | Match Stix Color Adaptive Cheek + Lip Stick </p>
                    <p class="precioProducto">29,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto14" src="img/maquillaje/SoftPopPlumpingBlushVeil.jpg"
                            alt="Soft Pop Plumping Blush Veil">
                    </figure>
                    <p class="nombreProducto">Mario | Soft Pop Plumping Blush Veil</p>
                    <p class="precioProducto">33,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto10" src="img/maquillaje/AfterglowLiquidBlush-Coloretelíquido.jpg"
                            alt="Afterglow Liquid Blush - Colorete líquido">
                    </figure>
                    <p class="nombreProducto">Nars | Afterglow Liquid Blush Colorete líquido</p>
                    <p class="precioProducto">39,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto3" src="img/maquillaje/BlushBalmStick-Cremaenbarramultiusos.jpg"
                            alt="Blush Balm Stick - Crema en barra multiusos">
                    </figure>
                    <p class="nombreProducto">Summer Fridays | Blush Balm Stick - Crema en barra multiusos</p>
                    <p class="precioProducto">32,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
        </section>

        <section class="contenedor contenedorProductos">
            <h2 class="tituloProductos">Polvos</h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto8" src="img/maquillaje/EverMatte-PolvosSueltos.jpg"
                            alt="Ever Matte - Polvos Sueltos">
                    </figure>
                    <p class="nombreProducto">Clarins | Ever Matte - Polvos Sueltos</p>
                    <p class="precioProducto">49,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto8" src="img/maquillaje/SkinFetishSublimePerfection.jpg"
                            alt="Skin Fetish Sublime Perfection">
                    </figure>
                    <p class="nombreProducto">PAT McGRATH LABS | Skin Fetish Sublime Perfection</p>
                    <p class="precioProducto">48,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto12" src="img/maquillaje/PolvoIluminador-GloWishLuminousPowder.jpg"
                            alt="Polvo Iluminador - GloWish Luminous Powder">
                    </figure>
                    <p class="nombreProducto">Huda Beauty | Polvo Iluminador - GloWish Luminous Powder</p>
                    <p class="precioProducto">39,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto13" src="img/maquillaje/UltraHDSettingPowder.jpg"
                            alt="Ultra HD Setting Powder ">
                    </figure>
                    <p class="nombreProducto">Make up Forever | Ultra HD Setting Powder </p>
                    <p class="precioProducto">19,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto14"
                            src="img/maquillaje/ForeverCushionPowder-Polvossueltosderostro.jpg"
                            alt="Forever Cushion Powder - Polvos sueltos de rostro ">
                    </figure>
                    <p class="nombreProducto">Dior | Forever Cushion Powder Polvos sueltos de rostro </p>
                    <p class="precioProducto">69,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto15" src="img/maquillaje/LuminousSilkGlowFusionPowder.jpg"
                            alt="Luminous Silk Glow Fusion Powder">
                    </figure>
                    <p class="nombreProducto">Armani | Luminous Silk Glow Fusion Powder</p>
                    <p class="precioProducto">55,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto15" src="img/maquillaje/AlmostPowderMakeupBasenaturalenpolvo.jpg"
                            alt="Almost Powder Makeup Base natural en polvo">
                    </figure>
                    <p class="nombreProducto">Clinique | Almost Powder Makeup Base natural en polvo</p>
                    <p class="precioProducto">44,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto14" src="img/maquillaje/GloWish-SoftRadianceBronzingPowder.jpg"
                            alt="GloWish - Soft Radiance Bronzing Powder">
                    </figure>
                    <p class="nombreProducto">Huda Beauty | GloWish Soft Radiance Bronzing Powder</p>
                    <p class="precioProducto">19,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
            </div>
        </section>

        <section class="contenedor contenedorProductos">
            <h2 class="tituloProductos">Eyeliner</h2>
            <div class="productos">
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto16" src="img/maquillaje/KVDBeautyTattooLinerEyeliner.jpg"
                            alt="KVD Beauty | Tattoo Liner Eyeliner">
                    </figure>
                    <p class="nombreProducto">KVD Beauty | Tattoo Liner Eyeliner</p>
                    <p class="precioProducto">23,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto16" src="img/maquillaje/BetterThanSexEyeliner-Eyelinerlíquido.jpg"
                            alt="Better Than Sex Eyeliner - Eyeliner líquido">
                    </figure>
                    <p class="nombreProducto">Too Faced | Better Than Love Eyeliner líquido</p>
                    <p class="precioProducto">29,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto16" src="img/maquillaje/PerfectStrokes-Delineadorlíquidomate.jpg"
                            alt="Perfect Strokes - Delineador líquido mate">
                    </figure>
                    <p class="nombreProducto">Rare Beauty | Perfect Strokes Delineador líquido mate</p>
                    <p class="precioProducto">26,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto16" src="img/maquillaje/HighImpactGelTechEyeliner.jpg"
                            alt="High Impact™ Gel Tech Eyeliner">
                    </figure>
                    <p class="nombreProducto">Clinique | High Impact Gel Tech Eyeliner</p>
                    <p class="precioProducto">28,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto16"
                            src="img/maquillaje/Brocha-Pinceldelineadorprofesionaln.º22.jpg"
                            alt="Brocha - Pincel delineador profesional n.º 22">
                    </figure>
                    <p class="nombreProducto">Sephora | Brocha - Pincel delineador profesional</p>
                    <p class="precioProducto">19,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto16" src="img/maquillaje/PerfectStrokes-Delineadorlíquidomate.jpg"
                            alt="Perfect Strokes Gel Eyeliner">
                    </figure>
                    <p class="nombreProducto">Rare Beauty | Perfect Strokes Gel Eyeliner</p>
                    <p class="precioProducto">20,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto16" src="img/maquillaje/CleanLine-Delineadordeojoslíquido.jpg"
                            alt="Clean Line - Delineador de ojos líquido">
                    </figure>
                    <p class="nombreProducto">Ilia | Clean Line - Delineador de ojos líquido</p>
                    <p class="precioProducto">29,99 €</p>
                    <button class="botonCompra">Comprar</button>
                </div>
                <div class="producto">
                    <figure class="imagenProducto">
                        <img class="imgProducto16" src="img/maquillaje/MiniTattooPencilLiner-Eyeliner.jpg"
                            alt="Mini Tattoo Pencil Liner - Eyeliner">
                    </figure>
                    <p class="nombreProducto">KVD Beauty | Mini Tattoo Pencil Liner Eyeliner</p>
                    <p class="precioProducto">14,99 €</p>
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
