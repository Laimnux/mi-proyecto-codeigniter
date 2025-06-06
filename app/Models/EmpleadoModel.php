<?php
namespace App\Models;

use CodeIgniter\Model;

class EmpleadoModel extends Model{
    //cuando creamos los modelos los dejamos tal cual $table...
    protected $table = 'empleados';
    protected $primaryKey = 'ced_empleado';
    //aqui guardamos todos los datos de la tabla en este array
    protected $allowedFields = ['ced_empleado','nombre_emp','apellido_emp','gmail_emp','direccion_emp','telefono_emp']; 
    protected $timestamps = false;
    //Estos son los datos básicos que necesita este modelo, estos datos los enviamos a empleados modelo
}
?>

<!--Cuando usamos modelos heredamos modelos el codeigniter trae por defecto unos comandos groupBy agrupa model a la tabla empleados-->
<!--Los modelos me sirven para iniciar la infromacion de la base de datos-->
<!--Protected los datos solo se pueden adceder desde esta clase -->
<!--Private los datos solo se pueden adceder desde la clase
que hereden de esta clases -->