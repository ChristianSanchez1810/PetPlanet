<?php
session_start();
require 'includes/db.php';

if (!isset($_SESSION['usuario_id']) || empty($_SESSION['carrito'])) {
    header('Location:index.php');
    exit;
}

foreach ($_SESSION['carrito'] as $id_producto => $producto) {
    $cantidad_solicitada = $producto['cantidad'];
    

    $query_stock = "SELECT stock, nombre FROM productos WHERE id = '$id_producto'";
    $resultado_stock = mysqli_query($conn, $query_stock);
    $fila_stock = mysqli_fetch_assoc($resultado_stock);
    

    if ($fila_stock['stock'] < $cantidad_solicitada) {

        echo "<script>
                alert('Lo sentimos, ya no hay suficiente stock de: " . $fila_stock['nombre'] . "');
                window.location.href = 'carrito.php';
              </script>";
        exit; 
    }
}





$id_usuario = $_SESSION['usuario_id'];
$fecha = date('Y-m-d H:i:s');
$total_compra = 0;

foreach ($_SESSION['carrito'] as $producto):
    $subtotal = $producto['precio'] * $producto['cantidad'];
    $total_compra += $subtotal;
endforeach;

$query = "INSERT INTO pedidos (id_usuario, fecha, total, estado) VALUES('$id_usuario', '$fecha', '$total_compra', 'pendiente')";
$resultado = mysqli_query($conn, $query);
$id_pedido = mysqli_insert_id($conn);


foreach ($_SESSION['carrito'] as $id_producto => $producto) {
    $cantidad = $producto['cantidad'];
    $precio = $producto['precio'];

    $query_detalle = "INSERT INTO detalles_pedido (id_pedido, id_producto, cantidad, precio_unitario)
                      VALUES('$id_pedido', '$id_producto', '$cantidad', '$precio')";
    mysqli_query($conn, $query_detalle);

    $query_restar = "UPDATE productos SET stock = stock - $cantidad WHERE id = '$id_producto'";
    mysqli_query($conn, $query_restar);
}

unset($_SESSION['carrito']);

echo "
<script>
    alert('¡Compra Exitosa! \\n\\nTu pedido ha sido registrado en nuestra base estelar. Gracias por confiar en PetPlanet.');
    window.location.href = 'index.php';
</script>
";
exit;
?>