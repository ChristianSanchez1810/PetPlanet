<?php
session_start();
require 'includes/db.php';

if (isset($_GET['id'])) {
    $id_producto = mysqli_real_escape_string($conn, $_GET['id']);

    $query = "SELECT * FROM productos WHERE id = $id_producto";
    $resultado = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $producto = mysqli_fetch_assoc($resultado);

        $stock_actual = $producto['stock'];

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
    <title><?php echo $producto['nombre']; ?> | Detalle</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="fondo-espacial">
        <div class="estrellas-contenedor" id="estrellas">
            <div class="estrella-fugaz"></div>
        </div>

        <?php include 'includes/header.php'; ?>

        <main>
            <div class="contenedor-detalle">
                <div class="detalle-imagen">
                    <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                </div>

                <div class="detalle-info">
                    <h1 class="hero"><?php echo $producto['nombre']; ?></h1>

                    <p class="descripcion">
                        <strong>Descripción:</strong> <br>
                        <?php echo nl2br($producto['descripcion']); ?>
                    </p>

                    <p class="precio-producto">$<?php echo $producto['precio']; ?></p>

                    <?php if ($stock_actual > 0): ?>

                        <form action="agregar_carrito.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id_producto; ?>">
                            <input type="hidden" name="nombre" value="<?php echo $producto['nombre']; ?>">
                            <input type="hidden" name="precio" value="<?php echo $producto['precio']; ?>">
                            <input type="hidden" name="imagen" value="<?php echo $producto['imagen']; ?>">

                            <div style="margin-bottom: 1rem;">
                                <label style="color:#ccc;">Cantidad:</label>
                                <input type="number" name="cantidad" id="input-cantidad" value="1" min="1"
                                    max="<?php echo $stock_actual; ?>"
                                    style="width: 60px; padding: 5px; text-align: center; border-radius: 5px;">

                                <span style="color: #9bce42; margin-left: 10px; font-size: 0.9rem;">
                                    (Disponibles: <?php echo $stock_actual; ?>)
                                </span>
                            </div>

                            <button type="submit" class="btn-checkout" name="btn_agregar">Añadir al Carrito</button>
                        </form>

                    <?php else: ?>

                        <div style="margin-top: 20px;">
                            <h2
                                style="color: #ff4d4d; border: 2px solid #ff4d4d; display: inline-block; padding: 10px 20px; border-radius: 10px; transform: rotate(-5deg);">
                                AGOTADO
                            </h2>
                            <p style="color: #f4f4f4; margin-top: 10px;">
                                Lo sentimos, este producto se ha quedado sin stock.
                            </p>
                        </div>

                    <?php endif; ?>
                </div>
            </div>
        </main>

        <?php include 'includes/footer.php'; ?>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const input = document.getElementById('input-cantidad');

            if (input) {
                input.addEventListener('change', validarStock);
                input.addEventListener('input', validarStock);

                function validarStock() {
                    const max = parseInt(this.getAttribute('max'));
                    let val = parseInt(this.value);

                    if (val > max) {
                        alert("Solo tenemos " + max + " unidades disponibles.");
                        this.value = max;
                    }
                    if (val < 1) {
                        this.value = 1;
                    }
                }
            }
        });
    </script>
</body>

</html>