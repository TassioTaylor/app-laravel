<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
  public function listar(){
      $clients = Client::all();
      return view('lista', compact('clients'));
  }

  public function formCadastrar(){
      return view('create');
  }

  public function cadastrar(Request $request){
    $cliente = new Client();
    $cliente->name = $request->name;
    $cliente->email = $request->email;
    $cliente->save();
    return redirect()->to('cliente');

  }

    public function formEditar($id){
        $cliente = Client::find($id);
        if(!$cliente){
            abort(404);
        }
        return view('edit', compact('cliente'));
    }

    public function editar(Request $request, $id){
        $cliente = Client::find($id);
        if(!$cliente){
            abort(404);
        }
        $cliente->name = $request->name;
        $cliente->email = $request->email;
        $cliente->save();
        return redirect()->to('cliente');

    }

    public function excluir(Request $request, $id){
        $cliente = Client::find($id);
        if(!$cliente){
            abort(404);
        }
        $cliente->delete();
        return redirect()->to('cliente');
    }
}
