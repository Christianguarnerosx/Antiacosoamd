    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Configuración de la política de permisos para yputube -->
        <meta http-equiv="Permissions-Policy" content="geolocation=(), microphone=(), camera=(), midi=(), encrypted-media=(), fullscreen=(), payment=()">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!--Estilos propios CSS -->
        <link rel="stylesheet" href="Cliente/css/estilos.css">

        <title>Antiacoso Escolar</title>
    </head>

    <body>
        <!--Encabezado-->
        <header>
            <!--Se encarga de el navbar/menu que este en el lado derecho-->
            <div class="row">
                <div class="col"><!--Parte de la izq-->
                    <a href="Index.php"><img id="logoindex" src="Cliente/imagenes/logosinfondo.gif" alt=""></a> <!--icono de la parte izq arriba-->
                </div>
                <div class="col"><!--Parte de la der-->
                    <!--Scroll spy, es una funcion para ir monitoreando la posicion de la pantalla y mandar el lugar al navbar-->
                    <nav class="nav" id="menuindex"> <!--Menu de arriba a la derecha-->
                        <a class="nav-link active" href="#contenedor1index">Principal</a>
                        <a class="nav-link" href="#contenedor2index">Acerca</a>
                        <a class="nav-link" href="#contenedor3index">Contacto</a>
                        <a class="nav-link" href="#contenedor4index">Servicios</a>
                        <a class="nav-link" href="#contenedor5index">Cultura</a>
                        <a class="nav-link" id="btninicioindex" href="Cliente/Iniciodesesion.php">Inicia sesión</a>
                    </nav>
                </div>
            </div>
        </header>

        <!--Contenido, diferenrtes secciones, acerca, contacto, principal , etc-->
        <main>
            <!--Siempre el spy, target deben ir en el contenedor principal/ el cual contenga todas las secciones y se hara refrencia al nav con el id (en este caso "#menuindex")-->
            <div class="container-fluid" data-bs-spy="scroll" data-bs-target="#menuindex" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                <div class="row"> <!--Este row es indispensable para que todos los section abarquen toda la pantalla-->
                    <section class="container" id="contenedor1index">
                        <div class="row">
                            <div class="col">
                                <div class="row" id="tituloindex">
                                    <p>ALIADOS ESCOLARES</p> <!--Titulo principal 1-->
                                </div>
                                <div class="row" id="subtituloindex"> <!--subtitulo principal 1-->
                                    <p>Únete a alidos escolare y Descubre el Poder de Desarrollar tu <span id="descripcionindex"></span></p>
                                </div>
                            </div>
                            <div class="col" id="contenedorpuntosindex"> <!--Esta hace que el nav "spypuntosidex" este flotante, sin afectar la posicion de la otra columna-->
                                <nav class="nav" id="spypuntosindex"> <!--Al hacerlo fixed y ponerlo en su lugar se invirtieron la posicion de los puntos (los de arriba estan abajo y viceversa)-->
                                    <a class="nav-link" href="#contenedor5index">.</a>
                                    <a class="nav-link" href="#contenedor4index">.</a>
                                    <a class="nav-link" href="#contenedor3index">.</a>
                                    <a class="nav-link" href="#contenedor2index">.</a>
                                    <a class="nav-link active" href="#contenedor1index">.</a>
                                </nav>
                            </div>
                        </div>
                        <div class="row" id="cardvideoindex">
                            <div class="col" id="lineacardindex">
                                <p>Funciones de Aliados Escolares</p>
                            </div>
                            <div class="col-8">
                                <!--Aqui se manda el video de youtube, el link debe de tener esa estructura "/embed/ID del video"-->
                                <iframe src="https://www.youtube.com/embed/QtXby3twMmI" id="videoindex" title="video demostracion"></iframe>
                            </div>
                        </div>
                    </section>

                    <!--Comienza la seccion/contenedor de acerca-->
                    <section class="container-fluid" id="contenedor2index">
                        <div class="row" id="seccionblanca1index"> <!--Cuadro opaco que contiene a los elementos-->
                            <div class="col-4" id="componentesc2index">
                                <div class="row">
                                    <h1 id="tituloacercaindex">Aliados escolares</h1>
                                    <h2 id="descripcionacercaindex">Es una herramienta que permitirá a la comunidad estudiantil monitorar el aprendizaje del alumno, detectando fatores externos que afecten su manera de aprender, asi como el desarrollo del alumno</h2>
                                    <div class="col">
                                        <a href=""><button type="button" id="botonacercaindex">Conocer mas</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col"> <!--Imagen del contenedor 2 que tiene un parallax. La imagen se controla el tamaño aparte-->
                                <div class="row"> <!--Sin esta row la imagen no abarca toda la col-->
                                    <img src="cliente/imagenes/IA_tutor.jpg" id="imagenc2index" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--Comienza la seccion/contenedor de contacto-->
                    <section class="container" id="contenedor3index">
                        <div class="row">
                            <div class="col"> <!--Separar en 2 la fila y asi poner una al lado de la otra izq/der-->
                                <section class="cardc3index"> <!--Tarjeta 1 (izq)-->
                                    <div class="row fondoimagenindex">
                                        <div class="col">
                                            <img id="imgcard1c3index" src="Cliente/imagenes/logos/logosinfondo.gif" id="imagenc2index" alt="">
                                        </div>
                                    </div>
                                    <div class="row tituloscardsc3index">
                                        <p>Venustiano Carranza</p>
                                    </div>
                                    <div class="row descripcionescardsc3index">
                                        <p>Es una institucion de educacion publica donde se especializa en tener una educacion vanguardista, ofreciando las mejores herramientas y oportunidades</p>
                                    </div>
                                    <div class="row">
                                        <div class="col"> <!--Si no tiene este col, tomara como check todo el row, no solo el texto-->
                                            <a href="https://www.facebook.com/people/Escuela-Primaria-Venustiano-Carranza-San-Martin-Texmelucan/100063239590046/" class="linkcard1c3index">Mas información <span class="flechacardc3index"> > </span></a>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="col"> <!--Separar en 2 la fila y asi poner una al lado de la otra izq/der-->
                                <section class="cardc3index"> <!--Tarjeta 1 (izq)-->
                                    <div class="row fondoimagenindex">
                                        <div class="col">
                                            <img id="imgcard2c3index" src="Cliente/imagenes/logos/logodscrg.png" alt="">
                                        </div>
                                    </div>
                                    <div class="row tituloscardsc3index">
                                        <p>DSCRG</p>
                                    </div>
                                    <div class="row descripcionescardsc3index">
                                        <p>Es una empresa de desarrollo de software especializado en el area de educacion, innovacion y administracion.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col"><!--Si no tiene este col, tomara como check todo el row, no solo el texto-->
                                            <a href="https://www.facebook.com/profile.php?id=100093485868279" class="linkcard1c3index">Mas información <span class="flechacardc3index"> > </span> </a>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col"> <!--Separar en 2 la fila y asi poner una al lado de la otra izq/der-->
                                <section class="cardc3index"> <!--Tarjeta 1 (izq)-->
                                    <div class="row fondoimagenindex">
                                        <div class="col">
                                            <img id="imgcard3c3index" src="Cliente/imagenes/fotos/christian.jpeg" alt="">
                                        </div>
                                        <div class="col">
                                            <img id="imgcard4c3index" src="Cliente/imagenes/fotos/gleice.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="row tituloscardsc3index">
                                        <p>Encargados</p>
                                    </div>
                                    <div class="row descripcionescardsc3index">
                                        <p>Hola somos Christian Guarneros y Gleice Zambrano aministradores del programa de aliados escolares</p>
                                    </div>
                                    <div class="row">
                                        <div class="col"><!--Si no tiene este col, tomara como check todo el row, no solo el texto-->
                                            <a href="https://www.facebook.com/more.gr.370/" class="linkcard1c3index">Conócenos<span class="flechacardc3index"> > </span> </a>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </section>

                    <!--Comienza la seccion/contenedor de servicios-->
                    <section class="container-fluid" id="contenedor4index">
                        <!--Inicio de carruzel-->
                        <div id="carouselExampleCaptions" class="carousel slide carruzelindex" data-bs-ride="carousel">
                            <!--Botones de abajo que son como seleccionadores-->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active"><!--Parte 1 del carruzel-->
                                    <img src="Cliente/imagenes/fondos/gusano.gif" class="d-block w-100" alt="..."><!--Imagen 1-->
                                    <!--Elementos dentro de la imagen-->
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="titulocarruzelindex">TutorIA</h5>
                                        <p class="descripcioncarruzelindex">El asistente personalizado de cada usuario con el cual podra interactuar en caso que necesite ayuda educativa o psicologica</p>
                                        <a href=""><button class="butoncarruzeliaindex" type="button">Visitar Ahora</button></a>
                                    </div>
                                </div>
                                <div class="carousel-item"><!--Parte 2 del carruzel-->
                                    <img src="Cliente/imagenes/fondos/gusano.gif" class="d-block w-100" alt="..."><!--Imagen 2-->
                                    <!--Elementos dentro de la imagen-->
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="titulocarruzelindex">Antiacoso</h5>
                                        <p class="descripcioncarruzelindex">El sistemas de reportes educativos con el cual se podra tener un control y medicion de los incidentes que haya en la escuela</p>
                                        <a href=""><button class="butoncarruzeliaindex" type="button">Visitar Ahora</button></a>
                                    </div>
                                </div>
                            </div>
                            <!--Botones de los costados siguiente/anterior-->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!--Fin de carruzel-->
                    </section>

                    <!--Comienza la seccion/contenedor de cultura-->
                    <section class="container" id="contenedor5index">
                        <div class="row">
                            <div class="col">
                                <div id="consejo-container" class="mt-4 text-center">
                                    <h2 id="tituloculturaindex">Nuestros Principios</h2>
                                    <p id="descripcionculturaindex"></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>

        <footer>

        </footer>

        <!--Libreria jQuery externa que hace funcionar al navbar-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Option 1: Bootstrap Bundle with Popper ideal para funciones js de bootstrap y hacer funcionar y activar acciones-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS ideal para funciones js de bootstrap y hacer funcionar y activar acciones-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

        <!--libreriaparallax-->
        <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

        <!--Js Personal_izado-->
        <script src="Cliente/js/recargar_scroll_topindex.js"></script>
        <script src="Cliente/js/efecto_escribirindex.js"></script>
        <script src="Cliente/js/parallax_indexindex.js"></script>
        <script src="Cliente/js/almacen_culturaindex.js"></script>
    </body>

    </html>