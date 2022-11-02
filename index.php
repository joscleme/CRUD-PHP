<?php

include 'conexion.php';

$consulta_usuarios = "SELECT * FROM usuarios";
$res_usuarios = mysqli_query($conexion, $consulta_usuarios);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Proyecto PHP</title>
</head>
<body>

<div class="contenedor">

<a href="crear.php">Crear usuario</a>

<table>

  <?php
  
  if (mysqli_num_rows($res_usuarios) > 0) {
  ?>  

  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Edad</th>
  </tr>

  <?php

  } else {
  ?>
  
  <div><h1>No hay usuarios</h1></div>

  <?php
  
  }

  ?>
   
  <?php
  
  while ($fila = mysqli_fetch_array($res_usuarios)) {

    $id = $fila['id'];
    $nombre = $fila['nombre'];
    $apellidos = $fila['apellidos'];
    $edad = $fila['edad'];

    ?>

    <tr>
    
    <td><?php echo $id; ?></td>
    <td><?php echo $nombre; ?></td>
    <td><?php echo $apellidos; ?></td>
    <td><?php echo $edad; ?></td>
    <td><a href="editar.php?id=<?php echo $id; ?>">Editar</a></td>
    <td><a href="eliminar.php?id=<?php echo $id; ?>">Eliminar</a></td>
    
    </tr>

    <?php

    }

    ?>

</table>

</div>

</body>
</html>