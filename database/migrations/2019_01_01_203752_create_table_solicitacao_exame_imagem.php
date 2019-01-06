<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSolicitacaoExameImagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacaoexameimagem', function (Blueprint $table) {
            $table->increments('id');
            $table->string('laudo', 120)->nullable();
            $table->integer('codsolicitacao')->unsigned()->index()->nullable();
            $table->integer('codimagem')->unsigned()->index()->nullable();
        });

        Schema::table('solicitacaoexameimagem', function($table) {
            $table->foreign('codsolicitacao')->references('id')->on('solicitacaoexames');
        });

        Schema::table('solicitacaoexameimagem', function($table) {
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
        Schema::dropIfExists('solicitacaoexameimagem');
    }
}
