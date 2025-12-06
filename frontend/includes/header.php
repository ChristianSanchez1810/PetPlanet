<?php
$ruta = file_exists('index.php') ? '' : '../';
?>

<nav>
    <div class="nav">
        <a href="<?php echo $ruta; ?>index.php">
            <img src="<?php echo $ruta; ?>assets/img/logo.png" alt="Logo">
        </a>
    </div>

    <div class="menu-hamburguesa" id="btn-menu">
        <span class="linea"></span>
        <span class="linea"></span>
        <span class="linea"></span>
    </div>

    <div class="nav-enlaces" id="lista-enlaces">
        <ul>
            <li><a href="<?php echo $ruta; ?>productos.php">Productos</a></li>
            <li><a href="<?php echo $ruta; ?>perros.php">Perros</a></li>
            <li><a href="<?php echo $ruta; ?>gatos.php">Gatos</a></li>
            <li><a href="<?php echo $ruta; ?>hamsters.php">Hamster</a></li>
        </ul>

        <div>
            <ul>
                <li><a href="<?php echo $ruta; ?>carrito.php">Carrito</a></li>

                <?php if (isset($_SESSION['usuario_id'])): ?>
                    <li><a href="#">Hola, <?php echo $_SESSION['usuario_nombre']; ?></a></li>

                    <?php
                    if (isset($_SESSION['rol'])) {
                        
                        $rol_limpio = strtolower(trim($_SESSION['rol']));
                        
                        if ($rol_limpio == 'admin'):
                    ?>
                            <li>
                                <a href="<?php echo $ruta; ?>admin/agregar_producto.php">
                                    Admin
                                </a>
                            </li>
                    <?php
                        endif;
                    }
                    ?>

                    <li><a href="<?php echo $ruta; ?>logout.php" style="color:#ff4d4d">Salir</a></li>

                <?php else: ?>
                    <li><a href="<?php echo $ruta; ?>login.php">Login</a></li>
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