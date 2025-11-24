<?php
$servidor="localhost";
$usuario="root";
$password="";
$database="petplanet_db";
$conn=mysqli_connect($servidor,$usuario,$password,$database);

if(!$conn){
    die("Error de conexión: " . mysqli_connect_error());
}
?>