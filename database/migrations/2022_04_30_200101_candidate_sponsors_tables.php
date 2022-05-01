<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CandidateSponsorsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_sponsors', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('sponsor_status')->nullable();
            $table->string('sponsor_relation')->nullable();
            $table->string('sponsor_mobile')->nullable();
            $table->string('sponsor_telephone')->nullable();
            $table->string('sponsor_email')->nullable();
            $table->string('sponsor_street')->nullable();
            $table->string('sponsor_street2')->nullable();
            $table->string('sponsor_city')->nullable();
            $table->string('sponsor_region')->nullable();
            $table->string('sponsor_pincode')->nullable();
            $table->string('sponsor_country')->nullable();
           
            $table->string('guardian_relation')->nullable();
            $table->string('guardian_mobile')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('guardian_street')->nullable();
            $table->string('guardian_street2')->nullable();
            $table->string('guardian_city')->nullable();
            $table->string('guardian_region')->nullable();
            $table->string('guardian_pincode')->nullable();
            $table->string('guardian_country')->nullable();
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
        Schema::dropIfExists('candidate_sponsors');
    }
}
