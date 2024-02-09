/*------------------------------------------------Pantalla principal--------------------------------------------------*/
//window es una clase, y a esa clase se le agrega uno de los varios eventos que trae esa clase,
//en este caso escucha una accion EventListener (recargar pagina) y hace la funcion
//mandar la ventana a la posision 0, 0
//function() hace la funcion declarada (window.scrolTo (0,0))
//evento de recargar pantalla y mandar a las coor de la interfaz (0,0)
window.addEventListener("load", function () {
  window.scrollTo(0, 0);
});
