<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_roles', function (Blueprint $table) {
        $table->bigInteger('user_id')->unsigned();
        $table->bigInteger('role_id')->unsigned();
        $table->primary(['user_id','role_id']);
        $table->foreign('user_id')->references('id')->on('tbl_useradmin');
        $table->foreign('role_id')->references('id')->on('tbl_roles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user_roles');
    }
}
