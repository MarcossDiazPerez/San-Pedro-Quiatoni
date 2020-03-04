<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->String('ruta_archivo');
            $table->unsignedBigInteger('id_tipo');
            $table->foreign('id_tipo')
            ->references('id')->on('tipos')
            ->onDelate('cascade');            
            $table->unsignedBigInteger('id_publicacion');
            $table->foreign('id_publicacion')
            ->references('id')->on('publicacions')
            ->onDelate('cascade');
            $table->String('periodo');
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
        Schema::dropIfExists('archivos');
    }
}
