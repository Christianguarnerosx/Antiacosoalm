document.addEventListener('DOMContentLoaded', function () {
    const enlace = document.getElementById('configavataralm');

    enlace.addEventListener('click', function (event) {
        event.preventDefault();
        if (document.getElementById('contenedor-cambiaravataralm').classList.contains('collapse')) {
            document.getElementById('contenedor-cambiaravataralm').classList.remove('collapse');
        } else {
            document.getElementById('contenedor-cambiaravataralm').classList.add('collapse');
        }
    })
});