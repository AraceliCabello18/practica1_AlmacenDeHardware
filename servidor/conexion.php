<?php 
function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "almacenDeHardware";

    $conexion = mysqli_connect($servidor, $usuario, $password, $db);
    
    // marca el error en la conexion
    if($conexion->connect_errno){
        echo 'Error en la conexion'.$conexion->connect_error;
      }else{
        // echo 'exito';
      }

    return $conexion;
    
}
?>