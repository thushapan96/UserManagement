<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_enquiries', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('candidate_id')->unsigned()->nullable();
            $table->foreign('candidate_id')->references('id')->on('candidate_personals')->onDelete('cascade');
            $table->bigInteger('provider_id')->unsigned()->nullable();
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->bigInteger('institution_id')->unsigned()->nullable();
            $table->foreign('institution_id')->references('id')->on('institutions')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->integer('statuss')->default(1);
            $table->date('date')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('provider_enquiries');
    }
}
