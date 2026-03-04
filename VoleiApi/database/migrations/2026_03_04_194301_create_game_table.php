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
        Schema::create('game', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable();
            $table->string('date')->nullable();
            $table->string('hour')->nullable();
            $table->string('team1')->nullable();
            $table->string('team2')->nullable();
            $table->string('sets')->nullable();
            $table->string('points')->nullable();
            $table->string('winner')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game');
    }
};
