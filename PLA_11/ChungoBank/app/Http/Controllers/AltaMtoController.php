<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AltaMtoController extends Controller
{
    public function altaMto(){
        
        $datos['titulo']= 'Alta y Mantenimiento Cta Puntos';
        return view('alta-mto-puntos')->with($datos);
    }
}
