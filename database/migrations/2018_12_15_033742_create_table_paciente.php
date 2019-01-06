<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->inherits('pessoa');

            $table->increments('id');
            $table->string('numero', 20);
        });

        Schema::table('paciente', function($table) {
            $table->foreign('codpais')->references('id')->on('pais');
        });

        Schema::table('paciente', function($table) {
            $table->foreign('responsavel')->references('id')->on('paciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
