<?php
session_start();
require 'includes/db.php';

if (!isset($_SESSION['usuario_id']) || empty($_SESSION['carrito'])) {

    header(('Location:index.php'));
    exit;
}

$id_usuario = $_SESSION['usuario_id'];
$fecha = date('Y-m-d H:i:s');
$total_compra = 0;
foreach ($_SESSION['carrito'] as $producto):
    $subtotal = $producto['precio'] * $producto['cantidad'];
    $total_compra += $subtotal;
endforeach;
$query = "INSERT INTO pedidos (id_usuario,fecha,total,estado) VALUES('$id_usuario','$fecha','$total_compra','pendiente')";
$resultado = mysqli_query($conn, $query);
$id_pedido = mysqli_insert_id($conn);

foreach ($_SESSION['carrito'] as $id_producto => $producto) {
    $cantidad = $producto['cantidad'];
    $precio = $producto['precio'];

    $query_detalle = "INSERT INTO detalles_pedido (id_pedido,id_producto,cantidad, precio_unitario)
    VALUES('$id_pedido','$id_producto','$cantidad','$precio')";
    mysqli_query($conn, $query_detalle);
}

unset($_SESSION['carrito']);
header('Location:index.php');
exit;
?>