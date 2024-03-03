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

    <!--Si se van a  utilizar variables de  SESSION  Hay una "regla" que dice que la variable session debe de iniciar antes de entradas de html-->
    <!--Si quieres iniciar la session donde se manda atraer en el nombre dara errores como session indefinida/no iniciada       -->
    <?php
    session_start();
    ?>

    <style>
        /*Para que funcione bien se debe hacer con el **ID** y NO con clases. Si no hace un fallo al utilizar las variables de session*/
        /*MUY IMPORTANTE que la conexion hacia la session este hasta arriba antes que este codigo SIEMPRE*/
        /*Para poder asignar el fondo en cada interfaz es necesario que sea en html ya que css no puede hacer conexion con*/
        #contenedor-principalalm {
            background-image: url('<?php include("../Servidor/funciones_session/session_fondo.php") ?>');
        }
    </style>

</head>

<body class="scroll-body-no">
    <div class="container-fluid">
        <div class="row">

            <!--Columna de menus se abre dando click al boton menu, aqui se manda a traer las opciones posibles a configuar-->
            <!--La clase collapse propia de bootstrap 5, utilizada para poder ocultar/contraer columnas y hacer el efecto de menu-->
            <div class="col-2 collapse" id="colmenuprincipalalm"> <!--Barra menu de la izq. Principalmente esta colapsada (no se ve)    TAMBIEN se utiliza el tama;o de col por que si no no obtiene el tamano que se le asigan en el css-->
                <?php
                include("include/Menualm.php");
                ?>
            </div>

            <!--columna utilizada para el contenido principal de la interfaz (no opciones lo de en medio) aqui van los botones que abren las demas columnas (menu/configuraciones)-->
            <div class="col centrar fondo" id="contenedor-principalalm">


                <!--Botones que activan menus/extras sobre el contenedro principal porque si se ponen en las columnas obvio no aparecerian -->
                <button type="button" id="btn-menu-principalalm" class="btn-transparente" data-bs-toggle="collapse" data-bs-target="#colmenuprincipalalm" aria-expanded="false" aria-controls="colmenuprincipalalm">
                    <img src="imagenes/iconos/menudesactivado.png" class="icono-btn rotar-90" alt="">
                </button>
                <button type="button" id="btn-extras-principalalm" class="btn-transparente" data-bs-toggle="collapse" data-bs-target="#colconfigprincipalalm" aria-expanded="false" aria-controls="colconfigprincipalalm">
                    <img class="icono-btn" src="<?php include("../Servidor/funciones_session/session_avatar.php"); ?>" alt=""> <!--Se obtiene el avatar con php la clse icono avatar hace referencia al 100% del padre(el tama;o del boton)-->
                </button>

                <!--1 contenedor de cuadro blanco ya el contenido de enmedio/principal de la interfaz-->
                <section id="principalalm-cuadro" class="cuadro-fondo centrar blanco-transparente borde-r-c"> <!--El id se ha utilizado para poner su position relative y asi sea refremcia de otros elementos-->
                    <!--Logo del contenedor de contenido de enmedio-->
                    <img id="principalalm-logo" class="logo-c" src="imagenes/logos/logoaliadoshorizontal.gif" alt="">
                    <!--Contenedor principal (central) de todos los componentes de la interfaz-->

                    <!-- Este es el contendor de las card/opciones que muestras acciones de la app en la interfaz principal-->
                    <!-- A este main se le aplicara un scroll en y cuando el contenido se deborde, solo se oculta el scroll x y se asigna un tama;o-->
                    <main id="principalalm-main" class="row"> <!--Para que pueda funcionar el centrar y evitar otro juego de col y row, se convierte el main en row y centramos su contenido-->
                        <div class="col">
                            <div class="row centrar espacio-top-c espacio-left-c">
                                <!--Fila/seccion de titulos y subtitulos-->
                                <h1 class="titulo-m"><!--Mensaje de bienvenida con nombre. Aqui se obtiene el nombre haciendo referencia a la variable sesion (que tiene el id (obtenido en autenticar)) y consultando en el php de abajo -->
                                    Hola <?Php include("../Servidor/funciones_session/session_nombreapa.php") ?>: <!--Mandamos a trear una funcion que obtienen el nombre de la session iniciada (Para esto se debe corroborar si se inicio la session_start en este documento)-->
                                </h1>
                                <h2 class="text-g">¿En qué puedo ser tu aliado de hoy?</h2>
                            </div>

                            <!--fila/seccion de cards de opciones rapidas (Sera el contenedor y podra aguantar demasiadas tarjetas (elementos tipo a))-->
                            <div class="row espacio-top-c centrar"> <!--Seccion de card de opciones principalalm-->
                                <!--Tarjeta de opciones de inicio/ en inetrfaz principal-->
                                <a href="" class="card-principalalm blanco-solido decoracion-no borde-r-c"> <!-- Esta Es la tarjeta tipo a, para que sea un link cuando le den click, el espacion parq ue existan entre ellas no funciona si le pones la class espacio top, se agrego al class card perosnalizado-->
                                    <div class="row espacio-top-m"><!--Fila de texto de la card-->
                                        <h1 class="text-m txt-negro">Comunidad</h1>
                                        <p class="text-c txt-negro">Reportes de aliado</p>
                                        <img class="icono-card-rb" src="imagenes/iconos/iconoplay.png" alt="">
                                    </div>
                                </a>
                                <!--Tarjeta de opciones de inicio/ en inetrfaz principal-->
                                <a href="" class="card-principalalm blanco-solido decoracion-no borde-r-c"> <!-- Esta Es la tarjeta tipo a, para que sea un link cuando le den click, el espacion parq ue existan entre ellas no funciona si le pones la class espacio top, se agrego al class card perosnalizado-->
                                    <div class="row espacio-top-m"><!--Fila de texto de la card-->
                                        <h1 class="text-m txt-negro">Rendimiento</h1>
                                        <p class="text-c txt-negro">Estadisticas</p>
                                        <img class="icono-card-rb" src="imagenes/iconos/iconoplay.png" alt="">
                                    </div>
                                </a>
                            </div>

                        </div>
                    </main>

                    <!--Barra de busqueda-->
                    <!--Form para mandar info por el action-->
                    <!--Contenedor de buscar/entrada de principalalm contiene el input y el boton-->
                    <div id="principalalm-barra-busqueda" class="row"> <!--(al estar el form se centra en el ya que es el "contenedor padre")Centra los elementos tomando como referencia al contenedor/fila padre la fila que los contiene-->
                        <form class="row centrar" action="" method="post"> <!-- Hacer la connexion para mandar donde diga el action -->
                            <div class="col">
                                <input class="form-control text-m borde-r-c" id="principalalm-input-busqueda" type="text" placeholder="Escribe lo que estas buscando" aria-label="">
                            </div>
                            <div class="col-1 centrar espacio-right-c">
                                <button class="btn-transparente hover-btn" type="submit">
                                    <img class="icono-c" id="principalalm-icono-busqueda" src="imagenes/iconos/enviar.png" alt=""> <!--Se agrega un id para poder utilizar mediaquerys par el uso del icono enotras resoluciones de manera independiente-->
                                </button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>

            <!--Columna de configuracion se abre dando click al avatar, aqui se manda a traer las opciones posibkes a configuar-->
            <div class="col collapse" id="colconfigprincipalalm"> <!--Barra menu de la izq-->
                <?Php include("include/Configusuariosalm.php") ?>
            </div>
        </div>
    </div>

    <!--Nota solo dejar un link que mande a traer bootstrap para que la clase collapse funcione-->
    <!-- Option 1: Bootstrap Bundle with Popper ideal para funciones js de bootstrap y hacer funcionar y activar acciones-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!--Sweet alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="js/recibe_alerta_avatar.js"></script> <!--Sirve para que llegue y muestre la alerta de iniciado sesion con exito//avatarconfirm/fondo confirm-->
    <script src="js/logica_menu_principal.js"></script> <!--Sirve para poder hacer funcionar las col como menus-->
    <script src="js/hover_drops.js"></script> <!--Sirve para que los las flechas de los drops se abran automaticamente al sobreponer el mouse-->
</body>

</html>