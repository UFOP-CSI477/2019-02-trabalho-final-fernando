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
                <div class="card">
                    <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

                    <div class="card-body">

                        @foreach($searchResults->groupByType()  as $type => $modelSearchResults)
                            <h4>{{ ucfirst($type) }}</h4>

                            @foreach($modelSearchResults as $searchResult)
                                <ul>
                                    <a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a>
                                </ul>
                            @endforeach
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
