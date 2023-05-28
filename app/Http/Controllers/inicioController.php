<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class inicioController extends Controller
{
    public function inicio() {
        return view('carpeta1.inicio');
    }

    public function contactos(){
        return view('carpeta1.contactos');
    }
}



