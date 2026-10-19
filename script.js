

const botonTema = document.querySelector("#btn-tema");

if (botonTema) {
  botonTema.addEventListener("click", function() {
    document.body.classList.toggle("oscuro");
  });
}

const formulario = document.querySelector("#form-contacto");

if (formulario) {
  formulario.addEventListener("submit", function(event) {
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();
    const respuesta = document.querySelector("#respuesta-formulario");

    respuesta.classList.remove("oculto");
    respuesta.classList.remove("error");
    respuesta.classList.remove("exito");

    if (nombre === "") {
      respuesta.textContent = "Por favor, escribe tu nombre.";
      respuesta.classList.add("error");
      return;
    }

    if (!correo.includes("@")) {
      respuesta.textContent = "Por favor, escribe un correo válido con @.";
      respuesta.classList.add("error");
      return;
    }

    respuesta.textContent =
      "¡Gracias! Tus datos se validaron correctamente.";
    respuesta.classList.add("exito");
  });
}
