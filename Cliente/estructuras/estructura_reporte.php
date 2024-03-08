<div class="row espacio-top-c">
    <div class="col">
        <h1>Crea un reporte aliado</h1>
        <!-- Se importan componentes_php predeterminados (cada componente tiene un id especifico en sudeclaracion/creacion)-->
        <?php include("componentes_php/componente_select_tipo_reporte.php"); ?>
        <?php include("componentes_php/componente_select_tipo_usuarios.php"); ?>
        <?php include("componentes_php/componente_select_grados.php"); ?>
        <?php include("componentes_php/componente_select_grupos.php"); ?>
        <?php include("componentes_php/componente_select_usuario.php"); ?>


        <!-- Reporte tipo de texto -->
        <!-- Componente Textarea -->
        <div class="row espacio-top-c display-no" id="contenedor-reporte-texto">
            <?php include("componentes_php/componente_textarea_reporte.php"); ?>
        </div>

        <!-- Reporte tipo de audio -->
        <!-- Componentes btn's,select -->
        <div class="row espacio-top-c display-no" id="contenedor-reporte-audio">
            <?php include("componentes_php/componente_grabar_audio.php"); ?>
        </div>

        <!-- Boton submit-->
        <div class="row espacio-top-c centrar">
            <?php include("componentes_php/componente_btn_reporte.php"); ?>
        </div>
    </div>
</div>

<!--Js de esta interfaz-->
<script src="js/JSEstructuras/logica_estructura_reporte.js"></script> <!-- Sirve para poder aparecer y desaparecer/alternar (el textarea de reporte escritto o un boton de grabacion reporte oral) segun el select de tipo de reporte-->