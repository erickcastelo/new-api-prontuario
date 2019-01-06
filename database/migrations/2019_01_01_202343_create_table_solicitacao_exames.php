<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSolicitacaoExames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacaoexames', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', 90)->nullable();
            $table->float('valor')->nullable();
            $table->timestamp('data')->nullable();
            $table->string('autorizacaoempresa', 1)->nullable();
            $table->string('autorizacaoprofissional', 1)->nullable();
            $table->integer('codconsulta')->unsigned()->index()->nullable();
            $table->integer('codempresa')->unsigned()->index()->nullable();
            $table->timestamp('datacriacao')->nullable();
        });

        Schema::table('solicitacaoexames', function($table) {
            $table->foreign('codconsulta')->references('id')->on('consulta');
        });

        Schema::table('solicitacaoexames', function($table) {
            $table->foreign('codempresa')->references('id')->on('empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitacaoexames');
    }
}
