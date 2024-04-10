<?php

use App\Http\Controllers\IndexController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//ruta par mostrar todos los productos
Route::get('/',[IndexController::class,'mostrar_todos'])->name('index');

//ruta para mostrar el producto segun el id
Route::get('/productos/{id}', [IndexController::class, 'show'])->name('productos_id');

//ruta para agregar un producto
Route::get('/agregarp',[IndexController::class,'create'])->name('agregar_p');

Route::post('/guardarp', [IndexController::class, 'store'])->name('guardar_p');

//ruta para moificar el producto
Route::get('/productos/{id}/modificar',[IndexController::class,'edit'])->name('modificar_p');

Route::put('/productos/{id}/guardar',[IndexController::class,'update'])->name('guardar_c');






