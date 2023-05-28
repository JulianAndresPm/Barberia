<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function servicios(){
        return view('carpeta2.servicios');
    }

    public function productos(){
        return view('carpeta2.productos');
    }


}
