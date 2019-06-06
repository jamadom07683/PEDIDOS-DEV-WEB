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

    <title>Iniciar Sesión</title>

</head>

<?php include("navbarInicio.php")?>

<!-- Inicio de Sesion -->
<div class="Sesion" id="Sesion">
    <div class="container">
        <h1 class="text-center text-uppercase text-white mb-4">Iniciar Sesión </h1>
        <hr class="star-dark mb-5">
        <div class="row" id="row">
            <div class="col-lg-8 mx-auto">
                <form name="sentMessage" id="sesionForm" name="nosesion" action="ingreso.php" method="post">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Usuario</label>

                            <h2 class="Nom_form">Usuario</h2> <input class="form-control" type="text" id="" name="usuario">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Contraseña</label>
                            <h2 class="Nom_form">Contraseña</h2> <input class="form-control" type="password" id="" name="contraseña">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-xl" value="Ingresar">
                    </div>
                </form>

                <div class="form-group">
                    <button type="button" class="btn btn-primary btn-xl" id="changeButton">Registrarse</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Registro -->
<div class="Registro" id="Registro">
    <div class="container">
        <h1 class="text-center text-uppercase text-white ">Registrarse</h1>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form name="sentMessage" id="registroForm" name="novalidate" action="resultRegistrar.php" method="post">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Nombre</label>
                            <h2 class="Nom_form">Nombre</h2> <input class="form-control" type="text" id="" name="usuario">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Usuario</label>

                            <h2 class="Nom_form">Usuario</h2> <input class="form-control" type="text" id="" name="usuario">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Contraseña</label>
                            <h2 class="Nom_form">Contraseña</h2> <input class="form-control" type="password" id="" name="contraseña">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Contraseña</label>
                            <h2 class="Nom_form">Contraseña</h2> <input class="form-control" type="password" id="" name="contraseña">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-xl" value="Registrar">
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
<script src="../Js/index_js.js" type="text/javascript"></script>
</body>

</html>
