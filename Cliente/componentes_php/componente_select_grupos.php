<?Php
include("../Servidor/Conexion.php");  /* Para que se importe bien la conexion es necesario que sea SOLO include() porqueeeee si utilizas include_once() marca error*/

$query = "SELECT id_grupo, nombre_grupo from grupos";
$consulta = mysqli_query($conexion, $query);

if (mysqli_num_rows($consulta) > 0) {
?>
    <div class="form-floating">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
            <option selected>Grupo</option>
            <?Php
            while ($row = mysqli_fetch_assoc($consulta)) {
                $id_grupo= $row['id_grupo'];
                $nom_grupo= $row['nombre_grupo'];
                echo "<option value='" . $id_grupo. "'>" . $nom_grupo. "</option>";
            } ?>
        </select>
        <label for="floatingSelect">Selecciona su grupo</label>
    </div>
<?php
} else {
    echo "<option value=''>No hay resultados</option>";
}

mysqli_close($conexion);
?>