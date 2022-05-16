<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CandidatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_personals', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();  
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('residential_street')->nullable();
            $table->string('residential_street2')->nullable();
            $table->string('residential_city')->nullable();
            $table->string('residential_region')->nullable();
            $table->string('residential_pincode')->nullable();
            $table->string('residential_country')->nullable();

            $table->string('corosponding_street')->nullable();
            $table->string('corosponding_street2')->nullable();
            $table->string('corosponding_city')->nullable();
            $table->string('corosponding_region')->nullable();
            $table->string('corosponding_pincode')->nullable();
            $table->string('corosponding_country')->nullable();

            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('gender')->nullable();

            $table->string('is_already_apply')->nullable();
            $table->string('possible_start_date')->nullable();
            $table->string('immigration_purpose')->nullable();
            $table->string('immigration_preference')->nullable();
            $table->string('is_vaccinate')->nullable();

            $table->string('fb_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('Linkedin_link')->nullable();

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
        Schema::dropIfExists('candidate_personals');
    }
}
