<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiddutFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biddut_footer', function (Blueprint $table) {
            $table->increments('fot_id');
            $table->longText('fot_about_us');
            $table->longText('fot_serv_menu');
            $table->longText('fot_bid_menu');
            $table->longText('fot_news_letter');
            $table->string('fot_bid_copyright');
            $table->integer('fot_status');
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
        Schema::dropIfExists('biddut_footer');
    }
}
