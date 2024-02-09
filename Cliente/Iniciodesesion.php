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

    <title>Inicia Sesión</title>
</head>

<body id="body-sesion">
    <main> <!-- Inicia cuerpo de la estructura-->
        <!--Contenedor padre que se usa css para centrar a todos los elementos div hijos (solo el section'cardsection') que estan dentro de el-->
        <div class="container-fluid" id="contenedortarjetasesion">
            <section id="cardsesion"><!--Dentro de este section ya se podran poner componenetes sin arriesgar la integridad de diseño, solo afectararn a el cuadro blanco por dentro-->
                <div class="row">
                    <div class="col"> <!--Todos los componenetes estan dentro de una sola columna, si deseas algo a la izq o der agregas otra columna, si no solo rows-->
                        <img id="logosesion" src="imagenes/logos/logoaliadosvertical.gif" alt=""> <!--Logo-->
                        <h2>Bienvenido, inicia sesion</h2>
                        <!--El form mandara los datos hacia donde dicta action "autenticar sesion" (recuerda que debes de recibirlos en ese file con el metodo que se envia) "Post"-->
                        <form action="../Servidor/autenticarsesion.php" method="POST"> <!--Manda a el back 2 parametros 1(correo o id) 2(contraseña)-->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="usuario" placeholder="name@example.com">
                                <label for="floatingInput">Correo/ID</label> <!--Se manda a el back con el name del input-->
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" name="contraseña" placeholder="Password">
                                <label for="floatingPassword">Contraseña</label> <!--Se manda a el back con el name del input-->
                            </div>
                            <div class="row">
                                <div class="col" id="contenedorolvidastesesion"> <!--Este col hace que el tamaño del boton no sea el de toda la row y se pueda centrar-->
                                    <a href="Recuperarpass.php" id="olvidastesesion">¿Olvidaste tu contraseña?</a> <!--Hace que el form se ejecute y manda a la direccion del action del form-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" id="contenedorbtnsesion"> <!--Este col hace que el tamaño del boton no sea el de toda la row y se pueda centrar-->
                                    <a href=""><button type="submit" id="botoniniciarsesion">Siguiente</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper ideal para funciones js de bootstrap y hacer funcionar y activar acciones-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS ideal para funciones js de bootstrap y hacer funcionar y activar acciones-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <!--Libreria Sweet alert externa que hace posible las alertas-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!--Script perzonalizado que manda a traer la alerta-->
    <script src="js/alerta_autenticacion.js"></script>
</body>

</html>