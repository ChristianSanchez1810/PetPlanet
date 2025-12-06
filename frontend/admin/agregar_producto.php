<?php
include 'seguridad.php'; 

include '../includes/db.php'; 

$mensaje = "";

if (isset($_POST['btn_guardar'])) {
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $precio = mysqli_real_escape_string($conn, $_POST['precio']);

    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $nombre_archivo = $_FILES['imagen']['name'];
        $temporal = $_FILES['imagen']['tmp_name'];
        
        
        $carpeta_destino = "../assets/img/"; 
        $ruta_destino = $carpeta_destino . basename($nombre_archivo);
        
        $ruta_bd = "assets/img/" . basename($nombre_archivo);

        if (move_uploaded_file($temporal, $ruta_destino)) {
            $sql = "INSERT INTO productos (nombre, precio, imagen) VALUES ('$nombre', '$precio', '$ruta_bd')";
            if (mysqli_query($conn, $sql)) {
                $mensaje = "Producto subido con éxito.";
            } else {
                $mensaje = "Error en BD: " . mysqli_error($conn);
            }
        } else {
            $mensaje = "Error al subir imagen al servidor.";
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
            background: rgba(0,0,0,0.7);
            padding: 2rem;
            border-radius: 10px;
            border: 2px solid #ffa500;
            color: white;
            backdrop-filter: blur(5px);
        }
        .input-group { margin-bottom: 15px; }
        .input-group label { display: block; margin-bottom: 5px; color: #ffa500; font-weight: bold;}
        .input-group input { 
            width: 100%; padding: 10px; 
            border-radius: 5px; border: none; 
        }
        .btn-submit {
            width: 100%; padding: 10px;
            background-color: #9bce42; color: white;
            border: none; font-weight: bold; cursor: pointer;
            border-radius: 5px; font-size: 1rem;
        }
        .btn-submit:hover { background-color: #8ab63a; }
        .mensaje { text-align: center; margin-bottom: 15px; font-weight: bold; }
    </style>
</head>
<body>
    
    <div class="fondo-espacial">
        
        <div class="contenedor-admin">
            <h2 style="text-align: center;">Nuevo Producto</h2>
            
            <?php if($mensaje): ?>
                <div class="mensaje"><?php echo $mensaje; ?></div>
            <?php endif; ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label>Nombre del Producto:</label>
                    <input type="text" name="nombre" required>
                </div>
                <div class="input-group">
                    <label>Precio:</label>
                    <input type="number" step="0.01" name="precio" required>
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
        </div>
    </div>

</body>
</html>