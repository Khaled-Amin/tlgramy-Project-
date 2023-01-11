<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sites_id')->unsigned()->nullable();
            // $table->foreign('site_id')->refrence('id')->on('sites');
            $table->integer('tag_id')->unsigned()->nullable();
            // $table->foreign('tag_id')->refrence('id')->on('tags');
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
        Schema::dropIfExists('sites_tag');
    }
}
