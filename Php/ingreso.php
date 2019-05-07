<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="../Styles/Main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Iconos/iconos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<body background="Images/Fondo.jpg"></body>
<title>Inicio Sesión</title>

</head>

<body class="general">

    <!-- Barra de Navegación - Inicio -->

    <header class="nav_bar fixed-top">

        <div class="menu_bar">
            <p href="#" class="boton_menu"><span class="icon-menu"></span>Menu</p>
        </div>

        <nav class="barra">
            <ul class="items_list">

                <li class="items_nav"><a href="../index.html"><span class="icon-home3"></span>Inicio</a></li>
                <li class="items_nav"><a href="../index.html#AcercaDe"><span class="icon-earth"></span>Acerca De</a></li>
                <li class="items_nav"><a href="../index.html#Productos"><span class="icon-briefcase"></span>Productos</a></li>
                <li class="items_nav"><a href="../index.html#About"><span class="icon-rocket"></span>Equipo de Trabajo</a></li>
                <li class="items_nav"><a href="../index.html#Contacto"><span class="icon-mail"></span>Contactenos</a></li>
                <li class="items_nav"><a href="../index.html"><span class="fas fa-shopping-cart"></span>Carrito <span id="items_count">0</span></a></li>
                <li class="items-nav"><a href="../Php/inicioSesion.php"><i class="fas fa-sign-in-alt"></i> Inicio de Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Barra de Navegación - Fin -->
    <br>
    <br>
    <br>

    <div class="Ingreso" id="Ingreso">
        <div class="container">
            <br>
            <br>
            <h1 class="text-center text-uppercase text-white mb-4"> Ingreso </h1>
            <hr class="star-dark mb-5">
            <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <p> <?php ingresar() ?></p>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="form-group">
                <input type="button" value="Volver" class="btn btn-primary btn-xl" onclick="history.back()">
            </div>
        </div>
    </div>




    <?php
    function ingresar(){
        session_start();
        // Se crea un arreglo de identificador el nombre del usuario y como valor la contraseña
        $ingreso = array(
        //Para agregar usuarios: nombre_usuario => contraseña
        "Omar" => "crack",
        "Santiago" => "1234" ,
        "Michael" => "1234",
        "admin" => "admin",
        );
        //Volvemos el arreglo de ingreso una sesion para utilizarla en otra pagina
        $_SESSION['ingreso'] = $ingreso;
        //Si el cliente ingreso algun valor en los dos campos
        if ($_POST['usuario'] && $_POST['contraseña']){
            //Si el usuario esta guardado en al arreglo de ingress
            if (isset($ingreso[$_POST['usuario']])){
                //Si la contraseña dada coincide con la contraseña del arreglo
                if ($_POST['contraseña'] == $ingreso[$_POST['usuario']]){
                    //Creamos el "usuario" por medio de las sesiones
                    $_SESSION['usser'] = $_POST['usuario'] ;
                    $_SESSION['pass'] = $_POST['contraseña'];
                    echo "<h1> Ha ingresado al sistema </h1> ";
                    echo $_SESSION['usser'];
                    $nom = $_SESSION['usser'];
                    //echo '<script language="javascript">alert("Ha ingresado '.$nom.' al sistema");</script>';
                    //header("Location:carrito.php");
                    <meta http-equiv="refresh" content="5;URL=carrito.php" />
                }
                else{
                    echo "Contraseña invalida" ;
                    //echo '<script language="javascript">alert("Contraseña invalida");</script>';
                }
            }
            else{
                echo "Usuario invalido";
                //echo '<script language="javascript">alert("Usuario invalido");</script>';
            }
        }
        else{
            echo "Ingrese todos los datos" ;
            //echo '<script language="javascript">alert("Ingrese todos los datos");</script>';
        }
    }
    ?>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="../Js/index_js.js" type="text/javascript"></script>

</body>
