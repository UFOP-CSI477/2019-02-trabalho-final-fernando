@extends('master.modelo')

@section('title', 'Editar Cliente')

@section('content')
{{--    Formulário para criação do servico--}}
        <div class="raw" id="cadastro_edit">
{{--Método para envio dos dados para o backend--}}
            <form  class="form-group" method="post" action="{{ route('clientes.update', $cliente->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome Completo: </label>
                    <input value="{{ $cliente->nome }}" class="form-control" id="nome" name="nome" required="required" type="text" placeholder="Nome Completo do Cliente" />
                </div>

                <div class="form-group">
                    <label for="data_nascimento">Data de nascimento: </label>
                    <input value="{{ $cliente->data_nascimento }}" class="form-control" id="data_nascimento" name="data_nascimento" required="required" type="date" placeholder=" "/>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone: </label>
                    <input value="{{ $cliente->telefone }}" class="form-control" id="telefone" name="telefone" required="required" type="tel" placeholder="(00)99999-0000" />
                </div>

                <div class="form-group">
                    <label for="email">E-mail: </label>
                    <input value="{{ $cliente->email }}" class="form-control" id="email" name="email" required="required" type="email" placeholder="exmplo@exemplo.com" />
                </div>

               <div class="form-group">
                    <label for="endereco">Endereço: </label>
                    <input value="{{ $cliente->endereco }}" class="form-control" id="endereco" name="endereco" required="required" type="text" placeholder="Rua x, 000, centro - cidade" />
                </div>

                {{--Utilização do select para limitar as opções de preenchimento do campo semestre--}}

                <div class="form-group">
                    <label for="genero">Genero:</label>
                    <select name="genero" id="genero" class="form-control">
                        <option selected="selected"> {{ $cliente->genero }} </option>
                            <option value="feminino">Feminino</option>
                            <option value="masculino">Masculino</option>
                    </select>
                </div>
{{--Botão para submissão para persistência--}}
                <div class="form-group">
                    <input class="btn btn-success form-control" type="submit" value="Salvar"/>
                </div>

            </form>

        </div>
@endsection
