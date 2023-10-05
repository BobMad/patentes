<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ObjetoPI;
use App\View\PDF;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * @return void
     */
    public function Header()
    {

    }
    public function index($id)
    {
        $objeto = ObjetoPI::query()->findOrFail($id);

        $pdf = new PDF();
        $pdf->AddPage();

        $pdf->SetFont('times', '', 10);
        $pdf->Image('images/brasao_govfed.png', 1, 6,25,12.5,'','','T', '', '0', 'C');
        $pdf->Text(10,20,'SERVIÇO PÚBLICO FEDERAL', '','',true,'',2,'C');
        $pdf->Text(10,24,'INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO AMAPÁ', '','',true,'',2,'C');
        $pdf->Text(10,28,'CONSELHO SUPERIOR', '','',true,'',2,'C');
//      $pdf->Line(0, 10, $pdf->getPageWidth(), 10, array('width' => 0.5, 'color' => array(0, 0, 0)));

        $pdf->Output();
    }

}
