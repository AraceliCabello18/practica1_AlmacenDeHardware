<?php
    $id_almacen = $_POST['id_almacen'];
 //traemos la conexion
    include "servidor/conexion.php";
    $conexion = conexion();
 //debemos obtener los datos asociados

    $sql = "SELECT  id_almacen, 
                    nombre, 
					modelo, 
					serie,
					capacidad,
					descripcion
		    FROM t_almacen  
		    WHERE  id_almacen = '$id_almacen'";
    $respuesta = mysqli_query($conexion, $sql);	
	$datos = mysqli_fetch_array($respuesta);
?>
<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar</title>
</head>
<body>
<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Editar Almacén de Hardware</h1>
            <p class="lead">
<form action="servidor/actualizarAlmacen.php" enctype="multipart/form-data" method="POST">
<!--name y id se usan para obtener y identificar los datos-->
        <input type="text" name="id_almacen" value="<?php echo $datos['id_almacen']?>" hidden>
        <div class="row">
            <div class="col-sm-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" value="<?php echo $datos['nombre']?>">   
            </div>
            <div class="col-sm-4">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo" id="modelo" placeholder="modelo" value="<?php echo $datos['modelo']?>">   
            </div>
            <div class="col-sm-4">
                <label for="serie" class="form-label">Numero de Serie</label>
                <input type="text" class="form-control" name="serie" id="serie" placeholder="serie" value="<?php echo $datos['serie']?>">   
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for="capacidad" class="form-label">Capacidad</label>
                <input type="text" class="form-control" name="capacidad" id="capacidad" placeholder="capacidad" value="<?php echo $datos['capacidad']?>">   
            </div>
            <div class="col-sm-4">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripcion" value="<?php echo $datos['descripcion']?>">   
            </div>
        </div>
        <br>
        <button class="btn btn-primary">Editar</button>
        <br>
        </form>	
        </div>
        </div>
    </div>
</body>
</html>

<?php include "footer.php"; ?>

