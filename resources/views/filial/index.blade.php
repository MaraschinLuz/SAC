<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/filial/filial.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Filiais
        </h2>
    </x-slot>

    <div class="container-filial">
        <a href="{{ route('filial.create') }}" class="btn btn-primary">Adicionar Filial</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome da Filial</th>
                    <th>Cidade</th>
                    <th>Ações</th>

                </tr>
            </thead>
            <tbody>
                @foreach($filial as $filiais)
                    <tr>
                        <td>{{ $filiais->id }}</td>
                        <td>{{ $filiais->nomeFilial }}</td>
                        <td>{{ $filiais->cidade->nomeCidade }}</td>
                        <td>
                            <a href="{{ route('filial.show', $filiais->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('filial.edit', $filiais->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('filial.destroy', $filiais->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $filial->links() }}
    </div>
</x-app-layout>