<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->id();
            $table->string('pro_name' ,100);
            $table->bigInteger('cat_id')->unsigned();
            $table->string('images',250);
            $table->integer('price');
            $table->integer('price_sale');
            $table->bigInteger('id_brands')->unsigned();
            $table->bigInteger('sold');
            $table->bigInteger('warehouse');
            $table->bigInteger('favorite');
            $table->text('description');
            $table->smallInteger('status');
             
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
        Schema::dropIfExists('tbl_product');
    }
}
