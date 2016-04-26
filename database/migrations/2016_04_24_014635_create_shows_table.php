<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->increments('show_id');
            $table->integer('user_id');
            $table->integer('artist_id');
            $table->integer('venue_id');
            $table->integer('promoter_id');
            $table->integer('inventory_id');
            $table->string('show_name');
            $table->dateTime('show_date');
            $table->string('other_acts');
            $table->string('honorarium');
            $table->string('attendance');
            $table->string('capacity_percent');
            $table->string('dollar_head');
            $table->string('booking_fee');
            $table->string('management_fee');
            $table->string('soft_fee');
            $table->string('hard_fee');
            $table->string('payment_check');
            $table->string('payment_card');
            $table->string('payment_cash');
            $table->string('payment_tip');
            $table->string('buy_out');
            $table->string('notes');
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
        Schema::drop('shows');
    }
}
