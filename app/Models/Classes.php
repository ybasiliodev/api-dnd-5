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
        return $this->hasMany(Spells::class);
    }

    public function abilities() : BelongsToMany
    {
        return $this->BelongsToMany(Abilities::class, "abilities_classes","class_id", "ability_id");
    }

    public function abilitiesResistances() : BelongsToMany
    {
        return $this->BelongsToMany(Abilities::class, "abilities_classes_resistances","class_id", "ability_id");
    }
}
