<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImagemSolicitacoesExame extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagem_solicitacoes_exame', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codsolicitacao')->unsigned()->index()->nullable();
            $table->integer('codimagem')->unsigned()->index()->nullable();
        });

        Schema::table('imagem_solicitacoes_exame', function($table) {
            $table->foreign('codsolicitacao')->references('id')->on('solicitacaoexames');
        });

        Schema::table('imagem_solicitacoes_exame', function($table) {
            $table->foreign('codimagem')->references('id')->on('exameimagem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagem_solicitacoes_exame');
    }
}
