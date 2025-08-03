<?php

namespace Database\Factories;

use App\Models\Lobby;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lobby>
 */
class LobbyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'chat_id' => $this->faker->randomNumber(7, true)
        ];
    }
}
