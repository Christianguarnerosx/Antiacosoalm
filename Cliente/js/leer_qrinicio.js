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
                const qr_id = code.data;
                idDisplay.textContent = qr_id;

                alert("Se obtuvo" + qr_id);

                mandarusuario(id);
            }
        }, 1000);
    });
});

function mandarusuario(id_qr) {
    window.location.href = 'iniciodinamico.php?id=' + encodeURIComponent(id_qr);
}