/*Logica para que funcione el boton menu*/
/*Hace que ela columna que esta en collapse aparezca al agregarle el action de bootstrap shown.bs.collapse (Asi aparecera la columa del menu)*/
document.getElementById("colmenuprincipal").addEventListener("show.bs.collapse", function () {
    document.getElementById("colmenuprincipal").style.width = "300px";/*Posicion que se tomara la col mneu a lo ancho cuando este sea dezplegado*/
    document.getElementById("btn-menu-principal").style.top = "-10px"; /*Posicion que tomara a lo alto cuando el menu este dezplegado*/
    document.getElementById("btn-menu-principal").style.left = "-13px"; /*Posicion que tomara a la izq cuando el menu este dezplegado*/
    document.getElementById("btn-menu-principal").style.rotate = "-90deg"; /* Utilizado para dar la a animacionde girar*/
    document.getElementById("btn-menu-principal").style.scale = "0.7"; /*Hara que el boton se haga mas pequeno*/
});

/*De la misma manera se aplica el event de hidden a la col que se quiera ocultar al agregarle el hide.bs,collapse*/
document.getElementById("colmenuprincipal").addEventListener("hide.bs.collapse", function () {
    document.getElementById("btn-menu-principal").style.top = "calc(45vh - 30px)"; /*Esta es la medida que tiene en el css (Con la que comienza) Regresar a la misma posicion*/
    document.getElementById("btn-menu-principal").style.rotate = "0deg"; /*Utilizado para dar la a animacionde girar*/
    document.getElementById("btn-menu-principal").style.left = "25px"; /*Esta es la medida que tiene en el css (Con la que comienza) Regresar a la misma posicion*/
    document.getElementById("btn-menu-principal").style.scale = "1"; /*Esta es la medida que tiene en el css (Con la que comienza) Regresar al mismo tamano*/
});

/*Logica para que funcione el boton extras/opciones*/
/*Hace que ela columna que esta en collapse aparezca al agregarle el action de bootstrap shown.bs.collapse (Asi aparecera la columa del menu)*/
document.getElementById("colconfigprincipal").addEventListener("show.bs.collapse", function () {
    document.getElementById("colconfigprincipal").style.zIndex = "1";/*Este ahce que se sobreponga a todo lo demas del contenido es como en canva/word "Traer/mandar adelante de todo (lo que este debajo de "1")*/
    document.getElementById("btn-menu-principal").style.zIndex = "0";/*Este ahce que se sobreponga a todo lo demas del contenido es como en canva/word "Traer/mandar adelante de todo (lo que este debajo de "1")*/
    document.getElementById("btn-extras-principal").style.scale = "3"; /*Hara que el boton se haga mas pequeno*/
    document.getElementById("btn-extras-principal").style.right = "45%";/*Posicion que tomara a la derecha cuando el menu este dezplegado*/
    document.getElementById("btn-extras-principal").style.top = "200px";/*Posicion que tomara a lo alto cuando el menu este dezplegado*/
    document.getElementById("btn-extras-principal").style.rotate = "360deg"; /* Utilizado para dar la a animacionde girar*/
});

/*De la misma manera se aplica el event de hidden a la col que se quiera ocultar al agregarle el hide.bs,collapse*/
document.getElementById("colconfigprincipal").addEventListener("hide.bs.collapse", function () {
    document.getElementById("btn-extras-principal").style.scale = "1"; /*Este ahce que se sobreponga a todo lo demas del contenido es como en canva/word "Traer/mandar adelante de todo (lo que este debajo de "1")*/
    document.getElementById("btn-extras-principal").style.right = "25px";/*Esta es la medida que tiene en el css (Con la que comienza) Regresar a la misma posicion*/
    document.getElementById("btn-extras-principal").style.top = "25px";/*Esta es la medida que tiene en el css (Con la que comienza) Regresar a la misma posicion*/
    document.getElementById("btn-extras-principal").style.rotate = "0deg"; /* Utilizado para dar la a animacionde girar*/
});