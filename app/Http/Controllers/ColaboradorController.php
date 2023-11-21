<?php

namespace App\Http\Controllers;
use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colaborador = Colaborador::all();
        return view('colaborador.index', compact('colaborador'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('colaborador.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $colaborador = new Colaborador([
            'nomeColab' => $request->input('nomeColab'),
            'funcao' => $request->input('funcao')
        ]);

        $colaborador->save();
        return redirect()->route('colaborador.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $colaborador = Colaborador::findOrFail($id);
        // Retorna a view 'autores.show' e passa o autor como parâmetro
        return view('colaborador.show', compact('colaborador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $colaborador = Colaborador::findOrFail($id);
        // Retorna a view 'autores.edit' e passa o autor como parâmetro
        return view('colaborador.edit', compact('colaborador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $colaborador = Colaborador::findOrFail($id);
        // Atualiza os campos do autor com os dados fornecidos no request
        $colaborador->nomeColab = $request->input('nomeColab');
        $colaborador->funcao = $request->input('funcao');
        // Salva as alterações no autor
        $colaborador->save();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('colaborador.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $colaborador = Colaborador::findOrFail($id);
        // Exclui o autor do banco de dados
        $colaborador->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('colaborador.index');
    }
}

