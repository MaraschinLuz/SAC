<?php

namespace App\Http\Controllers;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cidades = Cidade::all();
        return view('cidades.index', compact('cidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cidade = new Cidade([
            'nomeCidade' => $request->input('nomeCidade'),
            'UF' => $request->input('UF')
        ]);

        $cidade->save();
        return redirect()->route('cidades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $cidade = Cidade::findOrFail($id);
        // Retorna a view 'autores.show' e passa o autor como parâmetro
        return view('cidades.show', compact('cidade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $cidade = Cidade::findOrFail($id);
        // Retorna a view 'autores.edit' e passa o autor como parâmetro
        return view('cidades.edit', compact('cidade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $cidade = Cidade::findOrFail($id);
        // Atualiza os campos do autor com os dados fornecidos no request
        $cidade->nomeCidade = $request->input('nomeCidade');
        $cidade->UF = $request->input('UF');
        // Salva as alterações no autor
        $cidade->save();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('cidades.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $cidade = Cidade::findOrFail($id);
        // Exclui o autor do banco de dados
        $cidade->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('cidades.index');
    }
}
