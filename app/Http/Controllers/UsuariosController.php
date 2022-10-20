<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validar;
use App\Models\Usuarios;
use App\Models\Tipos;
class UsuariosController extends Controller
{
   
    public function base(){
        $usuarios_a = Usuarios::all(); 
        $usuarios_b = \DB::select('SELECT u.id_usuario as id_usuario, u.nombre as nombre, u.app as app, u.ap as apm, u.fn as fn, u.gen as gen, u.foto as foto,
         u.email as email, u.pass as pass,u.activo as activo, n.nombre as nivel 
        FROM tb_usuarios as u, tb_tipos as n');
           return view("base")
           ->with(['usuarios1' => $usuarios_a]) 
           ->with(['usuarios2' => $usuarios_b]);
    }
    public function usuarios(){ 
        $usuarios_a = Usuarios::all();
        $usuarios_b = \DB::select('SELECT u.id_usuario as id_usuario, u.nombre as nombre, u.app as app, u.ap as apm, u.fn as fn, u.gen as gen, u.foto as foto,
        u.email as email, u.pass as pass,u.activo as activo, n.nombre as nivel 
       FROM tb_usuarios as u, tb_tipos as n');

        return view("lista_usuarios")
            ->with(['usuarios1' => $usuarios_a]) 
            ->with(['usuarios2' => $usuarios_b]);
    }
 
    public function detalle_usuarios($id){
        $usuario = Usuarios::find($id);
        return view("detalle_usuarios")
        ->with(['detalle_usuarios' => $usuario]);
    }
    // ***************** ALTA ***********//
    public function alta_usuarios(){
        $tipo = Tipos::all();
        return view("alta_usuarios")
        ->with(['tipos' => $tipo]);
    }  
    public function registrar_usuarios(validar $request){
        ///******************VALIDA CAMPOS **************** */
  //
     //USUARIOS CEREATE
     Usuarios::create(array(
        'clave' => $request->input('clave'),
        'nombre' => $request->input('nombre'),
        'app' => $request->input('app'),
        'ap' => $request->input('ap'),
        'fn' => $request->input('fn'),
        'gen' => $request->input('gen'),
        'foto' => $request->input('foto'),
        'email' => $request->input('email'),
        'pass' => $request->input('pass'),
        'nivel' => $request->input('nivel'),
        'activo' => $request->input('activo'),      
         'activo' =>'1'
     ));
     return redirect()->route('lista_usuarios');
    }
    //**************EDITAR**************** */
    public function editar_usuarios(Usuarios $id){
        $tipo = Tipos::all();
return view("editar_usuarios")
->with(['usuarios' => $id])         
->with(['nivel' => $tipo]);
    }
    public function salvar_usuarios(Usuarios $id, Request $request){
        $query = Usuarios::find($id->id_usuario);
        $query->clave = $request->clave;
        $query->nombre = trim(  $request->nombre);
        $query->app = trim(  $request->app);
        $query->ap = trim(  $request->ap);
        $query->fn =  $request->fn;
        $query->gen =   $request->gen;  
        $query->foto = trim(  $request->foto);
        $query->email = trim(  $request->email);
        $query->pass = trim(  $request->pass);
        $query->nivel =   $request->nivel;
        $query->activo = 1;
        $query->save();
        return redirect()->route("editar_usuarios", ['id' => $id->id_usuario]);

   }
  //$query->activo =   $request->activo;
   //////////****BORRAR****** */
   public function borrar_usuarios(Usuarios $id){

    \Storage::disk('local')->delete($id->foto);//bay foto del usuario
   $id->delete();
   return redirect()->route("lista_usuarios");

}

}

