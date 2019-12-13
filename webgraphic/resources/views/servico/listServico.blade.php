@extends('master.modelo')

@section('title', 'Exibir Serviço')

@section('content')
<body>
        <label>ID do serviço: </label> {{ $servico->id }}  &emsp; <label>ID cliente: </label> {{ $servico->id_cliente }} <br>

        <label>Nome cliente: </label> {{ $servico->nome_cliente }} &emsp; <label>ID produto: </label>  {{ $servico->id_produto }} <br>

        <label>Tipo produto: </label> {{ $servico->tipo_produto }}  &emsp; <label>ID funcionário: </label> {{ $servico->id_funcionario }} <br>

        <p> <label>Nome funcionário: </label></p>
        <p> {{ $servico->nome_funcionario }} </p>

        <p> <label>Quantidade: </label></p>
        <p> {{ $servico->quantidade }} </p>

        <p> <label>Preço Total: </label></p>
        <p> {{ $servico->preco_total }} </p>

        <p> <label>Data abertura: </label></p>
        <p> {{ $servico->data_abertura }} </p>

        <p> <label>Prazo: </label></p>
        <p> {{ $servico->prazo }} </p>

        <form action="{{ route('servicos.destroy', ['servico' => $servico->id]) }}" method="post">
            @csrf
            @method('delete')
            {{--                <label for="servico">Deletar: </label>--}}
            <input type="hidden" name="servico" value="{{ $servico->id }}">
            <input class="btn btn-danger "  type="submit" value="Remover">
        </form><br>

        <form action="{{ route('servicos.edit', ['servico' => $servico->id]) }}" method="get">
            @csrf
            {{--            <label for="servico">Editar: </label>--}}
            <input type="hidden" name="servico" value="{{ $servico->id }}">
            <input class="btn btn-success "  type="submit" value="Editar">
        </form><br>
        {{--        <label>Data de Criação: </label> <p> {{ date('d/m/Y H:i', strtotime($servico->created_at)) }}</p>--}}
        {{--        botão para retornar para a listagem completa--}}
        {{--        <label>Voltar: </label>--}}
        <a class="btn btn-info " href="{{ route('servicos.index') }}">Voltar</a>
</body>
@endsection
{{--</html>--}}
