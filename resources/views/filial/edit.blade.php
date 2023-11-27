<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Editar Filial
        </h2>
    </x-slot>
    <header>
        <link rel="stylesheet" href="{{ asset('css/filial/filial.css') }}">
    </header>
    <div class="container-filial">
        <form action="{{ route('filial.update', $filial->id) }}" method="POST" enctype="multipart/form-data" class="form-filial">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nomeFilial">Nome da Filial</label>
                <input type="text" class="form-control" name="nomeFilial" value="{{ $filial->nomeFilial }}" required>
            </div>
            <div class="form-group">
                <label for="idCidade">Cidade</label>
                <select class="form-control" name="idCidade" required>
                    <option value="">Selecione uma cidade</option>
                    @foreach($cidade as $cidade)
                        <option value="{{ $cidade->id }}" {{ $cidade->id == $filial->idCidade ? 'selected' : '' }}>{{ $cidade->nomeCidade }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</x-app-layout>