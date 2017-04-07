<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiddutMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biddut_menu', function (Blueprint $table) {
            $table->increments('bid_menu_id');
            $table->integer('bid_p_id');
            $table->string('bid_menu_name');
            $table->string('bid_menu_url');
            $table->string('bid_menu_link');
            $table->string('bid_menu_img');
            $table->longText('bid_menu_desc');
            $table->integer('bid_menu_status');
            $table->integer('bid_menu_position');
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
        Schema::dropIfExists('biddut_menu');
    }
}
