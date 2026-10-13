function confirmarPedido(){
    const mensaje = document.querySelector('#mensaje');
    mensaje.textContent = 'Pedido confirmado - te atiende jhonatan pastor quispe samo';
    mensaje.classList.remove("oculto")
}

const boton = document.querySelector("#btn-confirmar");

boton.addEventListener("click", confirmarPedido);