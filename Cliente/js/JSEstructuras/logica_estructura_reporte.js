/*con este scrip se podra hacer aparecer y desaparecer los elementos/componentes segun vayan siendo seleccionados*/

/*Logica para elegir tipo de reporte*/
/* Creamos una variable para guardar un elemento de html (el que tenga el id select-tipo-reporte)*/
const reporte = document.getElementById('select-tipo-reporte'); /*Se hace refrencia a un componente php*/

/* Si el elemento sufre un cambio */
reporte.addEventListener('change', function () {
    const reporteseleccionado = reporte.value; /* Obtener el valor seleccionado del select*/

    if (reporteseleccionado === "1") { /* Si el valor seleccionado es texto, (se maneja por el id los values para mandar el tipo de reporte)*/
        /* Por si seleccionado antes el de audio y se esta esta mostrando lo ocultamos*/
        document.getElementById('contenedor-reporte-audio').classList.add('display-no');
        /* Logica para aparecer el textarea */
        document.getElementById('contenedor-reporte-texto').classList.remove('display-no');
    } else if (reporteseleccionado == "2") {
        /* Por si seleccionado antes el de texto y se esta esta mostrando lo ocultamos*/
        document.getElementById('contenedor-reporte-texto').classList.add('display-no');
        /* Logica para aparecer el modulo de grabar audio */
        document.getElementById('contenedor-reporte-audio').classList.remove('display-no');
    }
});

/*Logica para que salga el */