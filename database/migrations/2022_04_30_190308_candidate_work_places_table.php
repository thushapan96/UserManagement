<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CandidateWorkPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_work_places', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
           
            $table->string('designation')->nullable();
            $table->string('country')->nullable();
            $table->string('Year_completion')->nullable();
            $table->string('attach_experience_certificate')->nullable();
            $table->string('attach_salary_slip')->nullable();
            $table->string('attach_offer_letter')->nullable();
            $table->string('work_profile_letter')->nullable();

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
        Schema::dropIfExists('candidate_work_places');
    }
}
