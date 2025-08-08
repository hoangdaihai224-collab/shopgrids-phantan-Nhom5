<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_blog', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title');
            $table->string('blog_image',225);
            $table->string('blog_conten');
            $table->string('blog_summary');
            $table->bigInteger('category')->unsigned();
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
        Schema::dropIfExists('tbl_blog');
    }
}
