@extends('master.modelo')

@section('title', 'Cadastro Cliente')

@section('content')
{{--    Formulário para criação do servico--}}
        <div class="raw" id="cadastro">
{{--Método para envio dos dados para o backend--}}
            <form  class="form-group" method="post" action="{{ route('clientes.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome Completo: </label>
                    <input class="form-control" id="nome" name="nome" required="required" type="text" placeholder="Nome Completo do Cliente" />
                </div>

                <div class="form-group">
                    <label for="data_nascimento">Data de nascimento: </label>
                    <input class="form-control" id="data_nascimento" name="data_nascimento" required="required" type="date" placeholder=" "/>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone: </label>
                    <input class="form-control" id="telefone" name="telefone" required="required" type="tel" placeholder="(00)99999-0000" />
                </div>

                <div class="form-group">
                    <label for="email">E-mail: </label>
                    <input class="form-control" id="email" name="email" required="required" type="email" placeholder="exmplo@exemplo.com" />
                </div>

               <div class="form-group">
                    <label for="endereco">Endereço: </label>
                    <input class="form-control" id="endereco" name="endereco" required="required" type="text" placeholder="Rua x, 000, centro - cidade" />
                </div>

                {{--Utilização do select para limitar as opções de preenchimento do campo semestre--}}

                <div class="form-group">
                    <label for="genero">Genero:</label>
                    <select name="genero" id="genero" class="form-control">
                        <option value=""> -- Select Genero --</option>
                            <option value="feminino">Feminino</option>
                            <option value="masculino">Masculino</option>
                    </select>
                </div>
{{--Botão para submissão para persistência--}}
                <div class="form-group">
                    <input class="btn btn-info form-control" type="submit" value="Cadastrar"/>
                </div>

            </form>

        </div>
@endsection
