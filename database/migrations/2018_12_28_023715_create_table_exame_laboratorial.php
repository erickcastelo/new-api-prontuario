<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExameLaboratorial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examelaboratorial', function (Blueprint $table) {
            $table->string('numero', 5);
            $table->string('descricao', 60);
            $table->string('possui', 5)->nullable();
            $table->string('observacao', 120)->nullable();
            $table->integer('codpaciente')->unsigned()->index()->nullable();
            $table->integer('codprofissionalsaude')->unsigned()->index()->nullable();
            $table->primary('numero');
        });

        Schema::table('examelaboratorial', function($table) {
            $table->foreign('possui')->references('numero')->on('examelaboratorial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examelaboratorial');
    }
}
