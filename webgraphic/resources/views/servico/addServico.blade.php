@extends('master.modelo')

@section('title', 'Cadastro_Projeto')

@section('content')
{{--    Formulário para criação do servico--}}
        <div class="raw" id="cadastro">
{{--Método para envio dos dados para o backend--}}
            <form  class="form-group" method="post" action="{{ route('projetos.store') }}">
                @csrf
{{--                carrega os nomes de alunos existentes--}}
                <div class="form-group">
                    <label for="aluno_id">Select Aluno:</label>
                    <select name="aluno_id" id="aluno_id" class="form-control">
                    <option value=""> -- Select Aluno --</option>
                    @foreach ($alunos as $aluno)
                        <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                    @endforeach
                </select>
                </div>
{{--carrega os nomes de professores existentes--}}
                <div class="form-group">
                    <label for="professor_id">Select Prof.:</label>
                    <select name="professor_id" id="aluno_id" class="form-control">
                    <option value=""> -- Select Professor --</option>
                    @foreach ($professores as $professor)
                        <option value="{{ $professor->id }}">{{ $professor->nome }}</option>
                    @endforeach
                </select>
                </div>
{{--seção dos campos comuns--}}
                <div class="form-group">
                    <label for="titulo">Titulo do Projeto</label>
                    <input class="form-control" id="titulo" name="titulo" required="required" type="text" placeholder="Titulo do Projeto" />
                </div>

                <div class="form-group">
                    <label for="ano">Ano: </label>
                    <input class="form-control" id="ano" name="ano" required="required" type="text" placeholder="19"/>
                </div>
{{--Utilização do select para limitar as opções de preenchimento do campo semestre--}}
                <div class="form-group">
                    <label for="semestre">Semestre:</label>
                    <select name="semestre" id="semestre" class="form-control">
                        <option value=""> -- Select Semestre --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                    </select>
                </div>
{{--Botão para submissão para persistência--}}
                <div class="form-group">
                    <input class="btn btn-info form-control" type="submit" value="Cadastrar"/>
                </div>

            </form>

        </div>
@endsection
