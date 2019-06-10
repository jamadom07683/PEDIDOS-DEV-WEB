<?php
require_once('connection.php');
/*$Nombre = $Usuario = $Contraseña = '';


$Nombre = $_POST['nombre'];
$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contraseña'];*/


if (isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['contraseña'])){
$query = "INSERT INTO Usuario ( Id_usuario,Nombre,Usuario,Contraseña) VALUES ('"2"','".$_POST['nombre']."','".$_POST['usuario']."', '".$_POST['contraseña']."')";
echo $query;
    if ($conn -> query($query)){
    echo '<br>See Insertó el usuario';
    }else{
    echo '<br>paila ese man no se deja';
    }
}
?>
