<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function consulta(){
        $datos['titulo']= 'Consulta movimientos Cta Puntos';
        return view('consulta-movimientos')->with($datos);
    }
   
   
}

