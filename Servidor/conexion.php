<?php
/*Datos de a donde se va a conectar*/
/*Si utilizas otro servidor tendras que poner el purto en el que esta ":3310" */
$host = "localhost:3310"; /*Servidor*/
$user = "root"; /*Usuario*/
$pass = ""; /*Contraseña*/
$database = "escuela"; /*Nombre de la base de datos a la que vas a conectar*/

$conexion = mysqli_connect($host, $user, $pass, $database); /*Si no hubo respuesta/conexion/fallos de datos/noexiste base/etc*/
if (!$conexion) {
    die("Error al conectar" . mysqli_connect_error()); /*Manda el mensaje de error/Detiene la conexion/*/
} else {
    //echo "Te conectastee siuuu"; /*Si todo biuen, aqui vamooos*/
}