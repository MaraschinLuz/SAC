<x-app-layout>
    <div class="colaborador-details-layout">
        <link rel="stylesheet" href="{{ asset('css/colaborador/show.css') }}">
        <h1>Detalhes do Colaborador</h1>
        <ul>
            <li><strong>ID:</strong> {{ $colaborador->id }}</li>
            <li><strong>Nome:</strong> {{ $colaborador->nomeColab }}</li>
            <li><strong>Função:</strong> {{  $colaborador->funcao }}</li>
        </ul>
        <a href="{{ route('colaborador.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>