<?php

use App\Http\Controllers\ControladorProducto;
use App\Http\Controllers\ControladorReporteC;
use App\Http\Controllers\ControladorReporteR;
use App\Http\Controllers\ControladorLogin;
use Illuminate\Support\Facades\Route;

//----------------login----------------------
Route::get('/', [ControladorLogin::class, 'showLoginForm'])->name('login');
Route::post('/login', [ControladorLogin::class, 'login'])->name('login.post');
Route::get('/logout', [ControladorLogin::class, 'logout'])->name('logout');

//---------------Home--------------------
Route::get('Home', function () {
    return view('Home');
})->name('Home');



//-----------------productos--------------------------
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


//-----------------Calidad--------------------------------
Route::get('Calidad', [ControladorReporteC::class, 'consulta'])->name('Calidad');
//Alta
Route::get('AltaCalidad', function () {
    return view('AltaCalidad');
})->name('AltaCalidad');
//filtrar por semana
Route::get('Calidad/semana', [ControladorReporteC::class, 'consultaSemana'])->name('Calidad.semana');
//filtrar por mes
Route::get('Calidad/mes', [ControladorReporteC::class, 'consultaMes'])->name('Calidad.mes');

//generar PDF
Route::get('Calidad/pdf/', [ControladorReporteC::class, 'createPDF'])->name('Calidad.pdf');


//-----------------------Recursos-----------------------------------
Route::get('Recursos', [ControladorReporteR::class, 'consulta'])->name('Recursos');
//Alta
Route::get('AltaRecurso', function () {
    return view('AltaRecurso');
})->name('AltaRecurso');
//generar PDF
Route::get('Recursos/pdf/', [ControladorReporteR::class, 'createPDF'])->name('Recursos.pdf');
