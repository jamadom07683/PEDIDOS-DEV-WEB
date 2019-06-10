<?php
require_once('connection.php');

/*$Nombre = $Usuario = $Contraseña = '';


$Nombre = $_POST['nombre'];
$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contraseña'];*/


/*
if (isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['contraseña'])){

    $sql = "INSERT INTO Usuario ( Nombre,Usuario,Contraseña ) VALUES (
    '".$_POST['nombre']."',
    '".$_POST['usuario']."',
    '".$_POST['contraseña']."'
    )";
    echo $query;
    if ($conn -> query($sql) == true){
    echo '<br>See Insertó el usuario';
    }else{
    echo '<br>paila ese man no se deja';
    }
}
*/

echo $_POST['nombre'];
echo $_POST['usuario'];
?>
