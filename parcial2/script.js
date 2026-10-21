const formulario = document.querySelector("#form-horno");
const aviso = document.querySelector("#aviso-horno");

function revisarFormulario(event) {
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;

  if (nombre.trim() === "") {
    event.preventDefault();
    aviso.textContent = "Necesitamos tu nombre caserito";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
  } else if (correo.trim() === "") {
    event.preventDefault();
    aviso.textContent = "Necesitamos un correo donde responderte";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
  } else if (correo.includes("@") === false) {
    event.preventDefault();
    aviso.textContent = "Los correos tienen Arroba (@) case";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
  } else {
    aviso.textContent = "Pedido tomado - te atiende Choque Candia Nicolas";
    aviso.classList.add("exito");
    aviso.classList.remove("error");
  }
}

formulario.addEventListener("submit", revisarFormulario);