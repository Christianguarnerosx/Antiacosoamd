<!--Atencion, Este file no tiene la referencia al js y popper js de bootstrap (los dos scripts de abaja que tiene por defecto)-->
<!--¿? "Evitar enciomar o tener los dos archivos JS de Popper y Bootstrap. (El de aqui y a donde se mandan a traer)
    Solo deben tenerlos donde se manden a traer."-->
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

    <title>Encabezado/pag/principal</title>
</head>

<body> <!--Este header es utilizado para la pagina principal de administradores-->
    <header>
        <div class="container-fluid"> <!--Contenedor principal el cual tendra solo el navbar -->
            <div class="row">
                <div class="col">
                    <!--La ruta la tomara de donde se mande a traer entonces (CALCULA LA RUTA de DONDE lo MANDES a TRAER --- NO de aqui x)-->
                    <img src="imagenes/logos/logoaliadosvertical.gif" id="imgencabezadoamd" alt="">
                </div>
            </div>
            <nav class="nav nav-pills nav-fill" id="navamd"> <!--Navbar alumnos-->
                <div class="row" id="contenedorpillsamd"> <!--Solo contiene las pills se utiliza para mandar todas mas abajo de el logo-->
                    <div class="col">
                        <a class="nav-link active" aria-current="page" href="Principalamd.php">Aplicaciones</a>
                        <a class="nav-link" href="Menus.php">Dashboard</a>
                        <a class="nav-link" href="#">Acoso</a>
                        <div class="btn-group dropmenuencabezado"> <!--Dropmenu encabezado sirve para darle estilos al dropdow(botondezplegable) color/tamaño,etc-->
                            <button type="button" class="btn droprintexto">Action</button>
                            <!--La clase hoverdrop es utilizada en un script js para poder abrir el menu solo con hacer hover  || dropflecha solo es para poner estilos a la flecha del dropdown-->
                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split hoverdrop dropflecha" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu dropcionesencabezado"> <!--la clase dropcionesencabezado HACE POSIBLE que puedan sobreponerse a lo que sea que este en el encabezado y contenido-->
                                <li><a class="dropdown-item droptexto" href="include/Extrasamd.php">Action</a></li> <!--clase droptetxto solo da estilo al texto/ las 'a'-->
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
    </header>
    <!-- Js Personalizados -->
    <script src="js/hover_drops.js"></script>
</body>

</html>