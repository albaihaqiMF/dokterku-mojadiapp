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
            $table->char('id', 12)->primary();
            $table->string('day', 10);
            $table->date('date');
            $table->time('timeStart');
            $table->time('timeEnd');
            $table->char('timeStampId', 2);
            $table->foreign('timeStampId')->references('id')->on('time_stamps');
            $table->char('roomId', 4);
            $table->foreign('roomId')->references('id')->on('rooms');
            $table->string('doctorId', 32);
            $table->foreign('doctorId')->references('id')->on('doctors');
            $table->integer('maximumSlot');
            $table->string('description');
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
