<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SellsItemsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sell')->unsigned();
            $table->integer('id_producto')->unsigned();

            $table->double('price');
            $table->string('quantity');
            $table->foreign('id_sell')->references('id')->on('sells');
            $table->foreign('id_producto')->references('id')->on('products');

            $table->timestamps();

            
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sells_items');
        //
    }
}
