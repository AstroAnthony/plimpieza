<?php
include 'config.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href="CSS/mystyle1.css" />
</head>
<body>
<div class="icon-bar">
        <a href="Inicio.php"><i class="fa fa-home"></i></a>
        <a href="SkyCleaning.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Actualizar"</h2>
    <hr/>

    <form action="update.php" method="POST">
        <div class="container">
        <?php
        $result = mysqli_query($mysqli,"SELECT * FROM tb_paquete WHERE id = $id")
        while($row = mysqli_fetch_array($result)){
            echo "<input type='hidden' name='id' value='{$row['id']}' required>";
            echo "<input type='text' name='nombre' value='{$row['nombre']}'required>";
            echo "<div class'clearfix'>";
            echo "<button type='submit' class='signupbtn'>Actualizar</button>";
        }
        ?>
        </div>
    </form>
</body>
</html>