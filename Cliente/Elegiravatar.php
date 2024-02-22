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

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid contenedor-elegiravatar display-f centrar">
        <section class="cuadro-h blanco-transparente centrar">
            <div class="row centrar">
                <div class="col-4 espacio-left-g">
                    <h1 class="text-g"> Bien
                        <?php
                        session_start();
                        include("../Servidor/Conexion.php");
                        $id = $_SESSION['usuario'];
                        $query = "SELECT nombre, apellidop FROM usuarios WHERE id_usuario = 1";
                        $resultado = mysqli_query($conexion, $query);

                        if (mysqli_num_rows($resultado) > 0) {
                            $row = mysqli_fetch_array($resultado);
                        ?>
                            <?Php echo "" . $row["nombre"] . "," ?>
                        <?Php
                        }
                        mysqli_close($conexion);
                        ?>
                        <span class="text-m">Escoge un vatar</span>
                        <br> <span class="text-c">(No te preocupes mas adelante podras cambiarlo)</span>
                    </h1>
                </div>
                <div class="col">
                    <div class="row centrar-h espacio-top-c">
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
            </div>
        </section>
    </div>

    <!-- Framework jQuery --> <!--Utilizado para que sirva la seleccion de avatar, sin este no funciona el js que fue seleccionado-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper ideal para funciones js de bootstrap y hacer funcionar y activar acciones-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS ideal para funciones js de bootstrap y hacer funcionar y activar acciones-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <!--Sweet alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="js/confirmar_avatar.js"></script>


</body>

</html>