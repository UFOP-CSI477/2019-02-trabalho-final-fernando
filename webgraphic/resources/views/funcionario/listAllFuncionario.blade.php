@extends('master.modelo')

@section('title', 'Visualizar_Projetos')

@section('content')
{{--    tabela para vizualização dos dados dos projetos--}}
<h4 class="text-center">Lista de Funcionários</h4>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID: </th>
            <th>Nome: </th>
            <th>Telefone: </th>
{{--            <th>Data de nascimento: </th>--}}
            <th>E-mail: </th>
{{--            <th>Endereço: </th>--}}
{{--            <th>Genero: </th>--}}
{{--            <th>Admissão: </th>--}}
            <th>Função: </th>
            <th>Ver: </th>
        </tr>
        </thead>
        <tbody>

        @foreach($funcionarios as $funcionario)

            <tr>
                <td>{{ $funcionario->id }}</td>
                <td>{{ $funcionario->nome }}</td>
                <td>{{ $funcionario->telefone }}</td>
{{--                <td>{{ $funcionario->data_nascimento }}</td>--}}
                <td>{{ $funcionario->email }}</td>
{{--                <td>{{ $funcionario->endereco }}</td>--}}
{{--                <td>{{ $funcionario->genero }}</td>--}}
{{--                <td>{{ $funcionario->admissao }}</td>--}}
                <td>{{ $funcionario->funcao }}</td>

{{--Seção contendo os botões para manipulação da tabela--}}
                <td>
{{--                    vizualizador individual para os elementos da tabela--}}
                    <a class="btn btn-info"  href="{{ route('funcionarios.show', ['funcionario' => $funcionario->id]) }}">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{--Botão para criar novo funcionario--}}
    <form action="{{ route('funcionarios.create') }}" method="get">
        @csrf
        <input class="btn btn-info"  type="submit" value="novo">
    </form>
@endsection
{{--</body>--}}
{{--</html>--}}
