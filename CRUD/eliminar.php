<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';
        $id = $_POST["id"];
        $my_query = "delete from estudiante where id =".$id;
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'registro eliminado correctamente';
        } else { 
            echo 'error';
        }
    } else {
        echo 'Error desconocido';
    }

?>