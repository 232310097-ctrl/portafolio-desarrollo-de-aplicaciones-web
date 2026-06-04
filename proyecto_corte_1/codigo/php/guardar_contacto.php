<?php

/*
Archivo: guardar_contacto.php

Este archivo se encarga de registrar un nuevo
contacto dentro del sistema.

Los datos son enviados desde un formulario HTML
y posteriormente almacenados en la base de datos.
*/

// Conectar con la base de datos
include("../config/conexion.php");

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

/*
Consulta SQL que inserta un nuevo contacto
en la tabla contactos.
*/
$sql = "INSERT INTO contactos(nombre,telefono,email)
VALUES('$nombre','$telefono','$email')";

// Ejecutar consulta
if($conn->query($sql)){

    echo "Contacto guardado correctamente";

}else{

    echo "Error al guardar contacto";

}

?>