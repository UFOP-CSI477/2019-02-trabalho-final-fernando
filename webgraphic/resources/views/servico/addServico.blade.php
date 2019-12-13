@extends('master.modelo')

@section('title', 'Cadastro Serviço')

@section('content')

{{--    Formulário para criação do servico--}}
        <div class="raw" id="cadastro">
{{--Método para envio dos dados para o backend--}}
            <form  class="form-group" method="post" action="{{ route('servicos.store') }}">
                @csrf
{{--                carrega os nomes de alunos existentes--}}
                <div class="form-group">
                    <label for="id_cliente">Select Cliente:</label>
                    <select name="id_cliente" id="id_cliente" class="form-control" required="required">
                    <option value=""> -- Select Cliente --</option>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
                </div>
{{--carrega os nomes de professores existentes--}}
                <div class="form-group">
                    <label for="id_produto">Select Produto:</label>
                    <select name="id_produto" id="id_produto" class="form-control" required="required">
                    <option value=""> -- Select Produto --</option>
                    @foreach ($produtos as $produto)
                        <option value="{{ $produto->id }}">{{ $produto->tipo }} - {{ $produto->dimensoes }}</option>
                    @endforeach
                </select>
                </div>
{{--seção dos campos comuns--}}
                <div class="form-group">
                    <label for="quantidade">Quantidade: </label>
                    <input class="form-control" id="quantidade" name="quantidade" required="required" type="number" placeholder=" " />
                </div>

                <div class="form-group">
                    <label for="id_funcionario">Select Funcionário:</label>
                    <select name="id_funcionario" id="id_funcionario" class="form-control" required="required">
                        <option value=""> -- Select Funcionário --</option>
                        @foreach ($funcionarios as $funcionario)
                            <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="prazo">Prazo: </label>
                    <input class="form-control" id="prazo" name="prazo" required="required" type="number" placeholder=" " />
                </div>

                 <div class="form-group">
                    <label for="preco_total">Preço total: </label>
                    <input class="form-control" id="preco_total" name="preco_total" required="required" type="number" step="0.01" placeholder=" " />
                </div>

                 <div class="form-group">
                    <label for="data_abertura">Data abertura: </label>
                    <input class="form-control" id="data_abertura" name="data_abertura" required="required" type="date" placeholder=" " />
                </div>

{{--Botão para submissão para persistência--}}
                <div class="form-group">
                    <input class="btn btn-info form-control" type="submit" value="Cadastrar"/>
                </div>

            </form>

        </div>
@endsection
