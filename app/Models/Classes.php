<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classes extends Model
{
    public $timestamps = false;

    public function spells(): HasMany
    {
        return $this->hasMany(Spell::class);
    }

    public function abilities() : BelongsToMany
    {
        return $this->BelongsToMany(Ability::class, "ability_class","class_id", "ability_id");
    }

    public function abilitiesResistances() : BelongsToMany
    {
        return $this->BelongsToMany(Ability::class, "ability_class_resistance","class_id", "ability_id");
    }
}
