<!--Para que funcione bien el menu con la logica de menus en principalalm -->
<!--Es muy importante no tener los links de bootstrap, ya que si no entraran en conflicto al tener dos en principal alm y no funcionara -->
<!--En todo el documento se utilizan rutas locales de donde se va a importar el doc-->

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

</head>

<body>
    <div class="container-fluid display-f centrar-h" id="contenedor-configusuariosalm"> <!--Asigna el tama;o que tendra el contenedor de las configuraciones y las centra horizontalmente -->
        <div class="row">
            <div class="col">
                <div class="row alinear-center"> <!--Deja todo alineado para que este centrado de manera correcta-->
                    <!--La calse de opcionconfigusu de los elementos 'a' es para asignar el mismo contenedor/"layout" de todas las opciones abiertas-->
                    <a href="" id="configavataralm" class="opcionconfigusu centrar decoracion-no txt-blanco hover-btn">
                        <h1 class="text-g"><img src="imagenes/iconos/iconoconfig.png" alt=""> Avatar</h1>
                    </a>
                    <a href="" id="confifondoalm" class="opcionconfigusu centrar decoracion-no txt-blanco hover-btn">
                        <h1 class="text-g"><img src="imagenes/iconos/iconoconfig.png" alt="">Fondo</h1>
                    </a>
                    <a href="" id="confiapodoalm" class="opcionconfigusu centrar decoracion-no txt-blanco hover-btn">
                        <h1 class="text-g"><img src="imagenes/iconos/iconoconfig.png" alt="">Tema</h1>
                    </a>
                </div>
                <div class="row">
                    <!--Conetenedor de cambiar avatar (inicialmente esta collapsado)--> <!-- Se utiliza el id para hacer la logica de comportamiento de como abrir y cerrar contenedores con js-->
                    <div class="collapse opcionconfigusualm scroll-y alinear-center borde-r-c" id="contenedor-cambiaravataralm">
                        <h1 class="espacio-top-c text-g txt-blanco"> Elige tu nuevo avatar</h1>
                        <div class="row centrar">
                            <!-- Estas clases asignan tamaño/ animacion sobreponer / espacio de arriba.   El onclick es de java y de jquery al parecer, Manda a una funcion la ruta que se declara--->
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-jakfin.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-jakfin.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-bmoranchero.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-bmoranchero.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-dulceprincesa.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-dulceprincesa.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-pltano.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-pltano.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-gunter.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-gunter.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-gato.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-gato.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-finn.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-finn.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-gatoblanco.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-gatoblanco.gif')">
                        </div>
                    </div>

                    <!--Conetenedor de cambiar fondo (inicialmente esta collapsado)--> <!-- Se utiliza el id para hacer la logica de comportamiento de como abrir y cerrar contenedores con js-->
                    <div class="collapse opcionconfigusualm scroll-y alinear-center borde-r-c" id="contenedor-cambiarfondoalm">
                        <div class="row centrar">
                            <!-- Estas clases asignan tamaño/ animacion sobreponer / espacio de arriba.   El onclick es de java y de jquery al parecer, Manda a una funcion la ruta que se declara--->
                            <h1 class="espacio-top-c text-g txt-blanco"> Elige tu nuevo fondo</h1>
                            <img class="fondo-elegir hover-btn espacio-top-c" src="imagenes/fondos/fondo-gusano.gif" alt="" onclick="Fondoseleccionado('imagenes/fondos/fondo-gusano.gif')">
                            <img class="fondo-elegir hover-btn espacio-top-c" src="imagenes/fondos/fondo-zen.gif" alt="" onclick="Fondoseleccionado('imagenes/fondos/fondo-zen.gif')">
                            <img class="fondo-elegir hover-btn espacio-top-c" src="imagenes/fondos/fondo-bmobaraba.gif" alt="" onclick="Fondoseleccionado('imagenes/fondos/fondo-bmobaraba.gif')">
                            <img class="fondo-elegir hover-btn espacio-top-c" src="imagenes/fondos/fondo-bmobano.gif" alt="" onclick="Fondoseleccionado('imagenes/fondos/fondo-bmobano.gif')">
                        </div>
                    </div>

                    <!--Conetenedor de cambiar apodo (inicialmente esta collapsado)--> <!-- Se utiliza el id para hacer la logica de comportamiento de como abrir y cerrar contenedores con js-->
                    <div class="collapse opcionconfigusualm centrar borde-r-c alinear-center" id="contenedor-cambiarapodoalm">
                        <!-- Aun no se comienza -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Framework jQuery --> <!--Utilizado para que sirva la seleccion de avatar, sin este no funciona el js de que fue seleccionado (el onclick de js)-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--Mandamos a traer la logica de como se dezplegan los contenedores de las opciones-->
<script src="js/logica_config_menu_principal.js"></script>

<script src="js/confirmar_avatar.js"></script>
<script src="js/confirmar_fondo.js"></script>

</html>