<?php
session_start();
if (!isset($_SESSION['usuario_id']) || !isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
    header("Location: ../index.php"); 
    exit(); 
}
?>