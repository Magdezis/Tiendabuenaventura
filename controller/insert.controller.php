<?php 
include "c:/xampp/htdocs/TiendaBuenAventura/model/query.model.php"; 

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$insert = new Consultas(); 
$insert->insertar($nombre, $apellido, $direccion, $telefono); 


?>