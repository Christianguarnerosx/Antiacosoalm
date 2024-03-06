<?Php
include("../Servidor/Conexion.php");  /* Para que se importe bien la conexion es necesario que sea SOLO include() porqueeeee si utilizas include_once() marca error*/

$query = "SELECT id_grado, nombre_grado from grados";
$consulta = mysqli_query($conexion, $query);

if (mysqli_num_rows($consulta) > 0) {
?>
    <div class="form-floating">  <!-- select para dezplegar lista de grados -->
        <select class="form-select select-reporte" id="select-grados" aria-label="Floating label select example">
            <option selected>Grado</option>
            <?Php
            while ($row = mysqli_fetch_array($consulta)) {
                $id_grado = $row['id_grado'];
                $nom_grado = $row['nombre_grado'];
                echo "<option value='" . $id_grado . "'>" . $nom_grado . "</option>";
            } ?>
        </select>
        <label>Selecciona su grado</label>
    </div>
<?php
} else {
    echo "<option value=''>No hay resultados</option>";
}

mysqli_close($conexion);
?>