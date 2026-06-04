<?php

/*
Archivo: registrar_usuario.php

Este archivo recibe los datos enviados desde
el formulario de registro de usuario.

Su función es:
1. Recibir los datos del formulario
2. Aplicar seguridad a la contraseña (hash SHA1)
3. Guardar el usuario en la base de datos
*/

// Se incluye el archivo de conexión a la base de datos
include("../config/conexion.php");

// Se reciben los datos enviados por el formulario HTML
$nombre = $_POST['nombre'];
$email = $_POST['email'];

/*
Se aplica un hash a la contraseña utilizando
la función sha1() de PHP.

Esto es una medida de seguridad para evitar
guardar la contraseña en texto plano.
*/
$password = sha1($_POST['password']);

// Consulta SQL para insertar el usuario en la tabla
$sql = "INSERT INTO usuarios(nombre,email,password)
VALUES('$nombre','$email','$password')";

// Ejecutar la consulta
if($conn->query($sql)){

    // Mensaje si el registro fue exitoso
    echo "Usuario registrado correctamente";

}else{

    // Mensaje si ocurre un error
    echo "Error al registrar usuario";

}

?>