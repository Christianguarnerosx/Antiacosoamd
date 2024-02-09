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

    <title>Bienvenida</title>
</head>

<!--Aqui se asigna el background de toda la interfaz por el id con css-->

<body>
    <div class="container-fluid">
        <div class="row">

            <!-- Menu del lado izq contiene todas las opciones el del menu hamburguesa-->
            <div class="col-2 collapse" id="menuprincipalamd">
                <header>
                    <div class="row centrarprincipalamd">
                        <?php
                        include("include/Menuamd.php");
                        ?>
                    </div>
                </header>
            </div>

            <!--Contenido de en medio, contenedor donde se muestra lo que se pide en menu-->
            <div class="col">
                <main>
                    <button id="btnmenuprincipalamd" class="" type="button" data-bs-toggle="collapse" data-bs-target="#menuprincipalamd" aria-expanded="false" aria-controls="menuprincipalamd">
                        <img src="imagenes/iconos/menudesactivado.png" alt="">
                    </button>
                    <button id="btnextrasprincipalamd" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#extrasamdprincipal" aria-expanded="false" aria-controls="extrasamdprincipal">
                        <img id="imgbtnextrasprincipalamd" src="imagenes/avatar/avatar-bmo.gif" alt="">
                    </button>

                    <div class="row">
                        <section class="contenedor1principalamd">

                        </section>
                    </div>
                </main>
            </div>

            <!-- Menu del lado derecho contiene todas los extras el del avatar-->
            <div class="col-9 collapse" id="extrasamdprincipal">
                <header>
                    <?php
                    include_once("include/Extrasamd.php");
                    ?>
                </header>
            </div>
        </div>

        <!--Aqui va el js de JQuery si se utiliza-->

        <!-- Option 1: Bootstrap Bundle with Popper ideal para funciones js de bootstrap y hacer funcionar y activar acciones-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

        <!--Js Personal-izados-->
        <script src="js/logica_menusamd.js"></script> <!--Este es IMPORTANTE porque es el que tiene la logica de los menus(tamaños/posiciones/funcionalidad) y botones(animaciones)-->
</body>

</html>