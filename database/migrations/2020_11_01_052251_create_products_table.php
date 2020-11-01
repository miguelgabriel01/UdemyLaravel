<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('store_id');

            $table->string('name');//Nome
            $table->string('description');//Descrição
            $table->text('body');//corpo
            $table->decimal('price',10,2);//preço
            $table->string('slug');//slug

            $table->timestamps();

            $table->foreign('store_id')->references('id')->on('stores');//Chave estrangeira que faz referencia a tabela stores, pegando o ID dela

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
