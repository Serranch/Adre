<?php

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
    return view('template');
});
Route::get('login', function () {
    return view('login');
});
Route::get('Home', function () {
    return view('Home');
})->name('Home');
Route::get('Almacen', function () {
    return view('Almacen');
})->name('Almacen');

Route::get('Recursos', function () {
    return view('Recursos');
})->name('Recursos');

Route::post('loginUser', [ControladorLogin::class, 'loginUser']);

