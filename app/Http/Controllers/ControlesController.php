<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\controles;
use Request;

class ControlesController extends Controller
{
    function Novo(){
        $params = Request::all();
        $controles = new controles($params);
        $controles->save();
        return redirect('Controles');
    }

    function Visualizar(){
        $controles = controles::all();
		return view('Parametros/Controles')->with('controles', $controles);
    }

    function Deletar(){
        $id = Request::route('id');
		$controles = controles::find($id);
		$controles->delete();
		return redirect('Controles');
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
