<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Adicionar Filial
        </h2>
    </x-slot>
    <header>
        <link rel="stylesheet" href="{{ asset('css/filial/filial.css') }}">
    </header>
    <div class="container-filial">
        <form action="{{ route('filial.store') }}" method="POST" class="form-filial">
            @csrf
            <div class="form-group">
                <label for="nomeFilial">Nome da Filial</label>
                <input type="text" class="form-control" name="nomeFilial" required>
            </div>
            <div class="form-group">
                <label for="idCidade">Cidade</label>
                <select class="form-control" name="idCidade" required>
                    <option value="">Selecione uma cidade</option>
                    @foreach($cidade as $cidade)
                        <option value="{{ $cidade->id }}">{{ $cidade->nomeCidade }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</x-app-layout>
