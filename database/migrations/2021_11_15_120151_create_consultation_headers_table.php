<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation_headers', function (Blueprint $table) {
            $table->string('id')->index();
            $table->time('time');
            $table->date('date');
            $table->integer('maximumSlot');
            $table->string('description');
            $table->string('specialistId');
            $table->foreign('specialistId')->references('id')->on('specialities');
            $table->string('doctorId');
            $table->foreign('doctorId')->references('id')->on('users');
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
        Schema::dropIfExists('consultation_headers');
    }
}
