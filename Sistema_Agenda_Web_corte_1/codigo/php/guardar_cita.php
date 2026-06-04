<?php

/*
Archivo: guardar_cita.php

Este archivo permite registrar una nueva cita
en el sistema.

Cada cita está asociada a un contacto existente
mediante el campo contacto_id.
*/

// Incluir archivo de conexión
include("../config/conexion.php");

// Recibir datos del formulario
$contacto = $_POST['contacto'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];

/*
Consulta SQL para insertar la cita
en la base de datos.
*/
$sql = "INSERT INTO citas(contacto_id,fecha,descripcion)
VALUES('$contacto','$fecha','$descripcion')";

// Ejecutar consulta
if($conn->query($sql)){

    echo "Cita registrada correctamente";

}else{

    echo "Error al registrar cita";

}

?>