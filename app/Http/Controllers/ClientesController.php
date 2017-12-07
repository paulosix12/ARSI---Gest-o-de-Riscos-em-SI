<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\clientes;
use Request;

class ClientesController extends Controller
{
    function Novo(){
        $params = Request::all();
        $clientes = new clientes($params);
        $clientes->save();
        return redirect('Clientes/Visualizar');
    }

    function Adicionar(){
        return view('Clientes/addClientes');
    }

    function Visualizar(){
        $clientes = clientes::all();
		return view('Clientes/verClientes')->with('clientes', $clientes);
    }

    function Deletar(){
        $id = Request::route('id');
		$clientes = clientes::find($id);
		$clientes->delete();
		return redirect('Clientes/Visualizar');
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
