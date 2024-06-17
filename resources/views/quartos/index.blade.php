@extends('layout.main')
@section('title', 'piramide')

@section('content')
<h1>Quartos</h1>

<div class="row g-4">
    @foreach ($quartos as $quarto)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="position-relative">
                    <img src="img/room-1.jpg" class="card-img-top" alt="...">
                    <div class="price">
                        <p>{{ $quarto->preco_por_noite }} Kz</p>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $quarto->nome_do_quarto }}</h5>
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="p-2 bd-highlight">{{ $quarto->numero_camas }} <i class="fa fa-bed" aria-hidden="true"></i></div>
                        <div class="p-2 bd-highlight">1 <i class="fa fa-bath" aria-hidden="true"></i></div>
                        <div class="p-2 bd-highlight">{{ $quarto->numero_pessoas_no_quarto }}+ <i class="fa fa-user" aria-hidden="true"></i></div>
                    </div>
                    <p class="card-text">{{ $quarto->descricao_do_quarto }}</p>
                    <a href="{{ url('quarto-' . $quarto->id) }}" class="btn btn-primary">Ver</a>
                    <a href="#" class="btn btn-primary">Reserva</a>
                </div>
            </div>
          </div>
          @endforeach
      </div>

@endsection