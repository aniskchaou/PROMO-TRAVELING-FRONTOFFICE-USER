<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                        Schema::create('packages', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->string('description');
    $table->string('location');
    $table->string('start');
    $table->string('end');
    $table->string('price');
    $table->string('image');
    $table->string('video');
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
