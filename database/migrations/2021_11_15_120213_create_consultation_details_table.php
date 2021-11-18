<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation_details', function (Blueprint $table) {
            $table->string('id', 32)->primary();
            $table->integer('queue');
            $table->string('complaint');
            $table->string('summary');
            $table->string('isCancelled');
            $table->string('consultationHeaderId', 32);
            $table->foreign('consultationHeaderId')->references('id')->on('consultation_headers');
            $table->string('userId', 32);
            $table->foreign('userId')->references('id')->on('users');
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
        Schema::dropIfExists('consultation_details');
    }
}
