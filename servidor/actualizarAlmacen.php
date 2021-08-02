<?php 
session_start();
// $_POST es para obtener datos los obtengo por medio del name
    $id_almacen = $_POST['id_almacen'];
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $serie = $_POST['serie'];
    $capacidad = $_POST['capacidad'];
    $descripcion = $_POST['descripcion'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "UPDATE t_almacen 
            SET nombre = '$nombre', 
            modelo = '$modelo',
            serie = '$serie ',
            capacidad = '$capacidad',
            descripcion = '$descripcion'

            WHERE id_almacen = '$id_almacen'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
            $_SESSION['operacion'] = "update";
        } else {
            $_SESSION['operacion'] = "error2";
        }
    
    header("location:../index.php");
    