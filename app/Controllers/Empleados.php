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

        public function crear()
        {
            return view('empleado/crear');
        }
        //metodo para guardar 
        public function guardar()
        {
            $model = new EmpleadoModel();
            $model ->insert($this->request->getPost());
            return redirect()->to('/empleado');
        }
        //editar
        public function editar($id)
        {
            $model = new EmpleadoModel();
            $data['empleado'] = $model->find($id);
            return view('empleado/editar');

        }
        public function actualizar($id)
        {
            $model = new EmpleadoModel();
            $model ->update($id,$this->request->getPost());
            return redirect()->to('/empleado');
        }
        public function eliminar($id)
        {
            $model = new EmpleadoModel();
            $model ->delite($id);
            return redirect()->to('/empleado');
        }
    }


?>