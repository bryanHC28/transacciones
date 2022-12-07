<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\Insertar;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::resource('preguntas', PreguntaController::class);

Route::resource('empresa', EmpresaController::class);
//Route::get('formulario ',[AjaxController::class,'formulario_ajax']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::post('formula/php',[Insertar::class,'inserta_contacto']);
//Route::get('formula/{id_empresa}',[]);
Auth::routes();
