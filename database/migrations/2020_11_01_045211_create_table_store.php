<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();//ID
            $table->unsignedBigInteger('user_id');

            $table->string('name');//Nome
            $table->string('description');//Descrição
            $table->string('phone');//Telefone
            $table->string('mobile_phone');//Telefone celular
            $table->string('slug');

            $table->timestamps();//Hora de criação e atualização

            $table->foreign('user_id')->references('id')->on('users');//chave estrangeira que faz referencia ao id do suario na user ID

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
