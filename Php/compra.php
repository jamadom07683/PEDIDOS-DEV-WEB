<?php
    session_start();
    include ('connection.php');
    if(isset($_SESSION['carrito'])){

    }
    else{
        if(isset($_GET['id'])){
            $Nombre="";
            $Precio=0;
            $Imagen="";

            $sql="SELECT * FROM Producto WHERE Id_producto=".$_GET['id'];

            $result=mysqli_query($conn,$sql);

            while ($pro=mysqli_fetch_array($result)){
                $Nombre=$pro['Nombre'];
                $Precio=$pro['Precio'];
                $Imagen=$pro['Imagen'];
            }
            $arreglo[]=array('Id' => $_GET['id'],
                            'Nombre' => $Nombre,
                            'Precio' => $Precio,
                            'Imagen' => $Imagen,
                            'Cantidad' => 1);
            $_SESSION['carrito']=$arreglo;
        }
    }
?>

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
<title>Carrito</title>

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
                <li class="items_nav"><a href="carrito.php"><span class="fas fa-shopping-cart"></span>Carrito <span id="items_count"></span></a></li>
                <li class="items-nav"><a href="inicioSesion.php"><i class="fas fa-sign-in-alt"></i> Inicio de Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Barra de Navegación - Fin -->
    <br>
    <br>
    <br>


    <!-- Añadir producto a Carrito de Compras -->
    <div class="Carrito text-center" id="Carrito">
        <div class="container">
            <h1 class="text-center text-uppercase text-white mb-4">Carrito de compra</h1>
            <hr class="star-dark mb-5">
            <div class="row" id="row">
                <?php
                $total=0;
                    if (isset($_SESSION['carrito'])){
                        $datos=$_SESSION['carrito'];
                        $total=0;
                        for($i=0;$i<count($datos);$i++){
                        ?>
                            <div class="col-lg-3 col-md-3 col-sm-12 item">
                                <center>
                                    <a class="img_pro des_pal" href="#"><img src="../Images/<?php echo $datos[$i]['Imagen']; ?>" class="img-fluid"></a><br>
                                    <span class="text-white"><?php echo $datos[$i]['Nombre']?></span><br>
                                    <span class="text-white">Precio: <?php echo $datos[$i]['Precio']?></span><br>
                                    <span class="text-white">Cantidad: <input type="text" value=" <?php echo $datos[$i]['Cantidad']?>"> </span><br>
                                    <span class="text-white">Subtotal: <?php echo $datos[$i]['Precio']*$datos[$i]['Cantidad']?></span>
                                </center>
                            </div>

                <?php
                            $total=($datos[$i]['Precio']*$datos[$i]['Cantidad'])+$total;
                        }
                    }
                    else{
                        echo '<center><p>El carrito de compras esta vacio </p><center>';
                    }
                    echo '<center><p>Total: ' .$total. '</p></center>';
                ?>

                <center><a href="./carrito.php"> Ver catalogo </a></center>

            </div>

        </div>

    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="../Js/index_js.js" type="text/javascript"></script>

</body>

</html>
