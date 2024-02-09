<?php
$alert = "";
//Comenzamos una sesion de una vez
session_start();

if (!empty($_SESSION['active'])) { //Si es diferente de vacia
    // header("Location: ../Cliente/Principal.php");
} else {
    //Verificar los datos que ingresan en los input sean diferentes de vacios
    if (!empty($_POST)) {
        if (empty($_POST['usuario']) && empty($_POST['contraseña'])) {
            echo "Ya haz iniciadosesion";
        } else {
            //incluimos la conexion hacia la base de datos 
            include_once("Conexion.php");
            //Declaramos una consulta que nos devolvera un usuario (si existe)
            $_SESSION['usuario'] = $_POST['usuario']; //Se guarda lo que recibimos de la pagina iniciar en una variable de session llamada usuario la cual podremos llamarla en otra pantallas como usuario 
            $user = $_POST['usuario']; //Se guarda lo que recibimos del campo (id,correo,nombre) de la pagina iniciar
            $pass = $_POST['contraseña']; //Se guarda lo que recibimos del campo (contraseña) de la pagina iniciar
            $query = "SELECT * FROM usuarios WHERE (id_usuario = '$user' OR correo = '$user' OR nombre = '$user') AND contraseña = '$pass'";
            $consulta = mysqli_query($conexion, $query); //Mandamos a realizar la consulta
            $resultado = mysqli_fetch_array($consulta); //Guardamos la consulta en una variable resultado para poder acceder a los elementos obtenidos del query mediante ella

            if ($resultado > 0) { //Si devuelve algun resultado es que si existe la informacion entonces realizas:
                if ($user = "administrador") {
                    header("Location: ../Cliente/Principalamd.php");
                } else if ($user = "moderador") {
                    header("Location: ../Cliente/Principalalum");
                } else if ($user = "administrador") {
                    header("Location: ../Cliente/Principalmod");
                }
            } else {
                header("Location: ../Cliente/Iniciodesesion.php?autres=fracaso"); /*El mensaje se envia por un method autres para js en donde al recibir fracaso mandara la alerta predeterminada para fracaso*/
                session_destroy(); /*Destruye los datos guardados en la variable sesion*/
            }
        }
    }
}