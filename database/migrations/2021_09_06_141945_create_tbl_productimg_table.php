<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProductimgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_productimg', function (Blueprint $table) {
            $table->id();
            $table->string('name_img' ,150);
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('tbl_product');
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
        Schema::dropIfExists('tbl_productimg');
    }
}
