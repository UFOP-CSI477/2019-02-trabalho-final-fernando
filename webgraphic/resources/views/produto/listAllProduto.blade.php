@extends('master.modelo')

@section('title', 'Visualizar Produtos')

@section('content')
{{--    tabela para vizualização dos dados dos produtos--}}
<h4 class="text-center">Tabela de Produtos</h4>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID: </th>
            <th>Tipo: </th>
            <th>Material: </th>
            <th>Dimensões: </th>
            <th>Preço unitário: </th>
            <th>Ver: </th>
        </tr>
        </thead>
        <tbody>

        @foreach($produtos as $produto)

            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->tipo }}</td>
                <td>{{ $produto->material }}</td>
                <td>{{ $produto->dimensoes }}</td>
                <td>{{ $produto->preco_unitario }}</td>


{{--Seção contendo os botões para manipulação da tabela--}}
                <td>
{{--                    vizualizador individual para os elementos da tabela--}}
                    <a class="btn btn-info"  href="{{ route('produtos.show', ['produto' => $produto->id]) }}">Ver</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
{{--Botão para criar novo produto--}}
    <form action="{{ route('produtos.create') }}" method="get">
        @csrf
        <input class="btn btn-info"  type="submit" value="novo">
    </form>
@endsection
{{--</body>--}}
{{--</html>--}}
