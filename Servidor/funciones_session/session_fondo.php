<?php
/*Primero donde se importe se debio haber inicializado la session_start()*/
include("../Servidor/Conexion.php"); /*Incluimos la conexion (OJOOOO se debe calcular la ruta desde donde se manda atraer no desde aqui) */

$id = $_SESSION['usuario']; /*Mandamos a llamar a la variable sesion y la asignamos a una nieva variable (id)*/

$query = "SELECT fondo FROM usuarios WHERE id_usuario = $id"; /*Declaramos la consulta*/
$consulta = mysqli_query($conexion, $query); /* Ejecutamos la consulta mandando la conexion y la consulta*/

if (mysqli_num_rows($consulta) > 0) { /*si la consulta devuelve algo*/
    $row = mysqli_fetch_array($consulta); /*guardamos en la variable row todo lo que nos regreso por campos*/
    echo "" . $row["fondo"]; /*Se utuliza a row por que almaceno lo obtenido de la consulta y se manda a traer el campo ['campo']*/
}
mysqli_close($conexion);
