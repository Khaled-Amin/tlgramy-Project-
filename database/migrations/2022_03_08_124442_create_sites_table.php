<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('site_name' , 50);
            $table->string('href' , 128);
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            // $table->integer('user_id');
            $table->string('title' , 25)->nullable();
            $table->string('description' , 128)->nullable();
            $table->integer('countries_id')->unsigned();
            $table->integer('subcategories')->nullable();
            $table->string('keyword' , 25);
            // $table->string('tags' , 25);
            $table->string('facebook' , 128)->nullable();
            $table->string('twitter' , 128)->nullable();
            $table->string('instagram' , 128)->nullable();
            $table->string('snapchat' , 128)->nullable();
            $table->string('youtube' , 128)->nullable();
            $table->string('telegram' , 128)->nullable();
            $table->string('android' , 128)->nullable();
            $table->string('ios' , 128)->nullable();
            $table->timestamps();
            $table->boolean('confirmed')->nullable()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites');
    }
}
