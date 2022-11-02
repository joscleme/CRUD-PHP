<?php

include 'conexion.php';

$id = $_GET['id'];

$eliminar_usuario = "DELETE FROM usuarios WHERE id = $id"; 
$res_eliminado = mysqli_query($conexion, $eliminar_usuario);

if ($res_eliminado) {
    header("Location:index.php");
} else {
    echo "No se ha podido eliminar el usuario";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>