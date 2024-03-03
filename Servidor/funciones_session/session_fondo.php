<?php
include("../Servidor/Conexion.php");

$id = $_SESSION['usuario'];

$query = "SELECT fondo FROM usuarios WHERE id_usuario = $id";
$consulta = mysqli_query($conexion, $query);

if (mysqli_num_rows($consulta) > 0) {
    $row = mysqli_fetch_array($consulta);
    echo "" . $row["fondo"];
}
mysqli_close($conexion);
