<?php

namespace App\Models;

use App\Models\Relations\HasLobbyRelations;
use Database\Factories\LobbyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lobby extends Model
{
    /** @use HasFactory<LobbyFactory> */
    use HasFactory,
        HasLobbyRelations;
    protected $fillable = [
        'chat_id'
    ];
}
