<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->decimal('preco');
            $table->integer('quantidade');
            $table->timestamps();
        });

        Schema::create('insumo_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                        ->references('id')
                        ->on('products')
                        ->onDelete('cascade');
            $table->integer('insumo_id')->unsigned();
            $table->foreign('insumo_id')
                        ->references('id')
                        ->on('insumos')
                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insumos');
        Schema::dropIfExists('products_insumos');
    }
}
