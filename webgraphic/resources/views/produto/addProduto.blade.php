@extends('master.modelo')

@section('title', 'Cadastro Produto')

@section('content')
{{--    Formulário para criação do servico--}}
        <div class="raw" id="cadastro">
{{--Método para envio dos dados para o backend--}}
            <form  class="form-group" method="post" action="{{ route('produtos.store') }}">
                @csrf

                <div class="form-group">
                    <label for="tipo">Tipo de produto: </label>
                    <input class="form-control" id="tipo" name="tipo" required="required" type="text" placeholder="cartão, banner, etc" />
                </div>

                <div class="form-group">
                    <label for="material">Tipo de material: </label>
                    <input class="form-control" id="material" name="material" required="required" type="text" placeholder="lona, laminado" />
                </div>

                <div class="form-group">
                    <label for="dimensoes">Dimensões: </label>
                    <input class="form-control" id="dimensoes" name="dimensoes" required="required" type="text" placeholder="10x30, 100x50" />
                </div>

                <div class="form-group">
                    <label for="preco_unitario">Preço unitário: </label>
                    <input class="form-control" id="preco_unitario" name="preco_unitario" required="required" type="number" step="0.01" placeholder=" " />
                </div>


{{--Botão para submissão para persistência--}}
                <div class="form-group">
                    <input class="btn btn-info form-control" type="submit" value="Cadastrar"/>
                </div>

            </form>

        </div>
@endsection
