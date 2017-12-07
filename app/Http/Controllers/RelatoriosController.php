<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\clientes;
use App\impacto;
use App\controles;
use App\ameacas;
use App\vulnerabilidades;
use Request;
use PDF;

class RelatoriosController extends Controller
{
    function generate_pdf() {
        $data = Request::all();
        //$pdf = PDF::loadView('Clientes/test');
        $pdf = PDF::loadView('Clientes/test' , compact('data'));        
        return $pdf->stream('document2.pdf');
    }

    function Visualizar(){
        $clientes = clientes::all();
        $impacto = impacto::all();
        $controles = controles::all();
        $ameacas = ameacas::all();
        $vulnerabilidades = vulnerabilidades::all();
		return view('Relatorio/relatorio', array('vulnerabilidades'=>$vulnerabilidades, 'clientes'=>$clientes, 'impacto'=>$impacto, 'controles'=>$controles, 'ameacas'=>$ameacas));
    }
/*
    function Novo(){
        $params = Request::all();
        $impacto = new impacto($params);
        $impacto->save();
        return redirect('/Impacto');
    }

    

    function Deletar(){
        $id = Request::route('id');
		$impacto = impacto::find($id);
		$impacto->delete();
		return redirect('Impacto');
    }

    function Atualizar(){
        $id = Request::route('id');
        $clientes = clientes::find($id);
		return view('Clientes/atualizarClientes')->with('c', $clientes);
    }

    function salvaAtualizar(){
        $id = Request::route('id');
        $clientes = clientes::find($id);
        $params = Request::all();
        $clientes->update($params);
        return redirect('Clientes/Visualizar');
    }
*/
}
