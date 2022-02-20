<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Races extends Model
{
    public $timestamps = false;

    public function subRaces(): HasMany
    {
        return $this->hasMany(SubRaces::class);
    }

    public function raceBonus(): HasMany
    {
        return $this->hasMany(RaceBonus::class);
    }
}
