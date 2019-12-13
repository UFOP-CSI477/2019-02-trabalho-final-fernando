@extends('master.modelo')

@section('title', 'Visualizar_Clientes')

@section('content')
{{--    tabela para vizualização dos dados dos projetos--}}
<h4 class="text-center">Lista de Clientes</h4>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID: </th>
            <th>Nome: </th>
            <th>Data de nascimentno: </th>
            <th>Telefone: </th>
{{--            <th>E-mail: </th>--}}
{{--            <th>Endereço: </th>--}}
{{--            <th>Genero: </th>--}}
            <th>Ver: </th>
{{--            <th>Deletar: </th>--}}
        </tr>
        </thead>
        <tbody>

        @foreach($clientes as $cliente)

            <tr>
                <td>{{ $cliente->id}}</td>
                <td>{{ $cliente->nome}}</td>
                <td>{{ $cliente->data_nascimento }}</td>
                <td>{{ $cliente->telefone }}</td>
{{--                <td>{{ $cliente->email }}</td>--}}
{{--                <td>{{ $cliente->endereco }}</td>--}}
{{--                <td>{{ $cliente->genero }}</td>--}}

{{--Seção contendo os botões para manipulação da tabela--}}
                <td>
{{--                    vizualizador individual para os elementos da tabela--}}
                    <a class="btn btn-info"  href="{{ route('clientes.show', ['cliente' => $cliente->id]) }}">Ver</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
{{--Botão para criar novo cliente--}}
    <form action="{{ route('clientes.create') }}" method="get">
        @csrf
        <input class="btn btn-info"  type="submit" value="novo">
    </form>
@endsection
{{--</body>--}}
{{--</html>--}}
