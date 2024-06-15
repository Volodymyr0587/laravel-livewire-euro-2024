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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('team1_name')->nullable();
            $table->string('team1_flag')->nullable();
            $table->string('team2_name')->nullable();
            $table->string('team2_flag')->nullable();
            $table->date('date');
            $table->time('time');
            $table->integer('score1')->nullable();
            $table->integer('score2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
