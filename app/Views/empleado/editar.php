
<?php echo $this -> extend ('plantilla/layout'); ?>
    
<?php echo $this->section('contenido'); ?>
    

<br>
<h2>Editar Empleado</h2>
<br>
<div class="card">
        <div class="card-header">
            Editar Empleado
        </div>
        <div class="card-body">
            <h5 class="card-title">Modifique el dato a editar</h5>
            <p class="card-text">
            <!-- b-from-grup -->
             <div class="form-group">
                <label>Cedula:</label>
                <input class="form-control" type="text" name="ced_empleado" 
                value="<?php $empleados['ced_Empleado']; ?>">
             </div>

             <div class="form-group">
                <label>Nombre:</label>
                <input class="form-control" type="text" name="nombre_emp"
                value="<?php $empleados['nombre_emp'];?>">
                
             </div>

             <div class="form-group">
                <label>Apellido:</label>
                <input class="form-control" type="text" name="apellido_emp"
                value="<?php $empleados['apellido_emp'];?>">
             </div>
             
             <div class="form-group">
                <label>Gmail:</label>
                <input class="form-control" type="text" name="gmail_emp"
                value="<?php $empleados['gmail_emp'];?>">
             </div>

             <div class="form-group">   <!--Crear metodo Controlador-->
                <label>Dirección:</label>
                <input class="form-control" type="text" name="direccion_emp"
                value="<?php $empleados['direccion_emp'];?>">
             </div>

             <div class="form-group">
                <label>Telefono:</label>
                <input class="form-control" type="text" name="telefono_emp"
                value="<?php $empleados['telefono_emp'];?>">
             </div>

             <div class="form-group">
                <input class="btn btn-success" type="submit" value="Modificar">
                
             </div>
             
            </p>
        </div>
    </div>
    
</form>
<?php echo $this->endSection();?>
