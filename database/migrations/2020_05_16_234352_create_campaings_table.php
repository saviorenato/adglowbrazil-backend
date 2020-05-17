<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaings', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('login_id');
            // $table->foreign('login_id')->references('id')->on('users');
            $table->string('master_campaing_name', 100);
            $table->text('business_objective');
            $table->text('facebook_objective');
            $table->decimal('budget_minimum', 4, 2)->nullable();
            $table->decimal('budget_maximum', 4, 2)->nullable();
            $table->string('bid_strategy');
            $table->dateTime('schedule_begin_date');
            $table->dateTime('schedule_end_date');
            $table->string('ads_scheduling');
            $table->decimal('minimum_age', 2);
            $table->decimal('maximum_age', 2);
            $table->set('gender', ['all', 'men', 'women']);
            $table->text('detailed_targeting');
            $table->string('offer_title');
            $table->string('offer_details');
            $table->dateTime('offer_end_date');
            $table->json('upload_unique_codes')->nullable();
            $table->json('image_ad')->nullable();
            $table->string('text_ad');
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaings');
    }
}
