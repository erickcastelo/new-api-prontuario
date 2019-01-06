<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfissionalSaude extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissionalsaude', function (Blueprint $table) {
            $table->inherits('pessoa');

            $table->increments('id');
            $table->string('numero', 20);
            $table->string('emailprofissional', 60)->nullable();
            $table->string('registro', 90)->nullable();
            $table->integer('codprofissao')->unsigned()->index()->nullable();
        });

        Schema::table('profissionalsaude', function($table) {
            $table->foreign('codpais')->references('id')->on('pais');
        });

        Schema::table('profissionalsaude', function($table) {
            $table->foreign('responsavel')->references('id')->on('profissionalsaude');
        });

        Schema::table('profissionalsaude', function($table) {
            $table->foreign('codprofissao')->references('id')->on('profissao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profissionalsaude');
    }
}
