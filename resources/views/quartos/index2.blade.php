@extends('layout.main')
@section('title', 'piramide')

@section('content')
@if (session('message'))
<div>
      {{session('message')}}
</div>
@endif

<h1>quartos</h1>


    <table class="table">
    <thead>
  <tr>
    <th>Nome</th>
    <th>Categoria</th>
    <th>Tipo </th>
    <th>Descrição</th>
    <th>Preço</th>
    <th>Disponivel</th>
    <th>Pessoas</th>
    <th>Camas</th>
    <th>Data criação</th>
    <th>Data Atulização</th>
    <th>Editar</th>
    <th>Eliminar</th>
   </tr>
   </thead>
   @foreach ($quartos as $quarto)
  <tr>
    <td> {{$quarto->nome_do_quarto }}</td>
    <td> {{$quarto->tags }}</td>
    <td> {{$quarto->tipo_de_quarto }}</td>
    <td> {{$quarto->descricao_do_quarto }}</td>
    <td> {{$quarto->preco_por_noite }}</td>
    <td> {{$quarto->numero_quarto_disponiveis }}</td>
    <td> {{$quarto->numero_pessoas_no_quarto }}</td>
    <td> {{$quarto->numero_camas }}</td>
    <td> {{$quarto->created_at }}</td>
    <td> {{$quarto->updated_at }}</td>
    <td>
        <form action="{{route('quartos.destroy' , $quarto->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
        </form>
    </td>
    <td><a class="badge badge-primary" href="{{route('quartos.edit', $quarto->id)}}">editar</a></td>

  </tr>
  
  @endforeach
</table>  

@endsection

    
    
    


