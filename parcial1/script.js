document.getElementById("btn-confirmar").addEventListener("click", function() {
    const mensaje = document.querySelector("#mensaje");
    mensaje.textContent = "Encargo recibido - te atiende Nicolas Choque Candia";
    mensaje.classList.remove("oculto");
});