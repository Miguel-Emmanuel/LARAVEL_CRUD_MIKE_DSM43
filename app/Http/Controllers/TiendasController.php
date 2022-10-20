<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiendas;

class TiendasController extends Controller
{
    //
    public function tiendas(){ 
        $tiendas_a = tiendas::all();
        $tiendas_b = \DB::select('SELECT * FROM tb_tiendas');
        return view("lista_tiendas")
        ->with(['tiendas1' => $tiendas_a]) 
        ->with(['tiendas2' => $tiendas_b]);
        
    }
}
