<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 60);
            $table->string('rg', 13);
            $table->string('cpf', 11);
            $table->timestamp('datacriacao');
            $table->timestamp('dataalteracao');
            $table->string('fone', 9)->nullable();
            $table->date('datanascimento')->nullable();
            $table->string('nome', 90);
            $table->string('password', 60);
            $table->integer('codpais')->unsigned()->index()->nullable();
            $table->integer('responsavel')->unsigned()->index()->nullable();
            $table->longText('foto')->nullable();
            $table->string('cep', 8)->nullable();
            $table->string('endereco', 120)->nullable();
            $table->string('complemento', 120)->nullable();
            $table->string('bairro', 60)->nullable();
            $table->string('cidade', 60)->nullable();
            $table->string('uf', 2)->nullable();
        });

        Schema::table('pessoa', function($table) {
            $table->foreign('codpais')->references('id')->on('pais');
        });

        Schema::table('pessoa', function($table) {
            $table->foreign('responsavel')->references('id')->on('pessoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa');
    }
}
