<!--Para que funcione bien el menu con la logica de menus en principalalm -->
<!--Es muy importante no tener los links de bootstrap, ya que si no entraran en conflicto al tener dos en principal alm y no funcionara -->

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
            <nav class="nav flex-column">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
                <a class="nav-link" href="#">Much longer nav link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </nav>
        </div>
    </div>

</body>

</html>