/*espera a que el elemento con clase abuelo sea seleccionada una opcion entonces hace que aparezca el elmento padre*/
document.querySelector('.c-abuelo').addEventListener('change', function () {
    document.querySelector('.c-padre').classList.remove('display-no'); /*La clase 'display-no' es propia hace que no sea visible y quita esa clase al seleccionar algo del select padre*/
});

/*espera a que el elemento con clase padre sea seleccionada una opcion entonces hace que aparezca el elmento hijo*/
document.querySelector('.c-padre').addEventListener('change', function () {
    document.querySelector('.c-hijo').classList.remove('display-no'); /*La clase 'display-no' es propia hace que no sea visible y quita esa clase al seleccionar algo del select padre*/
});

/*espera a que el elemento con clase hijo sea seleccionada una opcion entonces hace que aparezca el elmento hijo*/
document.querySelector('.c-hijo').addEventListener('change', function () {
    document.querySelector('.c-nieto').classList.remove('display-no');
});