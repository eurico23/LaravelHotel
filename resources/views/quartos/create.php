@extends('layout.main')
@section('title', 'piramide')

@section('content')

        <h5 class="card-title">{{ $quarto->nome_do_quarto }}</h5>
        <p class="card-text">{{ $quarto->descricao_do_quarto }}</p>


@endsection
