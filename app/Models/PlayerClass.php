<?php

namespace App\Models;

use Database\Factories\PlayerClassFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerClass extends Model
{
    /** @use HasFactory<PlayerClassFactory> */
    use HasFactory;

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    public function archetype(): BelongsTo
    {
        return $this->belongsTo(PlayerClassArchetype::class);
    }
}
