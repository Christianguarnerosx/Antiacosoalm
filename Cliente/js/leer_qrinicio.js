document.addEventListener("DOMContentLoaded", function () {
    const video = document.getElementById("qr-video");
    const idDisplay = document.getElementById("id-display");

    navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
        .then(function (stream) {
            video.srcObject = stream;
            video.play();
        })
        .catch(function (err) {
            console.error("Error al acceder a la cámara: ", err);
        });

    video.addEventListener("loadedmetadata", function () {
        const canvas = document.createElement("canvas");
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        const context = canvas.getContext("2d");

        setInterval(function () {
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
            const code = jsQR(imageData.data, canvas.width, canvas.height);

            if (code) {
                const id = code.data;
                idDisplay.textContent = id;

                // Envía el ID a otra interfaz (puedes ajustar esto según tus necesidades)
                enviarIdAOtraInterfaz(id);
            }
        }, 1000);
    });

    function enviarIdAOtraInterfaz(id) {
        // Puedes redirigir a otra página pasando el ID como parámetro en la URL o usar AJAX
        // Ejemplo de redirección:
        // window.location.href = 'otra_interfaz.php?id=' + id;

        // Ejemplo de AJAX (requiere una función de manejo de AJAX, aquí se utiliza la función fetch):
        fetch('otra_interfaz.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ id: id }),
        })
        .then(response => response.json())
        .then(data => {
            console.log('Respuesta del servidor:', data);
            // Puedes manejar la respuesta del servidor según tus necesidades
        })
        .catch(error => {
            console.error('Error en la solicitud AJAX:', error);
        });
    }
});