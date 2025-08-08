<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cart', function (Blueprint $table) {
            $table->bigInteger('Cart_id')->unsigned();
            $table->string('pro_name' ,100);
            $table->bigInteger('classify')->unsigned();
            $table->string('cart_images',150);
            $table->integer('price');
            $table->integer('price_sale');
            $table->integer('Quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_cart');
    }
}
