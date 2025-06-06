<?php
// si se crea un controlador debe de haber la direccion

    namespace App\Controllers;
 //creamos una clase que va a derivar de base controler
 //class productos extends BaseController 
    class Productos extends BaseController {
        public function index(){
            // vamos a guardar la conexcion
            $bd = \config\Database::connect(); 
            //Guardamos nuestras consultas
            //$query = $bd -> query("SELECT * FROM producto");
            $query = $bd -> query("SELECT * FROM producto;");
            $resultado = $query -> getResult();

            //las vistas deben estar siempre dentro de la carpeta view
            $dato =['producto' => $resultado];
            //return view('productos/inventario', $dato);
            //vamos a llamar boostrap por dos metodos
            /*
            echo view('plantilla/header');
            echo view('productos/inventario', $dato);
            echo view('plantilla/footer');
            */
            //segunda version 
            // return view('plantilla/header',$dato)
            //         .view('productos/inventario', $dato)
            //         .view('plantilla/footer',['copy' => '2025']);
            
            return view('productos/inventario',$dato);
        }

        //todas las funciones quedandentro de las clases 
        public function show(){
            return "<h2>Detalles de los productos</h2>";
        }

        //metodo para buscar un producto
        public function show2($id){
            
            return "<h1>buscar un producto específico comida sopa: $id </h1>";
        }

        //otra funcion 
        public function cat($cat,$id){
            return "<h2> una rica sopa $cat <br> cod producto: $id";

        }
    }


?>