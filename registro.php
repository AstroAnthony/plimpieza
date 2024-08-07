<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/mystyle.css" />
    <title>Ingreso de Datos</title>
</head>
<body>
<div class="icon-bar">
        <a href="Inicio.php"><i class="fa fa-home"></i></a>
        <a href="SkyCleaning.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Registro de Paquetes</h2>
    <hr>
    <form action="Guardar.php" method="post">
        <div class="container">
            <h4>Paquete</h4><input type="text" name="Descripción" required>
            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar</button>
            </div>
</div>
</body>
</html>