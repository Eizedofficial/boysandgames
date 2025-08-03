<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('game_lobby', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')
                ->nullable()
                ->constrained('games')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('lobby_id')
                ->nullable()
                ->constrained('lobbies')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }
};
