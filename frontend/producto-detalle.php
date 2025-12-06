<?php
session_start();
require 'includes/db.php';

if (isset($_GET['id'])) {
    $id_producto = $_GET['id'];


    $query = "SELECT * FROM productos WHERE id = $id_producto";
    $resultado = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $producto = mysqli_fetch_assoc($resultado); // <--- AQUÍ SE LLENA LA VARIABLE
    } else {

        header('Location: productos.php');
        exit;
    }
} else {

    header('Location: productos.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto Detalle</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="fondo-espacial">
        <div class="estrellas-contenedor" id="estrellas">
            <div class="estrella-fugaz"></div>
        </div>

        <?php include 'includes/header.php'; ?>

        <header>
        </header>

        <main>
            <div class="contenedor-detalle">
                <div class="detalle-imagen">
                    <img src="<?php echo $producto['imagen']; ?>" alt="">
                </div>
                <div class="detalle-info">
                    <h1 class="hero"><?php echo $producto['nombre']; ?></h1>
                    <p class="descripcion">Descripcion: <br><?php echo $producto['descripcion']; ?></p>
                    <p class="precio-producto">$<?php echo $producto['precio']; ?></p>
                    <form action="agregar_carrito.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $id_producto; ?>">
                        <input type="hidden" name="nombre" value="<?php echo $producto['nombre']; ?>">
                        <input type="hidden" name="precio" value="<?php echo $producto['precio']; ?>">
                        <input type="hidden" name="imagen" value="<?php echo $producto['imagen']; ?>">

                        <div style="margin-bottom: 1rem;">
                            <label style="color:#ccc;">Cantidad:</label>
                            <input type="number" name="cantidad" value="1" min="1" style="width: 60px; padding: 5px;">
                        </div>
                        <button type="submit" class="btn-checkout" name="btn_agregar">Añadir al Carrito</button>
                    </form>
                </div>

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