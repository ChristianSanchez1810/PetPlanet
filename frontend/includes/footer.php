<?php 

if (!isset($ruta)) {
    $ruta = file_exists('index.php') ? '' : '../';
}
?>

<footer>
    <div>
        <ul>
            <li><a href="<?php echo $ruta; ?>nosotros.php">Sobre nosotros</a></li>
            <li>Contacto<br> petplanetcontac@outlook.com</li>
        </ul>
        <div>
            <h4>Redes Sociales</h4>
            <ul>
                <li><a href="https://www.facebook.com/share/17gfURyQ1F/">Facebook</a></li>
                <li><a href="https://www.instagram.com/shoppetplanet?igsh=bnhzMXdjcTdtYnRm">Instagram</a></li>
            </ul>
        </div>
    </div>
    
    <p>Todos los derechos reservados &copy; <?php echo date('Y'); ?></p>
</footer>

<script src="<?php echo $ruta; ?>assets/js/estrellas.js"></script>



</body>
</html>
