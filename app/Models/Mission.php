<?php

namespace App\Models;

use Database\Factories\MissionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    /** @use HasFactory<MissionFactory> */
    use HasFactory;

    protected $fillable = [
        'story',
    ];

    protected function casts(): array
    {
        return [
            'story' => 'array',
        ];
    }
}
