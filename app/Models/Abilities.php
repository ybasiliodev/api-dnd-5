<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Abilities extends Model
{
    public $timestamps = false;

    public function expertise(): HasMany
    {
        return $this->hasMany(Expertise::class);
    }

    public function abilityXClass(): HasMany
    {
        return $this->hasMany(AbilitiesXClasses::class);
    }

    public function abilityXClassResist(): HasMany
    {
        return $this->hasMany(AbilitiesXClassesResist::class);
    }

    public function raceBonus(): HasMany
    {
        return $this->hasMany(RaceBonus::class);
    }
}
