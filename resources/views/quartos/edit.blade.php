<h1>editar o quarto <strong> {{$quartos->title}}</strong></h1>

@if ($errors->any())
     <ul>
        @foreach ($$errors->all() as $error)
             <li>{{$error}}</li>
        @endforeach     
     </ul>
                  
@endif

<form action="{{route('quartos.update' , $quartos->id )}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="nome_do_quarto" id="nome_do_quarto" placeholder="Titulo" value="{{ old('nome_do_quarto', $quartos->nome_do_quarto) }}"></input> </br>
    
    <textarea name="descricao_do_quarto" id="descricao_do_quarto" placeholder="Descricao">{{ old('descricao_do_quarto', $quartos->descricao_do_quarto) }}</textarea> </br>

    <button type="submit">Enviar</button>


</form>