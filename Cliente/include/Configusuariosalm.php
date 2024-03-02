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
                    <div class="collapse opcionconfigusualm" id="contenedor-cambiaravataralm">

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

<!--Mandamos a traer la logica de como se dezplegan los contenedores de las opciones-->
<script src="js/logica_config_menu_principal.js"></script>

</html>