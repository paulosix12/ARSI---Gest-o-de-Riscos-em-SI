<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\ativos;
use App\clientes;
use App\impacto;
use App\controles;
use App\ameacas;
use App\vulnerabilidades;
use Request;

class AtivosController extends Controller
{
    function Novo(){
        $params = Request::all();
        $ativos = new ativos($params);
        $ativos->save();
        return redirect('Ativos/Visualizar');
    }

    function Adicionar(){
        $clientes = clientes::all();
        $impacto = impacto::all();
        $controles = controles::all();
        $ameacas = ameacas::all();
        $vulnerabilidades = vulnerabilidades::all();
		return view('Ativos/addAtivos', array('vulnerabilidades'=>$vulnerabilidades, 'clientes'=>$clientes, 'impacto'=>$impacto, 'controles'=>$controles, 'ameacas'=>$ameacas));
    }

    function Visualizar(){
        $ativos = ativos::all();
		return view('Ativos/verAtivos')->with('ativos', $ativos);
    }

    function Deletar(){
        $id = Request::route('id');
		$vulnerabilidades = vulnerabilidades::find($id);
		$vulnerabilidades->delete();
		return redirect('Vulnerabilidades');
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
