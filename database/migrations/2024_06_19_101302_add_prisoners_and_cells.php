<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prisoners', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('profiles');

            $table->timestamps();
        });
        Schema::create('cell_occupations', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('prisoner_id');
            $table->foreign('prisoner_id')->references('id')->on('prisoners');
            $table->unsignedBigInteger('case_id');
            $table->foreign('case_id')->references('id')->on('cases');
            
            $table->unsignedInteger('cell');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations');

            $table->dateTime('start_time');
            $table->dateTime('end_time')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cell_occupations');
        Schema::dropIfExists('prisoners');
    }
};
