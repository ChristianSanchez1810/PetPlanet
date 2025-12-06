<?php
include 'seguridad.php';
include '../includes/db.php';

$mensaje = "";

if (isset($_POST['btn_guardar'])) {
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $precio = mysqli_real_escape_string($conn, $_POST['precio']);
    $stock = mysqli_real_escape_string($conn, $_POST['stock']); // <--- NUEVO
    $descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);
    $id_categoria = mysqli_real_escape_string($conn, $_POST['id_categoria']);

    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $nombre_archivo = $_FILES['imagen']['name'];
        $temporal = $_FILES['imagen']['tmp_name'];

        switch ($id_categoria) {
            case '1':
                $subcarpeta = "seccion_perros_canis_major/";
                break;
            case '2':
                $subcarpeta = "seccion_gatos_felis_minor/";
                break;
            case '3':
                $subcarpeta = "seccion_hamsters_pequenas_constelaciones/";
                break;
            default:
                $subcarpeta = "";
                break;
        }

        $carpeta_destino = "../assets/img/" . $subcarpeta;
        $ruta_destino = $carpeta_destino . basename($nombre_archivo);
        $ruta_bd = "assets/img/" . $subcarpeta . basename($nombre_archivo);

        if (!file_exists($carpeta_destino)) {
            mkdir($carpeta_destino, 0777, true);
        }

        if (move_uploaded_file($temporal, $ruta_destino)) {

            $sql = "INSERT INTO productos (nombre, precio, descripcion, stock, imagen, id_categoria) 
                    VALUES ('$nombre', '$precio', '$descripcion', '$stock', '$ruta_bd', '$id_categoria')";

            if (mysqli_query($conn, $sql)) {
                $mensaje = "✅ Producto agregado con stock correctamente.";
            } else {
                $mensaje = "❌ Error en BD: " . mysqli_error($conn);
            }
        } else {
            $mensaje = "❌ Error al subir imagen.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel Admin - Agregar</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .contenedor-admin {
            max-width: 500px;
            margin: 50px auto;
            background: rgba(0, 0, 0, 0.7);
            padding: 2rem;
            border-radius: 10px;
            border: 2px solid #ffa500;
            color: white;
            backdrop-filter: blur(5px);
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #ffa500;
            font-weight: bold;
        }

        .input-group input,
        .input-group select,
        .input-group textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-size: 1rem;
            font-family: Arial, sans-serif;
        }

        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #9bce42;
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1rem;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #8ab63a;
        }

        .mensaje {
            text-align: center;
            margin-bottom: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="fondo-espacial">
        <div class="estrellas-contenedor" id="estrellas">
            <div class="estrella-fugaz"></div>
        </div>
        <?php include '../includes/header.php'?>

        <main>
            <div class="contenedor-admin">
                <h2 style="text-align: center;">Nuevo Producto</h2>

                <?php if ($mensaje): ?>
                    <div class="mensaje"><?php echo $mensaje; ?></div>
                <?php endif; ?>

                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="input-group">
                        <label>Nombre del Producto:</label>
                        <input type="text" name="nombre" required placeholder="Ej: Bebedero Automático">
                    </div>

                    <div class="input-group">
                        <label>Descripción:</label>
                        <textarea name="descripcion" rows="4" required placeholder="Escribe los detalles..."></textarea>
                    </div>

                    <div class="input-group">
                        <label>Precio ($):</label>
                        <input type="number" step="0.01" name="precio" required placeholder="0.00">
                    </div>

                    <div class="input-group">
                        <label>Stock (Cantidad disponible):</label>
                        <input type="number" name="stock" required min="1" placeholder="Ej: 50">
                    </div>
                    <div class="input-group">
                        <label>Categoría:</label>
                        <select name="id_categoria" required>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="1">Perro</option>
                            <option value="2">Gato</option>
                            <option value="3">Hámster</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label>Imagen:</label>
                        <input type="file" name="imagen" accept="image/*" required>
                    </div>

                    <button type="submit" name="btn_guardar" class="btn-submit">Publicar</button>
                </form>

                <div style="text-align: center; margin-top: 20px;">
                    <a href="../index.php" style="color: white;">Volver al inicio</a>
                </div>
        </main>
        <?php include '../includes/footer.php'; ?>
    </div>
    <script src="../assets/js/estrellas.js"></script>

</body>

</html>