<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_plan', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->String('type')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('Dashboard')->nullable();
            $table->integer('EA')->nullable(); 
            $table->integer('Calculator')->nullable();
            $table->integer('EnquiriesSchool')->nullable();
            $table->integer('EnquiriesUniversity')->nullable();
            $table->integer('EnquiriesCollege')->nullable();
            $table->integer('EnquiriesRCICConsultant')->nullable();
            $table->integer('EnquiriesImmigration')->nullable();
            $table->integer('EnquiriesBusiness')->nullable();
            $table->integer('DefaultReports')->nullable();
            $table->integer('CustomizedReports')->nullable();
            $table->integer('ChatAgents')->nullable();
            $table->integer('EmailSupport')->nullable();
            $table->integer('TelephonicSupport')->nullable();
            $table->integer('Add_On_features_Free')->nullable();
            $table->integer('Anytime_Single_Multiple')->nullable();
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
        Schema::dropIfExists('membership_plan');
    }
}
