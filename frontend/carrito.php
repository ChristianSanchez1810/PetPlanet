<?php session_start();

$total_compra = 0;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="fondo-espacial">
        <div class="estrellas-contenedor" id="estrellas">
            <div class="estrella-fugaz"></div>
        </div>

        <?php include 'includes/header.php'; ?>

        <main>
            <div class="contenedor-carrito">
                <section class="carrito-items">
                    <table>
                        <thead>
                            <tr>
                                <th>Productos</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])): ?>
                                <?php
                                $total_compra = 0;
                                foreach ($_SESSION['carrito'] as $id => $producto):
                                    $subtotal = $producto['precio'] * $producto['cantidad'];
                                    $total_compra += $subtotal;
                                    ?>
                                    <tr class="fila-producto">
                                        <td>
                                            <div class="item-info">
                                                <img src="<?php echo $producto['imagen']; ?>" alt="img">
                                                <p><?php echo $producto['nombre']; ?></p>
                                            </div>
                                        </td>

                                        <td class="precio-unitario" data-precio="<?php echo $producto['precio']; ?>">
                                            $<?php echo $producto['precio']; ?>
                                        </td>

                                        <td>
                                            <input type="number" class="input-cantidad" data-id="<?php echo $id; ?>"
                                                value="<?php echo $producto['cantidad']; ?>" min="1" style="width: 50px;">
                                        </td>

                                        <td class="lbl-subtotal">$<?php echo $subtotal; ?></td>

                                        <td>
                                            <a href="borrar_carrito.php?id=<?php echo $id; ?>" class="btn-borrar">X</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            <?php else: ?>
                                <tr>
                                    <td colspan="5" style="text-align:center;">Tu carrito está vacío</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </section>

                <aside class="carrito-resumen">
                    <h3>Resumen del Pedido</h3>

                    <div class="resumen-fila">
                        <p>Subtotal</p>
                        <p id="resumen-subtotal">$<?php echo $total_compra ?></p>
                    </div>

                    <div class="resumen-fila">
                        <p>Envío</p>
                        <p>Gratis</p>
                    </div>

                    <div class="resumen-total">
                        <p>Total</p>
                        <p id="resumen-total">$<?php echo $total_compra; ?></p>
                    </div>

                    <?php if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])): ?>
                        <a href="procesar_compra.php" class="btn-checkout">Proceder al Pago</a>
                    <?php endif; ?>
                </aside>
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

        <script>
            document.addEventListener("DOMContentLoaded", function () {

                const inputs = document.querySelectorAll('.input-cantidad');
                
                inputs.forEach(input => {
                    input.addEventListener('change', function () {
                    actualizarMontos(this);
                });
                input.addEventListener('input', function () {
                    actualizarMontos(this);
                });
            });

            function actualizarMontos(input) {
                const fila = input.closest('.fila-producto');
                const precio = parseFloat(fila.querySelector('.precio-unitario').dataset.precio);
                const cantidad = parseInt(input.value);
                const idProducto = input.dataset.id;

                if (cantidad < 1) return;
                const nuevoSubtotal = precio * cantidad;
                fila.querySelector('.lbl-subtotal').innerText = '$' + nuevoSubtotal.toFixed(2);
                recalcularTotalCarrito();
                actualizarSesionPHP(idProducto, cantidad);
            }

            function recalcularTotalCarrito() {
                let totalGeneral = 0;
                document.querySelectorAll('.fila-producto').forEach(fila => {
                    const precio = parseFloat(fila.querySelector('.precio-unitario').dataset.precio);
                    const cantidad = parseInt(fila.querySelector('.input-cantidad').value);
                    totalGeneral += (precio * cantidad);
                });
                document.getElementById('resumen-subtotal').innerText = '$' + totalGeneral.toFixed(2);
                document.getElementById('resumen-total').innerText = '$' + totalGeneral.toFixed(2);
            }
            
            function actualizarSesionPHP(id, cantidad) {

                fetch('actualizar_carrito.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `id=${id}&cantidad=${cantidad}`
                })
                .then(response => console.log('Carrito actualizado en servidor'))
                .catch(error => console.error('Error:', error));
            }
        });
        </script>
    <script src="assets/js/estrellas.js"></script>
</div>
</body>

</html>