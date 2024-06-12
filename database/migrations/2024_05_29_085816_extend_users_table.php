<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table){
            $table->id();
            $table->string('name')->unique();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number')->unique();
            $table->bigInteger('role_id')->unsigned()->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->date('start_date')->nullable();
        });
        Schema::create('guard_keys', function (Blueprint $table) {
            $table->id();
            $table->unsignedMediumInteger('key_id')->unique();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guard_keys');
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
    }
};
