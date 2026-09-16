<?php

namespace App\Models;

use Database\Factories\PlayerClassArchetypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerClassArchetype extends Model
{
    /** @use HasFactory<PlayerClassArchetypeFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'label',
        'image',
        'passives',
    ];

    protected function casts(): array
    {
        return [
            'passives' => 'array',
        ];
    }
}
