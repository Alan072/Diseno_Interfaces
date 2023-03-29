// Seleccionamos el botón y lo almacenamos en una variable
var boton = document.getElementById("boton");

// Inicializamos un contador
var contador = 0;

// Agregamos un listener al botón que se dispara cada vez que se hace click en él
boton.addEventListener("click", function() {
    // Incrementamos el contador cada vez que se hace click en el botón
    contador++;

    // Verificamos si el contador llegó a 2
    if (contador == 2) {
        // Si llegó a 2, mostramos una alerta
        alert("Usuario actualizado exitosamente");
    }
});
