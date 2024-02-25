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

<body class="scroll-body-no">
    <div class="container-fluid">
        <div class="row">
            <!--La clase collapse propia de bootstrap 5, utilizada para poder ocultar/contraer columnas y hacer el efecto de menu-->
            <div class="col-2 collapse" id="colmenuprincipalalm"> <!--Barra menu de la izq. Principalmente esta colapsada (no se ve)    TAMBIEN se utiliza el tama;o de col por que si no no obtiene el tamano que se le asigan en el css-->
                <?php
                include("include/Menualm.php");
                ?>
            </div>

            <!--columna utilizada para el contenido principal de la interfaz (no opciones lo de en medio) aqui van los botones que abren las demas columnas (menu/configuraciones)-->
            <div class="col centrar" id="principalalm-contenedor">
                <!--Botones que activan menus/extras sobre el contenedro principal porque si se ponen en las columnas obvio no aparecerian -->
                <button type="button" id="btn-menu-principalalm" class="btn-transparente" data-bs-toggle="collapse" data-bs-target="#colmenuprincipalalm" aria-expanded="false" aria-controls="colmenuprincipalalm">
                    <img src="imagenes/iconos/menudesactivado.png" class="icono-m rotar-90" alt="">
                </button>
                <button type="button" id="btn-extras-principalalm" class="btn-transparente" data-bs-toggle="collapse" data-bs-target="#colconfigprincipalalm" aria-expanded="false" aria-controls="colconfigprincipalalm">
                    <img class="icono-avatar-m" src="<?php include("../Servidor/funciones_session/session_avatar.php"); ?>" alt="">
                </button>

                <!--1 contenedor principal ya el contenido de enmedio/principal de la interfaz-->
                <section id="principalalm-cuadro" class="cuadro-fondo blanco-transparente borde-r-m"> <!--El id se ha utilizado para poner su position relative y asi sea refremcia de otros elementos-->
                    <!--Logo del contenedor de contenido de enmedio-->
                    <img id="principalalm-logo" class="logo-c" src="imagenes/logos/logoaliadoshorizontal.gif" alt="">
                    <!--Contenedor principal (central) de todos los componentes de la interfaz-->

                    <!-- a este main se le aplicara un scroll en y cuando el contenido se deborde, solo se oculta el scroll x y se asigna un tama;o-->
                    <main id="principalalm-main" class="row centrar"> <!--Para que pueda funcionar el centrar y evitar otro juego de col y row, se convierte el main en row y centramos su contenido-->
                        <div class="col">
                            <div class="row centrar espacio-left-c">
                                <!--Fila/seccion de titulos y subtitulos-->
                                <div class="row espacio-left-c">
                                    <h1 class="titulo-m"><!--Mensaje de bienvenida con nombre. Aqui se obtiene el nombre haciendo referencia a la variable sesion (que tiene el id (obtenido en autenticar)) y consultando en el php de abajo -->
                                        Hola <?Php include("../Servidor/funciones_session/session_nombreapa.php") ?>: <!--Mandamos a trear una funcion que obtienen el nombre de la session iniciada (Para esto se debe corroborar si se inicio la session_start en este documento)-->
                                    </h1>
                                    <h2 class="text-g">¿En qué puedo ser tu aliado de hoy?</h2>
                                </div>

                                <!--fila/seccion de cards de opciones rapidas-->
                                <div class="row espacio-top-c espacio-left-g"> <!--Seccion de card de opciones principalalm-->
                                    <!--Tarjeta de opciones de inicio/ en inetrfaz principal-->
                                    <a href="" class="card-principalalm blanco-solido decoracion-no hover-btn"> <!-- Esta Es la tarjeta tipo a, para que sea un link cuando le den click-->
                                        <div class="row espacio-top-m"><!--Fila de texto de la card-->
                                            <h1 class="text-m txt-negro">Comunidad</h1>
                                            <p class="text-c txt-negro">Reportes de aliado</p>
                                            <img class="icono-card-rb" src="imagenes/iconos/iconoplay.png" alt="">
                                        </div>
                                    </a>
                                </div>

                                <!--Contenedor de buscar/entrada de principalalm contiene el input y el boton-->
                                <div id="principalalm-barra-busqueda" class="row centrar"> <!--Centra los elementos tomando como referencia al contenedor/fila padre-->
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-control text-m borde-r-c" id="" type="text" placeholder="Escribe lo que estas buscando" aria-label="">
                                            </div>
                                            <div class="col-1 centrar espacio-right-c">
                                                <button class="btn-transparente hover-btn">
                                                    <img class="icono-c" src="imagenes/iconos/enviar.png" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </main>
                </section>
            </div>

            <!--Columna de configuracion se abre dando click al avatar, aqui se manda a traer las opciones posibkes a configuar-->
            <div class="col collapse" id="colconfigprincipalalm"> <!--Barra menu de la izq-->

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
    <script src="js/hover_drops.js"></script>

</body>

</html>