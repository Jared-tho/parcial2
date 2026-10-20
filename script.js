const formulario = document.querySelector("#formulario-axon");
const aviso = document.querySelector("#aviso-axon");

function validar(event) {
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;
  const equipo = document.querySelector("#equipo").value;

  if (nombre === "" || correo === "" || equipo === "") {
    event.preventDefault();
    aviso.textContent = "Completa todos los campos obligatorios.";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
  } else if (!correo.includes("@")) {
    event.preventDefault();
    aviso.textContent = "El correo debe llevar una arroba (@).";
    aviso.classList.add("error");
    aviso.classList.remove("exito");
  } else {
    aviso.textContent = "Gracias, tu solicitud a AXON fue enviada. Jared Aguirre Rosas";
    aviso.classList.add("exito");
    aviso.classList.remove("error");
  }
}

formulario.addEventListener("submit", validar);