<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_cliente');
            $table->string('nome_cliente');
            $table->integer('id_produto');
            $table->string('nome_produto');
            $table->integer('quantidade');
            $table->integer('id_funcionario');
            $table->integer('prazo');
            $table->string('nome_funcionario');
            $table->double('preco_total');
            $table->date('data_abertura');
            $table->date('data_fechamento');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
