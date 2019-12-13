@extends('master.modelo')

@section('title', 'Visualizar Serviços')

@section('content')
{{--    tabela para vizualização dos dados dos projetos--}}
<h4 class="text-center">Tabela de Serviços</h4>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID do serviço: </th>
{{--            <th>ID cliente: </th>--}}
            <th>Nome cliente: </th>
{{--            <th>ID produto: </th>--}}
            <th>Tipo produto: </th>
{{--            <th>ID funcionário: </th>--}}
            <th>Nome funcionário: </th>
            <th>Quantidade: </th>
            <th>Preço Total: </th>
            <th>Data abertura: </th>
            <th>Prazo: </th>

            <th>Ver: </th>

        </tr>
        </thead>
        <tbody>

        @foreach($servicos as $servico)

            <tr>
                <td>{{ $servico->id }}</td>
{{--                <td>{{ $servico->id_cliente }}</td>--}}
                <td>{{ $servico->nome_cliente }}</td>
{{--                <td>{{ $servico->id_produto }}</td>--}}
                <td>{{ $servico->tipo_produto }}</td>
{{--                <td>{{ $servico->id_funcionario }}</td>--}}
                <td>{{ $servico->nome_funcionario }}</td>
                <td>{{ $servico->quantidade }}</td>
                <td>{{ $servico->preco_total}}</td>
                <td>{{ $servico->data_abertura}}</td>
                <td>{{ $servico->prazo}}</td>


{{--Seção contendo os botões para manipulação da tabela--}}
                <td>
{{--                    vizualizador individual para os elementos da tabela--}}
                    <a class="btn btn-info"  href="{{ route('servicos.show', ['servico' => $servico->id]) }}">Ver</a>
                </td>
                </tr>
        @endforeach
        </tbody>
    </table>
{{--Botão para criar novo servico--}}
    <form action="{{ route('servicos.create') }}" method="get">
        @csrf
        <input class="btn btn-info"  type="submit" value="novo">
    </form>
@endsection
{{--</body>--}}
{{--</html>--}}
