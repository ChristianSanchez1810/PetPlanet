<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Universales</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="fondo-espacial">
        <div class="estrellas-contenedor" id="estrellas">
            <div class="estrella-fugaz"></div>
        </div>


        <?php include 'includes/header.php'; ?>

        <main>
            <section class="sobre-nosotros">
                <div class="contenido-nosotros">
                    <h2>Nuestra Misión Intergaláctica</h2>

                    <p>
                        Bienvenido a <strong>PetPlanet</strong>. Somos una tripulación de exploradores dedicados a
                        consentir
                        a los seres más importantes del universo: tus mascotas.
                    </p>

                    <p>
                        Nuestra historia comenzó mirando las estrellas, preguntándonos cómo podíamos ofrecer
                        algo diferente. Así nació este espacio, diseñado para conectar a perros, gatos y hámsters
                        con productos de calidad estelar que no encontrarás en otro planeta.
                    </p>

                    <div class="valores">
                        <div class="valor-card">
                            <h3>Amor Infinito</h3>
                            <p>Cuidamos cada detalle porque amamos a los animales tanto como tú. Son nuestra familia.
                            </p>
                        </div>
                        <div class="valor-card">
                            <h3>Seguridad Total</h3>
                            <p>Productos probados para resistir las aventuras más salvajes y viajes espaciales.</p>
                        </div>
                        <div class="valor-card">
                            <h3>Envíos Veloces</h3>
                            <p>Tus pedidos llegan a la velocidad de la luz directamente a tu base de operaciones.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include 'includes/footer.php'; ?>
    </div>
    <script src="assets/js/estrellas.js"></script>
</body>

</html>