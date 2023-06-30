<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleController extends Controller
{
    //
    public function detalle(){
        $datos['titulo']= 'Detalle movimiento Cta Puntos';
        return view('detalle-movimiento')->with($datos);
    }
}
