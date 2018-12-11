<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassifiedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classifieds', function (Blueprint $table) {
            /*$table->increments('id');
            $table->timestamps();*/

            $table->increments('classified_id');
            $table->integer('posted_by');
            $table->foreign('posted_by')->references('id')->on('users');
            $table->string('title');
            $table->text('description');
            $table->integer('cost');
            $table->integer('images');
            $table->boolean('sold')->default(0);
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
        Schema::dropIfExists('classifieds');
    }
}
