const botonModo = document.getElementById('boton-oscuro');

function alternarModoOscuro() {
    document.body.classList.toggle('dark-mode');

    if (document.body.classList.contains('dark-mode')) {
        botonModo.textContent = '☀️ Modo Claro';
    } else {
        botonModo.textContent = '🌙 Modo Oscuro';
    }
}

botonModo.addEventListener('click', alternarModoOscuro);