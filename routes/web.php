<?php

use App\Http\Controllers\ControladorProducto;
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

Route::get('/', function () {
    return view('login');
});
Route::get('login', function () {
    return view('login');
})->name('login');
Route::get('Home', function () {
    return view('Home');
})->name('Home');

Route::get('Almacen',[ControladorProducto::class, 'consulta'])->name('Almacen');

// Route::get('Almacen', function () {
//     return view('Almacen');
// })->name('Almacen');

Route::get('Recursos', function () {
    return view('Recursos');
})->name('Recursos');

Route::get('AltaRecurso', function () {
    return view('AltaRecurso');
})->name('AltaRecurso');

Route::get('Calidad', function () {
    return view('Calidad');
})->name('Calidad');

Route::get('AltaProducto', function () {
    return view('AltaProducto');
})->name('AltaProducto');

Route::get('AltaCalidad', function () {
    return view('AltaCalidad');
})->name('AltaCalidad');

Route::post('loginUser', [ControladorLogin::class, 'loginUser']);
Route::post('AltaProducto', [ControladorProducto::class, 'Alta']);

