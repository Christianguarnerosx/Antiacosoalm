<?Php
include("../Servidor/Conexion.php");  /* Para que se importe bien la conexion es necesario que sea SOLO include() porqueeeee si utilizas include_once() marca error*/

$query = "SELECT id_tipo_reporte, nombre_reporte from tipo_reportes";
$consulta = mysqli_query($conexion, $query);

if (mysqli_num_rows($consulta) > 0) {
?>
    <div class="form-floating">  <!-- select para dezplegar lista de tipos de reportes -->
        <select class="form-select select-reporte" id="select-tipo-reporte" aria-label="Floating label select example">
            <option selected>Tipo de reporte</option>
            <?Php
            while ($row = mysqli_fetch_array($consulta)) {
                $id_tipo_report = $row['id_tipo_reporte'];
                $nom_report = $row['nombre_reporte'];
                echo "<option value='" . $id_tipo_report . "'>" . $nom_report . "</option>";
            } ?>
        </select>
        <label>Selecciona tipo de reporte</label>
    </div>
<?php
} else {
    echo "<option value=''>No hay resultados</option>";
}

mysqli_close($conexion);
?>