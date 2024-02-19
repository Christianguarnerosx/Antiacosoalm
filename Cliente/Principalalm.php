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

<body>
    <div class="container-fluid">
        <div class="row">
            <!--La clase collapse propia de bootstrap 5, utilizada para poder ocultar/contraer columnas y hacer el efecto de menu-->
            <div class="col-2 collapse" id="colmenuprincipal"> <!--Barra menu de la izq. Principalmente esta colapsada (no se ve)    TAMBIEN se utiliza el tama;o de col por que si no no obtiene el tamano que se le asigan en el css-->
                <?php
                include("include/Menualm.php");
                ?>
            </div>
            <div class="col" id="contenedor-principal">
                <!--Botones que activan menus/extras sobre el contenedro principal porque si se ponen en las columnas obvio no aparecerian -->
                <button type="button" id="btn-menu-principal" class="transparente" data-bs-toggle="collapse" data-bs-target="#colmenuprincipal" aria-expanded="false" aria-controls="colmenuprincipal">
                    <img src="imagenes/iconos/menudesactivado.png" class="icono-m rotar-90" alt="">
                </button>
                <button type="button" id="btn-extras-principal" class="transparente" data-bs-toggle="collapse" data-bs-target="#colextrasprincipal" aria-expanded="false" aria-controls="colextrasprincipal">
                    <img src="imagenes/avatares/avatar-bmo.gif" class="icono-g" alt="">
                </button>
                <!--comienza el contenido-->
                <main>

                </main>
            </div>
            <div class="col collapse" id="colextrasprincipal"> <!--Barra menu de la izq-->
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