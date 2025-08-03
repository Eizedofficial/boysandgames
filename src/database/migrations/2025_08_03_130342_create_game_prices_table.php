<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('game_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')
                ->nullable()
                ->constrained('games')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->string('currency');
            $table->float('price');

            $table->unique(['game_id', 'currency']);
        });
    }
};
