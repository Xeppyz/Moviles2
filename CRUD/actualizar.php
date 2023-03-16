<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';
        $id = $_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $carrera=$_POST["carrera"];
        $anio=$_POST["anio"];

        $my_query = "update estudiante set nombre= '".$nombre."', apellido='".$apellido."',carrera='".$carrera."',anio='".$anio."' where id=".$id;
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'registro actualizado correctamente';
        } else { 
            echo 'error';
        }
    } else {
        echo 'error desconocido';
    }

?>