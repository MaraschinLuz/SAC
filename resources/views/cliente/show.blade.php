<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Detalhes do Cliente
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/cliente/cliente.css') }}">

    <div class="container-cliente form-cliente">
        <h3>{{ $clientes->nomeCliente }}</h3>
        <p><strong>Data de Nascimento:</strong> {{ $clientes->dtNascimento }}</p>
        <p><strong>Endereço:</strong> {{ $clientes->endereçoCliente }}</p>
        <p><strong>Cidade:</strong> {{ $clientes->cidade->nomeCidade }}</p>
        <a href="{{ route('cliente.index') }}" class="btn btn-secondary mt-4">Voltar</a>
    </div>
</x-app-layout>