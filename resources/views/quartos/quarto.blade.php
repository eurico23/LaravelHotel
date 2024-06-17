@extends('layout.main')
@section('title', 'piramide')

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
        <h5 class="card-title">{{ $quarto->nome_do_quarto }}</h5>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/room-1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/room-1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/room-1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


        <p class="card-text">{{ $quarto->descricao_do_quarto }}</p>
    </div>
    
    <div class="col col-lg-3">
    <h3 class="card-title text-center">Reservar quarto</h3>
        
    
    @if(session()->has('message'))
    @php
        $alertType = session('alert-type', 'success');
    @endphp
    <div class="alert alert-{{ $alertType }} alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


            @if($errors)
        
        <ul>
        @foreach($errors->all() as $errors)
            <li class="text-danger">{{$errors}}</li>
        @endforeach
        </ul>
        @endif

        <form action="{{url('criar_reserva', $quarto->id)}}" method="POST">
            @csrf

            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="nome">Nome</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="email" name="email">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
            </div>

            <div class="form-group row">
                <label for="data_entrada" class="col-sm-4 col-form-label">Entrada</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="data_entrada" name="data_entrada">
                </div>
            </div>

            <div class="form-group row">
                <label for="data_saida" class="col-sm-4 col-form-label">Saida</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="data_saida" name="data_saida">
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary ">Reservar Quarto</button>
            </div>
        </form>
    </div>
  </div>
  
</div>

@endsection
