<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalCertificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_certification', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('education_id')->unsigned()->nullable();
            $table->foreign('education_id')->references('id')->on('education')->onDelete('cascade');
            $table->bigInteger('calculator_id')->unsigned()->nullable();
            $table->foreign('calculator_id')->references('id')->on('calculator')->onDelete('cascade');
            $table->string('technical_certification_name')->nullable();
            $table->string('type')->nullable();
            $table->string('certificate_specialization')->nullable();
            $table->string('technical_certification_course_duration')->nullable();
            $table->string('technical_certification_grade')->nullable();
            $table->string('technical_certification_year_completion')->nullable();
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
        Schema::dropIfExists('technical_certification');
    }
}
