/*----------------------------------------------Pantalla index--------------------------------------------------*/
/*Efecto maquina de escribir (Comienza)*/
const bodegapalabras = [
  "Talento",
  "Mente",
  "Persona",
  "mejor conexión",
  "camino a lo ideal",
]; // Lista de textos a mostrar

let contadorpalabra = 0; /*Cuenta en que palabra del array va*/
let contadorletra = 0; /*Cuenta en que letra de la palabra va*/

const contenido =
  document.getElementById(
    "descripcionindex"
  ); /*Obtiene contenido del elemento con el id de el span (en este caso) por que meti el span que cambiara dentro de una me parece*/

//Funcion escribir
function type() {
  if (contadorletra < bodegapalabras[contadorpalabra].length) {
    contenido.textContent += bodegapalabras[contadorpalabra].charAt(contadorletra);
    contadorletra++;
    setTimeout(type, 80);
  } else {
    setTimeout(erase, 1000);
  }
}

//funcion borrar
function erase() {
  if (contadorletra > 0) {
    contenido.textContent = bodegapalabras[contadorpalabra].substring(
      0,
      contadorletra - 1
    );
    contadorletra--;
    setTimeout(erase, 100);
  } else {
    contadorpalabra++;
    if (contadorpalabra >= bodegapalabras.length) {
      contadorpalabra = 0;
    }
    setTimeout(type, 500);
  }
}

//Hacer que carge siempre en la pagina
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(type, 1000);
});
/*Efecto maquina de escribir (termina)*/
