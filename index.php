<?php include "header.php"; ?>
<?php
    session_start();
    $operacion = "";
    if (isset($_SESSION['operacion'])) {
        $operacion = $_SESSION['operacion'];
        unset($_SESSION['operacion']);
    }
?>



<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Informacion de Almacén de Hardware</h1>
            <p class="lead">
        <form action="servidor/subirimagen.php" enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-sm-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre">   
            </div>
            <div class="col-sm-4">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo" id="modelo" placeholder="modelo">   
            </div>
            <div class="col-sm-4">
                <label for="serie" class="form-label">Numero de Serie</label>
                <input type="text" class="form-control" name="serie" id="serie" placeholder="serie">   
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <label for="capacidad" class="form-label">Capacidad</label>
                <input type="text" class="form-control" name="capacidad" id="capacidad" placeholder="capacidad">   
            </div>
            <div class="col-sm-4">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripcion">   
            </div>
            <div class="col-sm-4">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen"> 
            </div>
        </div>
        <br>
        <button class="btn btn-primary">Agregar</button>
        <br>
        </form>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <h3>Tabla Almacén de Hardware </h3>
            <?php include "tablaAlmacénDeHardware.php";  ?>
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>
<script>
    let operacion = "<?php echo $operacion; ?>";

    if (operacion == "insert") {
        Swal.fire(":D", "Agregado con exito!", "success");
    } else if(operacion == "error") {
        Swal.fire(":(", "Error al agregar!", "error");
    } else if (operacion == "update") {
        Swal.fire(":D", "se actualizo con exito!", "info");
    } else if (operacion == "error2") {
        Swal.fire(":(", "Error al Actualizar!", "error");
    }else if (operacion == "delete") {
        Swal.fire(":D", "Eliminado con exito!", "info");
    } else if (operacion == "error3") {
        Swal.fire(":(", "Error al eliminar!", "error");
    }

</script>
