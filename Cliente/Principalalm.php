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

<!--Si se van a  utilizar variables de  SESSION  Hay una "regla" que dice que la variable session debe de iniciar antes de entradas de html-->
<!--Si quieres iniciar la session donde se manda atraer en el nombre dara errores como session indefinida/no iniciada       -->
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

            <!--columna utilizada para el contenido principal de la interfaz (no opciones lo de en medio) aqui van los botones que abren las demas columnas (menu/configuraciones)-->
            <div class="col centrar" id="contenedor-principal">
                <!--Botones que activan menus/extras sobre el contenedro principal porque si se ponen en las columnas obvio no aparecerian -->
                <button type="button" id="btn-menu-principal" class="btn-transparente" data-bs-toggle="collapse" data-bs-target="#colmenuprincipal" aria-expanded="false" aria-controls="colmenuprincipal">
                    <img src="imagenes/iconos/menudesactivado.png" class="icono-m rotar-90" alt="">
                </button>
                <button type="button" id="btn-extras-principal" class="btn-transparente" data-bs-toggle="collapse" data-bs-target="#colconfigprincipal" aria-expanded="false" aria-controls="colconfigprincipal">
                    <img src="imagenes/avatares/avatar-bmo.gif" class="icono-g" alt="">
                </button>

                <!--1 contenedor principal ya el contenido de enmedio/principal de la interfaz-->
                <main class="cuadro-f blanco-transparente">
                    <img id="principal-logo" class="logo-c" src="imagenes/logos/logoaliadoshorizontal.gif" alt=""> <!--Logo del contenedor de contenido de enmedio-->
                    <section class="espacio-top-vh">
                        <!--Fila contenido-->
                        <div class="row">
                            <div class="col espacio-left-g">
                                <h1 class="titulo-c"><!--Mensaje de bienvenida con nombre. Aqui se obtiene el nombre haciendo referencia a la variable sesion (que tiene el id (obtenido en autenticar)) y consultando en el php de abajo -->
                                    Hola<?Php include("../Servidor/funciones_session/session_nombreapa.php") ?>: <!--Mandamos a trear una funcion que obtienen el nombre de la session iniciada (Para esto se debe corroborar si se inicio la session_start en este documento)-->
                                    <h2 class="text-g">¿En qué puedo ser tu aliado de hoy?</h2>
                                </h1>
                            </div>
                        </div>
                        <div class="row espacio-top-m">
                            <div class="col display-f centrar-v espacio-left-g">

                                <a class="card-g blanco-solido centrar espacio-left-c decoracion-no txt-negro">
                                    <h1>Hola</h1>
                                </a>

                                <a class="card-g blanco-solido centrar espacio-left-c decoracion-no txt-negro">
                                    <h1>Hola</h1>
                                </a>
                            </div>
                        </div>
                    </section>
                </main>
            </div>

            <!--Columna de configuracion se abre dando click al avatar, aqui se manda a traer las opciones posibkes a configuar-->
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