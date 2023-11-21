<x-app-layout>
    <div class="motivo-details-layout">
        <link rel="stylesheet" href="{{ asset('css/motivo/show.css') }}">
        <h1>Detalhes do Motivo</h1>
        <ul>
            <li><strong>ID:</strong> {{ $motivo->id }}</li>
            <li><strong>Nome:</strong> {{ $motivo->descricao }}</li>
        </ul>
        <a href="{{ route('motivo.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>