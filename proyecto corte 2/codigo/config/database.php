<?php
$conexion = new PDO("mysql:host=localhost;dbname=sistema_citas","root","");
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>