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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('type');
            $table->string('registration_number')->unique();
            $table->string('registrar_office_area');
            $table->string('status');

            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('streat');
            $table->string('postal_code');
            $table->string('email')->unique();
            $table->string('website_address');
            $table->string('phone');

            $table->string('specialization');
            $table->string('express_entry_success')->nullable();
            $table->string('pnp_success')->nullable();
            $table->string('lmia_success')->nullable();
            $table->string('other_success')->nullable();
            $table->string('offering_service');
            $table->string('other_service')->nullable();
            $table->string('student_visa_success')->nullable();
            $table->string('tourist_visa_success')->nullable();
            $table->string('family_visa_success')->nullable();
            $table->string('other_visa_success')->nullable();

            $table->string('establishment_year');
            $table->string('offering_year');
            $table->string('response_time');
            $table->string('communication_mode');
            //$table->string('offer_course');
            
            $table->string('initial_chargeable_type')->nullable();
            $table->text('initial_chargeable_comment')->nullable();
            $table->string('vedio_url')->nullable();
            $table->string('privacy_policy_document')->nullable();
            $table->text('privacy_policy_detail')->nullable();
            $table->text('team_info')->nullable();
            $table->text('brief_introduction');
            $table->text('history');
            $table->text('achievement');
            $table->text('Award');
            $table->text('Comment');
            $table->text('event_new_weblink');
            $table->string('fb_link');
            $table->string('Youtube_link');
            $table->string('twitter_link');
            $table->string('insta_link');
            $table->string('Linkedin_link');
            $table->string('google_review_link');
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
