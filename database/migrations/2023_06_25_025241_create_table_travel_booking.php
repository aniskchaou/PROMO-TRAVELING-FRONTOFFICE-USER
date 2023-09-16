<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTravelBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                        Schema::create('bookings', function (Blueprint $table) {
    $table->increments('id');
    $table->string('package');
    $table->string('traveller');
    $table->string('date');
    $table->string('payment');
    $table->string('status');
    $table->string('cost');
    $table->string('adult');
    $table->string('child');
    $table->string('hotel');
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
        //
    }
}
