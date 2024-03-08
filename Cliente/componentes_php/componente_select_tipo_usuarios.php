<?Php
include("../Servidor/Conexion.php");  /* Para que se importe bien la conexion es necesario que sea SOLO include() porqueeeee si utilizas include_once() marca error*/

$query = "SELECT * from tipo_usuarios";
$consulta = mysqli_query($conexion, $query);

if (mysqli_num_rows($consulta) > 0) {
?>
    <div class="form-floating">  <!-- select para dezplegar lista de tipos de usuarios -->
        <select class="form-select select-reporte" id="select-tipo_usuario" aria-label="Floating label select example">
            <option selected>A quien te refieres</option>
            <?Php
            while ($row = mysqli_fetch_assoc($consulta)) {
                $id_tipo_usuario = $row['id_tipo_usuario'];
                $nombre_usuario = $row['nombre_usuario'];
                echo "<option value='" . $id_tipo_usuario . "'>" . $nombre_usuario . "</option>";
            } ?>
        </select>
        <label>¿Quien?</label>
    </div>
<?php
} else {
    echo "<option value=''>No hay resultados</option>";
}
mysqli_close($conexion);
?>