<?php session_start();
include 'includes/db.php';
$query = "SELECT * FROM productos";
$resultado = mysqli_query($conn, $query); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetPlanet</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="fondo-espacial">
        <div class="estrellas-contenedor" id="estrellas">
            <div class="estrella-fugaz"></div>
        </div>


        <?php include 'includes/header.php'; ?>

        <header class="carrusel">
            <div class="carrusel-slides">

                <div class="slide activa slide-1">
                    <h1>Los mejores accesorios para tu hamster</h1>
                    <p>Calidad y diversion para tu mejor amigo.</p>
                    <a href="productos.html" class="enlace-carrusel">Ver Productos</a>
                </div>

                <div class="slide slide-2">
                    <h1>Los mejores accesorios para tu perro</h1>
                    <p>Descubre la nueva colección de correas.</p>
                    <a href="#" class="enlace-carrusel">Ver Juguetes de Gato</a>
                </div>

                <div class="slide slide-3">
                    <h1>Todo para tu Gato</h1>
                    <p>Camas y más con 20% de descuento.</p>
                    <a href="#" class="enlace-carrusel">Ver Ofertas</a>
                </div>

            </div>

            <button class="carrusel-btn prev">&lt;</button> <button class="carrusel-btn next">&gt;</button>
            <div class="carrusel-dots">
                <span class="dot activo"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

        </header>

        <main>
            <section class="destacados">
                <h2 class="hero">Productos Destacados</h2>
                <div class="productos">
                    <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
                        <a href="producto-detalle.php?id=<?php echo $row['id']; ?>">
                            <article class="card">
                                <div class="img">
                                    <img src="<?php echo $row['imagen']; ?>">
                                </div>
                                <div class="meta">
                                    <p class="nombre"><?php echo $row['nombre']; ?></p>
                                    <p class="precio"><?php echo $row['precio']; ?></p>
                                </div>
                            </article>
                        </a>
                    <?php } ?>
                </div>
            </section>
            
            <section class="categorias">
                <h2 class="hero">Comprar por mascota</h2>
                <div class="categorias-contenedor">
                    <a href="perros.php" class="tarjeta-categoria">
                        <h3>Perro</h3>
                    </a>
                    <a href="gatos.php" class="tarjeta-categoria">
                        <h3>Gato</h3>
                    </a>
                    <a href="hamsters.php" class="tarjeta-categoria">
                        <h3>Hamster</h3>
                    </a>
                </div>
            </section>
        </main>
        
        <footer>
            <div>
                <ul>
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
                <div>
                    <h4>Redes Sociales</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <p>Todos los derechos reservados</p>
        </footer>
    </div>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/estrellas.js"></script>
</body>

</html>