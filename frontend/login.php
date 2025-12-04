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
            $_SESSION['usuario_rol'] = $usuario['rol'];

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
</body>

</html>