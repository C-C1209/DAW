<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('index');});
Route::get('/producto/{id}/{nombre}',function($id,$nombre){
    return view('verproducto')
    ->with('id',$id)
    ->with('nombre',$nombre);
});

Route::get('/contacto',function(){
    $contacto="Cristian Meza";
    $valores=7;
    $color="#CCC";
    return view("contacto")
    ->with('nombre',$contacto)
    ->with('valor',$valores)
    ->with('fondo',$color);
});

Route::get('/practica',function(){
    return view('practica');
});
Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){
    Route::get('/', function () {return view('admin.index');});
    Route::get('/usuarios', [App\Http\Controllers\Admin\UsuariosController::class,'index']);
    Route::resource('usuarios',App\Http\Controllers\Admin\UsuariosController::class);

    Route::get('/productos', [App\Http\Controllers\Admin\ProductosController::class,'index']);
    Route::resource('productos',App\Http\Controllers\Admin\ProductosController::class);

    Route::get('/categorias', [App\Http\Controllers\Admin\CategoriasController::class,'index']);
    Route::resource('categorias',App\Http\Controllers\Admin\CategoriasController::class);
});
