<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
     // Método inicial do Controller Produtos
  public function index() {
    $clientes = DB::table('clientes')
    ->select('id','nome','datanascimento','cpf','email','telefone')
    ->orderBy('id', 'asc')
    ->get();
      return view('listar', ['clientes' => $clientes]);		
}
// Método utilizado para detalhar um determinado item
public function show($id) {
    $clientes = DB::table('clientes')->where('id', $id)->get();
    return view('detalhes', ['clientes' => $clientes]);
}
// Mostra a view de cadastro de um novo produto.
public function create() {
    return view('novo');
}
// Valida e grava as informações do cadastro do novo produto.
public function store(Request $request) {
  $request->validate([
    'nome'  => 'required',
    'datanascimento' => 'required',
    'cpf' => 'required',
    'email' => 'required',
    'telefone' => 'required'
  ]);
  $clientes = [
      'nome'  => $request->input('nome'),
      'datanascimento' => $request->input('datanascimento'),
      'cpf' => $request->input('cpf'),
      'email' => $request->input('email'),
      'telefone' => $request->input('telefone')
  ];
  DB::table('clientes')->insert($clientes);
  return redirect('/clientes')->with('mensagem', 'Cadastrado com Sucesso!');
}
public function edit($id) {
  $clientes = DB::table('clientes')->where('id', $id)->get();
  return view('editar', ['clientes' => $clientes]);
}
public function update(Request $request, $id) {
  $request->validate([
    'nome'  => 'required',
    'datanascimento' => 'required',
    'cpf' => 'required',
    'email' => 'required',
    'telefone' => 'required'
  ]);
  $clientes = [
      'id'     => $id,
      'nome'  => $request->input('nome'),
      'datanascimento' => $request->input('datanascimento'),
      'cpf' => $request->input('cpf'),
      'email' => $request->input('email'),
      'telefone' => $request->input('telefone')
  ];
  DB::table('clientes')->where('id', $id)->update($clientes);
  return redirect('/clientes')->with('mensagem', 'Alterado com sucesso!');
}
// Exclusão de um produto cadastrado.
public function destroy($id) {
  DB::table('clientes')->where('id', $id)->delete();
  return redirect('/clientes')->with('mensagem', 'Cliente '. $id .' Excluído!');
}
}
