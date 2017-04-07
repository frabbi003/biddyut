<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_tracking_number');
            $table->integer('order_rate');
            $table->integer('del_rate');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->longText('comment');
            $table->integer('status');
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
        Schema::dropIfExists('order_ratings');
    }
}
