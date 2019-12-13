@extends('master.modelo')

@section('title', 'Exibir Produto')

@section('content')
<body>
        <label>ID: </label> {{ $produto->id }} &emsp; <label>Tipo: </label> {{ $produto->tipo }} <br>
        <label>Material: </label>
        <p> {{ $produto->material }} </p>
        <label>Dimensões: </label>
        <p> {{ $produto->dimensoes }} </p>
        <label>Preço unitário: </label>
        <p> {{ $produto->preco_unitario }} </p>

        <form action="{{ route('produtos.destroy', ['produto' => $produto->id]) }}" method="post">
            @csrf
            @method('delete')
            {{--                <label for="produto">Deletar: </label>--}}
            <input type="hidden" name="produto" value="{{ $produto->id }}">
            <input class="btn btn-danger "  type="submit" value="Remover">
        </form><br>

        <form action="{{ route('produtos.edit', ['produto' => $produto->id]) }}" method="get">
            @csrf
            {{--            <label for="produto">Editar: </label>--}}
            <input type="hidden" name="produto" value="{{ $produto->id }}">
            <input class="btn btn-success"  type="submit" value="Editar">
        </form><br>
        {{--        <label>Data de Criação: </label> <p> {{ date('d/m/Y H:i', strtotime($servico->created_at)) }}</p>--}}
        {{--        botão para retornar para a listagem completa--}}
        {{--        <label>Voltar: </label>--}}
        <a class="btn btn-info " href="{{ route('produtos.index') }}">Voltar</a>
</body>
@endsection
{{--</html>--}}
