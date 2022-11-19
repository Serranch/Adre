<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorAltaProducto;
use Illuminate\Http\Request;

class ControladorAltaProducto extends Controller
{
    function AltaProducto(ValidadorAltaProducto $req){
        return redirect()->route('AltaProducto')->with('exito', 'Producto Registrado');
    }
}
