<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipos;

class TiposController extends Controller
{
    //
    public function tipos(){ 
        $tipos_a = Tipos::all();       
        return view("editar_usuarios")
        ->with(['tipos' => $tipos_a]);       
    }
}
