@extends('master.modelo')

@section('title', 'Editar Produto')

@section('content')
    <a class="btn btn-info " href="{{ route('produtos.show', $produto->id) }}">Voltar</a>

    {{--    Formulário para criação do servico--}}
        <div class="raw" id="cadastro">
{{--Método para envio dos dados para o backend--}}
            <form  class="form-group" method="post" action="{{ route('produtos.update', $produto->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tipo">Tipo de produto: </label>
                    <input value="{{ $produto->tipo }}" class="form-control" id="tipo" name="tipo" required="required" type="text" placeholder="cartão, banner, etc" />
                </div>

                <div class="form-group">
                    <label for="material">Tipo de material: </label>
                    <input value="{{ $produto->material }}" class="form-control" id="material" name="material" required="required" type="text" placeholder="lona, laminado" />
                </div>

                <div class="form-group">
                    <label for="dimensoes">Dimensões: </label>
                    <input value="{{ $produto->dimensoes }}" class="form-control" id="dimensoes" name="dimensoes" required="required" type="text" placeholder="10x30, 100x50" />
                </div>

                <div class="form-group">
                    <label for="preco_unitario">Preço unitário: </label>
                    <input value="{{ $produto->preco_unitario }}" class="form-control" id="preco_unitario" name="preco_unitario" required="required" type="number" step="0.01" placeholder=" " />
                </div>


{{--Botão para submissão para persistência--}}
                <div class="form-group">
                    <input class="btn btn-success form-control" type="submit" value="Salvar"/>
                </div>

            </form>

        </div>
@endsection
