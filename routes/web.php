<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TiposController;
use App\Http\Controllers\TiendasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

Route::name('base')->get('base', function(){return view('base');});*/
Route::name('lista_productos')->get('/lista_productos', [ProductosController::class, 'productos']);
Route::name('lista_usuarios')->get('/', [UsuariosController::class, 'usuarios']);

Route::name('alta_usuarios')->get('alta_usuarios', [UsuariosController::class, 'alta_usuarios']);
Route::name('registrar_usuarios')->post('registrar_usuarios', [UsuariosController::class, 'registrar_usuarios']);
Route::name('detalle_usuarios')->get('detalle_usuarios/{id}', [UsuariosController::class, 'detalle_usuarios']);
Route::name('borrar_usuarios')->get('borrar_usuarios/{id}', [UsuariosController::class, 'borrar_usuarios']);
Route::name('salvar_usuarios')->put('salvar_usuarios/{id}', [UsuariosController::class, 'salvar_usuarios']);
Route::name('editar_usuarios')->get('editar_usuarios/{id}', [UsuariosController::class, 'editar_usuarios']);

//

/*
INSERT INTO tb_usuarios VALUES(1,"222010230","Miguel","Arriola","Ortega","2002-06-05","masculino","mike.jpg","al222010230@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(2,"222110737","Yabin","Mendoza","Cervantes","2003-06-15","masculino","JAVIN.jpg","al@222110737gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(3,"222010229","Alan","Arriola","Ortega","2002-06-05","masculino","ALAN.jpg","al222010229@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(4,"222010211","Esau","Gomez","Sanchez","2002-12-31","masculino","men.jpg","al222010230@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(5,"222111315","Alison","Trujillo","Solis","2003-05-06","femenino","ALISON.jpg","al222111315@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(6,"2220102","Axel","Reyes","Gonzales","2002-06-05","masculino","AXEL.jpg","al222010230@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(7,"222010200","Juan Carlos","Romero","Nava","2002-06-05","masculino","men.jpg","al222010200@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(8,"222010211","Ivan","Diaz","Medina","2002-06-05","masculino","men.jpg","al222010211@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(9,"222010245","Israel","Ruiz","Ozo;os","2002-06-05","masculino","ISRAAEL.jpg","al222010245@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(10,"222010215","Yoselin","Calzada","Manjarrez","2002-06-05","femenino","mujer.jpg","al222010215@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(11,"222010222","Kevin","Jesus","Flores","2002-06-05","masculino","men.jpg","al222010222@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(12,"222111285","Melissa","Sanchez","Martinez","2003-11-04","femenino","MELISSA.jpg","al222111285@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(13,"222010245","Raymundo","Peñaloza","Franco","1995-05-04","masculino","men.jpg","al222010245@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(14,"222010289","Emilio","Salas","Gomez","2002-04-02","masculino","men.jpg","al222010289@gmail.com","aiom",1,1);
INSERT INTO tb_usuarios VALUES(15,"222010223","Pablo","Segundo","Evangelista","2002-06-05","masculino","men.jpg","al222010223@gmail.com","aiom",1,1);
CREATE DATABASE utvt_dsm43
*/