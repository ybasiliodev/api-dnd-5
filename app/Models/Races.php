<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Races extends Model
{
    public $timestamps = false;

    public function subRaces(): HasMany
    {
        return $this->hasMany(SubRaces::class);
    }

    public function abilities(): BelongsToMany
    {
        return $this->BelongsToMany(Abilities::class, "race_bonus");
    }
}
