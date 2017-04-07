<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiddutHomeSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biddut_home_section', function (Blueprint $table) {
            $table->increments('home_sec_id');
            $table->text('home_sec_title');
            $table->longText('home_sec_desc');
            $table->longText('home_sec_services');
            $table->integer('home_sec_position');
            $table->integer('home_sec_status');
            $table->string('home_sec_ban_url');
            $table->integer('home_sec_ban_type'); // 1 = image, 2 = video
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
        Schema::dropIfExists('biddut_home_section');
    }
}
