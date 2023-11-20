<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motivo = Motivo::all();
        return view('motivo.index', compact('motivo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motivo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $motivo = new Motivo([
            'descricao' => $request->input('descricao'),
        ]);

        $motivo->save();
        return redirect()->route('motivo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $motivo = Motivo::findOrFail($id);
        // Retorna a view 'autores.show' e passa o autor como parâmetro
        return view('motivo.show', compact('motivo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $motivo = Motivo::findOrFail($id);
        // Retorna a view 'autores.edit' e passa o autor como parâmetro
        return view('motivo.edit', compact('motivo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $motivo = Motivo::findOrFail($id);
        // Atualiza os campos do autor com os dados fornecidos no request
        $motivo->descricao = $request->input('descricao');
        // Salva as alterações no autor
        $motivo->save();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('motivo.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $motivo = Motivo::findOrFail($id);
        // Exclui o autor do banco de dados
        $motivo->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('motivo.index');
    }
}
