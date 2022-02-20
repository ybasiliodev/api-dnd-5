<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubRaceBonus extends Model
{
    public $timestamps = false;

    public function ability(): HasMany
    {
        return $this->hasMany(Abilities::class);
    }

    public function subRace(): HasMany
    {
        return $this->hasMany(SubRaces::class);
    }
}
