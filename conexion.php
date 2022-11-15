<?php 

$Conexion = new mysqli('localhost', 'root', '', 'bd_importar');

if($Conexion->connect_errno){
    echo 'Fallo la conexion' . $Conexion->connect_error;
    die();
}

?>