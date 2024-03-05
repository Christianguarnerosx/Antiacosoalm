/*espera a que el elemento con clase padre sea seleccionada una opcion entonces hace que aparezca el elmento hijo*/
document.querySelector('.select-padre').addEventListener('change', function () {
    document.querySelector('.select-hijo').classList.remove('display-no'); /*La clase 'display-no' es propia hace que no sea visible y quita esa clase al seleccionar algo del select padre*/
});

document.querySelector('.select-hijo').addEventListener('change', function () {
    document.querySelector('.textarea-nieto').classList.remove('display-no');
});