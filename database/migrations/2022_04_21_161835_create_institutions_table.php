<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {

            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  
            $table->string('name');
            $table->string('type');
            $table->string('registration_number')->unique();
            $table->string('registrar_office_area');
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('streat');
            $table->string('postal_code');
            $table->string('email')->unique();
            $table->string('website_address');
            $table->string('phone');
            $table->string('admission_phone');
            $table->string('admission_email')->unique();
            $table->string('dean_name');
            $table->string('dean_email')->unique();
            $table->string('dean_phone');
            $table->json('course_type')->nullable();
            $table->json('intake')->nullable();
            $table->string('admission_type')->nullable();
            $table->string('college_ranking')->nullable();
            $table->string('ranking_criteria')->nullable();
            $table->string('establishment_year')->nullable();
            $table->string('offering_year')->nullable();
            $table->string('response_time')->nullable();
            $table->json('communication_mode')->nullable();
            $table->json('offer_course')->nullable();
            $table->string('no_student')->nullable();
            $table->string('no_success_student')->nullable();
            $table->string('is_financial')->nullable();
            $table->string('is_credit')->nullable();
            $table->json('certificate_type')->nullable();
            $table->json('course_duration')->nullable();
            $table->json('other_require')->nullable();
            $table->json('language_test_type')->nullable();
            $table->string('is_scholarship_offer')->nullable();
            $table->string('is_conduct_webinar')->nullable();
            $table->string('admission_criteria_website')->nullable();
            $table->string('fee_structure_website')->nullable();
            $table->text('eca')->nullable();
            $table->string('vedio_url')->nullable();
            $table->string('is_privacy_policy')->nullable();
            $table->string('privacy_policy_document')->nullable();
            $table->text('privacy_policy_detail')->nullable();
            $table->text('brief_introduction')->nullable();
            $table->text('history')->nullable();
            $table->text('achievement')->nullable();
            $table->text('Award')->nullable();
            $table->text('Comment')->nullable();
            // $table->text('event_new_weblink')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('Linkedin_link')->nullable();
            $table->string('google_review_link')->nullable();

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
        Schema::dropIfExists('institutions');
    }
}
