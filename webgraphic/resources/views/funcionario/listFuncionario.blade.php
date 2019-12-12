@extends('master.modelo')

@section('title', 'Exibir Funcionário')

@section('content')
    <body>
    <label>ID: </label>
    <p>{{ $funcionario->id }}</p>
    <label>Nome: </label>
    <p> {{ $funcionario->nome }} </p>
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

    <p>
    <form action="{{ route('funcionarios.destroy', ['funcionario' => $funcionario->id]) }}" method="post">
        @csrf
        @method('delete')
        <label for="funcionario">Deletar: </label>
        <input type="hidden" name="funcionario" value="{{ $funcionario->id }}">
        <input class="btn btn-danger"  type="submit" value="Remover">
    </form>
    </p>
    {{--        <label>Data de Criação: </label> <p> {{ date('d/m/Y H:i', strtotime($servico->created_at)) }}</p>--}}
    {{--        botão para retornar para a listagem completa--}}
    <label>Voltar: </label>
    <a class="btn btn-info" href="{{ route('funcionarios.index') }}">Voltar</a>
    </body>
@endsection
{{--</html>--}}
