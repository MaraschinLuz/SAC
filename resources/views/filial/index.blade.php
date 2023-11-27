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
                </tr>
            </thead>
            <tbody>
                @foreach($filial as $filial)
                    <tr>
                        <td>{{ $filial->id }}</td>
                        <td>{{ $filial->nomeFilial }}</td>
                        <td>{{ $filial->cidade->nomeCidade }}</td>
                        <td>
                            <a href="{{ route('filial.show', $filial->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('filial.edit', $filial->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $filial->links() }}
    </div>
</x-app-layout>