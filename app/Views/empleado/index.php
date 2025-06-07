<?php echo $this -> extend ('plantilla/layout'); ?>
    
<?php echo $this->section('contenido'); ?>
    

<br>
<h2>EMPLEADOS</h2>
<br>
<a href = "<?php echo base_url('/empleados/crear');?>" class="btn btn-danger">Agregar Nuevo Empleado</a>
<br>
<br>
<!--Extraido de bustrap--->
<table class="table table-dark table-sm">
  <thead class="table-dark">
    <tr>
      
      <th scope="col">CC</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Gmail</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php foreach($empleados as $emp):?>
    <tr>

      <th scope="row"><?php echo $emp['ced_empleado'];?></th>
      <td><?php echo $emp['nombre_emp'];?></td>
      <td><?php echo $emp['apellido_emp'];?></td>
      <td><?php echo $emp['gmail_emp'];?></td>
      <td><?php echo $emp['direccion_emp'];?></td>  <!--vamos a crear modelos-->
      <td><?php echo $emp['telefono_emp'];?></td>
      
    </tr>
    
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>
    <?php endforeach;?>
  </tbody>
  
</table>
<br>
<a href= "<?php echo base_url('/empleado/editar/'.$emp['ced_empleado'])?>"class="btn btn-dark">Editar Empleado</a>
<a href= "<?php echo base_url('/empleado/eliminar/'.$emp['ced_empleado'])?>"class="btn btn-primary">Elininar Empleado</a>
<br>
<?php
    echo $this -> endSection();
?>