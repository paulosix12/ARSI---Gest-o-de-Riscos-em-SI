<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Request;
use PDF;

class PdfController extends Controller
{    
    function generate_pdf() {
        $pdf = PDF::loadView('Clientes/test');
        return $pdf->stream('document2.pdf');
    }
}
