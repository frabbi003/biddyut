<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiddutPersonInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biddut_person_info', function (Blueprint $table) {
            $table->increments('person_id');
            $table->string('person_name');
            $table->string('person_designation');
            $table->longText('person_desc');
            $table->string('person_img_url');
            $table->string('person_fb_link');
            $table->string('person_linkedin_link');
            $table->string('person_twit_link');
            $table->integer('person_position');
            $table->integer('person_status');
            $table->integer('person_type'); // 1 = Team, 2 = Client
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
        Schema::dropIfExists('biddut_person_info');
    }
}
