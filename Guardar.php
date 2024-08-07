<?php
include("config.php");
$descripcion = $_POST['Descripción'];
$sql = "INSERT INTO tb_paquete(nombre)
VALUES('$descripcion')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'alert("Guardado");';
    echo 'window.location="SkyCleaning.php";';
    echo '</script>';
}
?>