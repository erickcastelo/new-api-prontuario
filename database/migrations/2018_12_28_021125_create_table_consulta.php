<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConsulta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('datacriacao');
            $table->timestamp('dataconsulta');
            $table->string('descricao', 120)->nullable();
            $table->string('situacao', 1)->nullable();
            $table->integer('codpaciente')->unsigned()->index()->nullable();
            $table->integer('codprofissionalsaude')->unsigned()->index()->nullable();
        });

        Schema::table('consulta', function($table) {
            $table->foreign('codpaciente')->references('id')->on('paciente');
        });

        Schema::table('consulta', function($table) {
            $table->foreign('codprofissionalsaude')->references('id')->on('consulta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consulta');
    }
}
