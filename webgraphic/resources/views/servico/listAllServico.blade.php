@extends('master.modelo')

@section('title', 'Visualizar_Projetos')

@section('content')
{{--    tabela para vizualização dos dados dos projetos--}}
<h4 class="text-center">Tabela de Serviços</h4>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Ano: </th>
            <th>Semestre: </th>
            <th>#ID: </th>
            <th>Professor: </th>
            <th>Aluno: </th>
            <th>Titulo: </th>
            <th>Area: </th>
            <th>Ver: </th>
            <th>Deletar: </th>
        </tr>
        </thead>
        <tbody>

{{--        @foreach($projetos as $servico)--}}

{{--            <tr>--}}
{{--                <td>{{ $servico->ano }}</td>--}}
{{--                <td>{{ $servico->semestre }}</td>--}}
{{--                <td>{{ $servico->projetos_id }}</td>--}}
{{--                <td>{{ $servico->projetos_professor }}</td>--}}
{{--                <td>{{ $servico->projetos_aluno }}</td>--}}
{{--                <td>{{ $servico->titulo }}</td>--}}
{{--                <td>{{ $servico->area }}</td>--}}

{{--Seção contendo os botões para manipulação da tabela--}}
{{--                <td>--}}
{{--                    vizualizador individual para os elementos da tabela--}}
{{--                    <a class="btn btn-info"  href="{{ route('projetos.show', ['servico' => $servico->projetos_id]) }}">Ver</a>--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    botão para remoção do elemento da tabela--}}
{{--                    <form action="{{ route('projetos.destroy', ['servico' => $servico->projetos_id]) }}" method="post">--}}
{{--                        @csrf--}}
{{--                        @method('delete')--}}
{{--                        <input type="hidden" name="servico" value="{{ $servico->projetos_id }}">--}}
{{--                        <input class="btn btn-danger"  type="submit" value="Remover">--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
        </tbody>
    </table>
{{--Botão para criar novo servico--}}
{{--    <form action="{{ route('projetos.create') }}" method="get">--}}
{{--        @csrf--}}
{{--        <input class="btn btn-info"  type="submit" value="novo">--}}
{{--    </form>--}}
@endsection
{{--</body>--}}
{{--</html>--}}
