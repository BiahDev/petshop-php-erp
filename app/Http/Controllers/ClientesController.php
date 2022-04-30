<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\clienteFormRequest;

class ClientesController extends Controller
{

  public function index(Request $request)
  {
    $clientes = Cliente::All();
    $feedbackUsuario = $request->session()->get('mensagem');
    return view(
      'cliente.clientes',
      compact('clientes', 'feedbackUsuario')
    );
  }

  public function cadastrarCliente(clienteFormRequest $request)
  {
    Cliente::create([
      'nome' => $request->nome,
      'data_nascimento' => $request->data_nascimento,
      'genero' => $request->genero,
      'telefone' => $request->telefone,
      'whatsapp' => $request->whatsapp,
      'email' => $request->email,
      'cep' => $request->cep,
      'endereco' => $request->endereco,
      'bairro' => $request->bairro,
      'cidade' => $request->cidade,
      'uf' => $request->uf,
      'observacao' => $request->observacao
    ]);

    $request->session()->flash(
        'mensagem',
        "Cliente $request->nome atulizado com sucesso"
      );

    return redirect('clientes');
  }

  public function editarCliente(int $id, clienteFormRequest $request)
  {
    Cliente::find($id)
      ->update([
        'nome' => $request->nome,
        'data_nascimento' => $request->data_nascimento,
        'genero' => $request->genero,
        'telefone' => $request->telefone,
        'whatsapp' => $request->whatsapp,
        'email' => $request->email,
        'cep' => $request->cep,
        'endereco' => $request->endereco,
        'bairro' => $request->bairro,
        'cidade' => $request->cidade,
        'uf' => $request->uf,
        'observacao' => $request->observacao
      ]);
      $request->session()->flash(
        'mensagem',
        "Cliente $request->nome criado com sucesso
      ");
    return redirect('clientes');
  }

  public function detalheCliente(int $id)
  {
    $data['cliente'] = Cliente::find($id);
    return view('cliente.editarCliente')->with($data);
  }

  public function excluirCliente(Request $request)
  {
    $cliente = Cliente::find($request->id);
    $request->session()->flash(
      'mensagem',
      "Cliente $cliente->nome foi removida com sucesso"
    );
    $cliente->delete();

    return redirect('clientes');
  }

}
