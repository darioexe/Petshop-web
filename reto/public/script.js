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

const menuToggle = document.getElementById('menu-hamburguesa');
const navUl = document.querySelector('nav ul');

menuToggle.addEventListener('click', () => {
    navUl.classList.toggle('active');
});

const formularioContacto = document.querySelector("#form-contacto");
const avisoContacto = document.querySelector("#mensaje-estado");

function revisarFormulario(event) {
 // event.preventDefault(); //

  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;

  if (nombre.trim() === "") {
    avisoContacto.textContent = "Proporciona tu nombre porfavor";
    avisoContacto.classList.add("error");
    avisoContacto.classList.remove("exito");
  } else if (correo.includes("@") === false) {
    avisoContacto.textContent = "Coloca un correo valido";
    avisoContacto.classList.add("error");
    avisoContacto.classList.remove("exito");
  } else {
    avisoContacto.textContent = "¡Mensaje recibido, caserito! Nos pondremos en contacto pronto.";
    avisoContacto.classList.add("exito");
    avisoContacto.classList.remove("error");
  }
}
formularioContacto.addEventListener("submit", revisarFormulario);