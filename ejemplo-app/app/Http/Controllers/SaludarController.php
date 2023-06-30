<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludarController extends Controller
{
   public function index(){
    // return 'Hola Mundo';
    if(request()->has('vacio')){
        $datos['usuarios'] =[];
    } else{
        $datos['usuarios'] =['Perico los Palotes', 'Fulano de Tal','Yo misma'];

    }
 
    $datos['titulo']= 'Listado de usuarios';
    return view('holamundo')->with($datos);
   }
   public function mostrar($nombre, $alias =null){
    if($alias){ return "Hola $nombre también llamada $alias";}
        else {return "Hola $nombre sin alias";}
   }
}
