<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->char('id', 13)->primary();
            $table->char('userId', 11);
            $table->foreign('userId')->references('id')->on('users');
            $table->string('address')->nullable();
            $table->string('phoneNumber',15)->unique();
            $table->date('birthDate');
            $table->string('gender', 20);
            $table->integer('height');
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
        Schema::dropIfExists('patients');
    }
}
