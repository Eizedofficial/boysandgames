<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Game;
use App\Models\GamePrice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Game>
 */
class GameFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'        => $this->faker->company(),
            'description' => $this->faker->optional()->paragraph(),
            'steam_id'    => $this->faker->randomNumber(5, true),
            'image_id'    => File::factory(),
        ];
    }
}
