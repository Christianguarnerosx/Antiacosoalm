<?Php
include("../Servidor/Conexion.php");  /* Para que se importe bien la conexion es necesario que sea SOLO include() porqueeeee si utilizas include_once() marca error*/

$query = "SELECT id_usuario, nombre, apellidop, apellidom from usuarios WHERE tipo = 'Alumno'";
$consulta = mysqli_query($conexion, $query);

if (mysqli_num_rows($consulta) > 0) {
?>
    <div class="form-floating"> <!-- select para dezplegar lista de alumnos -->
        <select class="form-select select-reporte" id="select-alumnos" aria-label="Floating label select example">
            <option selected>Grupo</option>
            <?Php
            while ($row = mysqli_fetch_assoc($consulta)) {
                $id_usuario = $row['id_usuario'];
                $nombre_usuario = $row['nombre'] . " " . $row['apellidop'] . " " . $row['apellidom'];
                echo "<option value='" . $id_usuario . "'>" . $nombre_usuario . "</option>";
            } ?>
        </select>
        <label>Selecciona su nombre</label>
    </div>
<?php
} else {
    echo "<option value=''>No hay resultados</option>";
}
mysqli_close($conexion);
?>