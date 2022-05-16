<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('type')->nullable();
            $table->string('registration_number')->unique();
            $table->string('registrar_office_area')->nullable();
            $table->string('status')->nullable();
            $table->string('company_name')->nullable();
            $table->json('language_known')->nullable();

            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('streat')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('website_address')->nullable();
            $table->string('phone')->nullable();

            $table->json('specialization')->nullable();
            $table->string('express_entry_success')->nullable();
            $table->string('pnp_success')->nullable();
            $table->string('lmia_success')->nullable();
            $table->string('other_success')->nullable();
            $table->json('offering_service');
            $table->json('other_service')->nullable();
            $table->string('student_visa_success')->nullable();
            $table->string('tourist_visa_success')->nullable();
            $table->string('family_visa_success')->nullable();
            $table->string('other_visa_success')->nullable();

            $table->string('establishment_year')->nullable();
            $table->string('offering_year')->nullable();
            $table->string('total_cases_taken')->nullable();
            $table->string('communication_mode_success')->nullable();
            $table->json('communication_mode')->nullable();
            //$table->string('offer_course');
            
            $table->string('initial_chargeable_type')->nullable();
            $table->text('initial_chargeable_comment')->nullable();
            $table->string('vedio_url')->nullable();
            $table->string('is_Policies')->nullable();
            $table->string('privacy_policy_document')->nullable();
            $table->text('privacy_policy_detail')->nullable();
            $table->text('team_info')->nullable();
            $table->text('brief_introduction');
            $table->text('history')->nullable();
            $table->text('achievement')->nullable();
            $table->text('Award')->nullable();
            $table->text('Comment')->nullable();
            $table->text('event_new_weblink')->nullable();
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
        Schema::dropIfExists('providers');
    }
}
