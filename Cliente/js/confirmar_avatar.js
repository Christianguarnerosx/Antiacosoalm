//se crea una funcion para poder obtener la ruta llamada Imagenseleccionada, la cual en su parametro se pasa la ruta del onclick="rutadelaimagen" de la imagen
function Imagenseleccionada(rutaAvatar) {
  //Obtiene la ruta en cuanto entra a esta funcion y recibe en su parametro
  Swal.fire({
    //Se crea/muestra una nueva ventana de confirmacion de sweet alert
    title: "¿Estás seguro de elegir este avatar?", //titulo
    text: 'Presiona "SIUU" para confirmar tu selección', //cuerpo
    icon: "question", //icono
    showCancelButton: true, //¿Quieres boton de cancelar? verdadero
    confirmButtonText: "SIUU", // Cuerpo de el boton de confirmacion
    cancelButtonText: "Cancelar", //cuerpo del boton de cancelar
  }).then((result) => {
    //Se espera la respuesta del uasuario con .then
    if (result.isConfirmed) {
      //si es afirmativo entonces
      // Antes de la redirección, guarda el mensaje en sessionStorage
      sessionStorage.setItem("mensajeExito", "¡Avatar seleccionado!"); //Se guarda en la pagina (al parecer son como cookiieees) para ternerla y ocuparla donde se mande (se borra cuando la sesion o la pestaña se elimna o cierra)
      window.location.href = "../Cliente/Principalalm.php"; // Se manda a la pagina que se indique

      // Envía la ruta del avatar al archivo PHP
      enviarRutaAvatarAlServidor(rutaAvatar); //Se envia la ruta obtenida en esta funcio y se manda a la siguiente funcion la cual la enviara por AJAX
    }
  });
}

//Se crea la funcion en la que se mando la ruta y recibe esa ruta enviada en su parametro
function enviarRutaAvatarAlServidor(rutaAvatar) {
  //solicitud AJAX (es una combinacion de javascript y xml)
  $.ajax({
    url: "../Servidor/Insertaravatar.php", // Nombre del archivo al que se enviara la informacion (ruta del avatar)
    type: "POST", //Tipo de envio de dato
    data: { rutaav: rutaAvatar }, // Envia a la ruta el avatar {(nombre de la variable a enviar utilizara como el name), (la ruta que tiene la funcion)}
    success: function (response) { //Si todo es correcto/se cumple
      // alert("Se envió la ruta del avatar con éxito");
    },
    error: function (error) { //Si hubo algun error
      //alert("Hubo un error al enviar la ruta del avatar");
    },
  });
}