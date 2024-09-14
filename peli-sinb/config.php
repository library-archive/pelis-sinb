<?php
// config.php
$conn = new mysqli("localhost", "usuario", "password", "base_de_datos");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
