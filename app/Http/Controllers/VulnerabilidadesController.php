<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\vulnerabilidades;
use Request;

class VulnerabilidadesController extends Controller
{
    function Novo(){
        $params = Request::all();
        $vulnerabilidades = new vulnerabilidades($params);
        $vulnerabilidades->save();
        return redirect('Vulnerabilidades');
    }

    function Visualizar(){
        $vulnerabilidades = vulnerabilidades::all();
		return view('Parametros/Vulnerabilidades')->with('vulnerabilidades', $vulnerabilidades);
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
