<?php
$host = "localhost";
$usuario = "root";
$contrasena = ""; // Por defecto XAMPP no tiene contraseña
$base_datos = "canciones_alabanza";

$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
