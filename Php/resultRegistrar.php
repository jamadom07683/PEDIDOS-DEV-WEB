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
<title>Registro</title>

</head>

<body class="general">

    <!-- Barra de Navegación - Inicio -->

    <header class="nav_bar fixed-top">

        <div class="menu_bar">
            <p href="#" class="boton_menu"><span class="icon-menu"></span>Menu</p>
        </div>

        <nav class="barra">
            <ul class="items_list">

                <li class="items_nav"><a href="../index.php"><span class="icon-home3"></span>Inicio</a></li>
                <li class="items_nav"><a href="../index.php#AcercaDe"><span class="icon-earth"></span>Acerca De</a></li>
                <li class="items_nav"><a href="../index.php#Productos"><span class="icon-briefcase"></span>Productos</a></li>
                <li class="items_nav"><a href="../index.php#About"><span class="icon-rocket"></span>Equipo de Trabajo</a></li>
                <li class="items_nav"><a href="../index.php#Contacto"><span class="icon-mail"></span>Contactenos</a></li>
                <li class="items_nav"><a href="carrito.php"><span class="fas fa-shopping-cart"></span>Carrito<span id="items_count"></span></a></li>
                <li class="items-nav"><a href="../Php/inicioSesion.php"><i class="fas fa-sign-in-alt"></i> Inicio de Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Barra de Navegación - Fin -->
    <br>
    <br>
    <br>

    <div class="Registro" id="Registro">
        <div class="container">
            <br>
            <br>
            <h1 class="text-center text-uppercase text-white mb-4"> Registro </h1>
            <hr class="star-dark mb-5">
            <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <p> <?php registrar() ?></p>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="form-group">
                <input type="button" value="Volver" class="btn btn-primary btn-xl" onclick="history.back()">
            </div>
        </div>
    </div>



    <?php
    function registrar(){

        require_once('connection.php');

        //$Nombre = $Usuario = $Contraseña = '';


        $Nombre = $_POST['nombre'];
        $Usuario = $_POST['usuario'];
        $Contrasena = $_POST['contraseña'];

        $Password = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);

        if (!empty( $_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['contraseña'])){
            $sql= "INSERT INTO Usuario (Nombre,Usuario,Contrasena) VALUES ('".$Nombre."','".$Usuario."','".$Password."')";

            if (mysqli_query($conn, $sql) === TRUE) {
                echo ("Registro completo");
                //echo '<script language="javascript">alert("Registro completo");</script>';
                header('refresh:2; url=inicioSesion.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        }
        else{
            echo ("Datos incompletos");
            //echo '<script language="javascript">alert("Datos incompletos");</script>';
        }


        mysqli_close( $conn );

    }
    ?>




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="../Js/index_js.js" type="text/javascript"></script>

</body>
