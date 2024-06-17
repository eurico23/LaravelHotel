@extends('layout.main')
@section('title', 'piramide')

@section('content')

   <h2>registar quarto</h2>

   <form method="POST" action="/quartos">
      @csrf

  <div class="form-group">
      <label for="nome_do_quarto">Nome do Quarto</label>
      <input type="text" class="form-control" id="nome_do_quarto" name="nome_do_quarto" placeholder="name@example.com">
    @error('nome_do_quarto')
        <p class="text-danger">{{$message}}</p>
    @enderror

    </div>
  <div class="form-group">
      <label for="tags">Tags</label>
      <input type="text" class="form-control" id="tags" name="tags" placeholder="name@example.com">
      @error('tags')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
  <div class="form-group">
      <label for="tipo_de_quarto">tipo_de_quarto</label>
      <input type="text" class="form-control" id="tipo_de_quarto" name="tipo_de_quarto" placeholder="name@example.com">
  </div>
  <div class="form-group">
      <label for="descricao_do_quarto">descricao_do_quarto</label>
      <input type="text" class="form-control" id="descricao_do_quarto" name="descricao_do_quarto" placeholder="name@example.com">
  </div>
  <div class="form-group">
      <label for="preco_por_noite">preco_por_noite</label>
      <input type="text" class="form-control" id="preco_por_noite" name="preco_por_noite" placeholder="name@example.com">
  </div>
  <div class="form-group">
      <label for="numero_quarto_disponiveis">numero_quarto_disponiveis</label>
      <input type="text" class="form-control" id="numero_quarto_disponiveis" name="numero_quarto_disponiveis" placeholder="name@example.com">
  </div>
  <div class="form-group">
      <label for="numero_pessoas_no_quarto">numero_pessoas_no_quarto</label>
      <input type="text" class="form-control" id="numero_pessoas_no_quarto" name="numero_pessoas_no_quarto" placeholder="name@example.com">
  </div>
  <div class="form-group">
      <label for="numero_camas">numero_camas</label>
      <input type="text" class="form-control" id="numero_camas" name="numero_camas" placeholder="name@example.com">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
