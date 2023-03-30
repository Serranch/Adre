<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;

class ControladorReporteC extends Controller
{
    public function consulta()
    {
        $resultReportesC = DB::table('reporte_calidad')->get();
        return view('Calidad', compact('resultReportesC'));
    }

    public function Alta(Request $reporte)
    {
        DB::table('reporte_calidad')->insert([
            "nombre"=> $reporte->input('txtNombre'),
            "cargo"=> $reporte->input('txtDatos'),
            "correo"=> $reporte->input('txtcorreo'),
            "cantidad"=> $reporte->input('txtCantidad'),
            "precio_compra"=> $reporte->input('txtPrecio'),
            "fecha_reporte"=> Carbon::now(),
            "maquina"=> $reporte->input('txtMaquina'),
            "descripcion"=> $reporte->input('txtDescripcion'),
            
        ]);
        $data = $reporte->input('nombre');
        return redirect()->route('AltaCalidad')->with('exito', compact('data'));
    }


    public function consultaSemana()
    {
        $semana_actual = date_format(date_create(), 'W');

        $resultReportesC = DB::table('reporte_calidad')
            ->whereBetween(DB::raw('WEEK(fecha_reporte)'), [$semana_actual, $semana_actual])
            ->where(DB::raw('YEAR(fecha_reporte)'), date('Y'))
            ->get();
        return view('Calidad', compact('resultReportesC'));
    }
    public function consultaMes()
    {
        $mes_actual = date_format(date_create(), 'm');

        $resultReportesC = DB::table('reporte_calidad')
            ->whereMonth('fecha_reporte', $mes_actual)
            ->whereYear('fecha_reporte', date('Y'))
            ->get();
        return view('Calidad', compact('resultReportesC'));
    }
    public function consultaAño()
    {
        $año_actual = date_format(date_create(), 'Y');

        $resultReportesC = DB::table('reporte_calidad')
            ->whereYear('fecha_reporte', date('Y'))
            ->get();
        return view('Calidad', compact('resultReportesC'));
    }
    // Generate PDF
    public function createPDF()
    {
        // retreive all records from db
        $resultReportesC = DB::table('reporte_calidad')->get();
        // share data to view
        $pdf = PDF::loadView('GeneratePDFCalidad', compact('resultReportesC'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('prueba.pdf');
        // download PDF file with download method
        return $pdf->download('prueba.pdf');
    }
}
