<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->inherits('pessoa');

            $table->increments('id');
            $table->string('numero', 20);
            $table->string('cnpj', 15)->nullable();
            $table->string('fantasia', 90)->nullable();
            $table->integer('codprofissao')->unsigned()->index()->nullable();
            $table->string('servicolaboratorial', 30)->nullable();
            $table->string('servicoimagem', 30)->nullable();
        });

        Schema::table('empresa', function($table) {
            $table->foreign('codpais')->references('id')->on('pais');
        });

        Schema::table('empresa', function($table) {
            $table->foreign('responsavel')->references('id')->on('empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
