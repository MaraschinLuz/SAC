<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Cidade;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::paginate(10);
        return view('cliente.index', compact('clientes'));
    }


    public function create()
    {
        $cidade = Cidade::all();
        return view('cliente.create', compact('cidade'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nomeCliente' => 'required',
            'dtNascimento' => 'nullable|date',
            'endereçoCliente' => 'required|string|max: 255',
            'idCidade' => 'required|exists:cidade,id'

        ]);

        Cliente::create($request->all());

        return redirect()->route('cliente.index')->with('success', 'Cadastro realizado com sucesso!');
    }

    public function show($id)
    {
        $clientes = Cliente::findOrFail($id);
        return view('cliente.show', compact('clientes'));
    }

    public function edit($id)
    {
        $clientes = Cliente::findOrFail($id);

        $cidade = Cidade::all();

        return view('cliente.edit', compact('clientes', 'cidade'));
    }


    public function update(Request $request, $id)
    {
        $clientes = Cliente::findOrFail($id);
        // Atualize o livro com os dados do request aqui
        $clientes->update($request->all());
        return redirect()->route('cliente.index')->with('success', 'Cadastro atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $clientes = Cliente::findOrFail($id);
        $clientes->delete();
        return redirect()->route('cliente.index')->with('success', 'Cadastro excluído com sucesso!');
    }
}
