<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
/*            $table->increments('id');
            $table->timestamps();*/

            $table->increments('event_id');
            $table->string('event_name');
            $table->string('location');
            $table->string('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('hosted_by');
            $table->foreign('hosted_by')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
