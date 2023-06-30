<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AltaPersonaController extends Controller
{
    public function altaPersona(){
        $datos['titulo']= 'Alta Personas';
        return view('alta-personas')->with($datos);
    }
}
