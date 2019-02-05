<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnProfissionalSaudeForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consulta', function (Blueprint $table) {
            $table->dropForeign('consulta_codprofissionalsaude_foreign');
            $table->foreign('codprofissionalsaude')->references('id')->on('profissionalsaude')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consulta', function($table) {
            $table->foreign('codprofissionalsaude')->references('id')->on('consulta');
        });
    }
}
