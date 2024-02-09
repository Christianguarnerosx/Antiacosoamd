<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--Estilos propios CSS -->
    <link rel="stylesheet" href="css/estilos.css">

    <title>Recuperar contraseña</title>
</head>

<body id="body-recuperarpass">
    <!--Contenedor utilizado para centrar su componenetes hijos-->
    <div class="container-fluid" id="contenedorrecuperarpass"> <!--En este contenedor debe ir el tamaño de 100hv siq uieres que el fondo se adapte a lo alto-->
        <section id="cuadrorecuperarpass">
            <div class="row">
                <div class="col">
                    <!--El form manda a utilizar el back/file de mandar email, ahi se va a utilizar la libreria de phpmailer para mandar correos de recuperacion-->
                    <form action="../Servidor/configcuentamailer.php" id="formulario" method="POST">
                        <div class="row"> <!--Filas de conenido, se utilizan para separar los contenidos de manera adecuada y asi tengan espacio suficiente a la hora de relizar cambios de tamaño de la pantalla-->
                            <div class="col contenedorelementosrecuperarpass"> <!--Contenedor utilizado para centrar su componenetes hijos-->
                                <div class="row">
                                    <img src="imagenes/logos/logoaliadoshorizontal.gif" alt="">
                                </div>
                                <div class="row">
                                    <p id="titulorecuperarpass">Hola ¿Olvidaste tu contraseña?</p>
                                </div>
                                <div class="row">
                                    <p id="avisorecuperarpass">Para tener acceso otra vez ingresa algun dato</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col contenedorelementosrecuperarpass"> <!--Contenedor utilizado para centrar su componenetes hijos-->
                                <!--Este tipos de inputs son para tener un titulo arriba y se pueda mover el placeholder a la hora de dar click-->
                                <div class="form-floating mb-3" id="floating recuperarpass">
                                    <input type="text" class="form-control" id="inputrecuperarpass" name="inputrecuperarpass" placeholder="name@example.com">
                                    <label for="floatingInput" id="labelrecuperarpass">ID ó Correo electronico</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col contenedorelementosrecuperarpass"> <!--Contenedor utilizado para centrar su componenetes hijos-->
                                <!--Btn de tipo submit para poder realizar la accion del formulario (indicacion para que comience el formulario)-->
                                <button type="submit" class="botonrecuperarpass" id="btnmandarrecupearpass">Mandar contraseña</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col contenedorelementosrecuperarpass">
                                <button type="submit" class="botonrecuperarpass" id="btncambiarrecupearpass">Cambiar contraseña</button>
                            </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper ideal para funciones js de bootstrap y hacer funcionar y activar acciones-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS ideal para funciones js de bootstrap y hacer funcionar y activar acciones-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <!--Libreria Sweet alert externa que hace posible las alertas-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="js/alerta_consulta_recuperarpass.js"></script>

</body>

</html>