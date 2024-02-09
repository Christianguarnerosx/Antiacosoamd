// Recupera el valor del parámetro "resultado" de la URL
//Crea un objeto URLSearchParams que contiene todos los parámetros pasados en la URL de la página actual.
const urlParams = new URLSearchParams(window.location.search);
//obtiene el valor del parámetro llamado "resultado" de la cadena de consulta de la URL.
const resultado = urlParams.get("resultado");

if (resultado === "exito") {
  Swal.fire({
    icon: "success",
    title: "SIUUUU",
    text: "Envie tu pass a tu correo crack",
  });
} else if (resultado === "error") {
  Swal.fire({
    icon: "error",
    title: "NOUUU",
    text: "No pude enviar el correo",
  });
} else if (resultado === "fracaso") {
  Swal.fire({
    icon: "warning",
    title: "Oh Oh...",
    text: "No existe ese usuario, revisa tu id o correo",
  });
} else if (resultado === "vacio") {
  Swal.fire({
    icon: "warning",
    title: "Oops...",
    text: "Dame un dato para buscar",
  });
}
