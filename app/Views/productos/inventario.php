<!--la idea es que rander setions me llama esta parte-->
<?php
echo $this-> extend('plantilla/layoutPractica');
?>
<?php
echo $this-> section('contenido');
?>
    <h1>Inventario de los TAIWERS</h1>
    <br>
    <table class="table">
        <caption>bASE DE DATOS TABLA INVENTARIO</caption>
        <thead>
            <th>codigo_barra</th>
            <th>nombre</th>
            <th>stock</th>
            <th>estatus</th>
            <th>fecha_ingreso</th>
            <th>fecha_modificada</th>
            <th>id_almacen</th>

        </thead>
    <tbody>
        <?php foreach($producto as $productos): ?>
        <tr>
            <td><?php echo $productos->codigo_barra; ?></td> 
            <td><?php echo $productos->nombre_producto;?></td>
            <td><?php echo $productos->stock;?></td>
            <td><?php echo $productos->estatus;?></td>
            <td><?php echo $productos->fecha_ingreso;?></td>
            <td><?php echo $productos->fecha_modifi;?></td>
            <td><?php echo $productos->id_almacen;?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
    </table>

    <?php echo $this ->endSection();?>

