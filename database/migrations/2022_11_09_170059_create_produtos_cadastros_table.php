<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_produtos', function (Blueprint $table) {
            $table->id();
            $table->text('descricao', 500);
            $table->strig('caracteristicas', 200);
            $table->foreign('categoria_id')->references('id')->on('produtos');
            $table->bigInteger('valor');
            $table->BigInteger("estoque");
            $table->binary('imagem');
            $table->text('resumo', 250);
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
        Schema::dropIfExists('catalogo_produtos');
    }
};
