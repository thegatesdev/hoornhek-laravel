<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('prisoner_id')->unsigned();
            $table->foreign('prisoner_id')->references('id')->on('prisoners');
            $table->dateTime('time_arrest');
            $table->dateTime('time_intake')->nullable();
            $table->dateTime('time_leave')->nullable();
            $table->string("intake_reason", 150);
            $table->timestamps();
        });
        Schema::create('case_evidence', function (Blueprint $table){
            $table->id();
            $table->bigInteger('case_id')->unsigned();
            $table->foreign('case_id')->references('id')->on('cases');
            $table->string('evidence', 3000);
            $table->timestamps();
        });
        Schema::create('case_testimony', function (Blueprint $table){
            $table->id();
            $table->bigInteger('case_id')->unsigned();
            $table->foreign('case_id')->references('id')->on('cases');
            $table->string('name');
            $table->string('testimony', 3000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_testimony');
        Schema::dropIfExists('case_evidence');
        Schema::dropIfExists('cases');
    }
};
