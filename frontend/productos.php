
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Universales</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>


    <main>
        <div class="pagina-productos">
            <aside>
                <h3>Filtrar por</h3>
                <div>
                    <ul>
                        <li><input type="checkbox" name="" id=""><label for="">Perros</label></li>
                        <li><input type="checkbox" name="" id=""><label for="">Gatos</label></li>
                        <li><input type="checkbox" name="" id=""><label for="">Hamster</label></li>
                    </ul>
                </div>
                <div>
                    <h4>Precio</h4>
                    <ul>
                        <li>
                            <input type="radio" name="precio" id="p1">
                            <label for="p1">$81 - $90</label>
                        </li>
                        <li>
                            <input type="radio" name="precio" id="p2">
                            <label for="p2">$50 - $80</label>
                        </li>
                        <li>
                            <input type="radio" name="precio" id="p3">
                            <label for="p3">$0 - $50</label>
                        </li>
                    </ul>
                </div>
            </aside>

            <section class="galeria-productos">
                <h2>Catalogo Completo</h2>
                <div class="productos-contenedor">
                    <div class="tarjeta-producto">
                        <img src="assets/img/Sección_Perros_Canis_Major/Capullo_Interestelar.jpg" alt="Capullo_Interestelar">
                        <h3>Capullo Interestelar</h3>
                        <p>$13</p>
                        <a href="producto-detalle.html">Ver producto</a>
                    </div>
                    <div class="tarjeta-producto">
                        <img src="assets/img/Sección_Hámsters_Pequeñas_Constelaciones/Bio_Domo_Modular_Hera.png" alt="Imagen hamster">
                        <h3>Juguete Hamster</h3>
                        <p>$13</p>
                        <a href="producto-detalle.html">Ver producto</a>
                    </div>
                    <div class="tarjeta-producto">
                        <img src="assets/img/Sección_Gatos_Felis_Minor/Cápsula_de_Hibernación.png" alt="Juguete Gato">
                        <h3>Juguete Gato</h3>
                        <p>$13</p>
                        <a href="producto-detalle.html">Ver producto</a>
                    </div>
                </div>
            </section>
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