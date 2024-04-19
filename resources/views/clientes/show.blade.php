@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar Cliente</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $cliente->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div the="form-group">
                <strong>Endereço:</strong>
                {{ $cliente->endereco }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cidade:</strong>
                {{ $cliente->cidade }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado:</strong>
                {{ $cliente->estado }}
            </div>
        </div>
    </div>
@endsection
@extends('layout')

@section('content')
    <h1>Estado: {{ $estado->nome }}</h1>
    <p>Detalhes do estado aqui...</p>
    <a href="{{ route('estados.index') }}">Voltar à lista de estados</a>
@endsection

