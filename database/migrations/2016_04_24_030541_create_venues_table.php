<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('venue_id');
            $table->integer('user_id');
            $table->integer('artist_id');
            $table->string('venue_name');
            $table->string('venue_email');
            $table->string('venue_phone');
            $table->string('venue_shows');
            $table->string('venue_addr');
            $table->string('venue_city');
            $table->string('venue_state');
            $table->string('venue_zip');
            $table->string('venue_notes');
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
        Schema::drop('venues');
    }
}
