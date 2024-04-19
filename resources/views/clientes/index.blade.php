@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Clientes</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('clientes.create') }}">Adicionar Novo Cliente</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <form action="{{ route('clientes.index') }}" method="GET">
                <div class="input-group mb-3">
                    <select class="custom-select" name="tipo">
                        <option value="nome"{{ request('tipo') == 'nome' ? ' selected' : '' }}>Nome</option>
                        <option value="id"{{ request('tipo') == 'id' ? ' selected' : '' }}>ID</option>
                    </select>
                    <input type="text" class="form-control" name="query" placeholder="Buscar por nome ou ID" value="{{ request('query') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($clientes as $cliente)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $cliente->nome }}</td>
        <td>{{ $cliente->endereco }}</td>
        <td>{{ $cliente->cidade }}</td>
        <td>{{ $cliente->estado }}</td>
        <td>
            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
             
                <a class="btn btn-primary" href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
