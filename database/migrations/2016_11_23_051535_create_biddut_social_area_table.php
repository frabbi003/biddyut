<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiddutSocialAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biddut_social_area', function (Blueprint $table) {
            $table->increments('socl_id');
            $table->string('socl_fb');
            $table->string('socl_gp');
            $table->string('socl_yt');
            $table->string('socl_linkdin');
            $table->string('socl_twit');
            $table->string('socl_insta');
            $table->integer('socl_status');
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
        Schema::dropIfExists('biddut_social_area');
    }
}
