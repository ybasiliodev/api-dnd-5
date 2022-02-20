<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classes extends Model
{
    public $timestamps = false;

    public function abilityXClass(): HasMany
    {
        return $this->hasMany(AbilitiesXClasses::class);
    }

    public function abilityXClassResist(): HasMany
    {
        return $this->hasMany(AbilitiesXClassesResist::class);
    }

    public function spells(): HasMany
    {
        return $this->hasMany(Spells::class);
    }
}
