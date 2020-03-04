<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFraccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fraccions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('num_fraccion');
            $table->String('nombre');
            $table->String('descripcion');
            $table->String('archivo');
            $table->String('periodo');
            $table->boolean('estatus');
            $table->Integer('articulo');
            $table->foreign('articulo')
            ->references('id')->on('articulos')
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
        Schema::dropIfExists('fraccions');
    }
}
