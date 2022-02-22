<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Abilities extends Model
{
    public $timestamps = false;

    public function expertise(): HasMany
    {
        return $this->hasMany(Skills::class);
    }

    public function races(): BelongsToMany
    {
        return $this->BelongsToMany(Races::class, "race_bonus","ability_id", "race_id");
    }

    public function subRaces(): BelongsToMany
    {
        return $this->BelongsToMany(SubRaces::class, "sub_race_bonus","ability_id", "sub_race_id");
    }

    public function classes(): BelongsToMany
    {
        return $this->BelongsToMany(SubRaces::class, "abilities_classes","ability_id", "class_id");
    }

    public function classesResistances(): BelongsToMany
    {
        return $this->BelongsToMany(SubRaces::class, "abilities_classes_resistances","ability_id", "class_id");
    }
}
