<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('country_citizen')->nullable();
            $table->string('country_residence')->nullable();
            $table->string('phone')->nullable();
            $table->string('enrollment_request')->nullable();
            $table->string('enrollment_request_comment')->nullable();
            $table->string('secondary_year_completion')->nullable();
            $table->string('secondary_board_name')->nullable();
            $table->string('secondary_total_mark')->nullable();
            $table->string('intermediate_certificate_year')->nullable();
            $table->string('intermediate_board_name')->nullable();
            $table->string('intermediate_total_mark')->nullable();
            $table->json('graduation_degree')->nullable();
            $table->string('graduation_degree_year_completion')->nullable();
            $table->string('graduation_degree_course_duration')->nullable();
            $table->string('graduation_degree_major_subject')->nullable();
            $table->string('graduation_degree_year_gap')->nullable();
            $table->string('graduation_degree_gpa')->nullable();
            $table->json('post_graduation')->nullable();
            $table->string('post_graduation_year_completion')->nullable();
            $table->string('post_graduation_course_duration')->nullable();
            $table->string('post_graduation_major_subject')->nullable();
            $table->string('post_graduation_year_gap')->nullable();
            $table->string('post_graduation_gpa')->nullable();


            $table->string('degree_year')->nullable();
            $table->string('master_degree_year')->nullable();
            $table->string('phd_year')->nullable();
            $table->string('pg_diploma_year')->nullable();
            $table->string('interest_pursue_higher_education')->nullable();
            $table->json('preferred_intake')->nullable();
            $table->string('preferred_college')->nullable();
            $table->string('preferred_university')->nullable();
            $table->string('preferred_State')->nullable();
            $table->string('preferred_region')->nullable();
            $table->string('preferred_city')->nullable();

            $table->string('communication_mode')->nullable();
            $table->string('is_rejected_college')->nullable();

            $table->string('rejected_college_reason')->nullable();
            $table->string('rejected_college_year')->nullable();
            $table->string('is_rejected_visa_past')->nullable();
            $table->string('rejected_visa_reason_past')->nullable();
            $table->string('rejected_visa_year_past')->nullable();
            $table->string('is_rejected_visa')->nullable();
            $table->string('rejected_visa_reason')->nullable();
            $table->string('rejected_visa_year')->nullable();
            $table->json('prerequisite_document')->nullable();

            $table->string('eca')->nullable();
            $table->string('passport_valid')->nullable();
            $table->string('IELTS_attempted')->nullable();
            $table->string('GRE_attempted')->nullable();
            $table->string('TOEFL_attempted')->nullable();
            $table->string('GMAT_attempted')->nullable();
            $table->string('interested_attempted')->nullable();
            $table->string('feedback')->nullable();




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
        Schema::dropIfExists('education');
    }
}
