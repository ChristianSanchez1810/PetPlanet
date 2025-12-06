<?php
session_start();
include 'includes/db.php';
$query = "SELECT * FROM productos WHERE id_categoria=2";
$resultado = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatos</title>
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
                <h2 class="hero">Gatos</h2>
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

        <?php include 'includes/footer.php'; ?>
    </div>
    <script src="assets/js/estrellas.js"></script>
</body>

</html>