<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria', function (Blueprint $table) {
          $table->increments('id');
          $table->string('titulo');
          $table->timestamps();
        });

        Schema::create('galeria_fotos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('titulo');
          $table->string('link');
          $table->integer('galeria_id')->unsigned();
          $table->foreign('galeria_id')->references('id')->on('galeria');
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
        Schema::dropIfExists('galeria_fotos');
    }
}
