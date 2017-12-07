<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\impacto;
use Request;

class ImpactoController extends Controller
{
    function Novo(){
        $params = Request::all();
        $impacto = new impacto($params);
        $impacto->save();
        return redirect('/Impacto');
    }

    function Visualizar(){
        $impacto = impacto::all();
		return view('Parametros/Impacto')->with('impacto', $impacto);
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

}
