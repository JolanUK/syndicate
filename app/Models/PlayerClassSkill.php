<?php

namespace App\Models;

use Database\Factories\PlayerClassSkillFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerClassSkill extends Model
{
    /** @use HasFactory<PlayerClassSkillFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'label',
    ];
}
