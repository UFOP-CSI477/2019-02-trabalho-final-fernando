@extends('master.modelo')

@section('title', 'Exibir_Projeto')

@section('content')
<body>
        <label>ID do Projeto: </label>
        <p>{{ $projeto->id }}</p>
        <label>Nome Professor: </label>
        <p> {{ $projeto->professor_id }} </p>
        <label>Nome Aluno: </label>
        <p> {{ $projeto->aluno_id }} </p>
        <label>Titulo: </label>
        <p> {{ $projeto->titulo }} </p>
        <label>Ano: </label>
        <p> {{ $projeto->ano }} </p>
        <label>Semestre: </label>
        <p> {{ $projeto->semestre }} </p>
{{--        <label>Data de Criação: </label> <p> {{ date('d/m/Y H:i', strtotime($servico->created_at)) }}</p>--}}
{{--        botão para retornar para a listagem completa--}}
        <a class="btn btn-info" href="{{ route('projetos.index') }}">Voltar</a>
</body>
@endsection
{{--</html>--}}
