<?php

namespace App\Http\Controllers;
use App\Models\Petition;

use Illuminate\Http\Request;
use TCPDF;

class PDFController extends Controller
{
    public function generarPDF(Request $request)
    {
        // Obtener el objeto JSON del formulario y convertirlo a un objeto PHP
        $petition = json_decode($request->input('petition'));

        // Verificar que el objeto $petition no sea nulo y que contenga la información necesaria
        if (!$petition || !isset($petition->id)) {
            // Manejo de error si el objeto es nulo o faltan datos
            abort(404, 'Petición inválida');
        }

        // Crear el PDF
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('Helvetica', '', 16);

        // Agregar información del objeto $petition al PDF
        $pdf->Cell(0, 10, 'ID de la petición: ' . $petition->id, 0, 1);
        $pdf->Cell(0, 10, 'Equipamiento: ' . $petition->equipment->nombre, 0, 1);
        $pdf->Cell(0, 10, 'Accesorio: ' . $petition->accessory->nombre, 0, 1);
        $pdf->Cell(0, 10, 'Ingeniero Biomédico: ' . $petition->user->name, 0, 1);
        $pdf->Cell(0, 10, 'Fecha y hora: ' . $petition->fecha_hora, 0, 1);
        // Agregar más información según sea necesario

        // Generar y descargar el PDF
        $pdf->Output('Petición_'. $petition->id . '.pdf', 'D');
    }

}
