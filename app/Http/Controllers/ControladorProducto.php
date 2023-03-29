<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorAltaProducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ControladorProducto extends Controller
{

    public function Alta(ValidadorAltaProducto $producto)
    {
        DB::table('recursos')->insert([
            "nombre"=> $producto->input('txtNombre'),
            "id_almacen"=> $producto->input('txtAlmacen'),
            "cantidad"=> $producto->input('txtCantidad'),
            "precio"=> $producto->input('txtPrecio'),
            "fecha_ingreso"=> Carbon::now(),
        ]);
        $data = $producto->input('nombre');
        return redirect()->route('AltaProducto')->with('exito', compact('data'));
    }

    public function consulta()
    {
        $resultproductos = DB::table('recursos')->get();
        return view('almacen',compact('resultproductos'));
    }

    // public function edicion($idproducto)
    // {
    //     $producto = DB::table('tb_clientes')->where('id_recursos',$idproducto)->first();
    //     return redirect('almacen',compact('producto'));
    // }

    public function editar(Request $request, $producto)
    {
        DB::table('recursos')->where('id_recursos',$producto)->update([
            "nombre"=> $request->input('txtNombre'),
            "id_almacen"=> $request->input('txtAlmacen'),
            "cantidad"=> $request->input('txtCantidad'),
            "precio"=> $request->input('txtPrecio'),
            "fecha_ingreso"=> Carbon::now(),
        ]);
        $data = $request->input('txtNombre');
        return redirect('Almacen')->with('edicion',compact('data'));
    }
    
    public function eliminar($producto)
    {
        DB::table('recursos')->where('id_recursos',$producto)->delete();
        return redirect('Almacen')->with('Eliminado','');
    }
}
