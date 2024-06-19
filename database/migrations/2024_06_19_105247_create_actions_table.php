<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('action_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
        });
        Schema::create('actions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->foreignId('action_type_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('action_type_id')->references('id')->on('action_types');

            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('actions');
        Schema::dropIfExists('action_types');
    }
};
