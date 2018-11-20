<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            /*$table->increments('id');
            $table->timestamps();*/

            $table->increments('post_id');
            $table->foreign('member_id')->references('id')->on('users');
            $table->string('title');
            $table->string('body');
            $table->integer('images');
            $table->date('date_posted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
