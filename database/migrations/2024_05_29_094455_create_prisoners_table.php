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
        Schema::create('prisoners', function (Blueprint $table) {
            $table->id();
            $table->string('bsn', 9)->unique();
            $table->string('name', 50)->unique();
            $table->string('address', 50)->unique();
            $table->string('city', 50);
            $table->timestamps();
        });
        Schema::create('cells', function (Blueprint $table){
            $table->id('number');
            $table->bigInteger('prisoner_id')->unsigned()->nullable();
            $table->foreign('prisoner_id')->references('id')->on('prisoners');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prisoners');
        Schema::dropIfExists('cells');
    }
};
