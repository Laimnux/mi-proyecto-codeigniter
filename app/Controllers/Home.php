<?php

namespace App\Controllers;

use App\Models\EmpleadoModel;

class Home extends BaseController
{
    /*
    public function index(): string
    {
        return view('welcome_message');
    }
    */
     public function index()
    {
        echo "Mensaje desde el controlador Home";
        
        
    }
}


?>