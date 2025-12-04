<?php
session_start();

if (isset($_GET['id'])) {
    $id_a_borrar = $_GET['id'];

    unset($_SESSION['carrito'][$id_a_borrar]);
}
header('Location:carrito.php');
exit;
?>