<?php
    namespace App\Controllers;

    // LE VAMOS A PONER ALGO NUEVO AL CONTROLADOR
    use App\Controllers\BaseController; // le ponemos esto porque vamos a traer infromacion
    use App\Models\EmpleadoModel;

    class Empleados extends BaseController
    {
        public function index()
        {
            $model = new EmpleadoModel();
            $data['empleados'] = $model->findAll();
            return view("empleado/index", $data);
        }

        public function crear(){
            return view('empleados/crear');
        }
    }


?>