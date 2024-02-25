<!--Para poder hacer uso de etsas plantillas es necesario importar el js logica_menu_principal.js con un script en la parte de abajo (normalmente esta importado pero mas vale que se revises crack)-->
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

<!--Si se van a  utilizar variables de  SESSION  Hay una "regla/restriccion" que dice que la variable session debe de iniciar antes de entradas de html-->
<!--Si quieres iniciar la session donde se manda atraer en el nombre dara errores como session indefinida/no iniciada       -->
<?php
session_start();
?>

<body>
    <div class="container-fluid">
        <div class="row">

            <!--Columna de menus se abre dando click al boton menu, aqui se manda a traer las opciones posibles a configuar-->
            <!--La clase collapse propia de bootstrap 5, utilizada para poder ocultar/contraer columnas y hacer el efecto de menu-->
            <div class="col-2 collapse" id="colmenuprincipalalm"> <!--Barra menu de la izq. Principalmente esta colapsada (no se ve)    TAMBIEN se utiliza el tama;o de col por que si no no obtiene el tamano que se le asigan en el css-->
                <?php
                /* Aqui debes incluir tu menu*/
                ?>
            </div>

            <!--columna utilizada para el contenido principal de la interfaz (no opciones lo de en medio) aqui van los botones que abren las demas columnas (menu/configuraciones)-->
            <div class="col centrar" id=""> <!--Aqui podras personalizar el fondo-->
                <!--Botones que activan menus/extras sobre el contenedro principal porque si se ponen en las columnas obvio no aparecerian -->
                <button type="button" id="btn-menu-principalalm" class="btn-transparente" data-bs-toggle="collapse" data-bs-target="#colmenuprincipalalm" aria-expanded="false" aria-controls="colmenuprincipalalm">
                    <img src="imagenes/iconos/menudesactivado.png" class="icono-m rotar-90" alt="">
                </button>
                <button type="button" id="btn-extras-principalalm" class="btn-transparente" data-bs-toggle="collapse" data-bs-target="#colconfigprincipalalm" aria-expanded="false" aria-controls="colconfigprincipalalm">
                    <img class="icono-avatar-m" src="<?php include("../Servidor/funciones_session/session_avatar.php"); ?>" alt=""> <!--Se obtiene el avatar con php -->
                </button>
            </div>

            <!--Columna de configuracion se abre dando click al avatar, aqui se manda a traer las opciones posibles a configuar-->
            <div class="col collapse" id="colconfigprincipalalm"> <!--Barra menu de la izq-->
                <?php
                /* Aqui debes incluir tu menu*/
                ?>
            </div>
        </div>
    </div>

    <!--Nota solo dejar un link que mande a traer bootstrap para que la clase collapse funcione-->
    <!-- Option 1: Bootstrap Bundle with Popper ideal para funciones js de bootstrap y hacer funcionar y activar acciones-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="js/logica_menu_principal.js"></script>

</body>

</html>