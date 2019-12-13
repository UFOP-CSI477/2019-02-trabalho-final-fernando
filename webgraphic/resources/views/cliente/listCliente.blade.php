@extends('master.modelo')

@section('title', 'Exibir_Cliente')

@section('content')

        <label>ID: </label> {{ $cliente->id }}  &emsp; <label> Nome: </label> {{ $cliente->nome }}<br>
        <label>Telefone: </label>
        <p> {{ $cliente->telefone }} </p>
        <label>Data de nascimento: </label>
        <p> {{ $cliente->data_nascimento }} </p>
        <label>Email: </label>
        <p> {{ $cliente->email }} </p>
        <label>Endereço: </label>
        <p> {{ $cliente->endereco }} </p>
        <label>Genero: </label>
        <p> {{ $cliente->genero }} </p>

        <form action="{{ route('clientes.destroy', ['cliente' => $cliente->id]) }}" method="post">
                @csrf
                @method('delete')
{{--                <label for="cliente">Deletar: </label>--}}
                <input type="hidden" name="cliente" value="{{ $cliente->id }}">
                <input class="btn btn-danger "  type="submit" value="Remover">
        </form><br>

        <form action="{{ route('clientes.edit', ['cliente' => $cliente->id]) }}" method="get">
            @csrf
{{--            <label for="cliente">Editar: </label>--}}
            <input type="hidden" name="cliente" value="{{ $cliente->id }}">
            <input class="btn btn-success "  type="submit" value="Editar">
        </form><br>
        {{--        <label>Data de Criação: </label> <p> {{ date('d/m/Y H:i', strtotime($servico->created_at)) }}</p>--}}
{{--        botão para retornar para a listagem completa--}}
{{--        <label>Voltar: </label>--}}
        <a class="btn btn-info " href="{{ route('clientes.index') }}">Voltar</a>

@endsection
{{--</html>--}}
