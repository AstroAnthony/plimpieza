<?php
include("config.php");
$query = "SELECT * FROM tb_paquete";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="CSS/mystyle.css" />
</head>
<body>
    <div class="icon-bar">
        <a href="Registro.php"><i class="fa fa-registered"></i></a>
        <a href="Inicio.php"><i class="fa fa-home"></i></a>
        <a href="Paquetes.php"><i class="fa fa-list-alt"></i></a>
    </div>
    <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Paquetes de Limpieza "Consultas"</h2>
    <hr>
    <div class="container">
        <?php
            echo "<table border='1'>
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
        </tr>";
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>". $row['id_paquete']. "</td>";
            echo "<td>". $row['nombre']. "</td>";
            echo "<td><a href='Actualizar.php?id=" . $row['id_paquete'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='Eliminar.php?id=" . $row['id_paquete'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
        }
        echo "</table>";
        ?>
</body>
</html>