<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ability extends Model
{
    protected $table = 'ability';
    public $timestamps = false;

    public function expertise(): HasMany
    {
        return $this->hasMany(Skill::class);
    }

    public function races(): BelongsToMany
    {
        return $this->BelongsToMany(Race::class, "race_bonus","ability_id", "race_id");
    }

    public function subRaces(): BelongsToMany
    {
        return $this->BelongsToMany(SubRace::class, "sub_race_bonus","ability_id", "sub_race_id");
    }

    public function classes(): BelongsToMany
    {
        return $this->BelongsToMany(SubRace::class, "ability_class","ability_id", "class_id");
    }

    public function classesResistances(): BelongsToMany
    {
        return $this->BelongsToMany(SubRace::class, "ability_class_resistance","ability_id", "class_id");
    }
}
