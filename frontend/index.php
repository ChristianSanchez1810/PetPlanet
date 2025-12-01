<?php session_start(); ?>
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

        <header class="carrusel"> <div class="carrusel-slides">

        <div class="slide activa slide-1"> <h1>Los mejores accesorios para tu hamster</h1>
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

    <button class="carrusel-btn prev">&lt;</button> <button class="carrusel-btn next">&gt;</button> <div class="carrusel-dots">
        <span class="dot activo"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

</header>

        <main>
            <section class="destacados">
                <h2>Productos Destacados</h2>
                <div class="productos-contenedor">
                    <div class="tarjeta-producto">
                        <img src="assets/img/juguete-perro.jpg" alt="Juguete mordedor para perro">
                        <h3>Juguete Mordedor Resistente</h3>
                        <p>$13</p>
                        <a href="producto-detalle.html">Ver producto</a>
                    </div>

                    <div class="tarjeta-producto">
                        <img src="assets/img/juguete-gato.jpg" alt="Juguete mordedor para gato">
                        <h3>Juguete Mordedor Resistente</h3>
                        <p>$10</p>
                        <a href="producto-detalle.html">Ver producto</a>
                    </div>
                </div>
            </section>

            <section class="categorias">
                <h2>Comprar por mascota</h2>
                <div class="categorias-contenedor">
                    <a href="#" class="tarjeta-categoria">
                        <h3>Perros</h3>
                    </a>
                    <a href="#" class="tarjeta-categoria">
                        <h3>Gatos</h3>
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
                <div>                <h4>Redes Sociales</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
                </div>
            </div>
            <p>Todos los derechos reservados</p>
        </footer>
    <script src="assets/js/main.js"></script>    
</body>
</html>
