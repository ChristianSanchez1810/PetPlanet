<?php session_start(); ?>

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
                        <tr>
                            <td>
                                <div class="item-info">
                                    <img src="assets/img/Sección_Perros_Canis_Major/Cable_Tether_Andrómeda.jpg"
                                        alt="Imagen">
                                    <p>Juguete Mordedor</p>
                                </div>
                            </td>
                            <td>$13.00</td>
                            <td>
                                <input type="number" value="1" min="1">
                            </td>
                            <td>$13.00</td>
                            <td><a href="#" class="btn-borrar">X</a></td>
                        </tr>

                        <tr>
                            <td>
                                <div class="item-info">
                                    <img src="assets/img/Sección_Hámsters_Pequeñas_Constelaciones/Anillo_de_Saturno_Silent_Spin.png"
                                        alt="Imagen">
                                    <p>Hamster Wheel</p>
                                </div>
                            </td>
                            <td>$25.00</td>
                            <td>
                                <input type="number" value="1" min="1">
                            </td>
                            <td>$25.00</td>
                            <td><a href="#" class="btn-borrar">X</a></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <aside class="carrito-resumen">
                <h3>Resumen del Pedido</h3>

                <div class="resumen-fila">
                    <p>Subtotal</p>
                    <p>$38.00</p>
                </div>

                <div class="resumen-fila">
                    <p>Envío</p>
                    <p>Gratis</p>
                </div>

                <div class="resumen-total">
                    <p>Total</p>
                    <p>$38.00</p>
                </div>

                <button class="btn-checkout">Proceder al Pago</button>
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
</body>

</html>