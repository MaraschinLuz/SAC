<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/cliente/cliente.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Clientes
        </h2>
    </x-slot>

    <div class="container-cliente">
        <a href="{{ route('cliente.create') }}" class="btn btn-primary">Adicionar Cliente</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nomeCliente }}</td>
                        <td>{{ (new DateTime($cliente->dtNascimento))->format('d/m/Y') }}</td>
                        <td>{{ $cliente->endereçoCliente }}</td>
                        <td>{{ $cliente->cidade->nomeCidade }}</td>
                        <td>
                            <a href="{{ route('cliente.show', $cliente->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $cliente->links() }}
    </div>
</x-app-layout>