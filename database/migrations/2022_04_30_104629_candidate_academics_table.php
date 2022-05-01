<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CandidateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_academics', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  
            $table->string('language_proficiency');
            $table->string('language_level')->nullable();
            $table->string('language_certified_by')->nullable();
            $table->string('language_attachment')->nullable();
            $table->string('applicant_test_name')->nullable();
            $table->string('test_valid_upto')->nullable();
            $table->string('test_attachment')->nullable();

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
        Schema::dropIfExists('candidate_academics');
    }
}
