<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableValorreferencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valorreferencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('faixaetaria', 30)->nullable();
            $table->string('intervalo1', 30)->nullable();
            $table->string('referencial', 20)->nullable();
            $table->string('unidade', 20)->nullable();
            $table->string('numexamelaboratorial', 5)->nullable();
        });

        Schema::table('valorreferencia', function($table) {
            $table->foreign('numexamelaboratorial')->references('numero')->on('examelaboratorial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valorreferencia');
    }
}
