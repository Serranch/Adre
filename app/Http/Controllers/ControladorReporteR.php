<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;

class ControladorReporteR extends Controller
{
    public function consulta()
    {
        $resultReportesR = DB::table('reporte_recursos')->get();
        return view('Recursos', compact('resultReportesR'));
    }
    public function consultaSemana()
    {
        $semana_actual = date_format(date_create(), 'W');

        $resultReportesR = DB::table('reporte_recursos')
            ->whereBetween(DB::raw('WEEK(fecha_reporte)'), [$semana_actual, $semana_actual])
            ->where(DB::raw('YEAR(fecha_reporte)'), date('Y'))
            ->get();
        return view('Recursos', compact('resultReportesR'));
    }
    public function consultaMes()
    {
        $mes_actual = date_format(date_create(), 'm');

        $resultReportesR = DB::table('reporte_recursos')
            ->whereMonth('fecha_reporte', $mes_actual)
            ->whereYear('fecha_reporte', date('Y'))
            ->get();
        return view('Recursos', compact('resultReportesR'));
    }
    // Generate PDF
    public function createPDF()
    {
        // retreive all records from db
        $resultReportesR = DB::table('reporte_recursos')->get();
        // share data to view
        $pdf = PDF::loadView('GeneratePDFRecursos', compact('resultReportesR'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('prueba.pdf');
        // download PDF file with download method
        return $pdf->download('prueba.pdf');
    }
}
