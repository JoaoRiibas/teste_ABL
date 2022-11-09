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
        Schema::create('moradors', function (Blueprint $table) {
            $table->increments('morador_id');
            $table->unsignedInteger('id_apto');
            $table->foreign('id_apto')->references('apartamento_id')->on(table:'apartamentos');
            $table->string('nome');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('email');
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
        Schema::dropIfExists('moradors');
    }
};
