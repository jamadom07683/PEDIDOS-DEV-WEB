<?php

    $Usuario = $_POST['Usuario'];
    $Contraseña= $_POST['Contraseña'];

    $Usuario = stripcslashes($Usuario);
    $Contraseña = stripcslashes($Contraseña);

    $Usuario=mysql_real_escape_string($Uusario);
    $Contraseña = mysql_real_escape_string($Contraseña);

    //conexión
    mysql_connect("localhost","server","server");
    mysql_select_db("Proyecto");

    //resultado
    $result= mysql_query("select*from Usuario where Usuario='$Usuario' and Contraseña = '$Contraseña'")
        or die("Failed to query database".mysql_error());
    $row=mysql_fetch_array($result);
    if($row['Usuario']==$Usuario && $row['Contraseña']==$Contraseña){
        echo "Login successful!!! Welcome".$row['Usuario'];
    }else{
        echo "Failed to login";
    }

?>
