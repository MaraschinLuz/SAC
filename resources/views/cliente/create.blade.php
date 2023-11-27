<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Adicionar Cliente
        </h2>
    </x-slot>
    <header>
        <link rel="stylesheet" href="{{ asset('css/cliente/cliente.css') }}">
    </header>
    <div class="container-cliente">
        <form action="{{ route('cliente.store') }}" method="POST" class="form-cliente">
            @csrf
            <div class="form-group">
                <label for="nomeCliente">Nome</label>
                <input type="text" class="form-control" name="nomeCliente" required>
            </div>
            <div class="form-group">
                <label for="dtNascimento">Data de Nascimento</label>
                <input type="date" class="form-control" name="dtNascimento">
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
            <div class="form-group">
                <label for="endereçoCliente">Endereço</label>
                <input type="text" class="form-control" name="endereçoCliente">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</x-app-layout>
