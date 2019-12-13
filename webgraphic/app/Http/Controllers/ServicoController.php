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
        return view('servico.listAllServico',[
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
        $produtos = Produto::all();
        $clientes = Cliente::all();
        $funcionarios = Funcionario::all();

        $servico = new Servico();
        $servico->id_cliente = $request->id_cliente;
        $servico->nome_cliente = ($clientes->find($request->id_cliente))->nome;
        $servico->id_produto = $request->id_produto;
        $servico->tipo_produto =  ($produtos->find($request->id_produto))->tipo;
        $servico->quantidade = $request->quantidade;
        $servico->id_funcionario = $request->id_funcionario;
        $servico->nome_funcionario = ($funcionarios->find($request->id_funcionario))->nome;
        $servico->prazo = $request->prazo;
        $servico->preco_total = $request->preco_total;
        $servico->data_abertura = date($request->data_abertura);

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
        $funcionarios = Funcionario::all();
        $produtos = Produto::all();
        $clientes = Cliente::all();

        return view('servico.editServico')
            ->with('funcionarios', $funcionarios)
            ->with('produtos', $produtos)
            ->with('clientes', $clientes)
            ->with('servico', $servico);
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
        $produtos = Produto::all();
        $clientes = Cliente::all();
        $funcionarios = Funcionario::all();

        $servico->id_cliente = $request->id_cliente;
        $servico->nome_cliente = ($clientes->find($request->id_cliente))->nome;
        $servico->id_produto = $request->id_produto;
        $servico->tipo_produto =  ($produtos->find($request->id_produto))->tipo;
        $servico->quantidade = $request->quantidade;
        $servico->id_funcionario = $request->id_funcionario;
        $servico->nome_funcionario = ($funcionarios->find($request->id_funcionario))->nome;
        $servico->prazo = $request->prazo;
        $servico->preco_total = $request->preco_total;
        $servico->data_abertura = date($request->data_abertura);

        $servico->save();
        return redirect()->route('servicos.index');
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
