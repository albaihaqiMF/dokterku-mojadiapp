<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->char('id', 13)->primary();
            $table->char('userId', 11);
            $table->foreign('userId')->references('id')->on('users');
            $table->char('specialistId', 2)->nullable();
            $table->foreign('specialistId')->references('id')->on('specialities');
            $table->integer('experienceYear');
            $table->string('education');
            $table->string('profile');
            $table->string('imageUrl');
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
        Schema::dropIfExists('doctors');
    }
}
