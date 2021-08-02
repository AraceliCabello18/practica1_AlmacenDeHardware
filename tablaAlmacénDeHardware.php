<?php 
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT * FROM t_almacen";
    $respuesta =  mysqli_query($conexion, $sql);
?>
<table class="table table-condensed table-hover">
    <thead>
        <th>Nombre</th>
        <th>Modelo</th>
        <th>Numero de Serie</th>
        <th>Capacidad</th>
        <th>Descripcion</th>
        <th>Imagen</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
    <?php 
            while($mostrar = mysqli_fetch_array($respuesta)) { 
        ?>
        <tr>
        <td><?php $id = $mostrar['id_almacen']; 
        echo $mostrar['nombre']; ?></td>
        <td><?php echo $mostrar['modelo']; ?></td>
        <td><?php echo $mostrar['serie']; ?></td>
        <td><?php echo $mostrar['capacidad']; ?></td>
        <td><?php echo $mostrar['descripcion']; ?></td>
        <td>
            <?php 
                    $nombre = $mostrar['imagen'];
                    $ext = $mostrar['extension'];
                    $cadenaImagen = '';
                    if ($ext == 'jpg') {
                    $cadenaImagen = '<img src=' . 'img/' . $nombre . ' width="50px" height="50px">';
                    echo '<a href="visualizarFull.php?nombre=' . $nombre . '" target="_blank"> ' . $cadenaImagen . ' </a>';
                }
            ?>
        </td>
        <td>
        <form action="actualizar.php" method="POST">
                    <input type="text" hidden name="id_almacen" id="id_almacen" value="<?php echo $mostrar['id_almacen']?>">
                    <button class="btn btn-warning">Editar</button>
                    </form>
        </td>
        <td>
        <form action="servidor/eliminar.php" method="POST">
                    <input type="text" hidden name="id_almacen" id="id_almacen" value="<?php echo $id ?>">
                    <button  class="btn btn-danger">Eliminar</button>
                </form>
        </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>