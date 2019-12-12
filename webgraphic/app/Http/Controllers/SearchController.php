<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
//        retorna a view para a busca
        return view('search.search');
    }
//    função de busca utilizando o ajax
    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
//            recuperação dos dados em ordem ascendente por area e nome retornando a busca pelo campo area
            $servicos=DB::table('servicos')
                ->where('nome_cliente','LIKE','%'.$request->search."%")->get();

//            construindo a estrutura para o formulário de busca
            if($servicos)
            {
                foreach ($servicos as $key => $servico) {
                    $output.='<tr>'.
                        '<td>'.$servico->id.'</td>'.
                        '<td>'.$servico->id_cliente .'</td>'.
                        '<td>'.$servico->nome_cliente .'</td>'.
                        '<td>'.$servico->id_servico.'</td>'.
                        '<td>'.$servico->descricao_servico.'</td>'.
                        '<td>'.$servico->quantidade.'</td>'.
                        '<td>'.$servico->nome_funcionario.'</td>'.
                        '<td>'.$servico->preco_total.'</td>'.
                        '</tr>';
                }
                return Response($output);
            }
        }
    }
}
