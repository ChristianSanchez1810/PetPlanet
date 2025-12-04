<?php
session_start();
if (isset($_POST['btn_agregar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $cantidad=$_POST['cantidad'];

    $item = array('id' => $id, 'nombre' => $nombre, 'precio' => $precio, 'imagen' => $imagen, 'cantidad' => $cantidad);
    $_SESSION['carrito'][$id] = $item;
    header("Location: carrito.php");
}
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}
$_SESSION['carrito'][$id] = $item;
header("Location: carrito.php");
exit;
?>