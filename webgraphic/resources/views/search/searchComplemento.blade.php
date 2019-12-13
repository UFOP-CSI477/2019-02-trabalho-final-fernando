@extends('master.modelo')

@section('title', 'Sistema de Busca')

@section('content')
{{--Construção da tabela resultante da pesquisa--}}
<h4 class="text-center">Pesquisar serviços</h4>

<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="{{ route('search') }}" method="POST">
                    @csrf
                    <input type="text" name="query" />
                    <input type="submit" class="btn btn-sm btn-primary" value="Search" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
