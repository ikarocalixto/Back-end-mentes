@extends('layout')

@section('content')
    <h2>Adicionar Novo Cliente</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro!</strong> Verifique os campos obrigatórios.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do Cliente">
        </div>

        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço">
        </div>

        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade">
        </div>

        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" name="estado" class="form-control" id="estado" placeholder="Estado">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
@endsection
