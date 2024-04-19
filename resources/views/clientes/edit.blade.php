@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $is_edit ? 'Editar Cliente' : 'Adicionar Cliente' }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> Há problemas com os dados inseridos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ $is_edit ? route('clientes.update', $cliente->id) : route('clientes.store') }}" method="POST">
        @if ($is_edit)
            @method('PUT')
        @endif
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" value="{{ $cliente->nome ?? '' }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Endereço:</strong>
                    <input type="text" name="endereco" value="{{ $cliente->endereco ?? '' }}" class="form-control" placeholder="Endereço">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cidade:</strong>
                    <input type="text" name="cidade" value="{{ $cliente->cidade ?? '' }}" class="form-control" placeholder="Cidade">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div the=form-group">
                    <strong>Estado:</strong>
                    <input type="text" name="estado" value="{{ $cliente->estado ?? '' }}" class="form-control" placeholder="Estado">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">{{ $is_edit ? 'Atualizar' : 'Adicionar' }}</button>
            </div>
        </div>
    </form>
@endsection
