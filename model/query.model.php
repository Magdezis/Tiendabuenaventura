<?php


class Consultas
{

    public function insertar($nombre, $apellido, $direccion, $telefono)
    {
        include("c:/xampp/htdocs/tiendabuenaventura/configdb/confgdb.php");
        $conn = new Conexion();
        $insert = "INSERT INTO clientes(nombre, apellido, direccion, telefono)
      VALUES('$nombre', '$apellido', '$direccion', '$telefono')";
        if (mysqli_query($conn->conexion(), $insert)) {
            echo ("registro añadido.");
        } else {
            echo ("error al añadir registro.");
        }

    }

}


?>