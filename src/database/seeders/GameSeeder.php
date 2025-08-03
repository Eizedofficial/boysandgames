<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\GamePrice;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        Game::factory(50)
            ->has(
                GamePrice::factory(),
                'prices'
            )
            ->create();
    }
}
