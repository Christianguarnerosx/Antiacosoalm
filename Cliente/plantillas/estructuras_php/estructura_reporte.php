<div class="row espacio-top-c alinear-center">
    <h1>Crea un reporte aliado</h1>
    <div class="col display-f flex-wrap centrar">
        <!-- Se importan componentes_php predeterminados (cada componente tiene un id especifico en sudeclaracion/creacion)-->
        <!-- Los id se utilizan par la logica de aparecer y deasaparecer segun sea el caso -->

        <div class="" id="selecttiporeporte">
            <div class="form-floating"> <!-- select para dezplegar lista de tipos de reportes -->
                <?Php
                include("../Servidor/Conexion.php");  /* Para que se importe bien la conexion es necesario que sea SOLO include() porqueeeee si utilizas include_once() marca error*/

                $query = "SELECT id_tipo_reporte, nombre_reporte from tipo_reportes";
                $consulta = mysqli_query($conexion, $query);

                if (mysqli_num_rows($consulta) > 0) {
                ?>
                    <div class="form-floating"> <!-- select para dezplegar lista de tipos de reportes -->
                        <select class="form-select select-reporte" id="select-tipo-reporte" aria-label="Floating label select example">
                            <option selected>Tipo</option>
                            <?Php
                            while ($row = mysqli_fetch_array($consulta)) {
                                $id_tipo_report = $row['id_tipo_reporte'];
                                $nom_report = $row['nombre_reporte'];
                                echo "<option value='" . $id_tipo_report . "'>" . $nom_report . "</option>";
                            } ?>
                        </select>
                        <label>Tipo de reporte</label>
                    </div>
                <?php
                } else {
                    echo "<option value=''>No hay resultados</option>";
                }
                ?>
            </div>
        </div>

        <div class="display-no" id="selecttipousuario">
            <?Php
            $query = "SELECT * from tipo_usuarios";
            $consulta = mysqli_query($conexion, $query);

            if (mysqli_num_rows($consulta) > 0) {
            ?>
                <div class="form-floating"> <!-- select para dezplegar lista de tipos de usuarios -->
                    <select class="form-select select-reporte" id="select-tipo_usuario" aria-label="Floating label select example">
                        <option selected>A quien te refieres</option>
                        <?Php
                        while ($row = mysqli_fetch_assoc($consulta)) {
                            $id_tipo_usuario = $row['id_tipo_usuario'];
                            $nombre_usuario = $row['nombre_tipo_usuario'];
                            echo "<option value='" . $id_tipo_usuario . "'>" . $nombre_usuario . "</option>";
                        } ?>
                    </select>
                    <label>¿Quien?</label>
                </div>
            <?php
            } else {
                echo "<option value=''>No hay resultados</option>";
            }
            ?>
        </div>

        <div class="display-no" id="selectgrado">
            <?Php

            $query = "SELECT id_grado, nombre_grado from grados";
            $consulta = mysqli_query($conexion, $query);

            if (mysqli_num_rows($consulta) > 0) {
            ?>
                <div class="form-floating"> <!-- select para dezplegar lista de grados --> <!-- Clase select-reporte asigna estilos-->
                    <select class="form-select select-reporte" id="select-grados" aria-label="Floating label select example">
                        <option selected>Grado</option>
                        <?Php
                        while ($row = mysqli_fetch_array($consulta)) {
                            $id_grado = $row['id_grado'];
                            $nom_grado = $row['nombre_grado'];
                            echo "<option value='" . $id_grado . "'>" . $nom_grado . "</option>";
                        } ?>
                    </select>
                    <label>Su grado</label>
                </div>
            <?php
            } else {
                echo "<option value=''>No hay resultados</option>";
            }
            ?>
        </div>

        <div class="display-no" id="selectgrupo">
            <?Php
            $query = "SELECT id_grupo, nombre_grupo from grupos";
            $consulta = mysqli_query($conexion, $query);

            if (mysqli_num_rows($consulta) > 0) {
            ?>
                <div class="form-floating"> <!-- select para dezplegar lista de grupos -->
                    <select class="form-select select-reporte" id="select-grupos" aria-label="Floating label select example">
                        <option selected>Grupo</option>
                        <?Php
                        while ($row = mysqli_fetch_assoc($consulta)) {
                            $id_grupo = $row['id_grupo'];
                            $nom_grupo = $row['nombre_grupo'];
                            echo "<option value='" . $id_grupo . "'>" . $nom_grupo . "</option>";
                        } ?>
                    </select>
                    <label>Su grupo</label>
                </div>
            <?php
            } else {
                echo "<option value=''>No hay resultados</option>";
            }
            ?>
        </div>

        <div class="display-no" id="selectusuario">
            <?Php
            include("../Servidor/Conexion.php");  /* Para que se importe bien la conexion es necesario que sea SOLO include() porqueeeee si utilizas include_once() marca error*/

            $query = "SELECT id_usuario, nombre, apellidop, apellidom from usuarios WHERE id_tipo_usuario = '1'";
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
                    <label>Su nombre</label>
                </div>
            <?php
            } else {
                echo "<option value=''>No hay resultados</option>";
            }
            ?>
        </div>

        <!-- Reporte tipo de texto -->
        <!-- Componente Textarea -->
        <div class="row espacio-top-c display-no" id="reporte-texto">
            <?php include("componentes_php/componente_textarea_reporte.php"); ?>
        </div>

        <!-- Reporte tipo de audio -->
        <!-- Componentes btn's,select -->
        <div class="row espacio-top-c display-no" id="reporte-audio">
            <?php include("componentes_php/componente_grabar_audio.php"); ?>
        </div>
        <!-- Boton submit-->
        <div class="row espacio-top-c display-no" id="btn-submit">
            <?php include("componentes_php/componente_btn_reporte.php"); ?>
        </div>
    </div>
</div>


<!--Js de esta interfaz-->
<script src="js/JSEstructuras/estructura_reporte_aparecercomponentes.js"></script> <!-- Sirve para poder aparecer y desaparecer/alternar (el textarea de reporte escritto o un boton de grabacion reporte oral) segun el select de tipo de reporte-->