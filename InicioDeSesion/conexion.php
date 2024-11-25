<?php

$host = "localhost";
$User = "root"; // Cambié a minúsculas para mantener consistencia
$pass = "";
$db = "iniciosesiondb";

// Establecer la conexión
$conexion = mysqli_connect($host, $User, $pass, $db);

// Verificar la conexión
if (!$conexion) {
    die("Conexión Fallida: " . mysqli_connect_error()); // Mostrar el error específico de conexión
} else {
    echo "Conexión exitosa"; // Mensaje opcional para verificar que la conexión fue exitosa
}
?>