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

    public function edicion($idproducto)
    {
        $producto = DB::table('tb_clientes')->where('id_recursos',$idproducto)->first();
        return redirect('almacen',compact('producto'));
    }

    public function showLibro($idLibro)
    {
        $libro = DB::table('tb_libros')->where('idLibro',$idLibro)->first();
        return redirect('CatLibros',compact('libro'));
    }

    public function showCliente($idCliente)
    {
        $cliente = DB::table('tb_clientess')->where('idCliente',$idCliente)->first();
        return redirect('CatClientes',compact('cliente'));
    }

    public function editLibro($idLibro)
    {
        $libro = DB::table('tb_libros')->where('idLibro',$idLibro)->first();
        return redirect('CatLibros',compact('libro'));
    }
    public function editCliente($idCliente)
    {
        $cliente = DB::table('tb_clientes')->where('idCliente',$idCliente)->first();
        return redirect('CatClientes',compact('cliente'));
    }

    public function updateLibro(Request $request, $idLibro)
    {
        DB::table('tb_libros')->where('idLibro',$idLibro)->update([
            "isbn"=> $request->input('txtISBN'),
            "titulo"=> $request->input('txtTitulo'),
            "autor"=> $request->input('txtAutor'),
            "paginas"=> $request->input('txtPaginas'),
            "editorial"=> $request->input('txtEditorial'),
            "email"=> $request->input('txtEmailEditorial'),
            "updated_at"=> Carbon::now()
        ]);
        $data = $request->input('txtTitulo');
        return redirect('CatLibros')->with('edicion',compact('data'));
    }
    public function updateCliente(Request $request, $idCliente)
    {
        DB::table('tb_clientes')->where('idCliente',$idCliente)->update([
            "nombre"=> $request->input('txtNombre'),
            "apellido"=> $request->input('txtApellido'),
            "ine"=> $request->input('txtINE'),
            "email"=> $request->input('txtEmailCliente'),
            "updated_at"=> Carbon::now()
        ]);
        $data = $request->input('txtNombre');
        return redirect('CatClientes')->with('edicion',compact('data'));
    }

    public function destroyLibro($idLibro)
    {
        DB::table('tb_libros')->where('idLibro',$idLibro)->delete();
        return redirect('CatLibros')->with('libroEliminado','');
    }

    public function destroyCLiente($idCliente)
    {
        DB::table('tb_clientes')->where('idCliente',$idCliente)->delete();
        return redirect('CatClientes')->with('clienteEliminado','');
    }
}
