<?php

include 'conexion.php';

$id = $_GET['id'];

$datos_usuario = "SELECT * FROM usuarios WHERE id = $id";
$res_usuario = mysqli_query($conexion, $datos_usuario);

while ($fila = mysqli_fetch_array($res_usuario)) {

    $nombre = $fila['nombre'];
    $apellidos = $fila['apellidos'];
    $edad = $fila['edad'];

}

if (isset($_POST['editar'])) {

    $nombre_editado = $_POST['nombre_editado'];
    $apellidos_editado = $_POST['apellidos_editado'];
    $edad_editado = $_POST['edad_editado'];

    $editar_usuario = "UPDATE usuarios SET nombre='$nombre_editado', apellidos='$apellidos_editado',
    edad='$edad_editado' WHERE id = $id";
    $res_editado = mysqli_query($conexion, $editar_usuario);

    if ($editar_usuario) {

        header("Location: index.php");

    } else {

        echo "No se ha podido editar el usuario";

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
    <title>Editar usuario</title>
</head>
<body>

<div class="contenedor">

<a href="index.php">Volver</a>

<form method="post">

<br>
Nombre: <input type="text" name="nombre_editado" value="<?php echo $nombre; ?>">
<br>
Apellidos: <input type="text" name="apellidos_editado" value="<?php echo $apellidos; ?>">
<br>
Edad: <input type="number" name="edad_editado" value="<?php echo $edad; ?>">
<br>
<button type="submit" class="btn btn-warning" name="editar">Editar</button>

</form>

</div>

</body>
</html>