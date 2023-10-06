<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ObjetoPI;
use App\Models\Representante;
use App\View\PDF;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

/**
 *
 */
class PdfController extends Controller
{

    /*public function index($id)
    {
        $objeto = ObjetoPI::query()->findOrFail($id);
        $representante = $objeto->representante;

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');


        $dompdf->loadHtml(
            '
                <div align="center">
                <img height="250" width="157" src="" alt="LOGO">
                SERVIÇO PÚBLICO FEDERAL <br/>
                 INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO AMAPÁ <br/>
                 CONSELHO SUPERIOR <br/>
                 <hr></div>

                 <div align="center">
                 <h3>ANEXO I</h3>
                <h3>QUESTIONÁRIO DE PATENTEABILIDADE</h3></div>
                <p>Prezado Senhor Coordenador do NIT/IFAP,</p>
                <p class="justify-between">
                Eu, <u>' . $representante->nome .
            ' </u>, RG: <u>' . $representante->rg . ' </u>, CPF: <u>' .
            $representante->cpf . ' </u>, de , <u>' . $representante->campus .
            ' </u>(Unidade/Campus) encaminho a esse Núcleo os documentos abaixo relacionados, a fim de dar início à avaliação de pertinência do <u> ' .
            $representante->produto . ' </u> (produto, serviço, projeto,etc.) intitulado(a) “ ”.</p>

            Relação de documentos anexados:
            1. Relatório Descritivo
            2. Reivindicações
            3. Resumo
            4. Desenhos
            5. Publicações relacionadas ao presente invento
            6. Cópias de material de divulgação e/ou atestado de participação em eventos e/ou cópia de
anais, onde o invento tenha sido divulgado.
    Outros Documentos:
'

        );


        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($objeto->titulo);

    }*/

    /*public function index($id)
    {
        $objeto = ObjetoPI::query()->findOrFail($id);
        $representante = $objeto->representante;

        $pdf = new PDF();

        $pdf->AddPage();

        $pdf->SetFont('times', '', 10);
        $pdf->Image('images/brasao_govfed.png', 1, 6, 25, 12.5, '', '', 'T', '', '0', 'C');
        $pdf->Text(10, 20, 'SERVIÇO PÚBLICO FEDERAL', '', '', true, '', 2, 'C');
        $pdf->Ln(10, false);
        $pdf->Text(10, 24, 'INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO AMAPÁ', '', '', true, '', 2, 'C');
        $pdf->Text(10, 28, 'CONSELHO SUPERIOR', '', '', true, '', 2, 'C');


        $html = '<br/><h2 align="center">ANEXO I</h2><h2 align="center">QUESTIONÁRIO DE PATENTEABILIDADE</h2><br />';
        $pdf->writeHTML($html, true, 0, true, 0);
        $pdf->Text(25, 64, 'Prezado Senhor Coordenador do NIT/IFAP,', '', '', true, '', 1, 'L');
        $pdf->Text(25, 68, 'Eu, '. $representante->nome .', RG:' . $representante->rg . ', CPF: ' .
            $representante->cpf . ', do ' . $representante->campus . '(Unidade/Campus) encaminho a esse Núcleo os documentos abaixo relacionados, a fim de dar início à avaliação de pertinência de' .
            $representante->produto . '(produto, serviço, projeto,etc.) intitulado(a) “ ”.', '', '',
            true, '', 2, 'L');


        $pdf->Output();
    }*/

    public function index($id)
    {
        $objeto = ObjetoPI::query()->findOrFail($id);

        return view('objetoPis.pdf', compact('objeto'));
    }

}
