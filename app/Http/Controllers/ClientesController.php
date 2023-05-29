<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function login(){
        return view('carpeta3.vista6');
    }

    public function formulario(){
        return view('carpeta3.vista5');
    }
}
