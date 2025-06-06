<?php echo $this -> extend ('plantilla/layout'); ?>
    
<?php echo $this->section('contenido'); ?>
    

<br>
<h2>Nuevo Empleado</h2>
<br>

<!--como crearmos un nuevo empleado  b-from-enctype -->

<form method="post" action="<?php echo base_url('/empleados/guardar'); ?>" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            Agregar Empleado
        </div>
        <div class="card-body">
            <h5 class="card-title">Ingrese todos los datos solicitados</h5>
            <p class="card-text">
            <!-- b-from-grup -->
             <div class="form-group">
                <label>Cedula:</label>
                <input class="form-control" type="text" name="ced_empleado">
             </div>

             <div class="form-group">
                <label>Nombre:</label>
                <input class="form-control" type="text" name="nombre_emp">
             </div>

             <div class="form-group">
                <label>Apellido:</label>
                <input class="form-control" type="text" name="apellido_emp">
             </div>
             
             <div class="form-group">
                <label>Gmail:</label>
                <input class="form-control" type="text" name="gmail_emp">
             </div>

             <div class="form-group">   <!--Crear metodo Controlador-->
                <label>Dirección:</label>
                <input class="form-control" type="text" name="direccion_emp">
             </div>

             <div class="form-group">
                <label>Telefono:</label>
                <input class="form-control" type="text" name="telefono_emp">
             </div>

             <div class="form-group">
                <input class="btn btn-success" type="submit" value="Guardar">
                <input class="btn btn-warning" type="submit" value="Cancelar">
             </div>
             
            </p>
        </div>
    </div>
    
</form>
<?php echo $this->endSection();?>