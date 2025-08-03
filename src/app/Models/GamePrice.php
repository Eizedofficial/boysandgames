<?php

namespace App\Models;

use App\Enums\CurrencyEnum;
use App\Models\Relations\HasGamePriceRelations;
use Database\Factories\GamePriceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePrice extends Model
{
    /** @use HasFactory<GamePriceFactory> */
    use HasFactory,
        HasGamePriceRelations;

    public $timestamps = false;

    protected $fillable = [
        'game_id',
        'currency',
        'price'
    ];

    protected $casts = [
        'currency' => CurrencyEnum::class
    ];
}
