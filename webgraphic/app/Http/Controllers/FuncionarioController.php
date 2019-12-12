<?php

namespace App\Http\Controllers;

use App\funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $funcionarios = DB::table('funcionarios');
       return view('funcionario.listAllFuncionario',[
           'funcionarios' => $funcionarios
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionario.addFuncionario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = new Funcionario();
        $funcionario->nome = $request->nome;
        $funcionario->telefone = $request->telefone;
        $funcionario->data_nascimento = date($request->data_nascimento);
        $funcionario->email = $request->email;
        $funcionario->endereco = $request->endereco;
        $funcionario->genero = $request->genero;
        $funcionario->admissao = date($request->admissao);
        $funcionario->funcao = $request->funcao;
        $funcionario->save();
        return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(funcionario $funcionario)
    {
        return view('funcionario.listFuncionario',[
            'funcionario' => $funcionario
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(funcionario $funcionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, funcionario $funcionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(funcionario $funcionario)
    {
//        DB::table('servicos')
//            ->where('id_funcionario', $funcionario->id)->delete();
        $funcionario->delete();
        return redirect()->route('funcionarios.index');
    }
}
