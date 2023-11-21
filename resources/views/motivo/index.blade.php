<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/motivo/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Motivos</h1> --}}
        <br>
        <a href="{{ route('motivo.create') }}" class="btn btn-primary">Novo Motivo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($motivo as $motivo)
                    <tr>
                        <td class="colunas">{{ $motivo->id }}</td>
                        <td id="nome">{{ $motivo->descricao }}</td>
                        <td>
                            <a href="{{ route('motivo.show', $motivo->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('motivo.edit', $motivo->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('motivo.destroy', $motivo->id) }}" method="POST" style="display: inline;">
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