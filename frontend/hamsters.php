<?php
session_start();
include 'includes/db.php';
$query = "SELECT * FROM productos WHERE id_categoria=3";
$resultado = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamsters</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="fondo-espacial">
        <div class="estrellas-contenedor" id="estrellas">
            <div class="estrella-fugaz"></div>
        </div>


        <?php include 'includes/header.php'; ?>

        <main>
            <div class="page">
                <h2 class="hero">Hamsters</h2>
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
    <script src="assets/js/estrellas.js"></script>
</body>

</html>