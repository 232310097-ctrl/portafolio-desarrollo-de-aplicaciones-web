<?php

/*
Archivo: conexion.php

Este archivo se encarga de crear la conexión entre
la aplicación web y la base de datos MySQL.

Se utiliza la clase mysqli de PHP para establecer
la conexión con el servidor de base de datos.
*/

// Datos de conexión al servidor MySQL
$host = "localhost";   // Dirección del servidor
$user = "root";        // Usuario de MySQL
$pass = "1234abcd";            // Contraseña de MySQL
$db = "agenda_web";    // Nombre de la base de datos

// Crear conexión con MySQL
$conn = new mysqli($host, $user, $pass, $db);

// Verificar si la conexión fue exitosa
if($conn->connect_error){

    // Si hay error se detiene el sistema
    die("Error de conexión: " . $conn->connect_error);
}

// Si todo funciona, la variable $conn podrá
// utilizarse en otros archivos para ejecutar consultas.

?>