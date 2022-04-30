<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('candidate_academic_id')->unsigned();
            $table->foreign('candidate_academic_id')->references('id')->on('candidate_academics')->onDelete('cascade');  
            $table->string('type')->nullable();
            $table->string('name')->nullable();
            $table->string('Address')->nullable();
            $table->string('Distant')->nullable();
            $table->string('Year_completion')->nullable();
            $table->string('applicable_eca_validity')->nullable();
            $table->string('country')->nullable();
            $table->string('attachment')->nullable();

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
        Schema::dropIfExists('qualifications');
    }
}
