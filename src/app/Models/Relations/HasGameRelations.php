<?php

namespace App\Models\Relations;

use App\Models\File;
use App\Models\GamePrice;
use App\Models\Lobby;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasGameRelations
{
    public function image(): BelongsTo
    {
        return $this->belongsTo(File::class);
    }

    public function prices(): HasMany
    {
        return $this->hasMany(GamePrice::class);
    }

    public function lobbies(): BelongsToMany
    {
        return $this->belongsToMany(Lobby::class);
    }
}
