<?php

include 'conexion.php';

if (isset($_POST['crear'])) {

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];

    $insertar = "INSERT INTO usuarios (nombre, apellidos, edad)
    VALUES ('$nombre', '$apellidos', '$edad')";
    $resultado = mysqli_query($conexion, $insertar);

    if ($insertar) {
        
        header("Location:index.php");
    
    } else {
        echo "No se ha podido insertar el usuario";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Crear usuario</title>
</head>
<body>

<div class="contenedor">

<a href="index.php">Volver</a>

<form method="post">

Nombre: <input type="text" name="nombre" required>
<br>
Apellidos: <input type="text" name="apellidos" required>
<br>
Edad: <input type="number" name="edad" min="0" required>
<br>
<button type="submit" class="btn btn-success" name="crear">Crear</button>

</form>

</div>

</body>
</html>