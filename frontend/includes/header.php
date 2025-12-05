<nav>
    <div class="nav">
        <a href="index.php"><img src="assets/img/logo.png" alt="Logo"></a>
    </div>
    <div class="menu-hamburguesa" id="btn-menu">
        <span class="linea"></span>
        <span class="linea"></span>
        <span class="linea"></span>
    </div>
    <div class="nav-enlaces" id="lista-enlaces">
        <ul>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="perros.php">Perros</a></li>
            <li><a href="hamster.php">Gatos</a></li>
            <li><a href="gatos.php">Hamster</a></li>
        </ul>

        <div>
            <ul>
                <li><a href="carrito.php">Carrito</a></li>
                <?php
                if (isset($_SESSION['usuario_id'])): ?>
                    <li><a href="#">Hola, <?php echo $_SESSION['usuario_nombre']; ?></a></li>
                    <li><a href="logout.php" style=color:#ff4d4d>Salir</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <script>
        const botonMenu = document.querySelector('#btn-menu');
        const menuLinks = document.querySelector('#lista-enlaces');

        botonMenu.addEventListener('click', () => {
            menuLinks.classList.toggle('activo');   
            botonMenu.classList.toggle('rotando');  
        });
    </script>
</nav>