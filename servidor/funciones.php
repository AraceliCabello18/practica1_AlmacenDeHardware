<?php
  require "conexion.php";
  function agregarDatos( $nombre, $modelo, $serie, $capacidad, $descripcion, $imagen, $extension){
    $conexion = conexion();
    $sql = "INSERT INTO t_almacen(nombre,
                                        modelo,
                                        serie,
                                        capacidad,
                                        descripcion,
                                        imagen,
                                        extension) 
            VALUES ('$nombre',
                    '$modelo',
                    '$serie',   
                    '$capacidad', 
                    '$descripcion', 
                    '$imagen',
                    '$extension')";
    $respuesta = mysqli_query($conexion, $sql);
    return  $respuesta;
  }  
?>