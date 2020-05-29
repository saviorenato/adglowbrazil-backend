<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterCampaingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_campaings', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('login_id');
            $table->string('master_campaing_name', 100)->nullable();
            $table->string('business_objective')->nullable();
            $table->enum('facebook_objective', ['Offers', 'Traffic', 'Engagement']); 
            $table->decimal('budget_minimum', 4, 3)->nullable();
            $table->decimal('budget_maximum', 4, 3)->nullable();
            $table->string('bid_strategy')->nullable();
            $table->dateTime('schedule_begin_date')->nullable();
            $table->dateTime('schedule_end_date')->nullable();
            $table->string('ads_scheduling')->nullable();
            $table->integer('minimum_age')->nullable();
            $table->integer('maximum_age')->nullable();
            $table->enum('gender', ['All', 'Men', 'Women']);
            $table->string('detailed_targeting')->nullable();
            $table->string('offer_title')->nullable();
            $table->string('offer_details')->nullable();
            $table->dateTime('offer_end_date')->nullable();
            $table->string('upload_unique_codes', 250)->nullable();
            $table->string('image_ad', 250)->nullable();
            $table->string('text_ad')->nullable();
            $table->enum('status', ['Active', 'Inactive', 'Running', 'Paused', 'Finished']);
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
        Schema::dropIfExists('master_campaings');
    }
}
