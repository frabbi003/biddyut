<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiddutSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biddut_slider', function (Blueprint $table) {
            $table->increments('bid_slid_id');
            $table->string('bid_slid_img_url');
            $table->integer('bid_slid_status');
            $table->integer('bid_slid_position');
            $table->longText('bid_slid_content');
            $table->longText('bid_slid_content2');
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
        Schema::dropIfExists('biddut_slider');
    }
}
