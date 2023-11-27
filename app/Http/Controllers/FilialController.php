<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filial;
use App\Models\Cidade;
class FilialController extends Controller
{
    public function index()
    {
        $filial = Filial::paginate(10);
        return view('filial.index', compact('filial'));
    }


    public function create()
    {
        $cidade = Cidade::all();
        return view('filial.create', compact('cidade'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nomeFilial' => 'required',
            'idCidade' => 'required|exists:cidade,id'

        ]);

        Filial::create($request->all());

        return redirect()->route('filial.index')->with('success', 'Cadastro realizado com sucesso!');
    }

    public function show($id)
    {
        $filial = Filial::findOrFail($id);
        return view('filial.show', compact('filial'));
    }

    public function edit($id)
    {
        $filial = Filial::findOrFail($id);

        $cidade = Cidade::all();

        return view('filial.edit', compact('filial', 'cidade'));
    }


    public function update(Request $request, $id)
    {
        $filial = filial::findOrFail($id);
        // Atualize o livro com os dados do request aqui
        $filial->update($request->all());
        return redirect()->route('filial.index')->with('success', 'Cadastro atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $filial = Filial::findOrFail($id);
        $filial->delete();
        return redirect()->route('filial.index')->with('success', 'Cadastro excluído com sucesso!');
    }
}
