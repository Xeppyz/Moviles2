<?php

$mysql = new mysqli("localhost", "root", "", "dbuca");
if($mysql->connect_error){
    echo"error";
    die("Error de conexion");
}
else{
    echo"Conexion exitosa";
}

?>
