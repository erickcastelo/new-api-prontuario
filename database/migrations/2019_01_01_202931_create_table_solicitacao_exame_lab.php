<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSolicitacaoExameLab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacaoexamelab', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resultado', 120)->nullable();
            $table->integer('codsolicitacao')->unsigned()->index()->nullable();
            $table->string('numexamelab', 5)->nullable();
        });

        Schema::table('solicitacaoexamelab', function($table) {
            $table->foreign('codsolicitacao')->references('id')->on('solicitacaoexames');
        });

        Schema::table('solicitacaoexamelab', function($table) {
            $table->foreign('numexamelab')->references('numero')->on('examelaboratorial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitacaoexamelab');
    }
}
