<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('education_id')->unsigned()->nullable();
            $table->foreign('education_id')->references('id')->on('education')->onDelete('cascade');
            $table->string('employer_name')->nullable();
            $table->string('job_tittle')->nullable();
            $table->string('job_field')->nullable();
            $table->string('year_job_work')->nullable();
            $table->string('from_year_job')->nullable();
            $table->string('to_year_job')->nullable();
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
        Schema::dropIfExists('employment');
    }
}
