<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubRaces extends Model
{
    public $timestamps = false;

    public function subRaces(): BelongsTo
    {
        return $this->belongsTo(Races::class);
    }

    public function subRaceBonus(): HasMany
    {
        return $this->hasMany(SubRaceBonus::class);
    }
}
