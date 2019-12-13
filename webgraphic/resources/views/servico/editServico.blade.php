@extends('master.modelo')

@section('title', 'Editar Serviço')

@section('content')
{{--    Formulário para criação do servico--}}
<div class="raw" id="cadastro">
    {{--Método para envio dos dados para o backend--}}
    <a class="btn btn-info " href="{{ route('servicos.show', $servico->id) }}">Voltar</a><br>

    <form  class="form-group" method="post" action="{{ route('servicos.update', $servico->id) }}">
        @csrf
        @method('PUT')
{{--                carrega os nomes de alunos existentes--}}
                <div class="form-group">
                    <label for="id_cliente">Select Cliente:</label>
                    <select name="id_cliente" id="id_cliente" class="form-control" required="required">
                        <option selected="selected" value="{{ $servico->id_cliente }}">{{ $servico->nome_cliente }}</option>
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                        @endforeach
                </select>
                </div>
{{--carrega os nomes de professores existentes--}}
                <div class="form-group">
                    <label for="id_produto">Select Produto:</label>
                    <select name="id_produto" id="id_produto" class="form-control" required="required">
                        <option selected="selected" value="{{ $servico->id_produto }}">{{ $servico->tipo_produto }}</option>
                        @foreach($produtos as $produto)
                            <option value="{{ $produto->id }}">{{ $produto->tipo }} - {{ $produto->dimensoes }}</option>
                        @endforeach
                </select>
                </div>
{{--seção dos campos comuns--}}
                <div class="form-group">
                    <label for="quantidade">Quantidade: </label>
                    <input value="{{ $servico->quantidade }}" class="form-control" id="quantidade" name="quantidade" required="required" type="number" placeholder=" " />
                </div>

                <div class="form-group">
                    <label for="id_funcionario">Select Funcionário:</label>
                    <select name="id_funcionario" id="id_funcionario" class="form-control" required="required">
                        <option  selected="selected" value="{{ $servico->id_funcionario }}">{{ $servico->nome_funcionario }}</option>
                        @foreach($funcionarios as $funcionario)
                            <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="prazo">Prazo: </label>
                    <input value="{{ $servico->prazo }}" class="form-control" id="prazo" name="prazo" required="required" type="number" placeholder=" " />
                </div>

                 <div class="form-group">
                    <label for="preco_total">Preço total: </label>
                    <input value="{{ $servico->preco_total }}" class="form-control" id="preco_total" name="preco_total" required="required" type="number" step="0.01" placeholder=" " />
                </div>

                 <div class="form-group">
                    <label for="data_abertura">Data abertura: </label>
                    <input value="{{ $servico->data_abertura }}" class="form-control" id="data_abertura" name="data_abertura" required="required" type="date" placeholder=" " />
                </div>

{{--Botão para submissão para persistência--}}
                <div class="form-group">
                    <input class="btn btn-success form-control" type="submit" value="Salvar"/>
                </div>

            </form>

        </div>
@endsection
