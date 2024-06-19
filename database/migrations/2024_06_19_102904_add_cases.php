<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50);
            $table->string('description');

            $table->timestamps();
        });
        Schema::create('case_prisoner', function (Blueprint $table) {
            $table->foreignId('case_id');
            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');
            $table->foreignId('prisoner_id');
            $table->foreign('prisoner_id')->references('id')->on('prisoners')->onDelete('cascade');

            $table->dateTime('end_date')->nullable();
            $table->foreignId('cell_occupation_id');
            $table->foreign('cell_occupation_id')->references('id')->on('cell_occupations')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('evidence', function (Blueprint $table) {
            $table->id();

            $table->foreignId('case_id');
            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');

            $table->string('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evidence');
        Schema::dropIfExists('case_prisoner');
        Schema::dropIfExists('cases');
    }
};
