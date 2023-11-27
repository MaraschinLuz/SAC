<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Detalhes da Filial
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/filial/filial.css') }}">

    <div class="container-filial form-filial">
        <h3>{{ $filial->nomeCliente }}</h3>
        <p><strong>Cidade:</strong> {{ $filial->cidade->nomeCidade }}</p>
        <a href="{{ route('filial.index') }}" class="btn btn-secondary mt-4">Voltar</a>
    </div>
</x-app-layout>