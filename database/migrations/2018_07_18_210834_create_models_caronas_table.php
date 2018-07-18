<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsCaronasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caronas', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nome")->nullable();
            $table->unsignedInteger("fumante")->nullable();
            $table->unsignedInteger("reputacao")->nullable();
            $table->string("carro")->nullable();
            $table->unsignedInteger("vagas")->nullable();
            $table->string("origem")->nullable();
            $table->string("destino")->nullable();
            $table->float("valor")->nullable();
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
        Schema::dropIfExists('caronas');
    }
}
