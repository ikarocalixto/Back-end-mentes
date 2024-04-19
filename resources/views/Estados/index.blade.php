@extends('layout')

@section('content')
    <h1>Lista de Estados</h1>
    <ul>
        @foreach ($estados as $estado)
            <li>
                <a href="{{ route('estados.show', $estado->id) }}">{{ $estado->nome }}</a>
            </li>
        @endforeach
    </ul>
@endsection
