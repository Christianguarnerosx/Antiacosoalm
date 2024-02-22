<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--Estilos propios CSS -->
    <link rel="stylesheet" href="css/estilos.css">

    <title>Bienvenido</title>
</head>

<!--Hay una regla que dice que la variable session debe de iniciar antes de entradas de html-->
<!--Si quieres iniciar la session donde se manda atraer en el nombre dara errores como session indefinida/no iniciada   -->
<?php
session_start();
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <!--La clase collapse propia de bootstrap 5, utilizada para poder ocultar/contraer columnas y hacer el efecto de menu-->
            <div class="col-2 collapse" id="colmenuprincipal"> <!--Barra menu de la izq. Principalmente esta colapsada (no se ve)    TAMBIEN se utiliza el tama;o de col por que si no no obtiene el tamano que se le asigan en el css-->
                <?php
                include("include/Menualm.php");
                ?>
            </div>
            <div class="col centrar" id="contenedor-principal">
                <!--Botones que activan menus/extras sobre el contenedro principal porque si se ponen en las columnas obvio no aparecerian -->
                <button type="button" id="btn-menu-principal" class="btn-transparente" data-bs-toggle="collapse" data-bs-target="#colmenuprincipal" aria-expanded="false" aria-controls="colmenuprincipal">
                    <img src="imagenes/iconos/menudesactivado.png" class="icono-m rotar-90" alt="">
                </button>
                <button type="button" id="btn-extras-principal" class="btn-transparente" data-bs-toggle="collapse" data-bs-target="#colconfigprincipal" aria-expanded="false" aria-controls="colconfigprincipal">
                    <img src="imagenes/avatares/avatar-bmo.gif" class="icono-g" alt="">
                </button>

                <!--1 contenedor principal ya el contenido de opciones/tutoria-->
                <section class="cuadro-f blanco-transparente">
                    <div class="row"> <!--fila de encabezado/logo-->
                        <div class="col">
                            <img id="principal-logo" class="logo-c" src="imagenes/logos/logoaliadoshorizontal.gif" alt="">
                        </div>
                    </div>
                    <!--Fila contenido-->
                    <div class="row">
                        <div class="col">
                            <h1> Hola
                                <?php
                                include("../Servidor/Conexion.php");
                                $id = $_SESSION['usuario'];
                                $query = "SELECT nombre, apellidop FROM usuarios WHERE id_usuario = 1";
                                $resultado = mysqli_query($conexion, $query);

                                if (mysqli_num_rows($resultado) > 0) {
                                    $row = mysqli_fetch_array($resultado);
                                ?>
                                    <h1>Hola <?Php echo "" . $row["nombre"] . $row["apellidop"] ?></h1>
                                <?Php
                                }
                                mysqli_close($conexion);
                                ?>
                            </h1>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col collapse" id="colconfigprincipal"> <!--Barra menu de la izq-->

            </div>
        </div>
    </div>

    <!--Nota solo dejar un link que mande a traer bootstrap para que la clase collapse funcione-->
    <!-- Option 1: Bootstrap Bundle with Popper ideal para funciones js de bootstrap y hacer funcionar y activar acciones-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!--Sweet alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="js/recibe_alerta_avatar.js"></script> <!--Sirve para que llegue y muestre la alerta de iniciado sesion con exito-->
    <script src="js/logica_menu_principal.js"></script>

</body>

</html>