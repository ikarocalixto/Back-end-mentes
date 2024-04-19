@extends('layout')

@section('content')
    <h1>Estado: {{ $estado->nome }}</h1>
    <p>Detalhes do estado aqui...</p>
    <!-- Exemplo de listagem de cidades se carregadas com o estado
    <h2>Cidades neste Estado</h2>
    <ul>
        @foreach ($estado->cidades as $cidade)
            <li>{{ $cidade->nome }}</li>
        @endforeach
    </ul>
    -->
    <a href="{{ route('estados.index') }}">Voltar à lista de estados</a>
@endsection
