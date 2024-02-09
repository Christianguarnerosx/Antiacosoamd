/*No fue propio al 100%*/
// Array de consejos
const consejos = [
    "Recicla papel, cartón y plástico para reducir la basura.",
    "Apaga las luces cuando no las necesites para ahorrar energía.",
    "Utiliza bolsas reutilizables en lugar de bolsas de plástico.",
    "Planta un árbol en tu comunidad para contribuir al medio ambiente.",
    "Consume menos agua en la ducha y al lavar los platos.",
    "Reduce el consumo de carne para disminuir la huella ecológica.",
    "Repara objetos en lugar de desecharlos y comprar nuevos.",
];

// Función para obtener un consejo aleatorio
function obtenerConsejoAleatorio() {
    const indice = Math.floor(Math.random() * consejos.length);
    return consejos[indice];
}

// Función para mostrar un consejo
function mostrarConsejo() {
    // Obtener un consejo aleatorio y mostrarlo en el elemento con id "consejo-text"
    document.getElementById("descripcionculturaindex").textContent = obtenerConsejoAleatorio();
}

// Mostrar un consejo al cargar la página
mostrarConsejo();

// Cambiar el consejo cada 5 segundos
setInterval(mostrarConsejo, 5000);
