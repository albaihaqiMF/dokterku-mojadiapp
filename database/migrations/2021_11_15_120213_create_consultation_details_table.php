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
            $table->char('id', 14)->primary();
            $table->char('consultationHeaderId', 12);
            $table->foreign('consultationHeaderId')->references('id')->on('consultation_headers');
            $table->char('patientId', 13);
            $table->foreign('patientId')->references('id')->on('patients');
            $table->integer('queue');
            $table->char('statusId', 2);
            $table->foreign('statusId')->references('id')->on('statuses');
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
