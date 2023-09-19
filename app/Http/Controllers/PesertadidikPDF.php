<?php

namespace App\Http\Controllers;

use App\Models\PesertadidikM;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PesertadidikPDF extends Controller
{
    public function pdf()
    {
        $pesertaM = PesertadidikM::all();
        $pdf = Pdf::loadView('pesertadidik_pdf',['pesertaM'=>$pesertaM]);
        return $pdf->stream('pesertadidik.pdf');
    }
}
