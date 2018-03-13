<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('url')->default('#');
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });

        Schema::create('paginas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('url')->default('#');
            $table->boolean('ativo')->default(true);
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::dropIfExists('paginas');
        Schema::dropIfExists('categorias');
    }
}
