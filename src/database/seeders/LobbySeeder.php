<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Lobby;
use Illuminate\Database\Seeder;

class LobbySeeder extends Seeder
{
    public function run(): void
    {
        Lobby::factory(10)
             ->create()
            ->each(fn(Lobby $lobby) => $lobby
                ->games()
                ->attach(
                    Game::inRandomOrder()->limit(5)->pluck('id')
                ));
    }
}
