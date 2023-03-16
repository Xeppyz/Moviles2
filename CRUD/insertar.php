
<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        require_once 'conexion.php';
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $carrera=$_POST["carrera"];
        $anio=$_POST["anio"];
        $my_query = "insert into estudiante(nombre, apellido, carrera, anio) values ('".$nombre."', '".$apellido."','".$carrera."','".$anio."' )";
        $result = $mysql->query($my_query);
        if ($result == true) {
            echo "\nRealizado con exito";
        }else{
            echo "error";
        }
    }
?>