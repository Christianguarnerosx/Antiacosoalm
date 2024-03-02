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
    <div class="container-fluid">
        <div class="row centrar-h espacio-v-c">
            <img class="avatar-g" src="imagenes/avatares/avatar-bmoranchero.gif" alt=""> <!--Debe de ponerse la ruta calculada desde donde se manda a traer en este caso es para la de menual pricnipal-->
        </div>
        <div class="row">
            <nav class="nav nav-pills flex-column text-c" id="Menudealm"> <!--Se asigna el tamano de texto dentro del nav (solo afecta a los "a" nav link)-->
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                <a class="nav-link" href="#">TutorIA</a>
                <a class="nav-link" href="#">Aliado</a>
                <a class="nav-link" href="#">Academico</a>
                <a class="nav-link" href="#">Track</a>
                <a class="nav-link" href="#">Extras</a>
                <!-- boton dezplegable de... -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary text-c">Action</button> <!--Aqui tambien se debe de cambiar el tamano del texto por que al ponerselo al nav solo agarra a los nav-link-->
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split text-m hoverdrop" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu text-m menualmdrop">
                        <li><a class="dropdown-item" href="#">Mis estadisicas</a></li>
                        <li><a class="dropdown-item" href="#">Reconocimientos</a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

</body>

</html>