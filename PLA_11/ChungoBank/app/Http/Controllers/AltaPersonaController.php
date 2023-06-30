<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AltaPersonaController extends Controller
{
    public function altaPersona(){
        return view('alta-personas');
    }
}
