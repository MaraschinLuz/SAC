<x-app-layout>
    <div class="cidades-details-layout">
        <link rel="stylesheet" href="{{ asset('css/cidade/show.css') }}">
        <h1>Detalhes do Cidade</h1>
        <ul>
            <li><strong>ID:</strong> {{ $cidade->id }}</li>
            <li><strong>Nome:</strong> {{ $cidade->nomeCidade }}</li>
            <li><strong>UF:</strong> {{  $cidade->UF }}</li>
        </ul>
        <a href="{{ route('cidades.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>