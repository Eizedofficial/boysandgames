<?php

namespace App\Models\Relations;

use App\Models\Game;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasLobbyRelations
{
    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class);
    }
}
