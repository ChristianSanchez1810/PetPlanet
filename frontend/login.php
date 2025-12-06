<?php
session_start();
require 'includes/db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $correo = mysqli_real_escape_string($conn, $_POST['email']); // "email" es el name de tu input
    $password = $_POST['password'];
    $query = "SELECT * FROM usuarios WHERE correo = '$correo'";
    $resultado = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultado) === 1) {
        $usuario = mysqli_fetch_assoc($resultado);

        if (password_verify($password, $usuario['password'])) {

            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];
            $_SESSION['rol'] = $usuario['rol'];

            header('Location: index.php');
            exit;

        } else {
            $error = "La contraseña es incorrecta.";
        }
    } else {
        $error = "El correo no existe.";
    }
}
?>

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
        <div class="estrellas-contenedor" id="estrellas">
        <div class="estrella-fugaz"></div>
    </div>

    <?php include 'includes/header.php'; ?>

    <main>
        <div class="contenedor-login">
            <form action="login.php" method="post" class="formulario-login">
                <h2 class="texto-formulario">Iniciar Sesión</h2>
                <div class="campo-login">
                    <label for="email" class="texto-formulario">Correo</label>
                    <input type="email" id="email" placeholder="tu@email.com" name="email">
                </div>
                <div class="campo-login">
                    <label for="password" class="texto-formulario">Contraseña</label>
                    <input type="password" id="password" placeholder="*******" name="password">
                    <?php if ($error): ?>
                        <p style="color: red; text-align: center;"><?php echo $error; ?></p>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn-checkout">Ingresar</button>

                <p class="registro-link">¿No tienes cuenta? <a href="registro.php">Regístrate Aquí</a></p>
            </form>
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
    <script src="assets/js/estrellas.js"></script>
</body>

</html>