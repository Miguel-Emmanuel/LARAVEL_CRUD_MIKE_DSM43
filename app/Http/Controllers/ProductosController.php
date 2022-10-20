<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
class ProductosController extends Controller
{
    //
    public function productos(){ 
        $productos_a = productos::all();
        $productos_b = \DB::select('SELECT * FROM tb_productos');
        return view("lista_productos")
        ->with(['productos1' => $productos_a]) 
        ->with(['productos2' => $productos_b]);
        
    }
}
