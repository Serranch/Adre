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
        return view('Calidad',compact('resultReportesC'));
    }
    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $resultReportesC = DB::table('reporte_calidad')->get();
        // share data to view
        $pdf = PDF::loadView('GeneratePDFCalidad',compact('resultReportesC'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('prueba.pdf');
        // download PDF file with download method
        return $pdf->download('prueba.pdf');
      }
}
