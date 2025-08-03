<?php

namespace App\Models;

use App\Models\Relations\HasGameRelations;
use Database\Factories\GameFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /** @use HasFactory<GameFactory> */
    use HasFactory,
        HasGameRelations;

    protected $fillable = [
        'name',
        'steam_id',
        'description',
        'image_id'
    ];
}
