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

        <div class="star" style="top: 3%; left: 5%;"></div>
        <div class="star" style="top: 6%; left: 12%;"></div>
        <div class="star" style="top: 8%; left: 25%;"></div>
        <div class="star" style="top: 10%; left: 40%;"></div>
        <div class="star" style="top: 12%; left: 55%;"></div>
        <div class="star" style="top: 15%; left: 70%;"></div>
        <div class="star" style="top: 18%; left: 85%;"></div>
        <div class="star" style="top: 20%; left: 95%;"></div>
        <div class="star" style="top: 25%; left: 3%;"></div>
        <div class="star" style="top: 28%; left: 15%;"></div>
        <div class="star" style="top: 30%; left: 28%;"></div>
        <div class="star" style="top: 32%; left: 45%;"></div>
        <div class="star" style="top: 35%; left: 60%;"></div>
        <div class="star" style="top: 38%; left: 75%;"></div>
        <div class="star" style="top: 40%; left: 88%;"></div>
        <div class="star" style="top: 42%; left: 97%;"></div>
        <div class="star" style="top: 45%; left: 10%;"></div>
        <div class="star" style="top: 47%; left: 22%;"></div>
        <div class="star" style="top: 49%; left: 33%;"></div>
        <div class="star" style="top: 50%; left: 47%;"></div>
        <div class="star" style="top: 52%; left: 58%;"></div>
        <div class="star" style="top: 55%; left: 73%;"></div>
        <div class="star" style="top: 58%; left: 87%;"></div>
        <div class="star" style="top: 60%; left: 98%;"></div>
        <div class="star" style="top: 62%; left: 5%;"></div>
        <div class="star" style="top: 64%; left: 18%;"></div>
        <div class="star" style="top: 66%; left: 28%;"></div>
        <div class="star" style="top: 68%; left: 43%;"></div>
        <div class="star" style="top: 70%; left: 55%;"></div>
        <div class="star" style="top: 72%; left: 70%;"></div>
        <div class="star" style="top: 75%; left: 83%;"></div>
        <div class="star" style="top: 78%; left: 92%;"></div>
        <div class="star" style="top: 80%; left: 4%;"></div>
        <div class="star" style="top: 82%; left: 14%;"></div>
        <div class="star" style="top: 84%; left: 25%;"></div>
        <div class="star" style="top: 86%; left: 38%;"></div>
        <div class="star" style="top: 88%; left: 50%;"></div>
        <div class="star" style="top: 90%; left: 68%;"></div>
        <div class="star" style="top: 92%; left: 80%;"></div>
        <div class="star" style="top: 94%; left: 94%;"></div>
        <div class="star" style="top: 4%; left: 60%;"></div>
        <div class="star" style="top: 7%; left: 78%;"></div>
        <div class="star" style="top: 9%; left: 90%;"></div>
        <div class="star" style="top: 11%; left: 15%;"></div>
        <div class="star" style="top: 13%; left: 35%;"></div>
        <div class="star" style="top: 24%; left: 50%;"></div>
        <div class="star" style="top: 27%; left: 65%;"></div>
        <div class="star" style="top: 29%; left: 78%;"></div>
        <div class="star" style="top: 31%; left: 8%;"></div>
        <div class="star" style="top: 33%; left: 18%;"></div>
        <div class="star" style="top: 34%; left: 90%;"></div>
        <div class="star" style="top: 48%; left: 5%;"></div>
        <div class="star" style="top: 53%; left: 15%;"></div>
        <div class="star" style="top: 57%; left: 30%;"></div>
        <div class="star" style="top: 63%; left: 47%;"></div>
        <div class="star" style="top: 67%; left: 59%;"></div>
        <div class="star" style="top: 69%; left: 88%;"></div>
        <div class="star" style="top: 73%; left: 10%;"></div>
        <div class="star" style="top: 77%; left: 22%;"></div>
        <div class="star" style="top: 79%; left: 35%;"></div>
        <div class="star" style="top: 81%; left: 65%;"></div>
        <div class="star" style="top: 83%; left: 78%;"></div>
        <div class="star" style="top: 85%; left: 90%;"></div>
        <div class="star" style="top: 87%; left: 3%;"></div>
        <div class="star" style="top: 89%; left: 15%;"></div>
        <div class="star" style="top: 91%; left: 45%;"></div>
        <div class="star" style="top: 93%; left: 68%;"></div>
        <div class="star" style="top: 96%; left: 82%;"></div>
        <div class="star" style="top: 97%; left: 98%;"></div>
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
</body>

</html>