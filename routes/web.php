<?php

use App\Http\Controllers\ControladorProducto;
use App\Http\Controllers\ControladorReporteC;
use App\Http\Controllers\ControladorReporteR;
use App\Http\Controllers\ControladorLogin;
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

// Route::get('/', function () {
//     return view('login');
// });
//login
Route::get('/', [ControladorLogin::class, 'showLoginForm'])->name('login');
Route::post('/login', [ControladorLogin::class, 'login'])->name('login.post');
Route::get('/logout', [ControladorLogin::class, 'logout'])->name('logout');

Route::get('Home', function () {
    return view('Home');
})->name('Home');


Route::get('AltaRecurso', function () {
    return view('AltaRecurso');
})->name('AltaRecurso');


Route::post('loginUser', [ControladorLogin::class, 'loginUser']);


//productos
Route::get('Almacen',[ControladorProducto::class, 'consulta'])->name('Almacen');
//alta
Route::get('AltaProducto', function () {
    return view('AltaProducto');
})->name('AltaProducto');
Route::post('AltaProducto', [ControladorProducto::class, 'Alta']);
//edicion
Route::put('EdicionProducto/{id}',[ControladorProducto::class, 'editar'])->name('producto.update');
//eliminacion
Route::delete('EliminarProducto/{id}',[ControladorProducto::class, 'eliminar'])->name('producto.destroy');


//Calidad
Route::get('Calidad', [ControladorReporteC::class, 'consulta'])->name('Calidad');
//filtrar por semana
Route::get('Calidad/semana', [ControladorReporteC::class, 'consultaSemana'])->name('Calidad.semana');
//filtrar por mes
Route::get('Calidad/mes', [ControladorReporteC::class, 'consultaMes'])->name('Calidad.mes');

//generar PDF
Route::get('Calidad/pdf/', [ControladorReporteC::class, 'createPDF'])->name('Calidad.pdf');


//Recursos
Route::get('Recursos', [ControladorReporteR::class, 'consulta'])->name('Recursos');
//generar PDF
Route::get('Recursos/pdf/', [ControladorReporteR::class, 'createPDF'])->name('Recursos.pdf');
