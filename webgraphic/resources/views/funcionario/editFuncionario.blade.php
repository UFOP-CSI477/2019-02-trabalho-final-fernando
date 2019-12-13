@extends('master.modelo')

@section('title', 'Editar Funcionario')

@section('content')
    <a class="btn btn-info " href="{{ route('funcionarios.index') }}">Voltar</a>

    {{--    Formulário para criação do servico--}}
        <div class="raw" id="cadastro">
{{--Método para envio dos dados para o backend--}}
            <form  class="form-group" method="post" action="{{ route('funcionarios.update', $funcionario->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome do funcionário: </label>
                    <input value="{{ $funcionario->nome }}" class="form-control" id="nome" name="nome" required="required" type="text" placeholder="Nome completo" />
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone do funcionário: </label>
                    <input value="{{ $funcionario->telefone }}" class="form-control" id="telefone" name="telefone" required="required" type="tel" placeholder="(00) 99999-0000" />
                </div>

                <div class="form-group">
                    <label for="data_nascimento">Data de nascimento: </label>
                    <input value="{{ $funcionario->data_nascimento }}" class="form-control" id="data_nascimento" name="data_nascimento" required="required" type="date" placeholder=" " />
                </div>

                <div class="form-group">
                    <label for="email">E-mail: </label>
                    <input value="{{ $funcionario->email }}" class="form-control" id="email" name="email" required="required" type="email" placeholder="fulano@bol.com.br" />
                </div>

                 <div class="form-group">
                    <label for="endereco">Endereço: </label>
                    <input value="{{ $funcionario->endereco }}" class="form-control" id="endereco" name="endereco" required="required" type="text" placeholder="Rua x, 000, Centro - Lugar Nenhum" />
                </div>

                <div class="form-group">
                    <label for="genero">Genero:</label>
                    <select name="genero" id="genero" class="form-control">
                        <option selected="selected"> {{ $funcionario->genero }} </option>
                        <option value="feminino">Feminino</option>
                        <option value="masculino">Masculino</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="admissao">Data de admissão: </label>
                    <input value="{{ $funcionario->admissao }}"  class="form-control" id="admissao" name="admissao" required="required" type="date" placeholder=" " />
                </div>

                <div class="form-group">
                    <label for="funcao">Função: </label>
                    <input value="{{ $funcionario->funcao }}" class="form-control" id="funcao" name="funcao" required="required" type="text" placeholder="Atendente" />
                </div>
{{--Botão para submissão para persistência--}}
                <div class="form-group">
                    <input class="btn btn-success form-control" type="submit" value="Salvar"/>
                </div>

            </form>

        </div>
@endsection
