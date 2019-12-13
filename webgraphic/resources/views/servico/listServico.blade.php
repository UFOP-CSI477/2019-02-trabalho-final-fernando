@extends('master.modelo')

@section('title', 'Exibir Serviço')

@section('content')
<body>
        <label>ID do serviço: </label>
        <p>{{ $servico->id }}</p>

        <label>ID cliente: </label>
        <p> {{ $servico->id_cliente }} </p>

        <label>Nome cliente: </label>
        <p> {{ $servico->nome_cliente }}</p>

        <label>ID produto: </label>
        <p> {{ $servico->id_produto }} </p>

        <p> <label>Tipo produto: </label></p>
        <p> {{ $servico->tipo_produto }} </p>

        <p> <label>ID funcionário: </label></p>
        <p> {{ $servico->id_funcionario }} </p>

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

        <p>
        <form action="{{ route('servicos.destroy', ['servico' => $servico->id]) }}" method="post">
            @csrf
            @method('delete')
            <label for="servico">Deletar: </label>
            <input type="hidden" name="servico" value="{{ $servico->id }}">
            <input class="btn btn-danger"  type="submit" value="Remover">
        </form>
        </p>
        <label>Voltar: </label>

        <a class="btn btn-info" href="{{ route('servicos.index') }}">Voltar</a>
</body>
@endsection
{{--</html>--}}
