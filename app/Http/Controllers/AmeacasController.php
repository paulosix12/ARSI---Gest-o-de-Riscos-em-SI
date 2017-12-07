<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\ameacas;
use Request;

class AmeacasController extends Controller
{
    function Novo(){
        $params = Request::all();
        $ameaca = new ameacas($params);
        $ameaca->save();
        return redirect('/Ameacas');
    }

    function Visualizar(){
        $ameacas = ameacas::all();
		return view('Parametros/Ameacas')->with('ameacas', $ameacas);
    }

    function Deletar(){
        $id = Request::route('id');
		$ameaca = ameacas::find($id);
		$ameaca->delete();
		return redirect('Ameacas');
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
