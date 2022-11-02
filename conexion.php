<?php

$conexion = mysqli_connect("localhost", "root", "", "proyecto-php");

if ($conexion) { 
} else {
    echo "No se ha podido conectar";
}

?>