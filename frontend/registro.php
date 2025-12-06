<?php
session_start();
require 'includes/db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    if (!empty($nombre) && !empty($email) && !empty($password)) {

        $query = "INSERT INTO usuarios (nombre, correo, password, rol) 
                  VALUES ('$nombre', '$email', '$password_hashed', 'cliente')";

        if (mysqli_query($conn, $query)) {
            header('Location: login.php');
            exit;
        } else {
            $error = "Error al registrar: " . mysqli_error($conn);
        }
    } else {
        $error = "Por favor llena todos los campos.";
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
                <form action="registro.php" method="post" class="formulario-login">
                    <h2 class="texto-formulario">Registrarse</h2>
                    <div class="campo-registro">
                        <label for="nombre" class="texto-formulario">Nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Tu nombre">
                    </div>
                    <div class="campo-registro">
                        <label for="email" class="texto-formulario">Correo</label>
                        <input type="email" id="email" placeholder="tu@email.com" name="email">
                    </div>
                    <div class="campo-registro">
                        <label for="password" class="texto-formulario">Contraseña</label>
                        <input type="password" id="password" placeholder="*******" name="password">

                    </div>
                    <button type="submit" class="btn-checkout">Registrarse</button>
                </form>
            </div>
        </main>

        <?php include 'includes/footer.php'; ?>
    </div>
    <script src="assets/js/estrellas.js"></script>
</body>

</html>