<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promoters', function (Blueprint $table) {
            $table->increments('promoter_id');
            $table->integer('user_id');
            $table->integer('artist_id');
            $table->string('promoter_name');
            $table->string('promoter_email');
            $table->string('promoter_phone');
            $table->string('promoter_phone_alt');
            $table->string('promoter_shows');
            $table->string('promoter_addr');
            $table->string('promoter_city');
            $table->string('promoter_state');
            $table->string('promoter_zip');
            $table->string('promoter_notes');
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
        Schema::drop('promoters');
    }
}
