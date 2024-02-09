/*Este js se utiliza para que la logica de los menus de izq(hamburguesa) y der(menuavatar)
Es la logica que hace que los menus se muevan, y los botones tengan funcionalidad y animacion*/
/*Hace que los botones se muevan si las columnas se muestran o se muevan si se colapsan asi como el tamaño de las columnas si es que una esta abierta o ambas*/

/*Aqui inicia la edicion de de el btnhamburguesa de la interfaz principal administrador amd*/
/*Cuando la columna de menu/hamburguesa se abre*/
document
  .getElementById("menuprincipalamd")
  .addEventListener("show.bs.collapse", function () {
    document.getElementById("btnmenuprincipalamd").style.top = "15px";
    document.getElementById("btnmenuprincipalamd").style.left = "4px";
    document.getElementById("btnmenuprincipalamd").style.rotate = "90deg";
  });

/*Cuando la columna de menu/hamburguesa se cierra*/
document
  .getElementById("menuprincipalamd")
  .addEventListener("hide.bs.collapse", function () {
    document.getElementById("btnmenuprincipalamd").style.top = "45vh";
    document.getElementById("btnmenuprincipalamd").style.left = "45px";
    document.getElementById("btnmenuprincipalamd").style.rotate = "0deg";
  });
/*Termina la edicion de del btn hamburguesa*/

/*Aqui comienza la edicion de del btnvatarextras de la interfaz principal administrador amd*/
/*Cuando la columna de menu/extras se abre es la que se abre de la izq*/
document
  .getElementById("extrasamdprincipal")
  .addEventListener("show.bs.collapse", function () {
    document.getElementById("extrasamdprincipal").style.position =
      "absolute"; /*Utilizado para poder poner al frente el contenedor/col de extras a todos los contenidos conectada a una linea de abajo en hidden para volver a poner la position en neutro*/
    document.getElementById("btnextrasprincipalamd").style.position =
      "absolute"; /*Hace quer la imagen deje de estar fixed y se quede en el contenedor/menu de extras y no se quede flotando por toda la interfaz ambiar de position*/
    document.getElementById("btnextrasprincipalamd").style.top =
      "15vh"; /*Centra el avatar vertical*/
    document.getElementById("btnextrasprincipalamd").style.right =
      "41vw"; /*Centra el avatar horizontal*/
    document.getElementById("btnextrasprincipalamd").style.width =
      "300px"; /*Hace mas grande el avatarbtn*/
  });

/*Cuando la columna de menu/extras se cierra*/
document
  .getElementById("extrasamdprincipal")
  .addEventListener("hide.bs.collapse", function () {
    document.getElementById("btnextrasprincipalamd").style.position =
      "fixed"; /*Hace quer la imagen vuelva de estar fixed y se quede arriba a la derecha aunque bajemos el mouse */
    document.getElementById("btnextrasprincipalamd").style.top = "30px";
    document.getElementById("btnextrasprincipalamd").style.right = "40px";
    document.getElementById("btnextrasprincipalamd").style.width = "135px";
    document.getElementById("extrasamdprincipal").style.position =
      "fixed"; /*Utilizado para que no se trabe la animacion de contraer la col de avatar*/
  });
/*Termina la edicion de del btn btnvatarextras*/

/*Aqui comienza configuracion de 2 menus abiertos menu avatar*/
/*aqui se controla el comportamiento de los menus desde: si esta abierto el del lado derecho(avatarextras) que paso con
             el izq(menuprincipalnamd) el ancho */
/*Cuando la columna de menu/hamburguesa se abre*/
document
  .getElementById("menuprincipalamd")
  .addEventListener("show.bs.collapse", function () {
    document.getElementById("menuprincipalamd").style.width =
      "320px"; /*Para que la barra de menu simepre tenga el tamaño correcto que es 300 Si no lo tuiene la barra en la resolucion de telefono se ve mal recortado*/
    document.getElementById("extrasamdprincipal").style.right =
      "0px"; /*Se usa para que ancle la columna a la izq y no se vaya por defecto a la derecha (si no lo tiene se ira a la izq la col)*/
    document.getElementById("extrasamdprincipal").style.width =
      "calc(100vw - 320px)"; /*para que cuando se dezplegue el menu/hamburguesa el contenedor de extras/avatar tambien se reduzca el tamaño que menu crece SI QUIERES CAMBIAR EL TAMAÑO DE EL MENU cambias aqui Y... en el width de la col de menu principal*/
  });

/*Cuando la columna de menu/hamburguesa se cierra*/
document
  .getElementById("menuprincipalamd")
  .addEventListener("hide.bs.collapse", function () {
    /*Tiene que tener hidden forzosamente paara que la edicion dees funcionen correctamente y no haya error cuando desaparezca el menu de hamburguesa*/
    document.getElementById("extrasamdprincipal").style.width = "100vw";
  });
/*Termina la configuracion del 2 menus abiertos extrasavatar*/
