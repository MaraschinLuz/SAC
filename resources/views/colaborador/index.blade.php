<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/colaborador/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Autores</h1> --}}
        <br>
        <a href="{{ route('colaborador.create') }}" class="btn btn-primary">Novo Colaborador</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Função</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colaborador as $colaborador)
                    <tr>
                        <td class="colunas">{{ $colaborador->id }}</td>
                        <td id="nome">{{ $colaborador->nomeColab }}</td>
                        <td class="colunas">{{ $colaborador->funcao }}</td>
                        <td>
                            <a href="{{ route('colaborador.show', $colaborador->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('colaborador.edit', $colaborador->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('colaborador.destroy', $colaborador->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>