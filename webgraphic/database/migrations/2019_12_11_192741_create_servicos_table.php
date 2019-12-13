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
            $table->string('tipo_produto');
            $table->integer('id_funcionario');
            $table->string('nome_funcionario');
            $table->integer('quantidade');
            $table->double('preco_total');
            $table->date('data_abertura');
            $table->integer('prazo');

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
