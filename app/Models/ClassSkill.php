<?php

namespace App\Models;

use Database\Factories\ClassSkillFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSkill extends Model
{
    /** @use HasFactory<ClassSkillFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
