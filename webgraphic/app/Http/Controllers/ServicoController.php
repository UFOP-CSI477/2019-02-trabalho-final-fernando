<?php

namespace App\Http\Controllers;

use App\servico;
use Illuminate\Http\Request;

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
        $projetos = DB::table('servicos')
            ->select('projetos.ano','projetos.semestre','projetos.id as projetos_id',
                'professors.nome as projetos_professor','alunos.nome as projetos_aluno',
                'projetos.titulo','professors.area')
            ->join('professors', 'projetos.professor_id', '=', 'professors.id')
            ->join('alunos', 'projetos.aluno_id', '=', 'alunos.id')
            ->get();
        // dd($users);
        return view('projeto.listAllProjetos',[
            'projetos' => $projetos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function show(servico $servico)
    {
        //
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
     * @param  \App\servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function destroy(servico $servico)
    {
        //
    }
}
