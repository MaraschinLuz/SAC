<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Editar Cliente
        </h2>
    </x-slot>
    <header>
        <link rel="stylesheet" href="{{ asset('css/cliente/cliente.css') }}">
    </header>
    <div class="container-livro">
        <form action="{{ route('cliente.update', $clientes->id) }}" method="POST" enctype="multipart/form-data" class="form-cliente">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nomeCliente">Nome</label>
                <input type="text" class="form-control" name="nomeCliente" value="{{ $clientes->nomeCliente }}" required>
            </div>
            <div class="form-group">
                <label for="dtNascimento">Data de Nascimento</label>
                <input type="date" class="form-control" name="dtNascimento" value="{{ $clientes->dtNascimento ? \Carbon\Carbon::parse($clientes->dtNascimento)->format('Y-m-d') : '' }}">
            </div>
            <div class="form-group">
                <label for="endereçoCliente">Endereço</label>
                <input type="text" class="form-control" name="endereçoCliente" value="{{ $clientes->endereçoCliente }}" required>
            </div>

            <div class="form-group">
                <label for="idCidade">Cidade</label>
                <select class="form-control" name="idCidade" required>
                    <option value="">Selecione uma cidade</option>
                    @foreach($cidade as $cidade)
                        <option value="{{ $cidade->id }}" {{ $cidade->id == $clientes->idCidade ? 'selected' : '' }}>{{ $cidade->nomeCidade }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</x-app-layout>