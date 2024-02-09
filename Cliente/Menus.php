<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 collapse" id="columnamenu">
                <div class="row">
                    <div class="col">
                        <img src="imagenes/logos/logoaliadosvertical.gif" id="imgencabezadoamd" alt="">
                    </div>
                </div>
                <nav class="nav nav-pills nav-fill" id="navamd">
                    <div class="row" id="contenedorpillsamd">
                        <div class="col">
                            <a class="nav-link active" aria-current="page" href="Principalamd.php">Aplicaciones</a>
                            <a class="nav-link" href="Menus.php">Dashboard</a>
                            <a class="nav-link" href="#">Acoso</a>
                            <div class="btn-group dropmenuencabezado">
                                <button type="button" class="btn droprintexto">Action</button>
                                <button type="button" class="btn dropdown-toggle dropdown-toggle-split hoverdrop dropflecha" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu dropcionesencabezado">
                                    <li><a class="dropdown-item droptexto" href="#">Action</a></li>
                                    <li><a class="dropdown-item droptexto" href="#">Another action</a></li>
                                    <li><a class="dropdown-item droptexto" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <a class="nav-link" href="#">Actividades</a>
                            <a class="nav-link" href="#">TurorIA</a>
                        </div>
                    </div>
                </nav>
            </div>
            <!--Columna donde va el-->
            <div class="col" id="colmenus">
                <button id="btnmenuhamburguesa" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#columnamenu" aria-expanded="false" aria-controls="columnamenu">
                    <img id="btnhamburguesa" src="imagenes/menudesactivado.png" alt="">
                </button>

                <button id="btnmenuavatar" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#columnaavatar" aria-expanded="false" aria-controls="columnaavatar">
                </button>
                <!--Contenedor 1-->
                <div class="container-fluid" id="contenedor1">
                    <div class="row">
                        <h1 class="titulosmenus">Hola, Christian</h1>
                        <p class="descripcionmenus">estas son las nuevas noticias</p>
                    </div>
                </div>
                <!--Contenedor 1-->
                <div class="container-fluid" id="contenedor2">
                    <section id="cuadroblancomenus2">
                    </section>
                </div>
            </div>
            <div class="col-2 collapse" id="columnaavatar">

            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle (Bootstrap + Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>
        document.getElementById('columnamenu').addEventListener('shown.bs.collapse', function() {
            document.getElementById('btnmenuhamburguesa').style.left = '20px'; // Ajusta la posición del botón hacia la izquierda
            document.getElementById('btnmenuhamburguesa').style.top = '20px'; // Ajusta la posición del botón hacia la izquierda
        });
        document.getElementById('columnaavatar').addEventListener('shown.bs.collapse', function() {
            document.getElementById('btnmenuavatar').style.right = '20px'; // Ajusta la posición del botón hacia la izquierda
            document.getElementById('btnmenuavatar').style.top = '20px'; // Ajusta la posición del botón hacia la izquierda
        });
        document.getElementById('columnamenu').addEventListener('shown.bs.collapse', function() {
            document.getElementById('cuadroblancomenus1').style.height = '100%';
        });
        document.getElementById('columnamenu').addEventListener('shown.bs.collapse', function() {
            document.getElementById('cuadroblancomenus1').style.width = '120%';
        });


        document.getElementById('columnamenu').addEventListener('hidden.bs.collapse', function() {
            document.getElementById('btnmenuhamburguesa').style.left = '25px'; // Restablece la posición del botón hacia la izquierda
            document.getElementById('btnmenuhamburguesa').style.top = '55px'; // Ajusta la posición del botón hacia la izquierda
        });
        document.getElementById('columnaavatar').addEventListener('hidden.bs.collapse', function() {
            document.getElementById('btnmenuavatar').style.right = '45px'; // Restablece la posición del botón hacia la izquierda
            document.getElementById('btnmenuavatar').style.top = '45px'; // Ajusta la posición del botón hacia la izquierda
        });

        document.getElementById('columnamenu').addEventListener('hidden.bs.collapse', function() {
            document.getElementById('cuadroblancomenus1').style.height = '97%';
        });
        document.getElementById('columnamenu').addEventListener('hidden.bs.collapse', function() {
            document.getElementById('cuadroblancomenus1').style.width = '98%';
        });
    </script>

    <script src="js/hover_drops.js"></script>
</body>

</html>