<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrosController;

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
    return view('Agenda.Agendar');
});

Route::resource('/agendar',RegistrosController::class);
//Route::get('/agendar',[RegistrosController::class,'index'])->name('todos_registros');
//Route::get('/agendar',[RegistrosController::class,'edit'])->name('editar');
//Route::post('/agendar',[RegistrosController::class,'update'])->name('actualizar');
//Route::post('/agendar',[RegistrosController::class,'store'])->name('añadir_registros');

//Route::post('/registros',[RegistrosController::class,'store'])->name('registros');