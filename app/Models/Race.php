<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Race extends Model
{
    protected $table = 'race';
    public $timestamps = false;

    public function subRaces(): HasMany
    {
        return $this->hasMany(SubRace::class);
    }

    public function abilities(): BelongsToMany
    {
        return $this->BelongsToMany(Ability::class, "race_bonus");
    }
}
