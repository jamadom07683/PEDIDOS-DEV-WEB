<?php
$host = 'localhost';
$user = 'server';
$password = 'server';
$db = 'Proyecto';
$conexion = new mysqli($host, $user, $password, $db);
if ($conexion -> connect_errno){
    echo 'no hay conexion con la bd';
}else{
    echo 'Nos conectamos';
}
?>
