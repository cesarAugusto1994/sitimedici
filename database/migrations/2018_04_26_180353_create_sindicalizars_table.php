<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSindicalizarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sindicalizars', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');
            $table->string('email')->nullable();
            $table->datetime('nascimento')->nullable();
            $table->string('sexo')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('grau_instrucao')->nullable();
            $table->string('identidade');
            $table->string('cpf');
            $table->string('ctps')->nullable();
            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();

            $table->integer('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('empresa');
            $table->string('funcao')->nullable();
            $table->string('matricula')->nullable();
            $table->datetime('admissao')->nullable();
            $table->text('dependentes')->nullable();

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
        Schema::dropIfExists('sindicalizars');
    }
}
