<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="Styles/Main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Iconos/iconos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>InstaBuy Store</title>


</head>

<body class="general">

    <!-- Barra de Navegación - Inicio -->

    <header class="nav_bar fixed-top">

        <div class="menu_bar">
            <p href="#" class="boton_menu"><span class="icon-menu"></span>Menu</p>
        </div>

        <nav class="barra">
            <ul class="items_list">
                <li class="items_nav"><a href="#"><span class="icon-home3"></span>Inicio</a></li>
                <li class="items_nav"><a href="#AcercaDe"><span class="icon-earth"></span>Acerca De</a></li>
                <li class="items_nav"><a href="#Productos"><span class="icon-briefcase"></span>Productos</a></li>
                <li class="items_nav"><a href="#About"><span class="icon-rocket"></span>Equipo de Trabajo</a></li>
                <li class="items_nav"><a href="#Contacto"><span class="icon-mail"></span>Contactenos</a></li>
                <li class="items_nav"><a href="Php/compra.php"><span class="fas fa-shopping-cart"></span>Carrito <span id="items_count"></span></a></li>
                <li class="items-nav"><a href="Php/inicioSesion.php"><i class="fas fa-sign-in-alt"></i> Inicio de Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Barra de Navegación - Fin -->

    <!-- Encabezado -->
    <header class="header">
        <div class="overlay"></div>
        <div class="container d-flex h-50 align-items-center">
            <div class="description mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase"> Compra seguro, nosotros nos encargamos del resto</h1>
                <br>
                <h1>
                    <p class="text-white-80 mx-auto mt-2 mb-5"> Ofrecemos productos de calidad de todo tipo para toda ocasion, añade, paga y espera el envio.
                    </p>
                </h1>
            </div>
        </div>
    </header>


    <div class="AcercaDe text-center" id="AcercaDe">
        <div class="container">
            <h1 class="text-center text-uppercase text-white ">¿Que hacemos?</h1>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <p class="text-white-50">Somos tu solucion, para no aburrirte mientras pasas por acá, este es un breve resumen: </p>
                    <p class="text-white-50">Somos una tienda online de productos de oficina y aseo.</p>
                    <p class="text-white-50">Pero no cualquier tienda, una en la que puedas pedir tus cosas sin mayor esfuerzo y las tengas en tu poder sin salir de tu sitio de trabajo</p>
                    <p class="text-white-50">Somos como tú.</p>
                    <p class="text-white-50">Somos personas que nos encanta nuestro trabajo y haremos todo lo posible para que el tuyo mejore y tu experiencia con nosotros sea cada vez mejor.</p>
                    <p class="text-white-50">¿Como hacemos todo esto?</p>
                    <p class="text-white-50">A traves de nuestro portal vas a tener una lista de productos disponibles para la compra, es decir, un catalogo, vas a poder seleccionar dicho producto, agregarlo a la canasta y poder agregar demas productos de la misma manera, en caso contrario, solo tendras que ingresar los datos de envio y completar el proceso de facturacion, nuestros empleados estaran encantados de llevar tu orden</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Productos -->
    <div class="Productos text-center" id="Productos">
        <div class="container">
            <h1 class="text-center text-uppercase text-white mb-4">Productos</h1>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 item">
                    <form action="Php/carrito.php" method="get">
                        <a class="img_pro des_pal" href="#"><img src="Images/destructora-de-papel.jpg" class="img-fluid"></a>
                        <div class="des">
                            <a>Destructora de Papel</a>
                            <input type="hidden" name="producto" value="Destructora de Papel">
                            <input type="hidden" name="precio" value="50000">
                        </div>
                        <div>
                            <span class="text-white">Epson</span>
                            <input type="submit" class="btn btn-primary btn-xl" value="Agregar">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 item">
                    <form action="Php/carrito.php" method="get">
                        <a class="img_pro des_pal" href="#"><img src="Images/legajador-az.jpg" class="img-fluid"></a>
                        <div class="des">
                            <a>Legajador AZ</a>
                            <input type="hidden" name="producto" value="Legajador AZ">
                            <input type="hidden" name="precio" value="10000">
                        </div>
                        <div>
                            <span class="text-white">Pac</span>
                            <input type="submit" class="btn btn-primary btn-xl" value="Agregar">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 item">
                    <form action="Php/carrito.php" method="get">
                        <a class="img_pro des_pal" href="#"><img src="Images/monitor.jpg" class="img-fluid"></a>
                        <div class="des">
                            <a>Computadora All In One</a>
                            <input type="hidden" name="producto" value="Computadora All In One">
                            <input type="hidden" name="precio" value="3000000">
                        </div>
                        <div>
                            <span class="text-white">Acer</span>
                            <input type="submit" class="btn btn-primary btn-xl" value="Agregar">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 item">
                    <form action="Php/carrito.php" method="get">
                        <a class="img_pro des_pal" href="#"><img src="Images/papel-fotocopia.jpg" class="img-fluid"></a>
                        <div class="des">
                            <a>Papel Fotocopia Tamaño Carta</a>
                            <input type="hidden" name="producto" value="Papel Fotocopia Tamaño Carta">
                            <input type="hidden" name="precio" value="20000">
                        </div>
                        <div>
                            <span class="text-white">CartoPrint</span>
                            <input type="submit" class="btn btn-primary btn-xl" value="Agregar">
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 item">
                    <form action="Php/carrito.php" method="get">
                        <a class="img_pro des_pal" href="#"><img src="Images/boligrafo-kilometrico-100-40-unidades-7703486038576.jpg" class="img-fluid"></a>
                        <div class="des">
                            <a>Set 100 Boligrafos</a>
                            <input type="hidden" name="producto" value="Set 100 Boligrafos">
                            <input type="hidden" name="precio" value="60000">
                        </div>
                        <div>
                            <span class="text-white">Kilometrico</span>
                            <input type="submit" class="btn btn-primary btn-xl" value="Agregar">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 item">
                    <form action="Php/carrito.php" method="get">
                        <a class="img_pro des_pal" href="#"><img src="Images/block-bond-tamano-carta-amarillo-7702111428553.jpg" class="img-fluid"></a>
                        <div class="des">
                            <a>Bloc Anotador 80 Hojas</a>
                            <input type="hidden" name="producto" value="Bloc Anotador 80 Hojas">
                            <input type="hidden" name="precio" value="30000">
                        </div>
                        <div>
                            <span class="text-white">Norma</span>
                            <input type="submit" class="btn btn-primary btn-xl" value="Agregar">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 item">
                    <form action="Php/carrito.php" method="get">
                        <a class="img_pro des_pal" href="#"><img src="Images/libro-contable-de-3-columnas-7701016597227.jpg" class="img-fluid"></a>
                        <div class="des">
                            <a>Libro Contable de 3 Columnas</a>
                            <input type="hidden" name="producto" value="Libro Contable de 3 Columnas">
                            <input type="hidden" name="precio" value="140000">
                        </div>
                        <div>
                            <span class="text-white">Pac</span>
                            <input type="submit" class="btn btn-primary btn-xl" value="Agregar">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 item">
                    <form action="Php/carrito.php" method="get">
                        <a class="img_pro des_pal" href="#"><img src="Images/set-organizador-para-escritorio-color-negro-4719853524590.jpg" class="img-fluid"></a>
                        <div class="des">
                            <a>Organizador de Escritorio</a>
                            <input type="hidden" name="producto" value="Organizador de Escritorio">
                            <input type="hidden" name="precio" value="1800000">
                        </div>
                        <div>
                            <span class="text-white">Interlink</span>
                            <input type="submit" class="btn btn-primary btn-xl" value="Agregar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Equipo de Trabajo -->
    <div class="About text-center" id="About">
        <div class="container">
            <h1 class="text-center text-uppercase text-white mb-4">Equipo de Trabajo</h1>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="Images/pp.jpeg" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 desc text-center">

                    <h3>Jesús Santiago Amado Montaña</h3>
                    <p>
                        19 años, estudiante profesional 6to semestre ing. sistemas, con técnico en comercio internacional.

                        <br>

                        <a href="https://twitter.com/Santi20Amado?s=09" id="Link"><strong>Twitter</strong></a>
                        <a href="https://www.facebook.com/Santi2043" id="Link"><strong>Facebook</strong></a>
                        <a href="https://github.com/jamadom07683" id="Link"><strong>GitHub</strong></a>
                    </p>


                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="Images/Billy.png" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 desc text-center">

                    <h3>Michael David Navarrete Almanzar</h3>
                    <p>
                        19 años, estudiante profesional 5to semestre ing. sistemas.
                        <br>
                        Certificacion en reparacion de computadoras y redes por Cisco, ilustrador independiente.

                        <br>

                        <a href="https://twitter.com/FirefoxNava" id="Link"><strong>Twitter</strong></a>
                        <a href="https://github.com/FirefoxNava" id="Link"><strong>GitHub</strong> </a>
                    </p>


                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="Images/profile2.jpeg" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 desc text-center">

                    <h3>Omar Fabián Diaz Acosta</h3>
                    <p>
                        18 años, estudiante 5to semestre ing. sistemas, bachiller en media tecnica en especialidad Cerámica.
                    </p>

                    <br>

                    <a href="https://twitter.com/omar_fabi03" id="Link"><strong>Twitter</strong></a>
                    <a href="https://www.facebook.com/omarfabian.diazacosta?ref=bookmarks" id="Link"><strong>Facebook</strong></a>
                    <a href="https://github.com/OmarFabianDiaz" id="Link"><strong>GitHub</strong></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contactenos -->
    <div class="Contacto" id="Contacto">
        <div class="container">
            <br>
            <h1 class="text-center text-uppercase text-white mb-4">Contactenos</h1>
            <div class="row" id="row">
                <div class="col-lg-8 mx-auto">
                    <form name="sentMessage" id="contactForm">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Nombre</label>

                                <h2 class="Nom_form">Nombre</h2><input class="form-control" type="text" id="name1" name="name1">

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Correo Electronico</label>
                                <h2 class="Nom_form">Correo electronico</h2> <input class="form-control" type="email" id="correo" name="correo">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Numero Telefonico </label>
                                <h2 class="Nom_form">Numero telefonico</h2> <input class="form-control" type="number" id="numer" name="numer">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Mensaje</label>
                                <h2 class="Nom_form">Mensaje</h2> <textarea class="form-control" id="mensaje2" name="mensaje2"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-xl" id="validateButton">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <footer>
        <p class="pie">PEDIDOS DEV WEB</p>
    </footer>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="Js/index_js.js" type="text/javascript"></script>



</body>

</html>
