<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boats', function (Blueprint $table) {
            /*$table->increments('id');
            $table->timestamps();*/

            $table->string('VIN')->unique();
            $table->integer('owned_by');
            $table->foreign('owned_by')->references('id')->on('users');
            $table->string('model');
            $table->string('manufacturer');
            $table->date('year');
            $table->date('year_purchased');
            $table->boolean('currently_own')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boats');
    }
}
