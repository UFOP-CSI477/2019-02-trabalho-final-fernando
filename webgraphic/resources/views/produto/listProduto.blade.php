@extends('master.modelo')

@section('title', 'Exibir Produto')

@section('content')
<body>
        <label>ID: </label>
        <p>{{ $produto->id }}</p>
        <label>Tipo: </label>
        <p> {{ $produto->tipo }} </p>
        <label>Material: </label>
        <p> {{ $produto->material }} </p>
        <label>Dimensões: </label>
        <p> {{ $produto->dimensoes }} </p>
        <label>Preço unitário: </label>
        <p> {{ $produto->preco_unitario }} </p>

        <p>
        <form action="{{ route('produtos.destroy', ['produto' => $produto->id]) }}" method="post">
            @csrf
            @method('delete')
            <label for="produto">Deletar: </label>
            <input type="hidden" name="produto" value="{{ $produto->id }}">
            <input class="btn btn-danger"  type="submit" value="Remover">
        </form>
        </p>
        {{--        <label>Data de Criação: </label> <p> {{ date('d/m/Y H:i', strtotime($servico->created_at)) }}</p>--}}
        {{--        botão para retornar para a listagem completa--}}
        <label>Voltar: </label>
        <a class="btn btn-info" href="{{ route('produtos.index') }}">Voltar</a>
</body>
@endsection
{{--</html>--}}
