<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();   
            $table->bigInteger('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');        
            $table->string('member');
            $table->string('Designation');
            $table->string('expertise_area');
            $table->string('experience_year');
            $table->string('no_success');
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
        Schema::dropIfExists('teams');
    }
}
