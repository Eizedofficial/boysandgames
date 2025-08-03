<?php

namespace App\Models\Relations;

use App\Models\Game;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasGamePriceRelations
{
    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}
