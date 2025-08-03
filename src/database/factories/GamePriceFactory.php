<?php

namespace Database\Factories;

use App\Enums\CurrencyEnum;
use App\Models\GamePrice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<GamePrice>
 */
class GamePriceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'currency' => $this->faker->randomElement(CurrencyEnum::cases()),
            'price'    => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
