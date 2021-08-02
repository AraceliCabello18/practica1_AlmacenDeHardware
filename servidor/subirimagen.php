<?php
    session_start();
    include "funciones.php";
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $serie = $_POST['serie'];
    $capacidad = $_POST['capacidad'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_FILES['imagen']['name'];
    $extension = explode(".", $imagen);
    $extension = $extension[1];
    $rutaTemporal = $_FILES['imagen']['tmp_name'];
    $rutaDeServidor = "../img/";



    //subir un archivo
    //move_uploaded_file nos retorna un 1 si se subio y un 0 si no se subio

    if (move_uploaded_file($rutaTemporal, $rutaDeServidor . $imagen)) {
        $insertarEnBD = agregarDatos($nombre, $modelo, $serie, $capacidad, $descripcion, $imagen, $extension);
        if ($insertarEnBD) {
            $_SESSION['operacion'] = "insert";
        } else {
            $_SESSION['operacion'] = "error";
        }
    } else {
        $_SESSION['operacion'] = "error";
    }

    header("location:../index.php"); 
?>