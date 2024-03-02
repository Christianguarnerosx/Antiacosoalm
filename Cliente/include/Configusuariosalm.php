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
                        <h1><img src="imagenes/iconos/iconoconfig.png" alt=""> Avatar</h1>
                    </a>
                    <a href="" class="opcionconfigusu centrar decoracion-no txt-blanco">
                        <h1><img src="imagenes/iconos/iconoconfig.png" alt="">Fondo</h1>
                    </a>
                    <a href="" class="opcionconfigusu centrar decoracion-no txt-blanco">
                        <h1><img src="imagenes/iconos/iconoconfig.png" alt="">Apodo</h1>
                    </a>
                </div>
                <div class="row">
                    <!--Conetenedor de cambiar avatar (inicialmente esta collapsado)-->
                    <div class="collapse opcionconfigusualm scroll-y alinear-center" id="contenedor-cambiaravataralm">
                        <h1 class="espacio-top-c text-m txt-blanco"> Elige tu nuevo avatar</h1>
                        <div class="row centrar">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-jakfin.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-jakfin.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-bmoranchero.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-bmoranchero.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-dulceprincesa.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-dulceprincesa.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-pltano.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-pltano.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-gunter.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-gunter.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-gato.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-gato.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-finn.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-finn.gif')">
                            <img class="avatar-elegir hover-avatar espacio-top-c" src="imagenes/avatares/avatar-princesafuego.gif" alt="" onclick="Imagenseleccionada('imagenes/avatares/avatar-princesafuego.gif')">
                        </div>
                    </div>

                    <!--Conetenedor de cambiar fondo (inicialmente esta collapsado)-->
                    <div class="collapse opcionconfigusualm" id="contenedor-cambiarfondoalm">

                    </div>

                    <!--Conetenedor de cambiar apodo (inicialmente esta collapsado)-->
                    <div class="collapse opcionconfigusualm" id="contenedor-cambiarapodoalmsss">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Framework jQuery --> <!--Utilizado para que sirva la seleccion de avatar, sin este no funciona el js que fue seleccionado-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--Mandamos a traer la logica de como se dezplegan los contenedores de las opciones-->
<script src="js/logica_config_menu_principal.js"></script>

<script src="js/confirmar_avatar.js"></script>

</html>