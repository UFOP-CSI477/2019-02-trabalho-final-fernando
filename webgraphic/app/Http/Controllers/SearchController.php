<?php

namespace App\Http\Controllers;

use App\servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    public function index()
    {
//        $servicos = Servico::with('nome_cliente')->get();
        $searchResults=DB::table('servicos')
            ->where('nome_cliente')->get();
        return view('search.search', compact('searchResults'));
    }
//    função de busca utilizando o ajax
    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Servico::class, 'nome_cliente')
            ->perform($request->input('query'));

//        dd($searchResults);
        return view('search.search', compact('searchResults', $searchResults));
    }
}
