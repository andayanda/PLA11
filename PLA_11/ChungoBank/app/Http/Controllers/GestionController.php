<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionController extends Controller
{
    // método carga de la vista de entrada, gestion
    public function index() {
        $datos['titulo']= 'Gestión comercial';
        return view('gestion')->with($datos);}
  
//método que carga la vista gestion
public function gestion(){
   
   
}
}
