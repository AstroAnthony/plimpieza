<?php
include("config.php");
$id = $_POST['id'];
$descripcion = $_POST['nombre'];
$sql = "UPDATE tb_paquete SET nombre = '$descripcion'
WHERE id_paquete = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="SkyCleaning.php";';
    echo '</script>';
}
?>