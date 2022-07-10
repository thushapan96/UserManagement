<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipPlanInstitutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_plan_institution', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->String('type')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('Dashboard')->nullable();
            $table->integer('EA')->nullable(); 
            $table->integer('Enquiries')->nullable();
            $table->integer('DefaultReports')->nullable();
            $table->integer('CustomizedReports')->nullable();
            $table->integer('EmailSupport')->nullable();
            $table->integer('TelephonicSupport')->nullable();
            $table->integer('ChatAgents')->nullable();
            $table->integer('Add_On_features_Free')->nullable();
            $table->integer('AppointmentScheduler')->nullable();
            $table->integer('eLearningManagementSystem')->nullable();
            $table->integer('QuickBooks')->nullable();
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
        Schema::dropIfExists('membership_plan_institution');
    }
}
