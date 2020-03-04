<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->String('descripcion');
            $table->unsignedBigInteger('id_motivo');
            $table->foreign('id_motivo')
            ->references('id')->on('motivos')
            ->onDelate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacions');
    }
}
