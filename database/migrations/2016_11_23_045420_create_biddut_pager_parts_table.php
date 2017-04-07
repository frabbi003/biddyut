<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiddutPagerPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biddut_pager_parts', function (Blueprint $table) {
            $table->increments('bid_pager_id');
            $table->string('bid_pager_url');
            $table->string('bid_banner_url');
            $table->text('bid_pager_title');
            $table->longText('bid_pager_desc');
            $table->longText('bid_pager_html');
            $table->integer('bid_pager_position');
            $table->integer('bid_pager_status');
            $table->integer('bid_pager_section_id');
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
        Schema::dropIfExists('biddut_pager_parts');
    }
}
