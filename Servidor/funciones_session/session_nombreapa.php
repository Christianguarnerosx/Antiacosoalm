<?php
/*Primero (arriba) se inicializo la session_start()*/
include("../Servidor/Conexion.php"); /*Incluimos la ocnexion (OJOOOO se debe calcular la ruta desde donde se manda atraer no desde aqui) */
$id = $_SESSION['usuario']; /*Mandamos a llamar a la variable sesion y la asignamos a una nieva variable (id)*/
$query = "SELECT nombre, apellidop FROM usuarios WHERE id_usuario = 1"; /*Declaramos la consulta*/
$consulta = mysqli_query($conexion, $query); /* ejecutamos la consulta mandando la conexion y la consulta*/

if (mysqli_num_rows($consulta) > 0) { /*si la consulta devuelve algo*/
    $row = mysqli_fetch_array($consulta); /*guardamos en la variable row todo lo que nos regreso por campos*/
    /*Se utuliza a row por que almaceno lo obtenido de la consulta y se manda a traer el campo ['campo']*/
    echo "" . $row["nombre"] . " " . $row["apellidop"]; /*Mensaje que se va a mostrar*/
}
mysqli_close($conexion);
