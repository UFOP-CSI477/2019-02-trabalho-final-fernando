<?php

namespace App\Http\Controllers;

use App\produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = DB::table('produtos')->get();
        return view('produto.listAllProduto',[
            'produtos' => $produtos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produto.addProduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->tipo = $request->tipo;
        $produto->material = $request->material;
        $produto->dimensoes = $request->dimensoes;
        $produto->preco_unitario = $request->preco_unitario;
        $produto->save();
        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(produto $produto)
    {
        return view('produto.listProduto',[
            'produto' => $produto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(produto $produto)
    {
        return view('produto.editProduto')->with('produto', $produto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produto $produto)
    {
        $produto->tipo = $request->tipo;
        $produto->material = $request->material;
        $produto->dimensoes = $request->dimensoes;
        $produto->preco_unitario = $request->preco_unitario;
        $produto->save();
        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\produto $produto
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(produto $produto)
    {
//        DB::table('servicos')
//            ->where('id_produto', $produto->id)->delete();
        $produto->delete();
        return redirect()->route('produtos.index');
    }
}
