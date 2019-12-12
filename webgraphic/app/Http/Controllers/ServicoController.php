<?php

namespace App\Http\Controllers;

use App\cliente;
use App\funcionario;
use App\produto;
use App\servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        retorna a lista para a area administrativa usando join para a construção
        $servicos = DB::table('servicos')->get();
        return view('projeto.listAllServico',[
            'servicos' => $servicos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $funcionarios = Funcionario::all();
        $produtos = Produto::all();
        $clientes = Cliente::all();

        return view('servico.addServico',
            compact('funcionarios', 'produtos', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servico = new Servico();
        $servico->id_cliente = $request->id_cliente;
        $servico->nome_cliente = $request->nome_cliente;
        $servico->id_produto = $request->id_produto;
        $servico->nome_produto = $request->nome_produto;
        $servico->quantidade = $request->quantidade;
        $servico->id_funcionario = $request->id_funcionario;
        $servico->prazo = $request->prazo;
        $servico->nome_funcionario = $request->nome_funcionario;
        $servico->preco_total = $request->preco_total;
        $servico->data_abertura = date($request->data_abertura);
        $servico->data_fechamento = date($request->data_fechamento);

        $servico->save();
        return redirect()->route('servicos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function show(servico $servico)
    {
        return view('servico.listServico',[
            'servico' => $servico
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function edit(servico $servico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servico $servico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\servico $servico
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(servico $servico)
    {
        $servico->delete();
        return redirect()->route('servicos.index');
    }
}
