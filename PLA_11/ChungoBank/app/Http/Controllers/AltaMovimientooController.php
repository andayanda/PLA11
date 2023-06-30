<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AltaMovimientooController extends Controller
{
    public function altaMovimientos(){
        return view('alta-movimientos');
    }
}
