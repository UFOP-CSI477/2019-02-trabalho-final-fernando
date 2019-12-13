@extends('master.modelo')

@section('title', 'Exibir Funcionário')

@section('content')

    <label>ID: </label> {{ $funcionario->id }} &emsp;  <label>Nome: </label> {{ $funcionario->nome }} <br>
    <label>Telefone: </label>
    <p> {{ $funcionario->telefone }} </p>
    <label>Data de nascimento: </label>
    <p> {{ $funcionario->data_nascimento }} </p>
    <label>Email: </label>
    <p> {{ $funcionario->email }} </p>
    <label>Endereço: </label>
    <p> {{ $funcionario->endereco }} </p>
    <label>Genero: </label>
    <p> {{ $funcionario->genero }}</p>
    <label>Admissão: </label>
    <p> {{ $funcionario->admissao }} </p>
     <label>Função: </label>
    <p> {{ $funcionario->funcao }} </p>

    <form action="{{ route('funcionarios.destroy', ['funcionario' => $funcionario->id]) }}" method="post">
        @csrf
        @method('delete')
        {{--                <label for="funcionario">Deletar: </label>--}}
        <input type="hidden" name="funcionario" value="{{ $funcionario->id }}">
        <input class="btn btn-danger "  type="submit" value="Remover">
    </form><br>

    <form action="{{ route('funcionarios.edit', ['funcionario' => $funcionario->id]) }}" method="get">
        @csrf
        {{--            <label for="funcionario">Editar: </label>--}}
        <input type="hidden" name="funcionario" value="{{ $funcionario->id }}">
        <input class="btn btn-success "  type="submit" value="Editar">
    </form><br>
    {{--        <label>Data de Criação: </label> <p> {{ date('d/m/Y H:i', strtotime($servico->created_at)) }}</p>--}}
    {{--        botão para retornar para a listagem completa--}}
    {{--        <label>Voltar: </label>--}}
    <a class="btn btn-info " href="{{ route('funcionarios.index') }}">Voltar</a>

@endsection
{{--</html>--}}
